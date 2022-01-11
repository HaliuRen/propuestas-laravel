<?php


if(count($_POST)>0){

	$t= new TransaccionData;
	$docente = new DocenteData;
	$u = new UpdateUserData;



	   $docente->curp = $_POST["curp"];
		$docente->rfc = $_POST["rfc"];



		$docente->update($_POST["cve_emp"]);

		$user=UserData::getById($_SESSION["user_id"])->username;
		$emp= $_POST["cve_emp"];
			$tipo="actualizacion";
			$fecha="NOW()";

			$u->update_info($_POST["cve_emp"]);
			$t->add($user,$tipo,$emp,$fecha);

			unset($_SESSION["user_id"]);
			session_destroy();

			Core::redir("./");
	//	Core::redir("./?view=/docentes/docentes");

}


?>
