 
<?php
    //core::alert($_POST["id_propuesta"]);

  
 		$r = new RechazoData();
 		$t = new PropuestaData();
 		$tr= new TransaccionData;
		 
if(isset($_POST['updatedata']))
{
 
 		$r->Id =$_POST["id_rechazo"];
		$r->Tipo_Rechazo = $_POST["rechazo"];
		$r->Motivo_Rechazo = $_POST["motivo"];
		$r->Respuesta = $_POST["respuesta"];

		$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_POST["id_rechazo"];
					$tipo="Contesto Rechazo";
					$fecha="NOW()";

//		$px = $p->addSup();

		  
				if(Core::$user->kind==1|| Core::$user->kind==2){
				//Core::alert("entro subse ");
				$r->updateRespSems($_POST["id_rechazo"]);
				$r->updateBndRespSems1($_POST["propuesta_id"]);
				$tr->add($user,$tipo,$emp,$fecha);
		} 
				
				if(Core::$user->kind==1|| Core::$user->kind==4|| Core::$user->kind==10){
				//Core::alert("entro sup updateRespSuper ");
				$r->updateRespSuper($_POST["id_rechazo"]);
				$r->updateBndRespSup1($_POST["propuesta_id"]);
				
				$tr->add($user,$tipo,$emp,$fecha);
		}
			if(Core::$user->kind==1|| Core::$user->kind==5|| Core::$user->kind==9){
				//Core::alert("entro dir ");
				$r->updateRespDir($_POST["id_rechazo"]);
				$r->updateBndRespDir1($_POST["propuesta_id"]);
				$tr->add($user,$tipo,$emp,$fecha);

				 
		}
				if(Core::$user->kind==1|| Core::$user->kind==6){
				//Core::alert("entro dbg ");
			$r->updateRespDbg($_POST["id_rechazo"]);
			$r->updateBndRespDbg1($_POST["propuesta_id"]);
			$tr->add($user,$tipo,$emp,$fecha);
		}

				if(Core::$user->kind==1|| Core::$user->kind==7){
				//Core::alert("entro dbt");
			$r->updateRespDbt($_POST["id_rechazo"]);
			$r->updateBndRespDbt1($_POST["propuesta_id"]);
			$tr->add($user,$tipo,$emp,$fecha);
		}

				if(Core::$user->kind==1|| Core::$user->kind==8){
				//Core::alert("entro dtb ");
				$r->updateRespDtb($_POST["id_rechazo"]);
				$r->updateBndRespDtb1($_POST["propuesta_id"]);
				$tr->add($user,$tipo,$emp,$fecha);
		}

		if(Core::$user->kind==17|| Core::$user->kind==18|| Core::$user->kind==19){
			//Core::alert("entro dtb ");
			$r->updateRespSregional($_POST["id_rechazo"]);
			$r->updateBndRespRegional($_POST["propuesta_id"]);
			$tr->add($user,$tipo,$emp,$fecha);
	}
		 
	
	 
	 
		$idr=$_POST["propuesta_id"];
		Core::redir("./?view=/rechazos/rechazos");
	}

	 
 ?>
