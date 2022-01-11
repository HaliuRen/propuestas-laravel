<?php

		$e = new PlantillaData();
		 
		$t= new TransaccionData;

		

if(isset($_POST["deldataes"])){
			 

		$e->delPuesto($_POST["iddel"]);


		$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= "";
					$tipo="Elimino Puesto";
					$fecha="NOW()";
		$t->add($user,$tipo,$emp,$fecha);
		 
		 
		 Core::redir("./?view=/programacion/modificacioncaptura");
}
	

?>
 

 