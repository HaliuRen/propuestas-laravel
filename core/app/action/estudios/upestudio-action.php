 
<?php
    //core::alert($_POST["id_propuesta"]);

  
 		$e = new EstudiosData();
 		 
 		$tr= new TransaccionData;
		 
if(isset($_POST['updatedataes']))
{
  		
		$e->nivel_estudios = $_POST["nivel"];
		$e->desc_nivel = $_POST["carrera"];
		$e->escuela = $_POST["escuela"];
		$e->cedula = $_POST["cedula"];

		$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["curpes"];
					$tipo="Actualizo Estudios";
					$fecha="NOW()";

				$e->updateEstudios($_POST["id"],$_POST["nivel"],$_POST["curpes"]);
				$tr->add($user,$tipo,$emp,$fecha);
 

	$idr=$_POST["idpropmod"];
	Core::redir("./?view=/rechazos/showrechazos&id=$idr");
	}else{
	}
 ?>
