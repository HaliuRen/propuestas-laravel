<?php

		$e = new EstudiosData();
		 
		$t= new TransaccionData;

		

if(isset($_POST["deldataes"])){
			 

		$e->delEstudios($_POST["iddel"]);
		$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["curpdel"];
					$tipo="Elimino estudios";
					$fecha="NOW()";
		$t->add($user,$tipo,$emp,$fecha);
		 
		 $idr=$_POST["idpropdel"];
		 Core::redir("./?view=/rechazos/showrechazos&id=$idr");
}
	

?>
 

 