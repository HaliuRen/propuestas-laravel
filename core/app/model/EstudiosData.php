<?php
class EstudiosData {
	public static $tablename = "tbl_estudios";


	public function EstudiosData(){
			
			$this  ->curp="";
			$this  ->nivel_estudios="";
			$this  ->desc_nivel="";
			$this  ->escuela="";
			$this  ->cedula="";
			 
			 
			 
		}

		public function add(){
		$sql = "insert into tbl_estudios (curp,nivel_estudios,desc_nivel,escuela,cedula) ";
		$sql .= "values (\"$this->curp\",\"$this->nivel_estudios\",\"$this->desc_nivel\",\"$this->escuela\",\"$this->cedula\")";
		return Executor::doit($sql);
	}

		public static function getByCurp($curp){
		$sql = "select distinct id,curp,nivel_estudios,desc_nivel,escuela,cedula from tbl_estudios  where curp=\"$curp\"";
		$query = Executor::doit($sql);
		//echo ($sql);
		return Model::many($query[0],new EstudiosData());

	}

	public static function getByCurpL($curp){
		$sql = "select distinct curp,nivel_estudios,desc_nivel,escuela,cedula from tbl_estudios  where curp=\"$curp\" and nivel_estudios=\"Licenciatura\"
		limit 1";
		$query = Executor::doit($sql);
		//echo ($sql);
		return Model::one($query[0],new EstudiosData());

	}

		public static function getByCurpP($curp){
		$sql = "select distinct curp,nivel_estudios,desc_nivel,escuela,cedula from tbl_estudios  where curp=\"$curp\" and nivel_estudios=\"Posgrado\"
		limit 1";
		$query = Executor::doit($sql);
		//echo ($sql);
		return Model::one($query[0],new EstudiosData());

	}



public function updateEstudios($id,$nivel,$curp){
		$sql = "update ".self::$tablename." set  
		nivel_estudios=\"$this->nivel_estudios\",
		desc_nivel=\"$this->desc_nivel\",
		escuela=\"$this->escuela\",
		cedula=\"$this->cedula\"
			 
	     where curp=\"$curp\" and nivel_estudios=\"$nivel\" and id=$id";
	   //echo($sql);
		Executor::doit($sql);
	}

public function delEstudios($id){
		$sql = "delete  from ".self::$tablename." where  id=$id";

	   //echo($sql);
		Executor::doit($sql);
	}


}
?>


