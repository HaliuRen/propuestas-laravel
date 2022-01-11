<?php

		$e = new PlantillaData();
		 
		$t= new TransaccionData;
		$r= new RechazoData();

		

if(!empty($_POST)){
	
	if(Core::$user->kind==1|| Core::$user->kind==5){
//Core::alert( "entro post");
echo ($_POST["cct"]);
		$px=$e->updateBndCaptura($_POST["cct"]);
		$r->updateRespDirCaptura($_POST["cct"]);
		$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["cct"];
					$tipo="Guardo Info Plantilla";
					$fecha="NOW()";
		$t->add($user,$tipo,$emp,$fecha);

        Core::redir("./?view=/programacion/modificacioncaptura");
	}

	
		 
}


?>