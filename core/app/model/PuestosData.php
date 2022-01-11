<?php
class PuestosData {
	public static $tablename = "tc_puestos";


	public function PuestosData(){
			
			 
			$this  ->codigo="";
			$this  ->tipo_puestotipo_puesto="";
			 
		}

	public static function getDire(){
		$sql = "select *
		 from tc_puestos where tipo_puesto like 'DIR%' 
		 order by tipo_puesto";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new PuestosData());

	}

		public static function getHora(){
		$sql = "select *
		 from tc_puestos  where tipo_puesto like 'HOR%' 
		 order by tipo_puesto";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new PuestosData());

	}
 
 	public static function getOrien(){
		$sql = "select *
		 from tc_puestos where tipo_puesto like 'ORIE%' 
		 order by tipo_puesto";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new PuestosData());

	}

		public static function getSec(){
		$sql = "select *
		 from tc_puestos where tipo_puesto like 'SEC%' 
		 order by tipo_puesto";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new PuestosData());

	}
 
 		public static function getSub(){
		$sql = "select *
		 from tc_puestos where tipo_puesto like 'SUBDIR%' 
		 order by tipo_puesto";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new PuestosData());

	}

	public static function getPed(){
		$sql = "select *
		 from tc_puestos where tipo_puesto like 'PEDAG%' 
		 order by tipo_puesto";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new PuestosData());

	}
 
 public static function getPuesto(){
		$sql = "select distinct codigo,tipo_puesto
		 from tc_puestos where codigo not in (\"A0220961\",\"A0220882\")";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PuestosData());

	}
	public static function getPuestoAll(){
		$sql = "select *
		 from tc_puestos ";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new PuestosData());

	}
 
 
}
?>