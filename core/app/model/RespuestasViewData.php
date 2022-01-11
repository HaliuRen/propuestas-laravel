<?php
class RespuestasViewData 
{ 
	public static $tablename = "vw_respuestas";

 
	public function RespuestasViewData(){
			
			$this  ->Id_Disponible="";
			$this  ->Num_Plaza="";
			$this  ->Cve_Emp="";
			$this  ->APaterno="";
			$this  ->AMaterno="";
			$this  ->Nombre="";
			$this  ->Curp="";
			$this  ->Rfc="";
			$this  ->Cct="";
			$this  ->vertiente="";
			$this  ->Zona=""; 
			$this  ->Nombre_Cct="";
			$this  ->Puesto="";
			$this  ->Horas="";
			$this  ->Tipo_Puesto="";
		 
			$this  ->Id_Propuesta="";
	 		$this  ->PCve_Emp="";
	 		$this  ->Disponible_Id="";
			$this  ->PA_Paterno="";
			$this  ->PA_Materno="";
			$this  ->PNombre="";
			$this  ->PCurp="";
			$this  ->PRfc="";
		 
			$this  ->Motivo="";
			$this  ->Tiempo_Servicio="";
			$this  ->Fec_Inicio="";
			$this  ->Fec_Termino="";
			$this  ->Telefono="";
			$this  ->Email="";
			$this  ->Estado_Civil="";
			$this  ->Entidad_Nacimiento="";
		 	$this  ->Municipio_Nacimiento="";
			$this  ->Domicilio="";
			$this  ->Colonia="";
			$this  ->CP="";
			$this  ->Bnd_Supervision="";
			$this  ->Bnd_Dams="";
			$this  ->Bnd_Sems="";
			$this  ->Bnd_Dbg="";
			$this  ->Bnd_Dbt="";
			$this  ->Bnd_Dtb="";
			$this  ->Activo="";
			$this  ->Bnd_RSupervision="";
			$this  ->Bnd_RDams="";
			$this  ->Bnd_RSems="";
			$this  ->Bnd_RDbg="";
			$this  ->Bnd_RDbt="";
			$this  ->Bnd_RDtb="";
			$this  ->Id_Rechazo="";
			$this  ->Tipo_Rechazo="";
			$this  ->Motivo_Rechazo="";
			$this  ->Respuesta="";
			$this  ->Rechazo_Activo="";		
			$this  ->Bnd_RespDir="";
			$this  ->Bnd_RespSup="";
			$this  ->Bnd_RespDbg="";
			$this  ->Bnd_RespDbt="";
			$this  ->Bnd_RespDtb=""; 
			$this  ->Bnd_RespSems=""; 

			 
			$this  ->A_FrenteGrupo=""; 
			$this  ->D_Ingles=""; 
		 
			$this  ->O_Labora="";
			$this  ->Horas_OLabora="";
		}

 

/*respuestas-view*/

public static function getByRCct($cct){
		$sql = "select distinct * from ".self::$tablename." where Cct=\"$cct\" and Bnd_Supervision=0  and activo =1 and  Bnd_RSupervision=1 and Bnd_RespDir=0 and origen =\"Supervisor\" ";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new RespuestasViewData());

	}

public static function getByRZona($zona){

		$sql = "select distinct * from ".self::$tablename." where Zona=\"$zona\"and 
		Bnd_RespSup =0 and  Bnd_Supervision=1 and Bnd_RespDir =0
		and  (Bnd_RSRegional=1 ) 
		and  (Bnd_SRegional=0)
		and   activo =1 and    (origen=\"Regional\") ";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new RespuestasViewData());

	}

	public static function getByRegional($region,$subsistema){
		$sql = "select distinct * from ".self::$tablename." where Zona in (select zona from tc_regiones tr
		where tr.region =\"$region\"  and tr.subsistema =\"$subsistema\") and 
		Bnd_RespSRegional =0 and  Bnd_Supervision=1 and Bnd_RespSRegional =0
		and  (Bnd_RDbg=1 or Bnd_RDbt=1 or Bnd_RDtb=1) 
		and  (Bnd_Dbg=0 or Bnd_Dbt=0 or Bnd_Dtb =0) 
		and   activo =1 and    (origen=\"DBG\" or origen=\"DBT\" or origen=\"DTB\") ";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new RespuestasViewData());

	}
	public static function getByRBg(){
		$sql = "select distinct * from ".self::$tablename." 
		where vertiente=\"BACHILLERATO GENERAL\" and Bnd_Dbg=1 
		and (Bnd_RSems=1 or Bnd_RDams=1) and Bnd_RespDbg =0 and Bnd_Sems =0 and (origen =\"SEMS\" or origen =\"DAMS\")
		and bnd_respDbg=0 and Activo=1 order by Zona,Cct";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new RespuestasViewData());
	}

	public static function getBySems(){
		$sql = "select * from ".self::$tablename." where  Bnd_Supervision =1 and  (Bnd_Dbt=1 or Bnd_Dbg=1 or Bnd_Dtb=1) 
		and Bnd_Sems=1 and  Bnd_RespSems =0  and Bnd_RDams =1 and activo =1 and origen=\"DAMS\" order by Zona,Cct,vertiente";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new RespuestasViewData());

	} 

	public static function getByRBt(){
		$sql = "select * from ".self::$tablename." where  Bnd_Supervision=1 and vertiente=\"BACHILLERATO TECNOLOGICO\"  and Bnd_Dbt=1 
		and (Bnd_RSems=1 or Bnd_RDams=1) and Bnd_RespDbt =0 and Bnd_Sems =0 and (origen =\"SEMS\" or origen =\"DAMS\")
		and bnd_respDbt=0 and Activo=1 order by Zona,Cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new RespuestasViewData());
	}


	public static function getByRTb(){
		$sql = "select * from ".self::$tablename." where vertiente=\"TELEBACHILLERATO\" and Bnd_Dtb=1 
		and (Bnd_RSems=1 or Bnd_RDams=1) and Bnd_RespDtb =0 and Bnd_Dams =0 and (origen =\"SEMS\" or origen =\"DAMS\")
		and bnd_respDtb=0 and Activo=1 order by Zona,Cct";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new RespuestasViewData());
	}

	/**/




  
public static function getByRespZona($zona){/*supervision*/
		$sql = "select distinct * from ".self::$tablename." where Zona=\"$zona\" and Bnd_Supervision=0 
		 and Bnd_RespDir=1 AND Bnd_RSupervision=1 and origen =\"Supervisor\"   and activo =1";
		 $query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new RespuestasViewData());

	}

	public static function getByRespSems(){
		$sql = "select distinct * from ".self::$tablename." where  Bnd_Supervision=1 and (Bnd_Dbt=1 or Bnd_Dbg=1) and Bnd_Sems=0  and Bnd_RSems=1 and (Bnd_RespDbt=1 or Bnd_RespDbg=1 ) and activo =1  and origen =\"SEMS\"
		order by Zona,Cct,vertiente";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new RespuestasViewData());

	}
	public static function getByRespDams(){
		$sql = "select  distinct * from ".self::$tablename." where   Bnd_Supervision=1 
		and (Bnd_Dbt=1 or Bnd_Dbg=1 or Bnd_Dtb=1) and Bnd_Sems=1 and Bnd_Dams=0 
	 and Bnd_RDams=1 and (Bnd_RespSems =1 or Bnd_RespDtb=1)
		and origen =\"DAMS\"
		order by Zona,Cct,vertiente";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new RespuestasViewData());

	}
	public static function getByRespSR($vertiente,$region,$subsistema){
		$sql = "select distinct * from ".self::$tablename." 
		where Bnd_Supervision=1  
		and Bnd_RSRegional=1 and Bnd_RespSup =1 
		and vertiente=\"$vertiente\" and activo=1 and Origen =\"Regional\" 
		and zona in (select zona from tc_regiones tr
		where tr.region =\"$region\"  and tr.subsistema =\"$subsistema\")
		order by Zona,Cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new RespuestasViewData());
	}
 


	public static function getByRespBg(){
		$sql = "select distinct * from ".self::$tablename." 
		where Bnd_SRegional=1
		and Bnd_RDbg =1 and Bnd_RespSRegional =1 
		and vertiente=\"BACHILLERATO GENERAL\" and activo=1 and Origen =\"DBG\"  order by Zona,Cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new RespuestasViewData());
	}

		public static function getByRespBt(){
		$sql = "select distinct * from ".self::$tablename." 
		where  Bnd_SRegional=1 
		and Bnd_Dbt=0 and Bnd_RDbt=1 and Bnd_RespSRegional=1 
		and vertiente=\"BACHILLERATO TECNOLOGICO\" and activo=1 and Origen =\"DBT\" order by Zona,Cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new RespuestasViewData());
	}
	 

		public static function getByRespTb(){
		$sql = "select distinct * from ".self::$tablename."
		 where  Bnd_SRegional=1  
		 and Bnd_Dtb=0 and Bnd_RDtb=1 and Bnd_RespSRegional=1
		  and vertiente=\"TELEBACHILLERATO\" and activo=1 and Origen =\"DTB\" order by Zona,Cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new RespuestasViewData());
	}
/*respuestas-view*/



/*showrespuesta-view*/
	public static function getByIdSems($Id_Disponible){
		$sql = "select * from ".self::$tablename." where  Id_Propuesta=$Id_Disponible and Bnd_Supervision=1 and (Bnd_Dbt=1 or Bnd_Dbg=1 or Bnd_Dtb=1) and Bnd_Sems=0 
		and activo =1 order by vertiente";
		//Core::alert($sql);
		$query = Executor::doit($sql);
	return Model::one($query[0],new RespuestasViewData());
	}
	public static function getByIdDams($Id_Disponible){
		$sql = "select * from ".self::$tablename." where Id_Propuesta=$Id_Disponible and Bnd_Supervision=1 and (Bnd_Dbt=1 or Bnd_Dbg=1 or Bnd_Dtb=1) and Bnd_Sems=1 and Bnd_Dams=0 and activo =1 order by vertiente";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new RespuestasViewData());

	}

	public static function getByIdSup($Id_Propuesta){
		$sql = "select * from ".self::$tablename." where Id_Propuesta=$Id_Propuesta  and Bnd_Supervision=0 and activo =1 and Bnd_RespDir=1 and Bnd_RSupervision=1";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new RespuestasViewData());

	}

	public static function getByIdBg($Id_Propuesta){
		$sql = "select * from ".self::$tablename." where  Id_Propuesta=$Id_Propuesta and Bnd_Supervision=1 and vertiente=\"BACHILLERATO GENERAL\" and Bnd_Dbg=0  and activo =1 order by vertiente";
		//Core::alert($sql);
		$query = Executor::doit($sql);
		return Model::one($query[0],new RespuestasViewData());
	}

		public static function getByIdBt($Id_Propuesta){
		$sql = "select * from ".self::$tablename." where Id_Propuesta=$Id_Propuesta and Bnd_Supervision=1 and vertiente=\"BACHILLERATO TECNOLOGICO\" and Bnd_Dbt=0 and activo =1 order by vertiente";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new RespuestasViewData());
	}
	 

		public static function getByIdTb($Id_Propuesta){
		$sql = "select * from ".self::$tablename." 
		where Id_Propuesta=$Id_Propuesta and vertiente=\"TELEBACHILLERATO\" 
		and Bnd_Supervision=1 and Bnd_Dtb=0 and activo =1 order by Zona";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new RespuestasViewData());
	}

	public static function getByIdSR($Id_Propuesta){
		$sql = "select * from ".self::$tablename." 
		where Id_Propuesta=$Id_Propuesta and activo =1  ";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::one($query[0],new RespuestasViewData());
	}
/*showrespuesta-view*/





/*showrechazo-view*/
public static function getByIdRCct($Id_Propuesta){
		$sql = "select * from ".self::$tablename." where Id_Propuesta=$Id_Propuesta and Bnd_Supervision=0 and Bnd_RSupervision=1 and activo =1 ";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new RespuestasViewData());

	}

/*showrechazo-view*/


}
?>
