<?php
class DocProfesionalesData {
	public static $tablename = "tbl_documentos_laborales";


	public function DocProfesionalesData(){
			
		 
		 
			 
		}

	public static function DocProfesionalesData(){
		$sql = "select *
		 from tc_areas order by descripcion";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new DocProfesionalesData());

	}
 
 
 
}
?>