<?php
class DocenteData {
	public static $tablename = "tbl_docentes";




	public function DocenteData(){
			$this  ->id_docente="";
			$this  ->cve_emp="";
			$this  ->nombre="";
			$this  ->curp="";
			$this  ->rfc="";

		}

		/*public function add(){
				$sql = "insert into tbl_docentes (cve_emp,nombre,curp,rfc,
				doc_propuesta,doc_nombramiento,doc_acnac,doc_curp,doc_rfc,doc_cm,doc_cnp,doc_cd,doc_ideo,doc_csmn,doc_titulo,doc_cedula) ";
				$sql .= "value ($this->cve_emp,\"$this->nombre\",\"$this->curp\",\"$this->rfc\",
				\"$this->doc_propuesta\",\"$this->doc_nombramiento\",\"$this->doc_acnac\",\"$this->doc_curp\",
				\"$this->doc_rfc\",\"$this->doc_cm\",\"$this->doc_cnp\",\"$this->doc_cd\",\"$this->doc_ideo\",
				\"$this->doc_csmn\",\"$this->doc_titulo\",\"$this->doc_cedula\"	)";

				return Executor::doit($sql);
		}*/

public function update($id){
		$sql = "update ".self::$tablename." set
		curp=\"$this->curp\",
		rfc=\"$this->rfc\" 
		where cve_emp=$id";
	Executor::doit($sql);
	}


/*

	public function add2(){
		$sql = "insert into tbl_docentes (cve_emp,nombre,curp,rfc) ";
		$sql .= "value (\"$this->image\",\"$this->name\",\"$this->lastname\",\"$this->email\",\"$this->username\",\"$this->password\",$this->kind,$this->created_at)";
		return Executor::doit($sql);
	}

	public static function delete($cve_emp){
		$sql = "delete from ".self::$tablename." where cve_emp=$this->cve_emp";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id_docente=$this->id_docente";
		Executor::doit($sql);
	}
*/
// partiendo de que ya tenemos creado un objecto DocenteData previamente utilizamos el contexto


	public static function getAll(){
		$sql = "select id_docente,cve_emp,nombre,curp,rfc from ".self::$tablename." limit 100";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DocenteData());

	}
	public static function getById($id_docente){
		$sql = "select * from ".self::$tablename." where cve_emp=$id_docente";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DocenteData());
	}


	public static function getByEmp($cve_emp){
		$sql = "select * from ".self::$tablename." where cve_emp=$cve_emp";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DocenteData());
	}

	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombre like '%$q%'
		or cve_emp like '%$q%' or curp like '%$q%' or rfc like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DocenteData());
	}


}

?>
