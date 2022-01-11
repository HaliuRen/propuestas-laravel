<?php
class EstadosViewData {
	public static $tablename = "vw_estados";


	public function EstadosViewData(){
			
			$this  ->nombre_entidad="";
			$this  ->nombre_municipio="";
			$this  ->nombre_localidad="";
			 
			 
			 
		}

	public static function getAll(){
		$sql = "select * from vw_estados  order by nombre_entidad";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new EstadosViewData());

	}

	public static function getEntidad(){
		$sql = "select DISTINCT  nombre_entidad  from vw_estados  order by nombre_entidad";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new EstadosViewData());

	}

	 
 
}
?>