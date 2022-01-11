<?php
class RechazoData {
	public static $tablename = "tbl_rechazos";


					public function __construct(){
							
							$this  ->Tipo_Rechazo="";
							$this  ->Motivo_Rechazo="";
							$this  ->Respuesta="";
							$this  ->Origen="";
							$this  ->Activo="";
							$this  ->Bnd_RespDir="";
							$this  ->Bnd_RespSup="";
							$this  ->Bnd_RespDbg="";
							$this  ->Bnd_RespDbt="";
							$this  ->Bnd_RespDtb="";
							$this  ->Bnd_RespSems="";
							$this  ->Propuesta_Id=""; 
							$this  ->cct=""; 
							$this  ->proceso=""; 
					}
				  

				public static function getById($id){
						$sql = "select * from ".self::$tablename." where Id=$id:";
						$query = Executor::doit($sql);
						//Core::alert($sql);
						return Model::one($query[0],new RechazoData());
					}


				 public function addSup(){
							$sql = "insert into tbl_rechazos(Tipo_Rechazo,Motivo_Rechazo,Origen,Activo,Propuesta_Id)";
							$sql .= " values(\"$this->Tipo_Rechazo\",\"$this->Motivo_Rechazo\",\"Supervisor\",\"1\",\"$this->Propuesta_Id\");";
						//echo($sql);
						return Executor::doit($sql);
					}

					 public function addDbg(){
							$sql = "insert into tbl_rechazos(Tipo_Rechazo,Motivo_Rechazo,Origen,Activo,Propuesta_Id)";
							$sql .= " values(\"$this->Tipo_Rechazo\",\"$this->Motivo_Rechazo\",\"DBG\",\"1\",\"$this->Propuesta_Id\");";
						//Core::alert("ADD");
						return Executor::doit($sql);
					}

					 public function addDbt(){
							$sql = "insert into tbl_rechazos(Tipo_Rechazo,Motivo_Rechazo,Origen,Activo,Propuesta_Id)";
							$sql .= " values(\"$this->Tipo_Rechazo\",\"$this->Motivo_Rechazo\",\"DBT\",1,\"$this->Propuesta_Id\");";
						//Core::alert("ADD");
						return Executor::doit($sql);
					}

				 	public function addDtb(){
							$sql = "insert into tbl_rechazos(Tipo_Rechazo,Motivo_Rechazo,Origen,Activo,Propuesta_Id)";
							$sql .= " values(\"$this->Tipo_Rechazo\",\"$this->Motivo_Rechazo\",\"DTB\",1,\"$this->Propuesta_Id\");";
						//Core::alert("ADD");
						return Executor::doit($sql);
					}

					public function addSRegional(){
						$sql = "insert into tbl_rechazos(Tipo_Rechazo,Motivo_Rechazo,Origen,Activo,Propuesta_Id)";
						$sql .= " values(\"$this->Tipo_Rechazo\",\"$this->Motivo_Rechazo\",\"Regional\",\"1\",\"$this->Propuesta_Id\");";
					//Core::alert("ADD");
					return Executor::doit($sql);
				}
 
					 public function addSems(){
							$sql = "insert into tbl_rechazos(Tipo_Rechazo,Motivo_Rechazo,Origen,Activo,Propuesta_Id)";
							$sql .= " values(\"$this->Tipo_Rechazo\",\"$this->Motivo_Rechazo\",\"SEMS\",1,\"$this->Propuesta_Id\");";
						//Core::alert("ADD");
						return Executor::doit($sql);
					}

					public function addDams(){
							$sql = "insert into tbl_rechazos(Tipo_Rechazo,Motivo_Rechazo,Origen,Activo,Propuesta_Id)";
							$sql .= " values(\"$this->Tipo_Rechazo\",\"$this->Motivo_Rechazo\",\"DAMS\",1,\"$this->Propuesta_Id\");";
						//Core::alert("ADD");
						return Executor::doit($sql);
					}

						/*PLANTILLA*/

						public function addRSupPlantilla(){
							$sql = "insert into tbl_rechazos
							(Tipo_Rechazo,Motivo_Rechazo,Origen,Activo,cct,proceso)";
							$sql .= " values(\"$this->Tipo_Rechazo\",\"$this->Motivo_Rechazo\",
							\"Supervisor\",\"1\",\"$this->cct\",\"PLANTILLA\");";
						//echo ($sql);
						return Executor::doit($sql);
					}

					public function addDgemsPlantilla(){
						$sql = "insert into tbl_rechazos(Tipo_Rechazo,Motivo_Rechazo,Origen,Activo,cct,proceso)";
						$sql .= " values(\"$this->Tipo_Rechazo\",\"$this->Motivo_Rechazo\",
						\"DGEMS\",\"1\",\"$this->cct\",\"PLANTILLA\");";
						//Core::alert("ADD");
					return Executor::doit($sql);
				}


				public function addRegionalPlantilla(){
					$sql = "insert into tbl_rechazos(Tipo_Rechazo,Motivo_Rechazo,Origen,Activo,cct,proceso)";
					$sql .= " values(\"$this->Tipo_Rechazo\",\"$this->Motivo_Rechazo\",
					\"REGIONAL\",\"1\",\"$this->cct\",\"PLANTILLA\");";
					//Core::alert("ADD");
				return Executor::doit($sql);
			}



				/*OBTENER RECHAZOS CAPTURA*/

				public static function getByCctCaptura($cct){
					$sql = "select * from ".self::$tablename."
					 where cct=\"$cct\"   and activo=1 and proceso=\"PLANTILLA\"
					 and Bnd_RespDir=0;";
					$query = Executor::doit($sql);
					//echo($sql);
					return Model::many($query[0],new RechazoData());
				}


				/*ACTUALIZAR BANDERA RESPUESTA CAPTURA*/


				public function updateRespDirCaptura($cct){
					$sql = "update ".self::$tablename." set
					Bnd_RespDir=1
					where cct=\"$cct\" ;";
					//echo($sql);
				Executor::doit($sql);
				}

				/*obtener los rechazos*/
						public static function getByCct($idpropuesta){
						$sql = "select * from ".self::$tablename." where Propuesta_Id=$idpropuesta  and Origen = \"Supervisor\"and activo=1;";
						$query = Executor::doit($sql);
						//echo($sql);
						return Model::many($query[0],new RechazoData());
					}

				public static function getBySup($idpropuesta){
						$sql = "select * from ".self::$tablename." 
						where Propuesta_Id=$idpropuesta  
						and (Origen = \"Regional\") and activo=1;";
						$query = Executor::doit($sql);
						//Core::alert($sql);
						return Model::many($query[0],new RechazoData());
					}

					public static function getByRegional($idpropuesta){
						$sql = "select * from ".self::$tablename." 
						where Propuesta_Id=$idpropuesta  
						and (Origen = \"DBG\" or Origen = \"DBT\" or Origen = \"DTB\") and activo=1;";
						$query = Executor::doit($sql);
						//Core::alert($sql);
						return Model::many($query[0],new RechazoData());
					}
				public static function getByDir($idpropuesta){
						$sql = "select * from ".self::$tablename." 
						where Propuesta_Id=$idpropuesta  and (Origen = \"SEMS\" or Origen= \"DAMS\") and activo=1;";
						$query = Executor::doit($sql);
						//Core::alert($sql);
						return Model::many($query[0],new RechazoData());
					}

				 

					public static function getBySems($idpropuesta){
						$sql = "select * from ".self::$tablename." where Propuesta_Id=$idpropuesta  and Origen= \"DAMS\" and activo=1;";
						$query = Executor::doit($sql);
						//Core::alert($sql);
						return Model::many($query[0],new RechazoData());
					}

					public static function getSems($idpropuesta){
						$sql = "select * from tbl_rechazos tr 
						where Propuesta_Id  in (select Id from  tbl_propuestas  where disponible_id =$idpropuesta);";
						$query = Executor::doit($sql);
						//echo($sql);
						return Model::many($query[0],new RechazoData());
					}



				/*obtener los rechazos*/



				/*bandera respuesta*/


				
				public function updateRespDir($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespDir=1,Respuesta =\"$this->Respuesta\" 
						where Id=$id;";
						//echo($sql);
					Executor::doit($sql);
					}
				public function updateRespSuper($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespSup=1,Respuesta =\"$this->Respuesta\"
						where Id=$id;";
						//echo($sql);
					Executor::doit($sql);
					}

				 public function updateRespDbg($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespDbg=1,Respuesta =\"$this->Respuesta\"
						where Id=$id;";
						//echo($sql);
					Executor::doit($sql);
					}

				public function updateRespDbt($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespDbt=1,Respuesta =\"$this->Respuesta\"
						where Id=$id;";
					Executor::doit($sql);
					}
				public function updateRespDtb($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespDtb=1,Respuesta =\"$this->Respuesta\"
						where Id=$id;";
					Executor::doit($sql);
					}
					public function updateRespSregional($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespSRegional=1,Respuesta =\"$this->Respuesta\"
						where Id=$id;";
					Executor::doit($sql);
					}


				public function updateRespSems($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespSems=1,Respuesta =\"$this->Respuesta\"
						where Id=$id;";
					Executor::doit($sql);
					}
				/*bnd respuesta */

			

				public static function getByRrCct($idpropuesta){
				$sql = "select * from ".self::$tablename." where Propuesta_Id=$idpropuesta  and Origen = \"Supervisor\"and activo=1;";
				$query = Executor::doit($sql);
				//Core::alert($sql);
				return Model::many($query[0],new RechazoData());
			}
			public static function getByRrSup($idpropuesta){
					$sql = "select * from ".self::$tablename." where Propuesta_Id=$idpropuesta   and activo=1;";
					$query = Executor::doit($sql);
					//echo($sql);
					return Model::many($query[0],new RechazoData());
				}
			public static function getByRrDir($idpropuesta){
					$sql = "select * from ".self::$tablename." where
					 Propuesta_Id=$idpropuesta  and  (Origen = \"DBG\" or Origen = \"DBT\" or Origen = \"DTB\") and activo=1; ";
					
					$query = Executor::doit($sql);
					//Core::alert($sql);
					return Model::many($query[0],new RechazoData());
				}

				public static function getByRSRegional($idpropuesta){
					$sql = "select * from ".self::$tablename." where
					 Propuesta_Id=$idpropuesta  and  (Origen = \"Regional\") and activo=1; ";
					
					$query = Executor::doit($sql);
					//echo($sql);
					return Model::many($query[0],new RechazoData());
				}

				public static function getByRrSems($idpropuesta){
					$sql = "select * from ".self::$tablename." where Propuesta_Id=$idpropuesta  and Origen= \"SEMS\" and activo=1;";
					$query = Executor::doit($sql);
					//Core::alert($sql);
					return Model::many($query[0],new RechazoData());
				}

					public static function getByRrDams($idpropuesta){
					$sql = "select * from ".self::$tablename." where Propuesta_Id=$idpropuesta  and Origen= \"DAMS\" and activo=1;";
					$query = Executor::doit($sql);
					//Core::alert($sql);
					return Model::many($query[0],new RechazoData());
				}

			/*obtener los rechazos con respuesta*/


				/*update bnd rechazo*/		
			public function updateRechazoF($id){
		$sql = "update ".self::$tablename." set
		Activo=0
		where Propuesta_Id=$id;";
	Executor::doit($sql);
	}

		public static function getHistoricaRechazo($id){
		$sql = "insert into th_rechazos  (select * from tbl_rechazos where Activo=0 and Propuesta_Id=$id);";
		return Executor::doit($sql);
		}


		public static function delRechazo($id){
		$sql = " delete from tbl_rechazos where Propuesta_Id=$id;";
		Executor::doit($sql);
	}



/*actualizar bnd 0 de respuesta*/

public function updateBndRespDir($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespDir=0
						where Propuesta_Id=$id;";
						//echo($sql);
					Executor::doit($sql);
					}

public function updateBndRespSup($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespSup=0
						where Propuesta_Id=$id;";
					Executor::doit($sql);
					}
public function  updateBndRespSRegional($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespSRegional=0
						where Propuesta_Id=$id;";
					Executor::doit($sql);
					}
public function updateBndRespDbg($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespDbg=0
						where Propuesta_Id=$id;";
					Executor::doit($sql);
					}
public function updateBndRespDbt($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespDbt=0
						where Propuesta_Id=$id;";
					Executor::doit($sql);
					}
public function updateBndRespDtb($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespDtb=0
						where Propuesta_Id=$id;";
					Executor::doit($sql);
					}

public function updateBndRespSems($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespSems=0
						where Propuesta_Id=$id;";
					Executor::doit($sql);
					}





/*pone bnd 1*/
public function updateBndRespDir1($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespDir=1
						where Propuesta_Id=$id;";
						//echo($sql);
					Executor::doit($sql);
					}

public function updateBndRespSup1($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespSup=1
						where Propuesta_Id=$id;";
					Executor::doit($sql);
					}
public function updateBndRespDbg1($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespDbg=1
						where Propuesta_Id=$id;";
						//echo($sql);
					Executor::doit($sql);
					}
public function updateBndRespDbt1($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespDbt=1
						where Propuesta_Id=$id;";
					Executor::doit($sql);
					}
public function updateBndRespDtb1($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespDtb=1
						where Propuesta_Id=$id;";
					Executor::doit($sql);
					}

					public function updateBndRespRegional($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespSRegional=1
						where Propuesta_Id=$id;";
					Executor::doit($sql);
					}

public function updateBndRespSems1($id){
						$sql = "update ".self::$tablename." set
						Bnd_RespSems=1
						where Propuesta_Id=$id;";
					Executor::doit($sql);
					}





}
?>																								