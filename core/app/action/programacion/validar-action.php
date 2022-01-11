<?php

		$p = new PlantillaData();
	 
		$t= new TransaccionData;
	 
	if (!empty ($_POST["cct"] ) ){

		//Core::alert($_POST["cct"]." SE HARA CON post");

				if(Core::$user->kind==1|| Core::$user->kind==4|| Core::$user->kind==10){
				//Core::alert("entro sup ");
				//Core::alert($_POST["cct"]);
				$p->updateSuper($_POST["cct"]);
				$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["cct"];
					$tipo="Valido Plantilla";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
					 Core::redir("./?view=/programacion/validarcaptura");
		}

				if(Core::$user->kind==1|| Core::$user->kind==6|| Core::$user->kind==7){
				//Core::alert("entro dbg ");
				$p->updateDgems($_POST["cct"]);
				$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["cct"];
					$tipo="Valido Plantilla";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
					 Core::redir("./?view=/programacion/validarcaptura");
		}

				 
        if(Core::$user->kind==1|| Core::$user->kind==17|| Core::$user->kind==18){
            //Core::alert("entro dbg ");
            $p->updateSRegional($_POST["cct"]);
            $user=UserData::getById($_SESSION["user_id"])->username;
                $emp= $_POST["cct"];
                $tipo="Valido Plantilla";
                $fecha="NOW()";

                $t->add($user,$tipo,$emp,$fecha);
                 Core::redir("./?view=/programacion/validarcaptura");
    }
}

if (!empty ($_GET["cct"] ) ){

	// Core::alert($_GET["cct"]." SE HARA CON GET");
  

	if(Core::$user->kind==1|| Core::$user->kind==4|| Core::$user->kind==10){
	//Core::alert("entro sup ");
	//Core::alert($_POST["cct"]);
	$p->updateSuper($_GET["cct"]);
	$user=UserData::getById($_SESSION["user_id"])->username;
		$emp= $_GET["cct"];
		$tipo="Valido Plantilla";
		$fecha="NOW()";

		$t->add($user,$tipo,$emp,$fecha);
		 Core::redir("./?view=/programacion/validarcaptura");
}

	if(Core::$user->kind==1|| Core::$user->kind==6|| Core::$user->kind==7){
	//Core::alert("entro dbg ");
	$p->updateDgems($_GET["cct"]);
	$user=UserData::getById($_SESSION["user_id"])->username;
		$emp= $_GET["cct"];
		$tipo="Valido Plantilla";
		$fecha="NOW()";

		$t->add($user,$tipo,$emp,$fecha);
		 Core::redir("./?view=/programacion/validarcaptura");
}

	 
if(Core::$user->kind==1|| Core::$user->kind==17|| Core::$user->kind==18){
//Core::alert("entro dbg ");
$p->updateSRegional($_GET["cct"]);
$user=UserData::getById($_SESSION["user_id"])->username;
	$emp= $_GET["cct"];
	$tipo="Valido Plantilla";
	$fecha="NOW()";

	$t->add($user,$tipo,$emp,$fecha);
	 Core::redir("./?view=/programacion/validarcaptura");
}
}




			 
	 
?>

 