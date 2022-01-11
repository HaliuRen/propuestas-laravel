<?php

$t= new TransaccionData;
	$disponible = new DisponibleData();
 
if(!empty($_POST)){
	
	//Core::alert("entro");
	

		if (empty($_POST["cve_emp"])) {
		 		 
			$disponible->Cve_Emp ="\" \"";
		}else{$disponible->Cve_Emp = $_POST["cve_emp"];}

		if (empty($_POST["plaza"])) {
		 		 
			$disponible->Num_Plaza ="\" \"";
		}else{$disponible->Num_Plaza = $_POST["plaza"];}

		$disponible->APaterno = $_POST["apaterno"];
		$disponible->AMaterno = $_POST["amaterno"];
		$disponible->Nombre = $_POST["nombre"];
		$disponible->Area = $_POST["aread"];
		$disponible->Motivo = $_POST["motivo"];
		$disponible->Curp = $_POST["curp"];
		$disponible->Rfc = $_POST["rfc"];
		$disponible->Municipio = $_POST["municipio"];
		

		if(Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==8||Core::$user->kind==19){
		$disponible->updateDisponible($_POST["id"]);
		//Core::alert( $_POST["municipio"]);
		$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_GET["id"];
					$tipo="Edito Propuesta";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
		}
		
		else{
			$disponible->updateDisponible2($_POST["id"]);
			$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_GET["id"];
					$tipo="Edito Propuesta";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
			}
 

		$idr=$_POST["id2"];
/*
		$user=UserData::getById($_SESSION["user_id"])->username;
		$emp= $_POST["cve_emp"];
			$tipo="actualizacion";
			$fecha="NOW()";

			$t->add($user,$tipo,$emp,$fecha);*/
	
 	
Core::redir("./?view=/rechazos/showrechazos&id=$idr");
}


?>