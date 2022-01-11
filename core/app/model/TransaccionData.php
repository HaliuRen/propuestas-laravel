<?php
class TransaccionData {
	public static $tablename = "tbl_transacciones";




	public function TransaccionData(){
			$this  ->id="";
			$this  ->usuario="";
			$this  ->transaccion="";
			$this  ->cve_emp="";
			$this  ->fecha="";
	}

		public function add($username,$tipo,$emp,$fecha){
				$sql = "insert into ".self::$tablename." (usuario,transaccion,cve_emp,fecha) ";
				$sql .= "value (\"$username\",\"$tipo\",\"$emp\",$fecha)";
				return Executor::doit($sql);
		}
	

}

?>