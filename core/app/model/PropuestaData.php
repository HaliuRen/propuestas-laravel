<?php
class PropuestaData {
	public static $tablename = "tbl_propuestas";


  
 
	public function __construct(){
			$this  ->id="";
			$this  ->Cve_Emp="";
			$this  ->Rfc="";
			$this  ->Curp="";
			$this  ->APaterno="";
			$this  ->AMaterno="";
			$this  ->Nombre="";
			$this  ->Municipio_Residencia="";
		 
			$this  ->Tiempo_Servicio="";
			$this  ->Telefono="";
			$this  ->Email="";
			$this  ->Sexo="";
			$this  ->Estado_Civil="";
			$this  ->Entidad_Nacimiento="";
			$this  ->Municipio_Nacimiento="";
			$this  ->Domicilio="";
			$this  ->Colonia="";
			$this  ->Disponible_Id="";
			$this  ->CP="";
			 
			$this  ->Fec_Inicio="";
			$this  ->Fec_Termino="";
			$this  ->Bnd_NI="";
			$this  ->Bnd_Supervision="";
			$this  ->Bnd_Dgem="";
			$this  ->Bnd_Sems="";
			$this  ->Bnd_Dbg=""; 
			$this  ->Bnd_Dbt="";
			$this  ->Bnd_Dtb="";
			$this  ->Activo="";
			$this  ->Bnd_RSupervision="";
			$this  ->Bnd_RDgem="";
			$this  ->Bnd_RSems="";
			$this  ->Bnd_RDbg=""; 
			$this  ->Bnd_RDbt="";
			$this  ->Bnd_Director="";
			 
			$this  ->A_FrenteGrupo=""; 
			$this  ->A_Puesto="";
			$this  ->D_Ingles=""; 
		 	$this  ->Area_D="";
			$this  ->O_Labora="";
			$this  ->Horas_OLabora="";
 			$this  ->Fecha_CreacionP = "NOW()";
		}
		public function add(){
			$sql = "insert into tbl_propuestas ( Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre, Municipio_Residencia,  Tiempo_Servicio,A_Puesto, Telefono, Email, Sexo, Estado_Civil, Entidad_Nacimiento, Municipio_Nacimiento, Domicilio, Colonia,Disponible_Id,CP,Fec_Inicio,Fec_Termino,Bnd_NI,Bnd_Director ,Fecha_CreacionP,Origen)";
		 
			$sql .= " values(\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio_Residencia\",$this->Tiempo_Servicio,$this->A_Puesto,\"$this->Telefono\",\"$this->Email\",\"$this->Sexo\",\"$this->Estado_Civil\",\"$this->Entidad_Nacimiento\",\"$this->Municipio_Nacimiento\",\"$this->Domicilio\",\"$this->Colonia\",$this->Disponible_Id,$this->CP,\"$this->Fec_Inicio\",\"$this->Fec_Termino\",$this->Bnd_NI,1,$this->Fecha_CreacionP,\"CCT\")";

				//echo($sql);
				//,\'$this->Fec_Inicio\',\'$this->Fec_Termino\);		
				return Executor::doit($sql);
			
		} 

		public function add2(){
			$sql = "insert into tbl_propuestas ( Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre, Municipio_Residencia,  Tiempo_Servicio, Telefono, Email, Sexo, Estado_Civil, Entidad_Nacimiento, Municipio_Nacimiento, Domicilio, Colonia,Disponible_Id, CP,Fec_Inicio,Fec_Termino,Bnd_NI,A_FrenteGrupo,D_Ingles,O_Labora,Horas_OLabora,Area_D,Fecha_CreacionP,Origen,Bnd_Director)";
		 $sql .= " values(\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio_Residencia\",\"$this->Tiempo_Servicio\",\"$this->Telefono\",\"$this->Email\",\"$this->Sexo\",\"$this->Estado_Civil\",\"$this->Entidad_Nacimiento\",\"$this->Municipio_Nacimiento\",\"$this->Domicilio\",\"$this->Colonia\",$this->Disponible_Id,$this->CP,\"$this->Fec_Inicio\",\"$this->Fec_Termino\",$this->Bnd_NI,\"$this->A_FrenteGrupo\",\"$this->D_Ingles\",\"$this->O_Labora\",\"$this->Horas_OLabora\",\"$this->Area_D\",$this->Fecha_CreacionP,\"CCT\",1)";

				//echo($sql);
				//,\'$this->Fec_Inicio\',\'$this->Fec_Termino\);		
				return Executor::doit($sql);
			
		}
		
		public function addStb(){
			$sql = "insert into tbl_propuestas ( Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre, Municipio_Residencia,  Tiempo_Servicio, Telefono, Email, Sexo, Estado_Civil, Entidad_Nacimiento, Municipio_Nacimiento, Domicilio, Colonia,Disponible_Id, CP,Fec_Inicio,Fec_Termino,Bnd_NI,A_FrenteGrupo,D_Ingles,O_Labora,Horas_OLabora,Area_D,Bnd_Supervision,Fecha_CreacionP,Origen)";
		 
			$sql .= " values(\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio_Residencia\",\"$this->Tiempo_Servicio\",\"$this->Telefono\",\"$this->Email\",\"$this->Sexo\",\"$this->Estado_Civil\",\"$this->Entidad_Nacimiento\",\"$this->Municipio_Nacimiento\",\"$this->Domicilio\",\"$this->Colonia\",$this->Disponible_Id,$this->CP,\"$this->Fec_Inicio\",\"$this->Fec_Termino\",$this->Bnd_NI,\"$this->A_FrenteGrupo\",\"$this->D_Ingles\",\"$this->O_Labora\",\"$this->Area_D\",\"$this->Horas_OLabora\",1,$this->Fecha_CreacionP,\"STB\")";

				//echo $sql;
				//,\'$this->Fec_Inicio\',\'$this->Fec_Termino\);		
				return Executor::doit($sql);
		} 
		public function addDtb(){
			$sql = "insert into tbl_propuestas ( Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre, Municipio_Residencia,  Tiempo_Servicio, Telefono, Email, Sexo, Estado_Civil, Entidad_Nacimiento, Municipio_Nacimiento, Domicilio, Colonia,Disponible_Id, CP,Fec_Inicio,Fec_Termino,Bnd_NI,A_FrenteGrupo,D_Ingles,O_Labora,Horas_OLabora,Area_D,Bnd_Dtb,Bnd_Sems,Bnd_Supervision,Fecha_CreacionP,Origen)";
		 
			$sql .= " values(\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio_Residencia\",\"$this->Tiempo_Servicio\",\"$this->Telefono\",\"$this->Email\",\"$this->Sexo\",\"$this->Estado_Civil\",\"$this->Entidad_Nacimiento\",\"$this->Municipio_Nacimiento\",\"$this->Domicilio\",\"$this->Colonia\",$this->Disponible_Id,$this->CP,\"$this->Fec_Inicio\",\"$this->Fec_Termino\",$this->Bnd_NI,\"$this->A_FrenteGrupo\",\"$this->D_Ingles\",\"$this->O_Labora\",\"$this->Horas_OLabora\",\"$this->Area_D\",1,1,1,$this->Fecha_CreacionP,\"DTB\")";
			//echo $sql;
				//Core::alert($sql);
				//,\'$this->Fec_Inicio\',\'$this->Fec_Termino\);		
				return Executor::doit($sql);
			
		}
		public function addSRegionalTB($origen){
			$sql = "insert into tbl_propuestas ( Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre, Municipio_Residencia,  Tiempo_Servicio, Telefono, Email, Sexo, Estado_Civil, Entidad_Nacimiento, Municipio_Nacimiento, Domicilio, Colonia,Disponible_Id, CP,Fec_Inicio,Fec_Termino,Bnd_NI,A_FrenteGrupo,D_Ingles,O_Labora,Horas_OLabora,Area_D,Bnd_Supervision,Bnd_SRegional,Fecha_CreacionP,Origen)";
		 
			$sql .= " values(\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio_Residencia\",\"$this->Tiempo_Servicio\",\"$this->Telefono\",\"$this->Email\",\"$this->Sexo\",\"$this->Estado_Civil\",\"$this->Entidad_Nacimiento\",\"$this->Municipio_Nacimiento\",\"$this->Domicilio\",\"$this->Colonia\",$this->Disponible_Id,$this->CP,\"$this->Fec_Inicio\",\"$this->Fec_Termino\",$this->Bnd_NI,\"$this->A_FrenteGrupo\",\"$this->D_Ingles\",\"$this->O_Labora\",\"$this->Horas_OLabora\",\"$this->Area_D\",1,1,$this->Fecha_CreacionP,\"$origen\")";
			echo $sql;
				//Core::alert($sql);
				//,\'$this->Fec_Inicio\',\'$this->Fec_Termino\);		
				return Executor::doit($sql);
			
		}

		public function addSup(){
			$sql = "insert into tbl_propuestas 
			(Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre, Municipio_Residencia,  
			Tiempo_Servicio,A_Puesto, Telefono, Email, Sexo, Estado_Civil, 
			Entidad_Nacimiento, Municipio_Nacimiento, Domicilio, Colonia,Disponible_Id, 
			CP,Fec_Inicio,Fec_Termino,Bnd_NI,Bnd_Supervision,Fecha_CreacionP,Origen)";
		 
			$sql .= " values(\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio_Residencia\",
			$this->Tiempo_Servicio,$this->A_Puesto,\"$this->Telefono\",\"$this->Email\",\"$this->Sexo\",\"$this->Estado_Civil\",
			\"$this->Entidad_Nacimiento\",\"$this->Municipio_Nacimiento\",\"$this->Domicilio\",\"$this->Colonia\",$this->Disponible_Id,
			$this->CP,\"$this->Fec_Inicio\",\"$this->Fec_Termino\",$this->Bnd_NI,1,$this->Fecha_CreacionP,\"SUP\")";
				//Core::alert($sql);
				//,\'$this->Fec_Inicio\',\'$this->Fec_Termino\);		
				return Executor::doit($sql);
		}
	
		public function addSRegional($origen){
			$sql = "insert into tbl_propuestas 
			(Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre, Municipio_Residencia,  
			Tiempo_Servicio,A_Puesto, Telefono, Email, Sexo, Estado_Civil, 
			Entidad_Nacimiento, Municipio_Nacimiento, Domicilio, Colonia,Disponible_Id, 
			CP,Fec_Inicio,Fec_Termino,Bnd_NI,Bnd_Supervision,Bnd_SRegional,Fecha_CreacionP,Origen)";
		 
			$sql .= " values(\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio_Residencia\",
			$this->Tiempo_Servicio,$this->A_Puesto,\"$this->Telefono\",\"$this->Email\",\"$this->Sexo\",\"$this->Estado_Civil\",
			\"$this->Entidad_Nacimiento\",\"$this->Municipio_Nacimiento\",\"$this->Domicilio\",\"$this->Colonia\",$this->Disponible_Id,
			$this->CP,\"$this->Fec_Inicio\",\"$this->Fec_Termino\",$this->Bnd_NI,1,1,$this->Fecha_CreacionP,\"$origen\")";
				//echo($sql);
				//,\'$this->Fec_Inicio\',\'$this->Fec_Termino\);		
				return Executor::doit($sql);
		}

		public function addSems(){
			$sql = "insert into tbl_propuestas ( Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre, Municipio_Residencia,  Tiempo_Servicio,A_Puesto,Telefono, Email, Sexo, Estado_Civil, Entidad_Nacimiento, Municipio_Nacimiento, Domicilio, Colonia,Disponible_Id, CP,Fec_Inicio,Fec_Termino,Bnd_NI,Bnd_Supervision,Bnd_SRegional,Bnd_Dbg,Bnd_Dbt,Bnd_Sems,Fecha_CreacionP,Origen)";
		 
			$sql .= " values(\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio_Residencia\",$this->Tiempo_Servicio,$this->A_Puesto,\"$this->Telefono\",\"$this->Email\",\"$this->Sexo\",\"$this->Estado_Civil\",\"$this->Entidad_Nacimiento\",\"$this->Municipio_Nacimiento\",\"$this->Domicilio\",\"$this->Colonia\",$this->Disponible_Id,$this->CP,\"$this->Fec_Inicio\",\"$this->Fec_Termino\",$this->Bnd_NI,1,1,1,1,1,$this->Fecha_CreacionP,\"SEMS\")";

				//Core::alert($sql);
				//,\'$this->Fec_Inicio\',\'$this->Fec_Termino\);		
				return Executor::doit($sql);
		}
		public function addDbg(){
			$sql = "insert into tbl_propuestas ( Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre, Municipio_Residencia,  Tiempo_Servicio,A_Puesto, Telefono, Email, Sexo, Estado_Civil, Entidad_Nacimiento, Municipio_Nacimiento, Domicilio, Colonia,Disponible_Id, CP,Fec_Inicio,Fec_Termino,Bnd_NI,Bnd_Dbg,Bnd_Supervision,Bnd_SRegional,Fecha_CreacionP,Origen)";
		 	$sql .= " values(\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio_Residencia\",$this->Tiempo_Servicio,$this->A_Puesto,\"$this->Telefono\",\"$this->Email\",\"$this->Sexo\",\"$this->Estado_Civil\",\"$this->Entidad_Nacimiento\",\"$this->Municipio_Nacimiento\",\"$this->Domicilio\",\"$this->Colonia\",$this->Disponible_Id,$this->CP,\"$this->Fec_Inicio\",\"$this->Fec_Termino\",$this->Bnd_NI,1,1,1,$this->Fecha_CreacionP,\"DBG\")";
				//Core::alert($sql);
				//,\'$this->Fec_Inicio\',\'$this->Fec_Termino\);		
				return Executor::doit($sql);
			
		}

		public function addDbt(){
			$sql = "insert into tbl_propuestas ( Cve_Emp, Rfc, Curp, APaterno, AMaterno, Nombre, Municipio_Residencia,  Tiempo_Servicio,A_Puesto, Telefono, Email, Sexo, Estado_Civil, Entidad_Nacimiento, Municipio_Nacimiento, Domicilio, Colonia,Disponible_Id, CP,Fec_Inicio,Fec_Termino,Bnd_NI,Bnd_Dbt,Bnd_Supervision,Bnd_SRegional,Fecha_CreacionP,Origen)";
		 
			$sql .= " values(\"$this->Cve_Emp\",\"$this->Rfc\",\"$this->Curp\",\"$this->APaterno\",\"$this->AMaterno\",\"$this->Nombre\",\"$this->Municipio_Residencia\",$this->Tiempo_Servicio,$this->A_Puesto,\"$this->Telefono\",\"$this->Email\",\"$this->Sexo\",\"$this->Estado_Civil\",\"$this->Entidad_Nacimiento\",\"$this->Municipio_Nacimiento\",\"$this->Domicilio\",\"$this->Colonia\",$this->Disponible_Id,$this->CP, \"$this->Fec_Inicio\",\"$this->Fec_Termino\",$this->Bnd_NI,1,1,1,$this->Fecha_CreacionP,\"DBT\")";

				//echo($sql);
				//,\'$this->Fec_Inicio\',\'$this->Fec_Termino\);		
				return Executor::doit($sql);
			
		}




 public function update($id){
		$sql = "update ".self::$tablename." set  
		Cve_Emp=\"$this->Cve_Emp\",
		Curp=\"$this->Curp\",
		Rfc=\"$this->Rfc\",
		Fec_Inicio=\"$this->Fec_Inicio\",
		Fec_Termino=\"$this->Fec_Termino\",
		Municipio_Residencia=\"$this->Municipio_Residencia\",
		Nombre=\"$this->Nombre\",APaterno=\"$this->APaterno\",
		AMaterno=\"$this->AMaterno\",
		Tiempo_Servicio=\"$this->Tiempo_Servicio\",
		A_Puesto=\"$this->A_Puesto\",
		Telefono=\"$this->Telefono\",
		Email=\"$this->Email\",
		 
		Entidad_Nacimiento=\"$this->Entidad_Nacimiento\",
		Municipio_Nacimiento=\"$this->Municipio_Nacimiento\",
		Domicilio=\"$this->Domicilio\",
		Colonia=\"$this->Colonia\",Bnd_NI=$this->Bnd_NI,
		CP=$this->CP,
		Sexo=\"$this->Sexo\"
	     where id=$id ";
	    // Core::alert($sql);
		Executor::doit($sql);
	}

	 public function update2($id){
		$sql = "update ".self::$tablename." set  
		Cve_Emp=\"$this->Cve_Emp\",
		Curp=\"$this->Curp\",
		Rfc=\"$this->Rfc\",
		Fec_Inicio=\"$this->Fec_Inicio\",
		Fec_Termino=\"$this->Fec_Termino\",
		Municipio_Residencia=\"$this->Municipio_Residencia\",
		
		Tiempo_Servicio=\"$this->Tiempo_Servicio\",
		Telefono=\"$this->Telefono\",
		Email=\"$this->Email\",
		 
		Entidad_Nacimiento=\"$this->Entidad_Nacimiento\",
		Municipio_Nacimiento=\"$this->Municipio_Nacimiento\",
		Domicilio=\"$this->Domicilio\",
		Colonia=\"$this->Colonia\",
		CP=$this->CP,
		Bnd_NI=$this->Bnd_NI,Nombre=\"$this->Nombre\",APaterno=\"$this->APaterno\",
		AMaterno=\"$this->AMaterno\",

			
			A_FrenteGrupo=\"$this->A_FrenteGrupo\", 
			D_Ingles=\"$this->D_Ingles\", 
			
			O_Labora=\"$this->O_Labora\",
			Horas_OLabora=\"$this->Horas_OLabora\",
			Area_D=\"$this->Area_D\",
			Sexo=\"$this->Sexo\"
	     where id=$id ";
	    //echo($sql);
		Executor::doit($sql);
	}



		public static function getByIdPropuesta($Id_Propuesta){
		$sql = "select Id, 
Cve_Emp, 
Rfc, 
Curp, 
APaterno, 
AMaterno, 
Nombre, 
Municipio_Residencia,
O_Labora,
Horas_OLabora,
Tiempo_Servicio, 
Telefono,
Email, 
Sexo , 
Estado_Civil, 
Entidad_Nacimiento, 
Municipio_Nacimiento, 
Domicilio, 
Colonia, 
CP, 
Fec_Inicio, 
Fec_Termino,
Bnd_NI,
A_Puesto,
Area_D,
D_Ingles,
Disponible_Id, 
Bnd_Dams, 
A_FrenteGrupo,D_Ingles,O_Labora,Horas_OLabora

 from ".self::$tablename." where Id=$Id_Propuesta";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestaData());
	}

	 


public function updateSuper($id){
		$sql = "update ".self::$tablename." set
		Bnd_Supervision=1 ,Bnd_RSupervision=0
		where Id=$id";
		//Core::alert($sql);
	Executor::doit($sql);
	}

	public function updateSRbg($id){
		$sql = "update ".self::$tablename." set
		Bnd_SRegional=1 ,Bnd_RSRegional=0
		where Id=$id";
	Executor::doit($sql);
	}
	public function updateSRbt($id){
		$sql = "update ".self::$tablename." set
		Bnd_SRegional=1 ,Bnd_RSRegional=0
		where Id=$id";
	Executor::doit($sql);
	}

	public function updateSRtb($id){
		$sql = "update ".self::$tablename." set
		Bnd_SRegional=1 ,Bnd_RSRegional=0
		where Id=$id";
	Executor::doit($sql);
	}


public function updateDbg($id){
		$sql = "update ".self::$tablename." set
		Bnd_Dbg=1 ,Bnd_RDbg=0
		where Id=$id";
	Executor::doit($sql);
	}

public function updateDbt($id){
		$sql = "update ".self::$tablename." set
		Bnd_Dbt=1 ,Bnd_RDbt=0
		where Id=$id";
	Executor::doit($sql);
	}
public function updateDtb($id){
		$sql = "update ".self::$tablename." set
		Bnd_Dtb=1 ,Bnd_RDtb=0 , Bnd_Sems=1
		where Id=$id";
	Executor::doit($sql);
	}


public function updateDams($id){
		$sql = "update ".self::$tablename." set
		Bnd_Dams=1,Bnd_RDams=0 
		where Id=$id";
	Executor::doit($sql);
	}

public function updateSems($id){
		$sql = "update ".self::$tablename." set
		Bnd_Sems=1 ,Bnd_RSems=0
		where Id=$id";
	Executor::doit($sql);
	}


	public function updateDirector($id){
		$sql = "update ".self::$tablename." set
		Bnd_Director=1 
		where Id=$id";
	Executor::doit($sql);
	}




/*
public function update($id){
		$sql = "update ".self::$tablename." set
		curp=\"$this->curp\",
		rfc=\"$this->rfc\" 
		where cve_emp=$id";
	Executor::doit($sql);
	}
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

// partiendo de que ya tenemos creado un objecto PropuestaData previamente utilizamos el contexto


	public static function getAll(){
		$sql = "select id_docente,cve_emp,nombre,curp,rfc from ".self::$tablename." limit 100";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());

	}
	*/
	public static function getByCurp($curp){
		$sql = "select * from ".self::$tablename." where Curp= \"$curp\"
		 and Activo=1";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestaData());
	}

	public static function getByRfc($rfc){
		$sql = "select * from ".self::$tablename." where Rfc= \"$rfc\"
		 and Activo=1";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new PropuestaData());
	}


	public static function getByEmp($cve_emp){
		$sql = "select * from ".self::$tablename." where cve_emp=\"$cve_emp\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new PropuestaData());
	}

	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombre like '%$q%'
		or cve_emp like '%$q%' or curp like '%$q%' or rfc like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}

/*bandera rechazo*/
public function updateRSuper($id){
		$sql = "update ".self::$tablename." set
		Bnd_RSupervision=1 
		where Id=$id";
		//echo($sql);
	Executor::doit($sql);
	}

 public function updateRDbg($id){
		$sql = "update ".self::$tablename." set
		Bnd_RDbg=1 
		where Id=$id";
	Executor::doit($sql);
	}

public function updateRDbt($id){
		$sql = "update ".self::$tablename." set
		Bnd_RDbt=1 
		where Id=$id";
	Executor::doit($sql);
	}
public function updateRDtb($id){
		$sql = "update ".self::$tablename." set
		Bnd_RDtb=1 
		where Id=$id";
	Executor::doit($sql);
	}

	public function updateRSRegional($id){
		$sql = "update ".self::$tablename." set
		Bnd_RSRegional =1 
		where Id=$id";
	Executor::doit($sql);
	}

public function updateRDams($id){
		$sql = "update ".self::$tablename." set
		Bnd_RDams=1 
		where Id=$id";
	Executor::doit($sql);
	}

public function updateRSems($id){
		$sql = "update ".self::$tablename." set
		Bnd_RSems=1 
		where Id=$id";
	Executor::doit($sql);
	}


/*Rechazo final*/
public function updateRechazoFP($id){
		$sql = "update ".self::$tablename." set
		Activo=0, Bnd_RTotal=1
		where Id=$id";
	Executor::doit($sql);
	}

		public static function getHistoricaPropuesta($id){
		$sql = "insert into th_propuestas  (select * from tbl_propuestas where activo=0 and id=$id)";
		return Executor::doit($sql);
		}

		public static function delPropuesta($id){
		$sql = "delete from tbl_propuestas where activo=0 and id=$id";
	 	Executor::doit($sql);
	}


/*count*/
	

	public static function getAllBg(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BG\" ) and activo =1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}
public static function getAllDBg(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BG\" ) and activo =1 and Bnd_Dbg=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}


	public static function getAllSBg(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BG\" ) and activo =1 and Bnd_Supervision=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}

	public static function getAllSRBg(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BG\" ) and activo =1 and Bnd_SRegional=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}

	public static function getAllRDBg(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BG\" ) and activo =1 and Bnd_RDbg=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}


	
	public static function getAllRSBg(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BG\" ) and activo =1 and Bnd_RSupervision=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}
	public static function getAllRSRBg(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BG\" ) and activo =1 and Bnd_RSRegional=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}





public static function getAllBt(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BT\" ) and activo =1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}
public static function getAllDBt(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BT\" ) and activo =1 and Bnd_Dbt=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}

	public static function getAllSBt(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BT\" ) and activo =1 and Bnd_Supervision=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}

	public static function getAllSRBt(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BT\" ) and activo =1 and Bnd_SRegional=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}

	public static function getAllRDBt(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BT\" ) and activo =1 and Bnd_RDbt=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}


	
	public static function getAllRSBt(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BT\" ) and activo =1 and Bnd_RSupervision=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}

	public static function getAllRSRBt(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BT\" ) and activo =1 and Bnd_RSRegional=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}

	public static function getAllSemsBg(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BG\" ) and activo =1 and Bnd_Sems=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}



		public static function getAllRSemsBg(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BG\" ) and activo =1 and Bnd_RSems=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}


public static function getAllSemsBt(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BT\" ) and activo =1 and Bnd_Sems=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}



		public static function getAllRSemsBt(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"BT\" ) and activo =1 and Bnd_RSems=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}

	public static function getAllTb(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"TB\" ) and activo =1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}
public static function getAllDTb(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"TB\" ) and activo =1 and Bnd_Dtb=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}

	public static function getAllSTb(){
		$sql = "select * from ".self::$tablename. 
		" where  Disponible_Id  in (select id from tbl_plazas_disponibles tpd 
			where SUBSTRING(zona,1,2)=\"TB\" ) and activo =1 and Bnd_Supervision=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PropuestaData());
	}
	
	public static function getLikeP($q){
		$sql = "select tp.AMaterno,tp.APaterno ,tp.Nombre ,
		tp.Curp,tp.Cve_Emp ,tp.Bnd_Supervision ,tp.Bnd_RSupervision, 
	tp.Bnd_Dbg ,tp.Bnd_RDbg ,tp.Bnd_Dbt ,tp.Bnd_RDbt ,
	tp.Bnd_Dtb ,tp.Bnd_RDtb,tp.Bnd_SRegional,tp.Bnd_RSRegional,tp.Bnd_Sems ,tp.Bnd_RSems ,SUBSTRING(tpd.Zona,1,2) as Zona,tp.entrega, tp.Disponible_Id,tp.Origen

	 from ".self::$tablename." tp , tbl_plazas_disponibles tpd
		where activo =1 and (CONCAT(tp.APaterno,\" \",tp.AMaterno,\" \",tp.Nombre) 
		like '%$q%'or tp.Cve_Emp like '%$q%' or tp.Curp like '%$q%' or  tpd.Num_Plaza like'%$q%') and tp.Disponible_Id =tpd.Id";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new PropuestaData());
	}


}

?>
