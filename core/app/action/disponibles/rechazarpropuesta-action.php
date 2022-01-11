<?php

		$p = new PropuestaData();
		$d = new DisponibleData();
		$r = new RechazoData();
		$t= new TransaccionData;
		
if(!empty($_POST)){
 
  
		$r->Tipo_Rechazo = $_POST["rechazo"];
		$r->Motivo_Rechazo = $_POST["motivo"];
		$r->Propuesta_Id = $_POST["id_propuesta"];

	 		 		$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["id_disponible"];
					$tipo="Rechazo Propuesta";
					$fecha="NOW()";

		if (Core::$user->kind==2){

 				$px = $r->addSems();
				$p->updateRechazoFP($_POST["id_propuesta"]);
				$d->updateRechazoFD($_POST["id_disponible"]);
				$r->updateRechazoF($_POST["id_propuesta"]);
				$d->updateSems($_POST["id_disponible"]);
				$t->add($user,$tipo,$emp,$fecha);

		 		//$p->getHistoricaPropuesta($_POST["id_propuesta"]);
				//$r->getHistoricaRechazo($_POST["id_propuesta"]);
				//$r->delRechazo($_POST["id_propuesta"]);
				//$p->delPropuesta($_POST["id_propuesta"]);
			
		}		
		if (Core::$user->kind==4||Core::$user->kind==10){

 				$px = $r->addSup();
				$p->updateRechazoFP($_POST["id_propuesta"]);
				$d->updateRechazoFD($_POST["id_disponible"]);
				$r->updateRechazoF($_POST["id_propuesta"]);

				//$p->getHistoricaPropuesta($_POST["id_propuesta"]);
				//$r->getHistoricaRechazo($_POST["id_propuesta"]);
				//$r->delRechazo($_POST["id_propuesta"]);
				//$p->delPropuesta($_POST["id_propuesta"]);
				$t->add($user,$tipo,$emp,$fecha);
		}		

		if (Core::$user->kind==6){

 				$px = $r->addDbg();
				$p->updateRechazoFP($_POST["id_propuesta"]);
				$d->updateRechazoFD($_POST["id_disponible"]);
				$r->updateRechazoF($_POST["id_propuesta"]);

				//$p->getHistoricaPropuesta($_POST["id_propuesta"]);
				//$r->getHistoricaRechazo($_POST["id_propuesta"]);
				//$r->delRechazo($_POST["id_propuesta"]);
				//$p->delPropuesta($_POST["id_propuesta"]);
				$t->add($user,$tipo,$emp,$fecha);
		}		
				if (Core::$user->kind==7){

 				$px = $r->addDbt();
				$p->updateRechazoFP($_POST["id_propuesta"]);
				$d->updateRechazoFD($_POST["id_disponible"]);
				$r->updateRechazoF($_POST["id_propuesta"]);

				//$p->getHistoricaPropuesta($_POST["id_propuesta"]);
				//$r->getHistoricaRechazo($_POST["id_propuesta"]);
				//$r->delRechazo($_POST["id_propuesta"]);
				//$p->delPropuesta($_POST["id_propuesta"]);
				$t->add($user,$tipo,$emp,$fecha);
		}		

		if (Core::$user->kind==8){

 				$px = $r->addDtb();
				$p->updateRechazoFP($_POST["id_propuesta"]);
				$d->updateRechazoFD($_POST["id_disponible"]);
				$r->updateRechazoF($_POST["id_propuesta"]);

				//$p->getHistoricaPropuesta($_POST["id_propuesta"]);
				//$r->getHistoricaRechazo($_POST["id_propuesta"]);
				//$r->delRechazo($_POST["id_propuesta"]);
				//$p->delPropuesta($_POST["id_propuesta"]);
				$t->add($user,$tipo,$emp,$fecha);
		}		

	}
	 
		 		//Core::redir("./?view=/rechazos/respuestas");
?>

  