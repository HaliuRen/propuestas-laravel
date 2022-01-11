 <?php
 		$t= new TransaccionData;
		$p = new DisponibleData();
		$continuar = true;
		if($_POST["plaza"]!=""){
			//Core::alert("entro plaza");
			//if(DisponibleData::getByPlaza($_POST["plaza"])!=null){ $continuar=false;}
 
		//}  
		//if($continuar){
		$p->Num_Plaza = $_POST["plaza"];
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
		$p->Tipo = $_POST["tipo"];
		  
		$p->bnd_validad = isset($_POST["validad"])?1:0;

	//Core::alert("entro");
 
		if(Core::$user->kind==5){
		$px=$p->add();
					 $user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["plaza"];
					$tipo="creacion PD";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
					//Core::alert("se capturo la plaza Recuerda Incorporar los documentos dependiendo el tipo de propuesta");
				}
		
		if(Core::$user->kind==4){
				$px=$p->addSup();
				 $user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["plaza"];
					$tipo="creacion PD";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
				 

	}
		if(Core::$user->kind==6){
				$px=$p->addDbg();
				 $user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["plaza"];
					$tipo="creacion PD";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
				 
		}
			if(Core::$user->kind==7){
				$px=$p->addDbt();
				 $user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["plaza"];
					$tipo="creacion PD";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
				 

		}
			if(Core::$user->kind==8){
				$px=$p->addDtb();
				 $user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["plaza"];
					$tipo="creacion PD";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
				 
		} 
		if(Core::$user->kind==17){
			$px=$p->addSRBg();
			 $user=UserData::getById($_SESSION["user_id"])->username;
				$emp= $_POST["plaza"];
				$tipo="creacion PD";
				$fecha="NOW()";

				$t->add($user,$tipo,$emp,$fecha);
			 
	} 
				if(Core::$user->kind==18){
					$px=$p->addSRBt();
					$user=UserData::getById($_SESSION["user_id"])->username;
						$emp= $_POST["plaza"];
						$tipo="creacion PD";
						$fecha="NOW()";

						$t->add($user,$tipo,$emp,$fecha);
					
			} 
			if(Core::$user->kind==2){
				$px=$p->addSems();
				 $user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["plaza"];
					$tipo="creacion PD";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
				 
		}			
		 
		 
		}else{
			Core::alert("El numero de plaza ya se capturo");
			Core::redir("./?view=/capturas/pdisponibles");
		}

		Core::redir("./?view=/capturas/pdisponibles");
?>

 
