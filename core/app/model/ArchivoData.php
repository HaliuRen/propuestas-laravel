<?php
class ArchivoData {
	public static $tablename = "archivos";


	public function Archivodata(){
		$this->nombre = "";
		$this->titulo = "";
		$this->contenido = "";
		$this->tipo = "";
		
		
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into archivos (nombre,titulo,contenido,tipo,created_at) ";
		$sql .= "values (\"$this->nombre\",\"$this->titulo\",\"$this->contenido\",\"$this->tipo\",$this->created_at)";
		return Executor::doit($sql);
	}

		public static function getByArchivo($contenido){
		$sql = "select * from ".self::$tablename." where contenido =\"$contenido\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ArchivoData());
	}
// 	public static function delete($id){
// 		$sql = "delete from ".self::$tablename." where id=$id";
// 		Executor::doit($sql);
// 	}
// 	public function del(){
// 		$sql = "delete from ".self::$tablename." where id=$this->id";
// 		Executor::doit($sql);
// 	}

// // partiendo de que ya tenemos creado un objecto UserData previamente utilizamos el contexto
// 	public function update(){
// 		$sql = "update ".self::$tablename." set name=\"$this->name\",lastname=\"$this->lastname\",username=\"$this->username\",email=\"$this->email\",kind=\"$this->kind\",status=\"$this->status\" where id=$this->id";
// 		Executor::doit($sql);
// 	}

// 	public function update_passwd(){
// 		$sql = "update ".self::$tablename." set password=\"$this->password\" where id=$this->id";
// 		Executor::doit($sql);
// 	}

 

// 	public function activate(){
// 		$sql = "update ".self::$tablename." set is_active=1 where id=$this->id";
// 	Executor::doit($sql);
// 	}

// 	public static function getById($id){
// 		$sql = "select * from ".self::$tablename." where id=$id";
// 		$query = Executor::doit($sql);
// 		return Model::one($query[0],new UserData());
// 	}

// 	public static function getByEmail($email){
// 		$sql = "select * from ".self::$tablename." where email=\"$email\"";
// 		$query = Executor::doit($sql);
// 		return Model::one($query[0],new UserData());
// 	}

// 	public static function getByUserName($username){
// 		$sql = "select * from ".self::$tablename." where username=\"$username\"";
// 		$query = Executor::doit($sql);
// 		return Model::one($query[0],new UserData());
// 	}


// 	public static function getLogin($email,$password){
// 		$sql = "select * from ".self::$tablename." where email=\"$email\" and password=\"$password\"";
// 		$query = Executor::doit($sql);
// 		return Model::one($query[0],new UserData());
// 	}


// 	public static function getAll(){
// 		$sql = "select * from ".self::$tablename;
// 		$query = Executor::doit($sql);
// 		return Model::many($query[0],new UserData());

// 	}

// 	public static function getInactives(){
// 		$sql = "select * from ".self::$tablename." where is_active=0";
// 		$query = Executor::doit($sql);
// 		return Model::many($query[0],new UserData());
// 	}

// 	public static function getActives(){
// 		$sql = "select * from ".self::$tablename." where is_active=1";
// 		$query = Executor::doit($sql);
// 		return Model::many($query[0],new UserData());
// 	}

// 	public static function getLike($q){
// 		$sql = "select * from ".self::$tablename." where name like '%$q%'";
// 		$query = Executor::doit($sql);
// 		return Model::many($query[0],new UserData());
// 	}
 



}

?>
