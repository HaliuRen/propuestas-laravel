<?php
  
 		$p = new RechazoData();
 		$t = new PlantillaData();
 		$tr= new TransaccionData;
		 
if(!empty($_POST)){
 
  
		$p->Tipo_Rechazo = $_POST["rechazo"];
		$p->Motivo_Rechazo = $_POST["motivo"];
		$p->cct = $_POST["cct"];
		$user=UserData::getById($_SESSION["user_id"])->username;
					
					$emp= $_POST["cct"];
					$tipo="Modificacion Plantilla";
					$fecha="NOW()";

					  

//		$px = $p->addSup(); 
  
  
				if(Core::$user->kind==1|| Core::$user->kind==4|| Core::$user->kind==10){
				//echo("entro sup  action");
                //echo($_POST["cct"]);
			 	$t->updateRSuper($_POST["cct"]);

				$px = $p->addRSupPlantilla();
				 
				$tr->add($user,$tipo,$emp,$fecha);
				 
		}
        

				if(Core::$user->kind==1|| Core::$user->kind==6|| Core::$user->kind==7){
				//Core::alert("entro dbg ");
				$t->updateRDgems($_POST["cct"]);

				$px = $p->addDgemsPlantilla();

				$tr->add($user,$tipo,$emp,$fecha);
			 
		}
 

			 
	 

				if(Core::$user->kind==1|| Core::$user->kind==18|| Core::$user->kind==17){
                    //Core::alert("entro SRBG ");
                    $t->updateRRegional($_POST["cct"]);
                    $px = $p->addRegionalPlantilla();
                    $tr->add($user,$tipo,$emp,$fecha);
                   
            }

			 
}	 
	
    else{

		Core::alert("no trae info");
	}

	 
		
?>

