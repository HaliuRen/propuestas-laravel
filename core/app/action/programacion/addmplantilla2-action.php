<?php

		$e = new PlantillaData();
		 
		$t= new TransaccionData;

		

if(!empty($_POST)){
	

		$e->cct = $_POST["cct"];
		$e->zona = $_POST["zona"];
		$e->cve_emp = $_POST["cve_emp"];
		$e->puesto = $_POST["puesto"];
		$e->estatus_plaza = $_POST["eplaza"];
 

		if (empty($_POST["horas"])) {
		 		 
			$e->horas =0;
		}else{$e->horas = $_POST["horas"];}

		$px=$e->addm2();

		$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["cct"];
					$tipo="Agrego Puesto Plantilla";
					$fecha="NOW()";
		$t->add($user,$tipo,$emp,$fecha);
		 
}


?>

 