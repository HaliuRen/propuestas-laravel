<?php
class CctData {
	public static $tablename = "tc_cct";


	public function CctData(){
			
			$this  ->cct="";
			$this  ->nombre_cct="";
			$this  ->zona_escolar="";
			$this  ->localidad="";
			 
			 
		}

	public static function getZona(){
		$sql = "select distinct zona_escolar from tc_cct
				where bnd_user =1  order by zona_escolar";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new CctData());

	}

	public static function getByZona($zona){
		$sql = "select distinct cct from tc_cct  where zona_escolar=\"$zona\" order by cct";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new CctData());

	}

	public static function getSub(){
		$sql = "select distinct vertiente from tc_cct order by vertiente";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new CctData());

	}
 

 public static function getSubSistema(){
		$sql = "select  distinct cve_subsistema,vertiente 
				from tc_cct
				where bnd_user =1   and SUBSTRING(zona_escolar,1,2) in (\"BG\",\"BT\")";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new CctData());

	}


	 public static function getOs(){
		$sql = "select   distinct orga_soci
				from tc_cct";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new CctData());

	}
 
 
   
}
?>