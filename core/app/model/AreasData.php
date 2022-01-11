<?php
class AreasData {
	public static $tablename = "tc_areas";


	public function AreasData(){
			
		 
		 
			 
		}

	public static function getArea(){
		$sql = "select *
		 from tc_areas order by descripcion";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new AreasData());

	}
 
 
 
}
?>