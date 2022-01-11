<?php

		$e = new EstudiosData();
		 
		$t= new TransaccionData;

		

if(!empty($_POST)){
	

		$e->curp = $_POST["curpe"];
		$e->nivel_estudios = $_POST["niveles"];
		$e->desc_nivel = $_POST["carrera"];
		$e->escuela = $_POST["escuela"];
		$e->cedula = $_POST["cedula"];

		$px=$e->add();
		$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["curpe"];
					$tipo="Agrego estudios";
					$fecha="NOW()";
		$t->add($user,$tipo,$emp,$fecha);
		 
}


?>

 