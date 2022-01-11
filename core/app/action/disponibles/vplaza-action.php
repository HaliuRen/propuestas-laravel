<?php

$p=DisponibleData();

if(!empty($_POST['id_plaza'])){
	 
		$plazas=$p->getByPlazaD($_POST['id_plaza']);

		//$p->getByPlazaD($_POST['plaza']));
		 

	if(isset($plazas)){

 		echo '<div class="alert alert-danger">Plaza no disponible.</div>';
	}else{
       echo '<div class="alert alert-success">Plaza disponible.</div>';
		}

} 
?>