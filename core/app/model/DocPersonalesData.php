<?php
class DocPersonalesData {
	public static $tablename = "tbl_documentos_laborales";


	public function DocPersonalesData(){
			
		 
		 
			 
		}

	public static function DocPersonalesData(){
		$sql = "select *
		 from tc_areas order by descripcion";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new DocPersonalesData());

	}
 
 
 
}
?>