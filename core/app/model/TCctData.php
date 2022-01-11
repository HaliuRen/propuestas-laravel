<?php
class TCctData {
	public static $tablename = "tbl_trans_cct";


	public function TCctData(){
			
			$this  ->Cct="";
			$this  ->Zona="";
			$this  ->Bnd_ResPlantel="";
			 
			 
			 
		}

		public static function getByCct($cct){
		$sql = "select * from tbl_trans_cct  where cct=\"$cct\" and Docente_Tb>0";
		$query = Executor::doit($sql);
		//echo ($sql);
		return Model::one($query[0],new TCctData());

	}

	public static function getByZona($zona){
		$sql = "select * from tbl_trans_cct  where zona=\"$zona\" and Bnd_ResPlantel=1";
		$query = Executor::doit($sql);
		//echo ($sql);
		return Model::many($query[0],new TCctData());

	}

 




	public function updateDocenteTb($cct){
		$sql = "update ".self::$tablename." set
		Docente_Tb =Docente_Tb-1
		where cct=\"$cct\"";
	Executor::doit($sql);
	}

	public function updateRespnsableTb($cct){
		$sql = "update ".self::$tablename." set
		Bnd_ResPlantel=0
		where cct=\"$cct\"";
	Executor::doit($sql);
	}
  
/* OBTENER LOS CCT POR REGIONES O POR ZONAS*/

public static function getSRZona($zona,$sub){
	$sql = " select zona from tc_regiones tr 
	where region =\"$zona\" and subsistema =\"$sub\"";
	$query = Executor::doit($sql);
	//echo ($sql);
	return Model::many($query[0],new TCctData());

}

public static function getSRcct($zona,$sub){
	$sql = " 
	select cct from tc_cct tc 
		where tc.zona_escolar in ( select zona from tc_regiones tr
		where tr.region =\"$zona\"  and tr.subsistema =\"$sub\");";

	$query = Executor::doit($sql);
	//echo ($sql);
	return Model::many($query[0],new TCctData());

}
public static function getBySRCct($zona,$sub){
	$sql = "select cct from tbl_trans_cct tc 
	where tc.zona in ( select zona from tc_regiones tr
	where tr.region =\"$zona\"  and tr.subsistema =\"$sub\") and Bnd_ResPlantel=1
	and cct like '15ETK%' ";
	$query = Executor::doit($sql);
	//echo ($sql);
	return Model::many($query[0],new TCctData());

}
 
}
?>


