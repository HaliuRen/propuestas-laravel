<?php
class PropuestasViewData 
{
	public static $tablename = "vw_propuestas";


	public function __construct(){
			
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
			$this  ->Bnd_Director="";  
			$this  ->Id_Rechazo="";
			$this  ->Tipo_Rechazo="";
			$this  ->Motivo_Rechazo="";
			$this  ->Respuesta="";
			$this  ->Rechazo_Activo="";		

			
			$this  ->A_FrenteGrupo=""; 
			$this  ->D_Ingles=""; 
			
			$this  ->O_Labora="";
			$this  ->Horas_OLabora="";
		
			}

	public static function getByCct($cct){
		$sql = "select * from ".self::$tablename." where Cct=\"$cct\" and Bnd_Supervision=0 and activo =1";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new PropuestasViewData());

	}


	/*propuestas-view*/
public static function getByPCCT($cct){
		$sql = "select * from ".self::$tablename." where Cct=\"$cct\" and Activo =1 and  Bnd_Director =0 and Bnd_RTotal=0 and OrigenP=\"
		CCT\"";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());

	}


public static function getByZona($zona){
		$sql = "select * from ".self::$tablename." where Zona=\"$zona\" 
		and Bnd_Supervision=0 and Activo =1 and  Bnd_RSupervision =0 
		and Bnd_RTotal=0  and Bnd_Director=1 and (OrigenP=\"CCT\" or OrigenP=\"SUP\")";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new PropuestasViewData());

	}

	public static function getBySems(){
		$sql = "select * from ".self::$tablename." where  Bnd_Supervision=1  and Bnd_SRegional=1 and (Bnd_Dbt=1 or Bnd_Dbg=1) and Bnd_Sems=0 and  Bnd_RSems=0  and Bnd_RTotal=0  and activo =1 order by Zona,Cct,vertiente";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());

	} 
	public static function getByDams(){
		$sql = "select * from ".self::$tablename." where  Bnd_Supervision=1 and (Bnd_Dbt=1 or Bnd_Dbg=1 or Bnd_Dtb=1)  and Bnd_SRegional=1 and Bnd_Sems=1 and Bnd_Dams=0 and  Bnd_RDams=0 and  Bnd_RTotal=0 and activo =1 order by Zona,Cct,vertiente";
		$query = Executor::doit($sql);
//		Core::alert($sql);
				return Model::many($query[0],new PropuestasViewData());

	}

	public static function getByBg(){
		$sql = "select * from ".self::$tablename." where 
		Bnd_Supervision=1  and Bnd_SRegional=1 and vertiente=\"BACHILLERATO GENERAL\"  
		and Bnd_RTotal=0  and Bnd_Dbg=0 
		and  Bnd_RDbg=0 and activo =1 order by Zona,Cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());
	}

		public static function getByBt(){
		$sql = "select * from ".self::$tablename." where 
		 Bnd_Supervision=1   and Bnd_SRegional=1 and vertiente=\"BACHILLERATO TECNOLOGICO\" 
		 and Bnd_Dbt=0 and Bnd_RTotal=0  and  Bnd_RDbt=0 and activo =1 order by Zona,Cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());
	}
	 

		public static function getByTb(){
		$sql = "select * from ".self::$tablename." 
		where vertiente=\"TELEBACHILLERATO\" and Bnd_Supervision=1 and Bnd_SRegional=1 
		and Bnd_Dtb=0 and  Bnd_RDtb=0 and  Bnd_RSRegional=0 and Bnd_RTotal=0  and activo =1 order by Zona,Cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());
	}

	public static function getBySRegionalTb($vertiente,$region){
		$sql = "select * from ".self::$tablename." 
		where vertiente=\"$vertiente\" and Bnd_Supervision=1 and Bnd_SRegional=0
		and Bnd_Dtb=0 and  Bnd_RDtb=0 and  Bnd_RSRegional=0 and  Bnd_RSupervision=0 
		and Bnd_RTotal=0  and activo =1 and Zona in (select zona from tc_regiones tr
		where tr.region =\"$region\"  and tr.subsistema =\"$vertiente\")
		 order by Zona,Cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());
	}

	public static function getBySRegionalBg($vertiente,$region,$subsistema){
		$sql = "select * from ".self::$tablename." 
		where vertiente=\"$vertiente\" and Bnd_Supervision=1 and Bnd_SRegional=0
		and Bnd_Dbg=0 and  Bnd_RDbg=0 and  Bnd_RSRegional=0 and  Bnd_RSupervision=0 
		and Bnd_RTotal=0  and activo =1 and Zona in (select zona from tc_regiones tr
		where tr.region =\"$region\"  and tr.subsistema =\"$subsistema\")
		 order by Zona,Cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());
	}
	public static function getBySRegionalBt($vertiente,$region,$subsistema){
		$sql = "select * from ".self::$tablename." 
		where vertiente=\"$vertiente\" and Bnd_Supervision=1 and Bnd_SRegional=0
		and Bnd_Dbt=0 and  Bnd_RDbt=0 and  Bnd_RSRegional=0 and  Bnd_RSupervision=0 
		and Bnd_RTotal=0  and activo =1 and Zona in (select zona from tc_regiones tr
		where tr.region =\"$region\"  and tr.subsistema =\"$subsistema\")
		 order by Zona,Cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());
	}

/*propuestas-view*/


/*showpropuesta-view*/
	public static function getByIdSems($Id_Disponible){
		$sql = "select * from ".self::$tablename." where  Id_Disponible=$Id_Disponible and Bnd_Supervision=1 and (Bnd_Dbt=1 or Bnd_Dbg=1) and Bnd_Sems=0 and Bnd_RTotal=0 
		and activo =1 order by vertiente";
		$query = Executor::doit($sql);
		//echo($sql);
	return Model::one($query[0],new PropuestasViewData());
	} 
	public static function getByIdDams($Id_Disponible){
		$sql = "select * from ".self::$tablename." where Id_Disponible=$Id_Disponible and Bnd_Supervision=1 and (Bnd_Dbt=1 or Bnd_Dbg=1 or Bnd_Dtb=1) and Bnd_Sems=1 and Bnd_RTotal=0  and Bnd_Dams=0 and activo =1 order by vertiente";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestasViewData());

	}


public static function getByIdDirector($Id_Disponible){
		$sql = "select * from ".self::$tablename." where Id_Disponible=$Id_Disponible  and (Bnd_Director=0 or Bnd_Director=1) and OrigenP=\"CCT\" and Bnd_RTotal=0  and activo =1";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::one($query[0],new PropuestasViewData());

	} 

	public static function getByIdSup($Id_Disponible){
		$sql = "select * from ".self::$tablename." where Id_Disponible=$Id_Disponible  and (Bnd_Supervision=0 or Bnd_Supervision=1) and activo =1 and Bnd_RTotal=0 ";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::one($query[0],new PropuestasViewData());

	} 

	public static function getByIdBg($Id_Disponible){
		$sql = "select * from ".self::$tablename." where  Id_Disponible=$Id_Disponible and Bnd_Supervision=1 and vertiente=\"BACHILLERATO GENERAL\" and (Bnd_Dbg=0 or Bnd_Dbg=1)  and activo =1 and Bnd_RTotal=0  order by vertiente";
		//Core::alert($sql);
		$query = Executor::doit($sql);
		return Model::one($query[0],new PropuestasViewData());
	}

		public static function getByIdBt($Id_Disponible){
		$sql = "select * from ".self::$tablename." where Id_Disponible=$Id_Disponible and Bnd_Supervision=1 and vertiente=\"BACHILLERATO TECNOLOGICO\"  and (Bnd_Dbt=0 or Bnd_Dbt=1) and activo =1 and Bnd_RTotal=0  order by vertiente";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestasViewData());
	}
	 

		public static function getByIdTb($Id_Disponible){
		$sql = "select * from ".self::$tablename." 
		where Id_Disponible=$Id_Disponible and 
		vertiente=\"TELEBACHILLERATO\" and Bnd_Supervision=1  
		and (Bnd_Dtb=0 or Bnd_Dtb=1) and activo =1 and Bnd_RTotal=0  order by Zona";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestasViewData());
	}

	public static function getBySR($Id_Disponible){
		$sql = "select * from ".self::$tablename." 
		where Id_Disponible=$Id_Disponible and 
		   
		  activo =1 and Bnd_RTotal=0  order by Zona";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestasViewData());
	}


/*showpropuesta-view*/



		public static function getById($Id_Disponible){
		$sql = "select * from ".self::$tablename." where Id_Disponible=$Id_Disponible and Bnd_Supervision=0 and activo =1 and Bnd_RTotal=0 ";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestasViewData());
	}


	/*reportes*/

	  

public static function getReportDbg($subsistema)
{
		$sql = "select Zona ,Puesto ,Tipo_Puesto ,Num_Plaza ,CONCAT(PNombre,\" \",PA_Paterno,\" \",PA_Materno) as Nombre_Propuesta,PCve_Emp ,Cct ,Fec_Inicio ,Fec_Termino ,Motivo ,Cve_Emp  from ".self::$tablename."  
 			 where vertiente =\"$subsistema\" 
 			 
 			and Activo =1 
			order by zona, cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());
	}


	public static function getReportDbgD($subsistema,$tipoescuela,$tipovacante,$categoria)
{
		$sql = "select Zona ,Puesto ,Tipo_Puesto ,Num_Plaza ,CONCAT(PNombre,\" \",PA_Paterno,\" \",PA_Materno) as Nombre_Propuesta,PCve_Emp ,Cct ,Fec_Inicio ,Fec_Termino ,Motivo ,Cve_Emp  from ".self::$tablename."  
 			 where vertiente =\"$subsistema\" 
 			and orga_soci=\"$tipoescuela\" 
 			and Tipo_Vacante =\"$tipovacante\" and tipo=\"$categoria\"
 			and Activo =1   and (Bnd_Dbg=1 or Bnd_Dbt=1)
			order by zona,cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());
	}

	public static function getReportDbgG($subsistema)
{
		$sql = "select 
		Num_Plaza ,Cve_Emp,APaterno,AMaterno,Nombre,Curp,Rfc,Zona,Cct,OrigenD,
		Nombre_Cct,vertiente,orga_soci,Municipio,Puesto,Fecha_Creacion,
		Tipo_Puesto,Motivo,Tipo_Vacante,PCve_Emp,PA_Paterno,PA_Materno,PNombre,
		PCurp,PRfc,Municipio_Residencia,Tiempo_Servicio,A_Puesto,Telefono,Fec_Inicio,
		Fec_Termino,Tipo_Ingreso,Email,Sexo,Estado_Civil,Entidad_Nacimiento,Municipio_Nacimiento,
		Domicilio,Colonia,CP,OrigenP,Bnd_Director,Bnd_Supervision,Bnd_SRegional,Bnd_Dbg,
		Bnd_Dbt,Bnd_Dtb,Bnd_RSupervision,Bnd_RSRegional,Bnd_RDbg,Bnd_RDbt,Bnd_RDtb,Fecha_CreacionP
		 from ".self::$tablename."  
 			 where vertiente =\"$subsistema\" 
 			 
 			and Activo =1    
			order by zona,cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());
	}




public static function getReportSems($subsistema,$tipoescuela,$tipovacante,$categoria)
{
		$sql = "select Zona ,Puesto ,Tipo_Puesto ,Num_Plaza ,CONCAT(PNombre,\" \",PA_Paterno,\" \",PA_Materno) as Nombre_Propuesta,PCve_Emp ,Cct ,Fec_Inicio ,Fec_Termino ,Motivo ,Cve_Emp  from ".self::$tablename."  
 			 where vertiente =\"$subsistema\" 
 			and orga_soci=\"$tipoescuela\" 
 			and Tipo_Vacante =\"$tipovacante\" and tipo=\"$categoria\"
 			and Activo =1   and  Bnd_Sems=1
			order by cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());
	}

public static function getReportDams($subsistema,$tipoescuela,$tipovacante,$categoria)
{
		$sql = "select Zona ,Puesto ,Tipo_Puesto ,Num_Plaza ,CONCAT(PNombre,\" \",PA_Paterno,\" \",PA_Materno) as Nombre_Propuesta,PCve_Emp ,Cct ,Fec_Inicio ,Fec_Termino ,Motivo ,Cve_Emp  from ".self::$tablename."  
 			 where vertiente =\"$subsistema\" 
 			and orga_soci=\"$tipoescuela\" 
 			and Tipo_Vacante =\"$tipovacante\" and tipo=\"$categoria\"
 			and Activo =1   and  Bnd_Dams=1
			order by cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());
	}

	  
	  
	/*reportes*/
 




/*rechazos-view*/

	public static function getByRCct($cct){
		$sql = "select * from ".self::$tablename." where Cct=\"$cct\" and Bnd_Supervision=0  and activo =1 and  Bnd_RSupervision=1 and Bnd_RTotal=0 ";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new PropuestasViewData());

	}



public static function getByRZona($zona){
		$sql = "select * from ".self::$tablename." where Zona=\"$zona\" and Bnd_Supervision=1 
		and  (Bnd_RDbg=1 or Bnd_RDbt=1 or Bnd_RDbt=1) and  (Bnd_Dbg=0 or Bnd_Dbt=0 or Bnd_Dbt=0) and   activo =1 and Bnd_RTotal=0 ";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new PropuestasViewData());

	}

	public static function getByRSems(){
		$sql = "select * from ".self::$tablename." where  Bnd_Supervision=1 and (Bnd_Dbt=1 or Bnd_Dbg=1 or Bnd_Dtb=1) and Bnd_Sems=0 and activo =1 and Bnd_RTotal=0  order by Zona,Cct,vertiente";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new PropuestasViewData());

	}
	public static function getByRDams(){
		$sql = "select * from ".self::$tablename." where  Bnd_Supervision=1 and (Bnd_Dbt=1 or Bnd_Dbg=1 or Bnd_Dtb=1) and Bnd_Sems=1 and Bnd_Dams=0  and Bnd_RTotal=0  order by Zona,Cct,vertiente";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new PropuestasViewData());

	}

	public static function getByRBg(){
		$sql = "select * from ".self::$tablename." where  Bnd_Supervision=1 and vertiente=\"BACHILLERATO GENERAL\" and Bnd_Dbg=1 and activo=1 and (Bnd_RSems=1 or Bnd_RDams=1) and Bnd_RTotal=0  order by Zona,Cct";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new PropuestasViewData());
	}

		public static function getByRBt(){
		$sql = "select * from ".self::$tablename." where  Bnd_Supervision=1 and vertiente=\"BACHILLERATO TECNOLOGICO\" and Bnd_Dbt=0 and Bnd_RTotal=0  order by Zona,Cct";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new PropuestasViewData());
	}
	 

		public static function getByRTb(){
		$sql = "select * from ".self::$tablename." where vertiente=\"TELEBACHILLERATO\" and Bnd_Supervision=1 and Bnd_Dtb=0  and Bnd_RTotal=0  order by Zona,Cct";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new PropuestasViewData());
	}
/*rechazos-view*/

/*showrechazo-view*/
public static function getByIdRCct($Id_Propuesta){
		$sql = "select * from ".self::$tablename." where Id_Propuesta=$Id_Propuesta and Bnd_Supervision=0 and Bnd_RSupervision=1 and activo =1 and Bnd_RTotal=0  ";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestasViewData());

	}



public static function getByIdRSup($Id_Propuesta){
		$sql = "select * from ".self::$tablename." 
		where Id_Propuesta=$Id_Propuesta   and activo =1;";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::one($query[0],new PropuestasViewData());

	}

public static function getByIdRBg($Id_Propuesta){
		$sql = "select * from ".self::$tablename." where Id_Propuesta=$Id_Propuesta and Bnd_Supervision=1 and (Bnd_RDbg=0 or Bnd_RDbt=0 or Bnd_RDtb=0) and Bnd_RSems=1 and activo =1 and Bnd_RTotal=0 ";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::one($query[0],new PropuestasViewData());

	}

	public static function getByIdRRegional($Id_Propuesta){
		$sql = "select * from ".self::$tablename." where
		 Id_Propuesta=$Id_Propuesta   and activo =1 and Bnd_RTotal=0 ";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestasViewData());

	}

	public static function getByIdRSems($Id_Propuesta){
		$sql = "select * from ".self::$tablename." where
		 Id_Propuesta=$Id_Propuesta and Bnd_RDams=1 and activo =1 and Bnd_RTotal=0 ";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestasViewData());

	}


public static function getByIdRBt($Id_Propuesta){
		$sql = "select * from ".self::$tablename." where Id_Propuesta=$Id_Propuesta and Bnd_Supervision=1 and (Bnd_RDbg=0 or Bnd_RDbt=0 or Bnd_RDtb=0) and Bnd_RSems=1 and activo =1 and Bnd_RTotal=0 ";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestasViewData());

	}

public static function getByIdRTb($Id_Propuesta){
		$sql = "select * from ".self::$tablename." where Id_Propuesta=$Id_Propuesta and Bnd_Supervision=1 and (Bnd_RDbg=0 or Bnd_RDbt=0 or Bnd_RDtb=0) and Bnd_RDams=1 and activo =1 and Bnd_RTotal=0 ";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestasViewData());

	}
/*showrechazo-view*/
 

 /*EStatus propuestas*/
 
public static function getEstatusDir($cct){
		$sql = "select  Id_Disponible,Num_Plaza,APaterno,AMaterno,Nombre,
		zona,Cct,Nombre_Cct,Puesto,Tipo_Puesto,Horas ,PCve_Emp,PCurp,PA_Paterno,PA_Materno,PNombre,
		if (Bnd_Supervision=1,'VALIDADO','PENDIENTE') AS  Bnd_SupervisionEst ,
		if (Bnd_SRegional=1,'VALIDADO','PENDIENTE') AS  Bnd_SRegionalEst ,
		 case 
			when substring(zona,1,2)='BG' then 
				if (Bnd_Dbg=1,'VALIDADO','PENDIENTE')   
			when substring(zona,1,2)='BT' then 	
				if (Bnd_Dbt=1,'VALIDADO','PENDIENTE')    	
			when substring(zona,1,2)='TB' then 	
				if (Bnd_Dtb=1,'VALIDADO','PENDIENTE')  
		 end   as bnd_dgems,
		 if (Bnd_RSupervision=1,'MODIFICACION','NA') AS Bnd_RSupervisionEst  ,
		 if (Bnd_RSRegional=1,'MODIFICACION','NA') AS Bnd_RSRegionalEst   ,
		 if (Bnd_RDbg=1,'MODIFICACION','NA') AS Bnd_RDbgEst,
		 if (Bnd_RDbt=1,'MODIFICACION','NA') AS Bnd_RDbtEst,
		  if (Bnd_RDtb=1,'MODIFICACION','NA') AS Bnd_RDtbEst
		 from ".self::$tablename."  
				where activo=1 and cct=\"$cct\" and Bnd_RTotal=0
			and (Bnd_Director=0 or Bnd_Director=1) 
			and OrigenP=\"CCT\" order by Cct;";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());

	}

public static function getEstatusZona($zona){
		$sql = "select  Id_Disponible,Num_Plaza,APaterno,AMaterno,Nombre,
		zona,Cct,Nombre_Cct,Puesto,Tipo_Puesto,Horas ,PCve_Emp,PCurp,PA_Paterno,PA_Materno,PNombre,
		if (Bnd_Supervision=1,'VALIDADO','PENDIENTE') AS  Bnd_SupervisionEst ,
		if (Bnd_SRegional=1,'VALIDADO','PENDIENTE') AS  Bnd_SRegionalEst ,
		 case 
			when substring(zona,1,2)='BG' then 
				if (Bnd_Dbg=1,'VALIDADO','PENDIENTE')   
			when substring(zona,1,2)='BT' then 	
				if (Bnd_Dbt=1,'VALIDADO','PENDIENTE')    	
			when substring(zona,1,2)='TB' then 	
				if (Bnd_Dtb=1,'VALIDADO','PENDIENTE')  
		 end   as bnd_dgems,
		 if (Bnd_RSupervision=1,'MODIFICACION','NA') AS Bnd_RSupervisionEst  ,
		 if (Bnd_RSRegional=1,'MODIFICACION','NA') AS Bnd_RSRegionalEst   ,
		 if (Bnd_RDbg=1,'MODIFICACION','NA') AS Bnd_RDbgEst,
		 if (Bnd_RDbt=1,'MODIFICACION','NA') AS Bnd_RDbtEst,
		  if (Bnd_RDtb=1,'MODIFICACION','NA') AS Bnd_RDtbEst
		 from ".self::$tablename."  
				where activo=1 and Zona=\"$zona\" 
			
		and Bnd_RTotal=0 and (OrigenP=\"CCT\" or OrigenP=\"SUP\" or OrigenP=\"STB\")  
		order by Cct ";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());

	}


	public static function getEstatusDbg(){
		$sql = "select  Id_Disponible,Num_Plaza,APaterno,AMaterno,Nombre,
		zona,Cct,Nombre_Cct,Puesto,Tipo_Puesto,Horas ,PCve_Emp,PCurp,PA_Paterno,PA_Materno,PNombre,
		if (Bnd_Supervision=1,'VALIDADO','PENDIENTE') AS  Bnd_SupervisionEst ,
		if (Bnd_SRegional=1,'VALIDADO','PENDIENTE') AS  Bnd_SRegionalEst ,
		 case 
			when substring(zona,1,2)='BG' then 
				if (Bnd_Dbg=1,'VALIDADO','PENDIENTE')   
			when substring(zona,1,2)='BT' then 	
				if (Bnd_Dbt=1,'VALIDADO','PENDIENTE')    	
			when substring(zona,1,2)='TB' then 	
				if (Bnd_Dtb=1,'VALIDADO','PENDIENTE')  
		 end   as bnd_dgems,
		 if (Bnd_RSupervision=1,'MODIFICACION','NA') AS Bnd_RSupervisionEst  ,
		 if (Bnd_RSRegional=1,'MODIFICACION','NA') AS Bnd_RSRegionalEst   ,
		 if (Bnd_RDbg=1,'MODIFICACION','NA') AS Bnd_RDbgEst,
		 if (Bnd_RDbt=1,'MODIFICACION','NA') AS Bnd_RDbtEst,
		  if (Bnd_RDtb=1,'MODIFICACION','NA') AS Bnd_RDtbEst
		 from ".self::$tablename."  where Activo =1 and SUBSTRING(zona,1,2)=\"BG\"  
				 and Bnd_RTotal=0 
				 order by zona,Cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());

	}

	public static function getEstatusDbt(){
		$sql = "select  Id_Disponible,Num_Plaza,APaterno,AMaterno,Nombre,
		zona,Cct,Nombre_Cct,Puesto,Tipo_Puesto,Horas ,PCve_Emp,PCurp,PA_Paterno,PA_Materno,PNombre,
		if (Bnd_Supervision=1,'VALIDADO','PENDIENTE') AS  Bnd_SupervisionEst ,
		if (Bnd_SRegional=1,'VALIDADO','PENDIENTE') AS  Bnd_SRegionalEst ,
		 case 
			when substring(zona,1,2)='BG' then 
				if (Bnd_Dbg=1,'VALIDADO','PENDIENTE')   
			when substring(zona,1,2)='BT' then 	
				if (Bnd_Dbt=1,'VALIDADO','PENDIENTE')    	
			when substring(zona,1,2)='TB' then 	
				if (Bnd_Dtb=1,'VALIDADO','PENDIENTE')  
		 end   as bnd_dgems,
		 if (Bnd_RSupervision=1,'MODIFICACION','NA') AS Bnd_RSupervisionEst  ,
		 if (Bnd_RSRegional=1,'MODIFICACION','NA') AS Bnd_RSRegionalEst   ,
		 if (Bnd_RDbg=1,'MODIFICACION','NA') AS Bnd_RDbgEst,
		 if (Bnd_RDbt=1,'MODIFICACION','NA') AS Bnd_RDbtEst,
		  if (Bnd_RDtb=1,'MODIFICACION','NA') AS Bnd_RDtbEst
		 from ".self::$tablename."   where Activo =1 and SUBSTRING(zona,1,2)=\"BT\"   
		  and Bnd_RTotal=0  order by zona,Cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());

	}

public static function getEstatusDtb(){
		$sql = "select  Id_Disponible,Num_Plaza,APaterno,AMaterno,Nombre,
		zona,Cct,Nombre_Cct,Puesto,Tipo_Puesto,Horas ,PCve_Emp,PCurp,PA_Paterno,PA_Materno,PNombre,
		if (Bnd_Supervision=1,'VALIDADO','PENDIENTE') AS  Bnd_SupervisionEst ,
		if (Bnd_SRegional=1,'VALIDADO','PENDIENTE') AS  Bnd_SRegionalEst ,
		 case 
			when substring(zona,1,2)='BG' then 
				if (Bnd_Dbg=1,'VALIDADO','PENDIENTE')   
			when substring(zona,1,2)='BT' then 	
				if (Bnd_Dbt=1,'VALIDADO','PENDIENTE')    	
			when substring(zona,1,2)='TB' then 	
				if (Bnd_Dtb=1,'VALIDADO','PENDIENTE')  
		 end   as bnd_dgems,
		 if (Bnd_RSupervision=1,'MODIFICACION','NA') AS Bnd_RSupervisionEst  ,
		 if (Bnd_RSRegional=1,'MODIFICACION','NA') AS Bnd_RSRegionalEst   ,
		 if (Bnd_RDbg=1,'MODIFICACION','NA') AS Bnd_RDbgEst,
		 if (Bnd_RDbt=1,'MODIFICACION','NA') AS Bnd_RDbtEst,
		  if (Bnd_RDtb=1,'MODIFICACION','NA') AS Bnd_RDtbEst
		 from ".self::$tablename."  where Activo =1 
		 and SUBSTRING(zona,1,2)=\"TB\" and Bnd_RTotal=0 order by zona,Cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());

	}
	public static function getEstatusSregional($region,$subsistema,$origenr,$origend){
		$sql = "select  Id_Disponible,Num_Plaza,APaterno,AMaterno,Nombre,
		zona,Cct,Nombre_Cct,Puesto,Tipo_Puesto,Horas ,PCve_Emp,PCurp,PA_Paterno,PA_Materno,PNombre,
		if (Bnd_Supervision=1,'VALIDADO','PENDIENTE') AS  Bnd_SupervisionEst ,
		if (Bnd_SRegional=1,'VALIDADO','PENDIENTE') AS  Bnd_SRegionalEst ,
		 case 
			when substring(zona,1,2)='BG' then 
				if (Bnd_Dbg=1,'VALIDADO','PENDIENTE')   
			when substring(zona,1,2)='BT' then 	
				if (Bnd_Dbt=1,'VALIDADO','PENDIENTE')    	
			when substring(zona,1,2)='TB' then 	
				if (Bnd_Dtb=1,'VALIDADO','PENDIENTE')  
		 end   as bnd_dgems,
		 if (Bnd_RSupervision=1,'MODIFICACION','NA') AS Bnd_RSupervisionEst  ,
		 if (Bnd_RSRegional=1,'MODIFICACION','NA') AS Bnd_RSRegionalEst   ,
		 if (Bnd_RDbg=1,'MODIFICACION','NA') AS Bnd_RDbgEst,
		 if (Bnd_RDbt=1,'MODIFICACION','NA') AS Bnd_RDbtEst,
		  if (Bnd_RDtb=1,'MODIFICACION','NA') AS Bnd_RDtbEst
		 from ".self::$tablename."  where Activo =1 
		 and   Zona in (select zona from tc_regiones tr
		 where tr.region =\"$region\"  and tr.subsistema =\"$subsistema\") 
		  and (OrigenP=\"CCT\" or OrigenP=\"STB\" or OrigenP=\"SUP\" or OrigenP =\"$origenr\" or OrigenP =\"$origend\") 
		 and Bnd_RTotal=0 order by zona,Cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());

	}




public static function getEstatusSems(){
		$sql = "select Id_Disponible,Num_Plaza ,zona,Cct,Nombre_Cct,Puesto,Tipo_Puesto,Horas ,PCve_Emp,PCurp,
				 Bnd_Dams as Estatus from ".self::$tablename."  where Activo =1 and SUBSTRING(zona,1,2) 
				 in (\"BG\",\"BT\")  and Bnd_Sems =1 
				 and Bnd_RTotal=0 and (OrigenP=\"CCT\" or OrigenP=\"SUP\" or OrigenP =\"DBG\" or OrigenP =\"DBT\" or OrigenP =\"SEMS\" ) and Bnd_RTotal=0
				 order by zona,Cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestasViewData());

	}



/*showestatuspropuestas-view*/
	public static function getByEstatusSems($Id_Disponible){
		$sql = "select * from ".self::$tablename." where  Id_Disponible=$Id_Disponible 
		and activo =1 order by vertiente";
		$query = Executor::doit($sql);
		//echo($sql);
	return Model::one($query[0],new PropuestasViewData());
	} 
	public static function getByEstatusDams($Id_Disponible){
		$sql = "select * from ".self::$tablename." where Id_Disponible=$Id_Disponible";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestasViewData());

	}


public static function getByEstatusDirector($Id_Disponible){
		$sql = "select * from ".self::$tablename." where Id_Disponible=$Id_Disponible  and activo =1";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::one($query[0],new PropuestasViewData());

	} 

	public static function getByEstatusSup($Id_Disponible){
		$sql = "select * from ".self::$tablename." where Id_Disponible=$Id_Disponible  and activo =1";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestasViewData());

	} 

	public static function getByEstatusBg($Id_Disponible){
		$sql = "select * from ".self::$tablename." where  Id_Disponible=$Id_Disponible" ;
		//Core::alert($sql);
		$query = Executor::doit($sql);
		return Model::one($query[0],new PropuestasViewData());
	}

		public static function getByEstatusIdBt($Id_Disponible){
		$sql = "select * from ".self::$tablename." where Id_Disponible=$Id_Disponible";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestasViewData());
	}
	 
 
		public static function getByEstatusIdTb($Id_Disponible){
		$sql = "select * from ".self::$tablename." where Id_Disponible=$Id_Disponible";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestasViewData());
	}

/*count*/
	

	public static function getAllBg(){
		$sql = "select * from ".self::$tablename. 
		" where SUBSTRING(zona,1,2)=\"BG\"  and activo =1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestasViewData());
	}

	public static function getAllBt(){
		$sql = "select * from ".self::$tablename. 
		" where SUBSTRING(zona,1,2)=\"BT\" and activo =1 ";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestasViewData());
	}

public static function getAllTb(){
		$sql = "select curp from ".self::$tablename. 
		" where SUBSTRING(zona,1,2)=\"TB\" and activo =1 ";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestasViewData());
	}

public static function getAllBgDams(){
		$sql = "select * from ".self::$tablename. 
		" where SUBSTRING(zona,1,2)=\"BG\" and Bnd_Dams=1 and activo =1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestasViewData());
	}

	public static function getAllBtDams(){
		$sql = "select * from ".self::$tablename. 
		" where SUBSTRING(zona,1,2)=\"BT\" and Bnd_Dams=1 and activo =1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestasViewData());
	}

public static function getAllTbDams(){
		$sql = "select * from ".self::$tablename. 
		" where SUBSTRING(zona,1,2)=\"TB\" and Bnd_Dams=1 and activo =1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestasViewData());
	}



}
?>
