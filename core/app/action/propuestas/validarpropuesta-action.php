<?php

		$p = new PropuestaData();
		$d = new DisponibleData();
		$t= new TransaccionData;
	 
		 
 				if(Core::$user->kind==1|| Core::$user->kind==2){
				//Core::alert("entro subse ");
				$p->updateSems($_GET["id"]);

				$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_GET["id"];
					$tipo="Valido Propuesta";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
					 Core::redir("./?view=/propuestas/propuestas");
	 		 		
		} 

		if(Core::$user->kind==1|| Core::$user->kind==5||Core::$user->kind==9){
				//Core::alert("entro subse ");
				$p->updateDirector($_GET["id"]);

				$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_GET["id"];
					$tipo="Valido Propuesta";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
					 Core::redir("./?view=/propuestas/propuestas");
	 		 		
		} 

 				if(Core::$user->kind==1|| Core::$user->kind==3){
				//Core::alert("entro delegacion ");
				$p->updateDams($_GET["id"]);
				$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_GET["id"];
					$tipo="Valido Propuesta";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
					 Core::redir("./?view=/propuestas/propuestas");
		} 

				if(Core::$user->kind==1|| Core::$user->kind==4|| Core::$user->kind==10){
				//Core::alert("entro sup ");
				$p->updateSuper($_GET["id"]);
				$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_GET["id"];
					$tipo="Valido Propuesta";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
					 Core::redir("./?view=/propuestas/propuestas");
		}

				if(Core::$user->kind==1|| Core::$user->kind==6){
				//Core::alert("entro dbg ");
				$p->updateDbg($_GET["id"]);
				$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_GET["id"];
					$tipo="Valido Propuesta";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
					 Core::redir("./?view=/propuestas/propuestas");
		}

				if(Core::$user->kind==1|| Core::$user->kind==7){
				//Core::alert("entro dbt");
				$p->updateDbt($_GET["id"]);
				$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_GET["id"];
					$tipo="Valido Propuesta";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
					 Core::redir("./?view=/propuestas/propuestas");
		}

				if(Core::$user->kind==1|| Core::$user->kind==8){
				//Core::alert("entro dtb ");
				$p->updateDtb($_GET["id"]);
				$user=UserData::getById($_SESSION["user_id"])->username;
					$emp= $_GET["id"];
					$tipo="Valido Propuesta";
					$fecha="NOW()";

					$t->add($user,$tipo,$emp,$fecha);
					 Core::redir("./?view=/propuestas/propuestas");
				}
				if(Core::$user->kind==1|| Core::$user->kind==17){
					//Core::alert("entro dtb ");
					$p->updateSRbg($_GET["id"]);
					$user=UserData::getById($_SESSION["user_id"])->username;
						$emp= $_GET["id"];
						$tipo="Valido Propuesta";
						$fecha="NOW()";
	
						$t->add($user,$tipo,$emp,$fecha);
						 Core::redir("./?view=/propuestas/propuestas");
					}
					if(Core::$user->kind==1|| Core::$user->kind==18){
						//Core::alert("entro dtb ");
						$p->updateSRbt($_GET["id"]);
						$user=UserData::getById($_SESSION["user_id"])->username;
							$emp= $_GET["id"];
							$tipo="Valido Propuesta";
							$fecha="NOW()";
		
							$t->add($user,$tipo,$emp,$fecha);
							 Core::redir("./?view=/propuestas/propuestas");
						}
						if(Core::$user->kind==1|| Core::$user->kind==19){
							//Core::alert("entro dtb ");
							$p->updateSRtb($_GET["id"]);
							$user=UserData::getById($_SESSION["user_id"])->username;
								$emp= $_GET["id"];
								$tipo="Valido Propuesta";
								$fecha="NOW()";
			
								$t->add($user,$tipo,$emp,$fecha);
								 Core::redir("./?view=/propuestas/propuestas");
							}
					 
			 
	 
?>

 