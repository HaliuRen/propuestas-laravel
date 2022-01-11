<?php
class DocLaboralesData {
	public static $tablename = "tbl_documentos_laborales";


	public function DocLaboralesData(){
			
		 
		 
			 
		}

	public static function DocLaboralesData(){
		$sql = "select *
		 from tc_areas order by descripcion";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new DocLaboralesData());

	}
 
 
 
}
?>