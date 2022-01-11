<?php
class MotivosData {
	public static $tablename = "tc_motivos";


	public function MotivosData(){
			
			$this  ->descripcion="";
			$this  ->id="";
			$this  ->Tipo_Vacante="";
			 
		}

	public static function getMotivo(){
		$sql = "select *
		 from tc_motivos order by descripcion";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new MotivosData());

	}
 
 public static function getVacante(){
		$sql = "select distinct tipo_vacante
		 from tc_motivos ";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new MotivosData());

	}
 
 
}
?>