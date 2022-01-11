<?php

		$e = new PlantillaData();
		 
		$t= new TransaccionData;
	 

		

if(!empty($_POST)){
	
//Core::alert( "entro post");

//echo ($_POST["cct"]);
if(Core::$user->kind==1|| Core::$user->kind==5){
		$px=$e->updateBndCaptura($_POST["cct"]);
		 
		$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["cct"];
					$tipo="Guardo Info Plantilla";
					$fecha="NOW()";
		$t->add($user,$tipo,$emp,$fecha);

        Core::redir("./?view=/programacion/captura");
		 
}

if(Core::$user->kind==1|| Core::$user->kind==4){
	$px=$e->updateBndCapturaS($_POST["cct"]);
	 
	$user=UserData::getById($_SESSION["user_id"])->username;
				$emp= $_POST["cct"];
				$tipo="Guardo Info Plantilla";
				$fecha="NOW()";
	$t->add($user,$tipo,$emp,$fecha);

	Core::redir("./?view=/programacion/captura");
	 
}



}

?>