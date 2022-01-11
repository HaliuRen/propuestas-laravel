<?php
  
 		$p = new RechazoData();
 		$t = new PropuestaData();
 		$tr= new TransaccionData;
		 
if(!empty($_POST)){
 
  
		$p->Tipo_Rechazo = $_POST["rechazo"];
		$p->Motivo_Rechazo = $_POST["motivo"];
		$p->Propuesta_Id = $_POST["id_propuesta"];
		$user=UserData::getById($_SESSION["user_id"])->username;
					
					$emp= $_POST["Id_Disponible"];
					$tipo="Rechazo Propuesta";
					$fecha="NOW()";

					  

//		$px = $p->addSup(); 
  
	if(Core::$user->kind==1|| Core::$user->kind==2){
				//Core::alert("entro subse ");
				$t->updateRSems($_POST["id_propuesta"]);
	 		 	$px = $p->addSems();
	 		 	$tr->add($user,$tipo,$emp,$fecha);

	 		 	
	 		 		$p->updateBndRespDbg($_POST["id_propuesta"]);
	 		 	
	 		 		
	 		 		$p->updateBndRespDbt($_POST["id_propuesta"]);
	 		 	
		}

 				if(Core::$user->kind==1|| Core::$user->kind==3){
				//Core::alert("entro delegacion ");
				$t->updateRDams($_POST["id_propuesta"]);
				$px = $p->addDams();
				$tr->add($user,$tipo,$emp,$fecha);

				 
	 		 		$p->updateBndRespDtb($_POST["id_propuesta"]);
	 		  
	 		  
	 		 	 $p->updateBndRespSems($_POST["id_propuesta"]);
	 		 	 

		}
 
				if(Core::$user->kind==1|| Core::$user->kind==4|| Core::$user->kind==10){
				//Core::alert("entro sup ");
				$t->updateRSuper($_POST["id_propuesta"]);
				$px = $p->addSup();
				 
				$tr->add($user,$tipo,$emp,$fecha);
				$p->updateBndRespDir($_POST["id_propuesta"]);
		}

				if(Core::$user->kind==1|| Core::$user->kind==6){
				//Core::alert("entro dbg ");
				$t->updateRDbg($_POST["id_propuesta"]);
				$px = $p->addDbg();
				$tr->add($user,$tipo,$emp,$fecha);
				$p->updateBndRespSRegional($_POST["id_propuesta"]);
		}

				if(Core::$user->kind==1|| Core::$user->kind==7){
				//Core::alert("entro dbt");
				$t->updateRDbt($_POST["id_propuesta"]);
				$px = $p->addDbt();
				$tr->add($user,$tipo,$emp,$fecha);
				$p->updateBndRespSRegional($_POST["id_propuesta"]);
		}

				if(Core::$user->kind==1|| Core::$user->kind==8){
				//Core::alert("entro dtb ");
				$t->updateRDtb($_POST["id_propuesta"]);
				$px = $p->addDtb();
				$tr->add($user,$tipo,$emp,$fecha);
				$p->updateBndRespSRegional($_POST["id_propuesta"]);
		}
		
		if(Core::$user->kind==17||Core::$user->kind==18||Core::$user->kind==19){
			//Core::alert("entro dtb ");
			$t->updateRSRegional($_POST["id_propuesta"]);
			$px = $p->addSRegional();
			$tr->add($user,$tipo,$emp,$fecha);
			$p->updateBndRespSup($_POST["id_propuesta"]);
	}

	}
		
?>

