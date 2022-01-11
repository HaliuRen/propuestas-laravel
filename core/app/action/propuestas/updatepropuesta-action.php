<?php

$t= new TransaccionData;
	$propuesta = new PropuestaData();
 
if(!empty($_POST)){
	
	//Core::alert("entro");
	

			
		if (empty($_POST["cve_emp"])) {
		 		 
			$propuesta->Cve_Emp ="\" \"";
		}else{$propuesta->Cve_Emp = $_POST["cve_emp"];}

		$propuesta->APaterno = $_POST["apaterno"];
		$propuesta->AMaterno = $_POST["amaterno"];
		$propuesta->Nombre = $_POST["nombre"];

		$propuesta->Curp = $_POST["curp"];
		$propuesta->Rfc = $_POST["rfc"];
		$propuesta->Municipio_Residencia = $_POST["municipiores"];
	
		$propuesta->Tiempo_Servicio = $_POST["tiempo"];
		$propuesta->A_Puesto = $_POST["apuesto"];
		$propuesta->Telefono = $_POST["telefono"];
		$propuesta->Email = $_POST["email"];
	
	
		$propuesta->Entidad_Nacimiento = $_POST["enacimiento"];
		$propuesta->Municipio_Nacimiento = $_POST["mnacimiento"];
		$propuesta->Domicilio = $_POST["domicilio"];
		$propuesta->Colonia = $_POST["colonia"];
		$propuesta->CP = $_POST["cp"];
		$propuesta->Fec_Inicio = $_POST["fec_inicio"];
		$propuesta->Fec_Termino = $_POST["fec_termino"];
		
		
		$propuesta->A_FrenteGrupo=$_POST["tiempofg"];
		$propuesta->D_Ingles=$_POST["ingles"];
		 
		$propuesta->O_Labora=addslashes($_POST["labora"]);
		$propuesta->Horas_OLabora=$_POST["horaslabora"];
		$propuesta->Sexo=$_POST["sexo"];
		$propuesta->Area_D=$_POST["areadp"];
		$propuesta->Bnd_NI = isset($_POST["ni"])?1:0;

		if(Core::$user->kind==9||Core::$user->kind==10||Core::$user->kind==8||Core::$user->kind==19){
		$propuesta->update2($_POST["id"]);
		//Core::alert("entro");
		$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_GET["id"];
					$tipo="Edito Propuesta";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
		}
		
		else{
			$propuesta->update($_POST["id"]);
			$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_GET["id"];
					$tipo="Edito Propuesta";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
			}


		$idr=$_POST["id"];
/*
		$user=UserData::getById($_SESSION["user_id"])->username;
		$emp= $_POST["cve_emp"];
			$tipo="actualizacion";
			$fecha="NOW()";

			$t->add($user,$tipo,$emp,$fecha);*/
	
 	
Core::redir("./?view=/rechazos/showrechazos&id=$idr");
}


?>