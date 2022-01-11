<?php

		$p = new PropuestaData();
		$d = new DisponibleData();
		$t= new TransaccionData;

		$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["id_plaza"];
					$tipo="creacion Propuesta";
					$fecha="NOW()";

	if(!empty($_POST)){
		//Core::alert("agregar pro");
			if (empty($_POST["cve_emp"])) {
		 		 
			$p->Cve_Emp ="\" \"";
		}else{$p->Cve_Emp = $_POST["cve_emp"];}

		if (empty($_POST["horaslabora"])) {
		 		 
			$p->Horas_OLabora ="0";
		}else{$p->Horas_OLabora = $_POST["horaslabora"];}

		if (empty($_POST["apuesto"])) {
		 		 
			$p->A_Puesto ="0";
		}else{$p->A_Puesto = $_POST["apuesto"];}
	
		$p->Rfc = $_POST["rfc"];
		$p->Curp = $_POST["curp"];
		$p->APaterno = $_POST["apaterno"];
		$p->AMaterno = $_POST["amaterno"];
		$p->Nombre = $_POST["nombre"];
		$p->Municipio_Residencia = $_POST["municipiores"];
		 
		$p->Tiempo_Servicio = $_POST["tiempo"];
		$p->Telefono = $_POST["telefono"];
		$p->Email = $_POST["email"];
		$p->Sexo = $_POST["sexo"];
		$p->Estado_Civil = $_POST["ecivil"];
		$p->Entidad_Nacimiento = $_POST["enacimiento"];
		$p->Municipio_Nacimiento = $_POST["mnacimiento"];
		$p->Domicilio = $_POST["domicilio"];
		$p->Colonia = $_POST["colonia"];
		$p->CP = $_POST["cp"];
		$p->Disponible_Id = $_POST["id_plaza"];
		$p->Cct = $_POST["cct"];
		$p->Fec_Inicio = $_POST["fec_inicio"];
		$p->Fec_Termino = $_POST["fec_termino"];
 
		
		$p->A_FrenteGrupo=$_POST["tiempofg"];
		$p->D_Ingles=$_POST["ingles"];
	 
		$p->O_Labora=$_POST["labora"];
		
  
		$p->Bnd_NI = isset($_POST["ni"])?1:0;

	//Core::alert("entro");
	if(Core::$user->kind==9){
		//Core::alert("entro esc tb");
		$p->add2();
		$id=$_POST["id_plaza"];
		$d->update_Disponible($id);
		 			
					$t->add($user,$tipo,$emp,$fecha);
					Core::alert("se capturo la propuesta Recuerda Incorporar los documentos dependiendo el tipo de propuesta");

	}
		if(Core::$user->kind==5){
			//Core::alert("entro esc");
				$p->add();
				$id=$_POST["id_plaza"];
				$d->update_Disponible($id);

				
					$t->add($user,$tipo,$emp,$fecha);
					Core::alert("se capturo la propuesta Recuerda Incorporar los documentos dependiendo el tipo de propuesta");
				}
		if(Core::$user->kind==10){
			//Core::alert("entro esc STB");
				$p->addStb();
				$id=$_POST["id_plaza"];
				$d->update_Disponible($id);

			 

					$t->add($user,$tipo,$emp,$fecha);
					Core::alert("se capturo la propuesta Recuerda Incorporar los documentos dependiendo el tipo de propuesta");
				}
		if(Core::$user->kind==4){
			//Core::alert("entro esc sup");
				$p->addSup();
				$id=$_POST["id_plaza"];
				$d->update_Disponible($id);

				 

					$t->add($user,$tipo,$emp,$fecha);
					Core::alert("se capturo la propuesta Recuerda Incorporar los documentos dependiendo el tipo de propuesta");

	}
		if(Core::$user->kind==6){
			//Core::alert("entro esc dbg");
				$p->addDbg();
				$id=$_POST["id_plaza"];
				$d->update_Disponible($id);

				 

					$t->add($user,$tipo,$emp,$fecha);
					Core::alert("se capturo la propuesta Recuerda Incorporar los documentos dependiendo el tipo de propuesta");
		} 
			if(Core::$user->kind==7){
				//Core::alert("entro esc dbt");
				$p->addDbt();
				$id=$_POST["id_plaza"];
				$d->update_Disponible($id);
 

					$t->add($user,$tipo,$emp,$fecha);
					Core::alert("se capturo la propuesta Recuerda Incorporar los documentos dependiendo el tipo de propuesta");

		} 
			if(Core::$user->kind==8){
			//	Core::alert("entro esc dtb");
				$p->addDtb();
				$id=$_POST["id_plaza"];
				$d->update_Disponible($id);
 

					$t->add($user,$tipo,$emp,$fecha);
					Core::alert("se capturo la propuesta Recuerda Incorporar los documentos dependiendo el tipo de propuesta");
		} 
			if(Core::$user->kind==2){
				//Core::alert("entro esc sems");
				$p->addSems();
				$id=$_POST["id_plaza"];
				$d->update_Disponible($id);
 

					$t->add($user,$tipo,$emp,$fecha);
					Core::alert("se capturo la propuesta Recuerda Incorporar los documentos dependiendo el tipo de propuesta");
		}			
				
			 
}

		 


		Core::redir("./?view=/propuestas/newpropuesta");
?>

 