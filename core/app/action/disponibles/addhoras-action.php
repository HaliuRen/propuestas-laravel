<?php
 		$t= new TransaccionData;
		$p = new DisponibleData();  
		$c=new TCctData();  
			$continuar = true;
 
if(!empty($_POST)){

		 	if($_POST["cve_emp"]!=""){
			//Core::alert("entro plaza");
			if(DisponibleData::getByCsp($_POST["cve_emp"])!=null){ $continuar=false;}

		}  
	if($continuar){	

		 		if (empty($_POST["plaza"])) {
		 		 
			$p->Num_Plaza ="\" \"";
		}else{$p->Num_Plaza = $_POST["plaza"];}
	
		$p->Cve_Emp = $_POST["cve_emp"];
		$p->Rfc = $_POST["rfc"];
		$p->Curp = $_POST["curp"];
		$p->APaterno = $_POST["apaterno"];
		$p->AMaterno = $_POST["amaterno"];
		$p->Nombre = $_POST["nombre"];
		$p->Municipio = $_POST["municipio"];
		
		$p->Cct = $_POST["cct"];
		$p->Zona = $_POST["zona"];
		$p->Motivo = $_POST["motivo"];
		$p->Puesto = $_POST["puesto"];
		$p->Horas = $_POST["horas"];
		$p->Tipo = $_POST["tipo"];
		$p->Area = $_POST["aread"];
		 
		$p->bnd_validad = isset($_POST["validad"])?1:0;

	//Core::alert("entro");

		if(Core::$user->kind==9||Core::$user->kind==8){
			//Core::alert("entro escuela");
		 $px=$p->add2();
			$user=UserData::getById($_SESSION["user_id"])->username;
			$c->updateDocenteTb($user);
			$emp= $_POST["plaza"];
			$tipo="Creacion PD";
			$fecha="NOW()";
			$t->add($user,$tipo,$emp,$fecha);
			Core::alert("Se capturo la plaza ");
		} 
		if(Core::$user->kind==10){
			//Core::alert("entro supervision");
			$px=$p->addStb();
			$user=$_POST["cct"];
			$c->updateRespnsableTb($user);
			$emp= $_POST["plaza"];
			$tipo="Creacion PD";
			$fecha="NOW()";
			$t->add($user,$tipo,$emp,$fecha);
			Core::alert("Se capturo la plaza ");

		}
		if(Core::$user->kind==19){
			//Core::alert("entro supervision");
			$px=$p->addSRtb();
			$user=$_POST["cct"];
			$c->updateRespnsableTb($user);
			$emp= $_POST["plaza"];
			$tipo="Creacion PD";
			$fecha="NOW()";
			$t->add($user,$tipo,$emp,$fecha);
			Core::alert("Se capturo la plaza ");

		}

		}else{
			Core::alert("La clave de Servidor Publico ya se capturo");
			Core::redir("./?view=/capturas/pdisponibles");
		}
	}

 
	 

		Core::redir("./?view=/capturas/pdisponibles");
?>

 