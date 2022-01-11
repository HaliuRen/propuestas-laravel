<?php
class DisponibleData {
	public static $tablename = "tbl_plazas_disponibles";

	public function DisponibleData(){
			$this  ->id="";
			$this  ->Num_Plaza="";
			$this  ->Cve_Emp="";
			$this  ->Rfc="";
			$this  ->Curp="";
			$this  ->APaterno="";
			$this  ->AMaterno="";
			$this  ->Nombre="";
			$this  ->Municipio="";
			 
			$this  ->Cct="";
			$this  ->Zona="";
			$this  ->Motivo="";
			$this  ->Puesto="";
			$this  ->Horas="";
			$this  ->Tipo="";
			$this  ->Area="";
			$this  ->bnd_validad="";
			$this  ->Bnd_Propuesta="";
			$this  ->Fecha_Creacion="NOW()";
			$this  ->Bnd_OSems="";

		}

  

		public function add(){
				$sql = "insert into tbl_plazas_disponibles (Num_Plaza, Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre,Municipio,Cct,Zona, Motivo,Tipo,Puesto,bnd_validad,Bnd_OSems,Origen,Fecha_Creacion) ";
				$sql .= "values (\"$this->Num_Plaza\",\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",
				\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio\",\"$this->Cct\",\"$this->Zona\",\"$this->Motivo\",\"$this->Tipo\",\"$this->Puesto\",$this->bnd_validad,0,\"CCT\",$this->Fecha_Creacion)";
				//Core::alert($sql);
				return Executor::doit($sql);
				
		}

public function add2(){
				$sql = "insert into tbl_plazas_disponibles (Num_Plaza, Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre,Municipio, Cct,Zona, Motivo,Puesto,Horas,Tipo,Area,bnd_validad,Bnd_OSems,Origen,Fecha_Creacion) ";
				$sql .= " values (\"$this->Num_Plaza\",\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",
				\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio\",
				\"$this->Cct\",\"$this->Zona\",
				\"$this->Motivo\",\"$this->Puesto\",\"$this->Horas\",\"$this->Tipo\",\"$this->Area\",
				$this->bnd_validad,0,\"CCT\",$this->Fecha_Creacion)";
				 //echo $sql;
				return Executor::doit($sql);
		}

public function addStb(){
				$sql = "insert into tbl_plazas_disponibles (Num_Plaza, Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre,Municipio,Cct,Zona, Motivo,Puesto,Horas,Tipo,bnd_validad,Bnd_OSems,Origen,Fecha_Creacion,Area) values (\"$this->Num_Plaza\",\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",
				\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio\",
				\"$this->Cct\",\"$this->Zona\",\"$this->Motivo\",\"$this->Puesto\",\"$this->Horas\",\"$this->Tipo\",$this->bnd_validad,0,\"STB\",$this->Fecha_Creacion,\"$this->Area\")";
				//Core::alert($sql);
				return Executor::doit($sql);
		}

		


		public function addSup(){
				$sql = "insert into tbl_plazas_disponibles (Num_Plaza, Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre,Municipio,  Cct,Zona, Motivo,Puesto,Tipo,bnd_validad,Bnd_OSems,Origen,Fecha_Creacion) ";
				$sql .= "values (\"$this->Num_Plaza\",\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",
				\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio\",
				\"$this->Cct\",\"$this->Zona\",\"$this->Motivo\",\"$this->Puesto\",\"$this->Tipo\",$this->bnd_validad,0,\"SUP\",$this->Fecha_Creacion)";
				//echo($sql);
				return Executor::doit($sql);
		}

			public function addDbg(){
				$sql = "insert into tbl_plazas_disponibles (Num_Plaza, Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre,Municipio,  Cct,Zona, Motivo,Puesto,Tipo,bnd_validad,Bnd_OSems,Origen,Fecha_Creacion) ";
				$sql .= "values (\"$this->Num_Plaza\",\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",
				\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio\",
				\"$this->Cct\",\"$this->Zona\",\"$this->Motivo\",\"$this->Puesto\",\"$this->Tipo\",$this->bnd_validad,0,\"DBG\",$this->Fecha_Creacion)";
				//Core::alert($sql);
				return Executor::doit($sql);
		}

		public function addDbt(){
				$sql = "insert into tbl_plazas_disponibles (Num_Plaza, Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre,Municipio,  Cct,Zona, Motivo,Puesto,Tipo,bnd_validad,Bnd_OSems,Origen,Fecha_Creacion) ";
				$sql .= "values (\"$this->Num_Plaza\",\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",
				\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio\",
				\"$this->Cct\",\"$this->Zona\",\"$this->Motivo\",\"$this->Puesto\",\"$this->Tipo\",$this->bnd_validad,0,\"DBT\",$this->Fecha_Creacion)";
				//Core::alert($sql);
				return Executor::doit($sql);
		}

public function addDtb(){
				$sql = "insert into tbl_plazas_disponibles (Num_Plaza, Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre,Municipio,  Cct,Zona, Motivo,Puesto,Horas,Tipo,bnd_validad,Bnd_OSems,Origen,Fecha_Creacion,Area) ";
				$sql .= "values (\"$this->Num_Plaza\",\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",
				\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio\",
				\"$this->Cct\",\"$this->Zona\",\"$this->Motivo\",\"$this->Puesto\",$this->Horas,\"$this->Tipo\",$this->bnd_validad,0,\"DTB\",$this->Fecha_Creacion,,\"$this->Area\")";
				//Core::alert($sql);
				return Executor::doit($sql);
		}
		public function addSRBg(){
			$sql = "insert into tbl_plazas_disponibles (Num_Plaza, Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre,Municipio,  Cct,Zona, Motivo,Puesto,Horas,Tipo,bnd_validad,Bnd_OSems,Origen,Fecha_Creacion,Area) ";
			$sql .= "values (\"$this->Num_Plaza\",\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",
			\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio\",
			\"$this->Cct\",\"$this->Zona\",\"$this->Motivo\",\"$this->Puesto\",$this->Horas,\"$this->Tipo\",$this->bnd_validad,0,\"SRBG\",$this->Fecha_Creacion,,\"$this->Area\")";
			//Core::alert($sql);
			return Executor::doit($sql);
	}
		public function addSRBt(){
			$sql = "insert into tbl_plazas_disponibles (Num_Plaza, Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre,Municipio,  Cct,Zona, Motivo,Puesto,Horas,Tipo,bnd_validad,Bnd_OSems,Origen,Fecha_Creacion,Area) ";
			$sql .= "values (\"$this->Num_Plaza\",\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",
			\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio\",
			\"$this->Cct\",\"$this->Zona\",\"$this->Motivo\",\"$this->Puesto\",$this->Horas,\"$this->Tipo\",$this->bnd_validad,0,\"SRBT\",$this->Fecha_Creacion,,\"$this->Area\")";
			//Core::alert($sql);
			return Executor::doit($sql);
		}
		public function addSRtb(){
			$sql = "insert into tbl_plazas_disponibles (Num_Plaza, Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre,Municipio,Cct,Zona, Motivo,Puesto,Horas,Tipo,bnd_validad,Bnd_OSems,Origen,Fecha_Creacion,Area) values (\"$this->Num_Plaza\",\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",
			\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio\",
			\"$this->Cct\",\"$this->Zona\",\"$this->Motivo\",\"$this->Puesto\",\"$this->Horas\",\"$this->Tipo\",$this->bnd_validad,0,\"SRTB\",$this->Fecha_Creacion,\"$this->Area\")";
			//Core::alert($sql);
			return Executor::doit($sql);
		}

		public function addSems(){
				$sql = "insert into tbl_plazas_disponibles (Num_Plaza, Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre,Municipio,  Cct,Zona, Motivo,Puesto,Tipo,bnd_validad,Bnd_OSems,Origen,Fecha_Creacion) ";
 $sql .= "values (\"$this->Num_Plaza\",\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio\",
	\"$this->Cct\",\"$this->Zona\",\"$this->Motivo\",\"$this->Puesto\",\"$this->Tipo\",$this->bnd_validad,1,\"SEMS\",$this->Fecha_Creacion)";
				//echo($sql);
				return Executor::doit($sql);
		}


public function update($id){
		$sql = "update ".self::$tablename." set
		curp=\"$this->curp\",
		rfc=\"$this->rfc\" 
		where cve_emp=$id";
	Executor::doit($sql);
	}




 

	public static function getAll(){
		$sql = "select id,cve_emp,nombre,curp,rfc,Num_Plaza from tbl_plazas_disponibles" ;
		$query = Executor::doit($sql);
		return Model::many($query[0],new DisponibleData());
	}

		public static function getByCct($cct){
		$sql = "select tpd.Id,Num_Plaza,Cct,Nombre,Puesto,tipo,tp.tipo_puesto 
				from ".self::$tablename." tpd ,tc_puestos tp 
		where Cct=\"$cct\" and Bnd_Propuesta=0 and Bnd_OSems=0 and tpd.tipo =tp.codigo 
		and Origen=\"CCT\"";
		$query = Executor::doit($sql);
//	 Core::alert($sql);
		return Model::many($query[0],new DisponibleData());
	}

public static function getByCctTb($cct){
		$sql = "select tpd.Id,Num_Plaza,Cct,Nombre,Puesto,tipo,tp.tipo_puesto,horas,Area 
				from ".self::$tablename." tpd ,tc_puestos tp 
		where Cct=\"$cct\" and Bnd_Propuesta=0 and Bnd_OSems=0 and tpd.tipo =tp.codigo and Origen=\"CCT\"";
		$query = Executor::doit($sql);
//	 Core::alert($sql);
		return Model::many($query[0],new DisponibleData());
	}



	public static function getByZona($zona){
		$sql = "select tpd.Id,Num_Plaza,Cct,Nombre,Puesto,tipo,tp.tipo_puesto 
				from ".self::$tablename." tpd ,tc_puestos tp 
		where Zona=\"$zona\" 
		and Bnd_Propuesta=0 and Bnd_OSems=0 and tpd.tipo =tp.codigo and Origen in (\"SUP\",\"CCT\") ";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new DisponibleData());
	}


	public static function getByZonaTb($zona){
		$sql = "select tpd.Id,Num_Plaza,Cct,Nombre,Puesto,tipo,tp.tipo_puesto,horas,Area 
				from ".self::$tablename." tpd ,tc_puestos tp 
		where Zona=\"$zona\" 
		and Bnd_Propuesta=0  
		and tpd.tipo =tp.codigo and Origen in(\"STB\",\"CCT\")";
		$query = Executor::doit($sql);
//	 Core::alert($sql);
		return Model::many($query[0],new DisponibleData());
	}

		public static function getByDbg(){
		$sql = "select tpd.Id,Num_Plaza,Cct,Nombre,Puesto,tipo,tp.tipo_puesto 
				from ".self::$tablename." tpd ,tc_puestos tp 
		where substring(cct,1,5) in (\"15EBH\",\"15EBP\",\"15FMS\")  and Bnd_OSems=0 and Bnd_Propuesta=0 and tpd.tipo =tp.codigo and substring(zona,1,2) in (\"BG\") and  Origen in(\"DBG\",\"SUP\",\"CCT\") ";
		$query = Executor::doit($sql);
	//echo($sql);
		return Model::many($query[0],new DisponibleData());
	}

public static function getByDbt(){
		$sql = "select tpd.Id,Num_Plaza,Cct,Nombre,Puesto,tipo,tp.tipo_puesto 
				from ".self::$tablename." tpd ,tc_puestos tp 
		where substring(cct,1,5) in (\"15ECT\",\"15FMS\")  and substring(zona,1,2) in (\"BT\") and Bnd_OSems=0 and Bnd_Propuesta=0 and tpd.tipo =tp.codigo and Origen in(\"DBT\",
		\"SUP\",\"CCT\") ";
		$query = Executor::doit($sql);
//	 Core::alert($sql);
		return Model::many($query[0],new DisponibleData());
	}

	public static function getByDtb(){
		$sql = "select tpd.Id,Num_Plaza,Cct,Nombre,Puesto,tipo,tp.tipo_puesto,horas,Area
				from ".self::$tablename." tpd ,tc_puestos tp 
		where substring(cct,1,5) in (\"15ETK\")  and Bnd_OSems=0 and Bnd_Propuesta=0 and tpd.tipo =tp.codigo and Origen in(\"DTB\",\"STB\",\"CCT\")";
		$query = Executor::doit($sql);
	// echo($sql);
		return Model::many($query[0],new DisponibleData());
	}

		public static function getBySems(){
		$sql = "select tpd.Id,Num_Plaza,Cct,Nombre,Puesto,tipo,tp.tipo_puesto 
				from ".self::$tablename." tpd ,tc_puestos tp 
		where Bnd_Propuesta=0 and tpd.tipo =tp.codigo  and (Bnd_OSems=1 or Bnd_OSems=0)
		and Origen in(\"DBG\",\"DTB\",\"SUP\",\"CCT\",\"SEMS\")";
		$query = Executor::doit($sql);
//	 Core::alert($sql);
		return Model::many($query[0],new DisponibleData());
	}

	public static function getBySRegional($zona,$subsistema,$origen,$origen2,$origen3){
		$sql = "select tpd.Id,Num_Plaza,Cct,Nombre,Puesto,tipo,tp.tipo_puesto,horas,Area 
		from  tbl_plazas_disponibles tpd ,tc_puestos tp 
			where Zona in (select zona from tc_regiones tr
			where tr.region =\"$zona\"  and tr.subsistema =\"$subsistema\" ) 
			and Bnd_Propuesta=0  
			and tpd.tipo =tp.codigo and Origen in(\"$origen\",\"$origen2\",\"$origen3\");";
		$query = Executor::doit($sql);
	 //echo($sql);
		return Model::many($query[0],new DisponibleData());
	}

	public static function getByPlaza($plaza){
		$sql = "select * from ".self::$tablename." where Num_Plaza=\"$plaza\"";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new DisponibleData());
	}

public static function getByCsp($csp){
		$sql = "select * from ".self::$tablename." where Cve_Emp=\"$csp\"";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new DisponibleData());
	}




		public static function getByPlazaD($id){
		$sql = "select * from ".self::$tablename." where id=\"$id\"
		and Bnd_Propuesta=0";
		$query = Executor::doit($sql);
	 //echo($sql);
		return Model::one($query[0],new DisponibleData());
	}






	public static function getByEmp($cve_emp){
		$sql = "select * from ".self::$tablename." where cve_emp=$cve_emp";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DisponibleData());
	}

	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombre like '%$q%'
		or cve_emp like '%$q%' or curp like '%$q%' or rfc like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DisponibleData());
	}

	public function update_Disponible($idP){
		$sql = "update ".self::$tablename." set Bnd_propuesta=1 where id=$idP";
		//Core::alert($sql);
		Executor::doit($sql);
	}

/*Rechazo final*/
	public function updateRechazoFD($id){
		$sql = "update ".self::$tablename." set
		Bnd_Propuesta=0
		where Id=$id";
	 
	Executor::doit($sql);
	}

public function updateSems($id){
		$sql = "update ".self::$tablename." set
		 Bnd_OSems=0
		where id=$id";
	 
	Executor::doit($sql);
	}

	public static function getByIdDisponible($Id_Disponible){
		$sql = "select 
		tpd.Id ,
		Num_Plaza ,
		Cve_Emp ,
		Rfc ,
		Curp ,
		APaterno ,
		AMaterno ,
		Nombre ,
		Municipio ,
		Puesto ,
		Horas ,
		Motivo ,
		tm.descripcion as desc_motivo,
		Cct ,
		Area,
		Zona		
		
		 from tbl_plazas_disponibles tpd, tc_motivos tm  where tpd.Motivo =tm.id
 and tpd.Id=$Id_Disponible";
		$query = Executor::doit($sql);
		//Core::log($sql);
		//echo($sql);
		return Model::one($query[0],new DisponibleData());
	}

public function updateDisponible($id){
		$sql = "update ".self::$tablename." set
		Cve_Emp=\"$this->Cve_Emp\",
		Num_Plaza=\"$this->Num_Plaza\",
		APaterno=\"$this->APaterno\", 
		AMaterno=\"$this->AMaterno\",
		Nombre=\"$this->Nombre\",  
		Area=\"$this->Area\",
		Motivo=\"$this->Motivo\",
		Curp=\"$this->Curp\",
		Rfc=\"$this->Rfc\",
		Municipio=\"$this->Municipio\"
		where id=$id";
		//echo ($sql);
	Executor::doit($sql);
	}


public function updateDisponible2($id){
		$sql = "update ".self::$tablename." set
		Cve_Emp=\"$this->Cve_Emp\",
		Num_Plaza=\"$this->Num_Plaza\",
		APaterno=\"$this->APaterno\", 
		AMaterno=\"$this->AMaterno\",
		Nombre=\"$this->Nombre\",  
		Motivo=\"$this->Motivo\",
		Curp=\"$this->Curp\",
		Rfc=\"$this->Rfc\",
		Municipio=\"$this->Municipio\"
		where id=$id";
		//echo $sql;
	Executor::doit($sql);
	}

	public static function getAllTb(){
		$sql = "select * from ".self::$tablename. 
		" where SUBSTRING(zona,1,2)=\"TB\" ";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DisponibleData());
	}

	public static function getAllBg(){
		$sql = "select * from ".self::$tablename. 
		" where SUBSTRING(zona,1,2)=\"BG\" ";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DisponibleData());
	}

	public static function getAllBt(){
		$sql = "select * from ".self::$tablename. 
		" where SUBSTRING(zona,1,2)=\"BT\" ";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DisponibleData());
	}

public static function getLikeP($q){
		$sql = "select tpd.Id,Num_Plaza ,Cve_Emp ,Curp ,APaterno ,AMaterno ,Nombre ,tpd.Cct ,tc.nombre_cct ,Zona, tp.tipo_puesto ,tm.descripcion  as Motivo, tpd.Bnd_Propuesta,tpd.Origen from ".self::$tablename." tpd, tc_puestos tp , tc_motivos tm , tc_cct tc 
		where tpd.Tipo =tp.codigo and tpd.Motivo =tm.id  and tpd.Cct =tc.cct 
		and (CONCAT(APaterno,\" \",AMaterno,\" \",Nombre) like '%$q%'
		or cve_emp like '%$q%' or Curp like '%$q%' or Num_Plaza like '%$q%')";
		$query = Executor::doit($sql);
		//echo ($sql);
		return Model::many($query[0],new DisponibleData());
	}

}

?>
