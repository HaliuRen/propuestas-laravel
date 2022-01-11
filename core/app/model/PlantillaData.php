<?php
class PlantillaData {
	public static $tablename = "tbl_plantilla";


	public function __construct(){
			
			$this  ->cct="";
			$this  ->zona="";
			$this  ->cve_emp="";
			$this  ->puesto="";
			$this  ->horas="";
			$this  ->horas2="";
            $this  ->Bnd_Captura="";
            $this  ->Bnd_Super="";
            $this  ->Bnd_MSuper="";
            $this  ->Bnd_SRegional="";
            $this  ->Bnd_MSRegional="";
            $this  ->Bnd_Dgems="";
            $this  ->Bnd_MDgems="";
			$this  ->estatus_plaza="";
			$this  ->semestre="";
			 
			 
			 
		}

		public function add(){
		$sql = "insert into tbl_plantilla (cct,zona,cve_emp,puesto,horas,estatus_plaza,semestre) ";
		$sql .= "values (\"$this->cct\",\"$this->zona\",\"$this->cve_emp\",\"$this->puesto\",$this->horas,\"$this->estatus_plaza\",1)";
		echo($sql);
		return Executor::doit($sql);
	}

	public function adds2(){
		$sql = "insert into tbl_plantilla (cct,zona,cve_emp,puesto,horas,estatus_plaza,semestre) ";
		$sql .= "values (\"$this->cct\",\"$this->zona\",\"$this->cve_emp\",
		\"$this->puesto\",$this->horas,\"$this->estatus_plaza\",2)";
		echo($sql);
		return Executor::doit($sql);
	}


	public function addm1(){
		$sql = "insert into tbl_plantilla (cct,zona,cve_emp,puesto,horas,Bnd_Captura,estatus_plaza,semestre) ";
		$sql .= "values (\"$this->cct\",\"$this->zona\",\"$this->cve_emp\",\"$this->puesto\",$this->horas,1,\"$this->estatus_plaza\",1)";
		//echo($sql);
		return Executor::doit($sql);
	}

	public function addm2(){
		$sql = "insert into tbl_plantilla (cct,zona,cve_emp,puesto,horas,Bnd_Captura,estatus_plaza,semestre) ";
		$sql .= "values (\"$this->cct\",\"$this->zona\",\"$this->cve_emp\",\"$this->puesto\",$this->horas,1,\"$this->estatus_plaza\",2)";
		//echo($sql);
		return Executor::doit($sql);
	}



    public static function getPlantilla($cct){

        $sql = "select a.*,b.tipo_puesto  FROM tbl_plantilla a, tc_puestos b
        where a.puesto=b.codigo and cct=\"$cct\" and semestre =1 " ;
        //echo($sql);
     
            $query = Executor::doit($sql);
            return Model::many($query[0],new PlantillaData());
      }


	  public static function getPlantilla2($cct){

        $sql = "select a.*,b.tipo_puesto  FROM tbl_plantilla a, tc_puestos b
        where a.puesto=b.codigo and cct=\"$cct\" and semestre =2" ;
       // echo($sql);
     
            $query = Executor::doit($sql);
            return Model::many($query[0],new PlantillaData());
      }


	  public static function getPlantillaModificacion($cct){

        $sql = "select a.*,b.tipo_puesto  FROM tbl_plantilla a, tc_puestos b
        where a.puesto=b.codigo and cct=\"$cct\" and Bnd_Captura=1 and semestre=1  " ;
       //echo($sql);
    
            $query = Executor::doit($sql);
            return Model::many($query[0],new PlantillaData());
      }
	  public static function getPlantillaModificacion2($cct){

        $sql = "select a.*,b.tipo_puesto  FROM tbl_plantilla a, tc_puestos b
        where a.puesto=b.codigo and cct=\"$cct\" and Bnd_Captura=1 and semestre=2 " ;
       //echo($sql);
    
            $query = Executor::doit($sql);
            return Model::many($query[0],new PlantillaData());
      }



      public function delPuesto($id){
		$sql = "delete  from ".self::$tablename." where  id=$id";

	   //echo($sql);
		Executor::doit($sql);
	}

    public static function getBndCaptura($cct){//YA ESTA PAR EL INICIO DE CAPTURA Y CUANDO CAPTUREN Y GUARDEN PLANTILLA*******

        $sql = "select * from tbl_plantilla where Bnd_Captura=1 and (Bnd_MSuper=0 or Bnd_MSRegional=0)
		 and cct=\"$cct\" " ;
       //echo($sql);
    
            $query = Executor::doit($sql);
            return Model::many($query[0],new PlantillaData());
      }


	  public static function getBndModificacion($cct){

        $sql = "select * from tbl_plantilla where  (Bnd_MSuper=1 or Bnd_MSRegional=1 or Bnd_MDgems=1)
		 and cct=\"$cct\" " ;
      //echo($sql);
    
            $query = Executor::doit($sql);
            return Model::many($query[0],new PlantillaData());
      }

	  public static function getNotificacionM($cct){

        $sql = "select distinct cct from tbl_plantilla where  (Bnd_MSuper=1 or Bnd_MSRegional=1 or Bnd_MDgems=1)
		 and cct=\"$cct\" " ;
      //echo($sql);
    
            $query = Executor::doit($sql);
            return Model::many($query[0],new PlantillaData());
      }




	  public function updateBndCaptura($cct){
		$sql = "update ".self::$tablename." set  
		Bnd_Captura=1,Bnd_MSuper=0,Bnd_MSRegional=0,Bnd_MDgems=0
	     where cct=\"$cct\"";
	   //echo($sql);
		Executor::doit($sql);
	}


	public function updateBndCapturaS($cct){
		$sql = "update ".self::$tablename." set  
		Bnd_Captura=1,Bnd_Super=1,Bnd_MSuper=0,Bnd_MSRegional=0
	     where cct=\"$cct\"";
	   //echo($sql);
		Executor::doit($sql);
	}



	public static function getByZona($zona){

        $sql = "select distinct tp.cct,tc.nombre_cct ,tc.zona_escolar 
		from tbl_plantilla tp , tc_cct tc 
		where tp.Bnd_Captura =1 and Bnd_super=0 and   Bnd_MSuper =0 and Bnd_MDgems =0 and Bnd_MSRegional =0 and
		tp.cct =tc.cct 
		and zona =\"$zona\" " ;
        //echo($sql);
    
            $query = Executor::doit($sql);
            return Model::many($query[0],new PlantillaData());
      }


	  

	  public static function getByBg(){

        $sql = "select distinct tp.cct,tc.nombre_cct ,tc.zona_escolar 
		from tbl_plantilla tp , tc_cct tc 
		where tp.Bnd_Captura =1 and Bnd_super=1 and Bnd_SRegional=1 and Bnd_MDgems=0 and 
		tp.cct =tc.cct and Bnd_Dgems=0
		and tp.zona like '%BG%' order by tc.zona_escolar, tp.cct" ;
        //echo($sql);
    
            $query = Executor::doit($sql);
            return Model::many($query[0],new PlantillaData());
      }

	  public static function getByBt(){

        $sql = "select distinct tp.cct,tc.nombre_cct ,tc.zona_escolar 
		from tbl_plantilla tp , tc_cct tc 
		where tp.Bnd_Captura =1 and Bnd_super=1 and Bnd_SRegional=1 and Bnd_MDgems=0 and 
		tp.cct =tc.cct and Bnd_Dgems=0
		and tp.zona like '%BT%' order by tc.zona_escolar, tp.cct" ;
       // echo($sql);
    
            $query = Executor::doit($sql);
            return Model::many($query[0],new PlantillaData());
      }
 
	  

	  public static function getBySBgPoniente($zona){

        $sql = " select distinct tp.cct,tc.nombre_cct ,tc.zona_escolar
		from tbl_plantilla tp , tc_cct tc ,tc_regiones r
		where tp.Bnd_Captura =1 and Bnd_super=1 and Bnd_MSRegional=0 and 
		tp.cct =tc.cct and Bnd_SRegional =0
		and r.region= \"$zona\" and tp.zona=r.zona" ;
        //echo($sql);
    
            $query = Executor::doit($sql);
            return Model::many($query[0],new PlantillaData());
      }

	  public static function getBySBgOriente($zona){

        $sql = " select distinct tp.cct,tc.nombre_cct ,tc.zona_escolar
		from tbl_plantilla tp , tc_cct tc ,tc_regiones r
		where tp.Bnd_Captura =1 and Bnd_super=1 and Bnd_MSRegional=0 and 
		tp.cct =tc.cct and Bnd_SRegional =0
		and r.region= \"$zona\" and tp.zona=r.zona" ;
       // echo($sql);
    
            $query = Executor::doit($sql);
            return Model::many($query[0],new PlantillaData());
      }

	  public static function getBySBgValle($zona){

        $sql = " select distinct tp.cct,tc.nombre_cct ,tc.zona_escolar
		from tbl_plantilla tp , tc_cct tc ,tc_regiones r
		where tp.Bnd_Captura =1 and Bnd_super=1 and Bnd_MSRegional=0 and 
		tp.cct =tc.cct and Bnd_SRegional =0
		and r.region= \"$zona\" and tp.zona=r.zona" ;
        //echo($sql);
    
            $query = Executor::doit($sql);
            return Model::many($query[0],new PlantillaData());
      }


	  public static function getBySBtPoniente($zona){

        $sql = " select distinct tp.cct,tc.nombre_cct ,tc.zona_escolar
		from tbl_plantilla tp , tc_cct tc ,tc_regiones r
		where tp.Bnd_Captura =1 and Bnd_super=1 and Bnd_MSRegional=0 and 
		tp.cct =tc.cct and Bnd_SRegional =0
		and r.region= \"$zona\" and tp.zona=r.zona" ;
    //    echo($sql);
    
            $query = Executor::doit($sql);
            return Model::many($query[0],new PlantillaData());
      }

	  public static function getBySBtOriente($zona){

        $sql = " select distinct tp.cct,tc.nombre_cct ,tc.zona_escolar
		from tbl_plantilla tp , tc_cct tc ,tc_regiones r
		where tp.Bnd_Captura =1 and Bnd_super=1 and Bnd_MSRegional=0 and 
		tp.cct =tc.cct  and Bnd_SRegional =0
		and r.region= \"$zona\" and tp.zona=r.zona" ;
        //echo($sql);
    
            $query = Executor::doit($sql);
            return Model::many($query[0],new PlantillaData());
      }

	  public static function getBySBtValle($zona){

        $sql = " select distinct tp.cct,tc.nombre_cct ,tc.zona_escolar
		from tbl_plantilla tp , tc_cct tc ,tc_regiones r
		where tp.Bnd_Captura =1 and Bnd_super=1 and Bnd_MSRegional=0 and 
		tp.cct =tc.cct and Bnd_SRegional =0
		and r.region= \"$zona\" and tp.zona=r.zona " ;
        //echo($sql);
    
            $query = Executor::doit($sql);
            return Model::many($query[0],new PlantillaData());
      }





	   

	  public function updateRSuper($cct){
		$sql = "update ".self::$tablename." set
		Bnd_MSuper=1
		where cct=\"$cct\";";
		//echo($sql);
	Executor::doit($sql);
	}

	public function updateRRegional($cct){
		$sql = "update ".self::$tablename." set
		Bnd_MSRegional=1
		where cct=\"$cct\";";
		//echo($sql);
	Executor::doit($sql);
	}


	public function updateRDgems($cct){
		$sql = "update ".self::$tablename." set
		Bnd_MDgems=1 
		where cct=\"$cct\";";
		//echo($sql);
	Executor::doit($sql);
	}


	public function updateSuper($cct){
		$sql = "update ".self::$tablename." set
		Bnd_Super=1
		where cct=\"$cct\";";
		//echo($sql);
	Executor::doit($sql);
}



public function updateSRegional($cct){
	$sql = "update ".self::$tablename." set
	Bnd_SRegional=1
	where cct=\"$cct\";";
	//echo($sql);
Executor::doit($sql);
}

public function updateDgems($cct){
	$sql = "update ".self::$tablename." set
	Bnd_Dgems=1
	where cct=\"$cct\";";
	//echo($sql);
Executor::doit($sql);
}



/*REPORTES EXCEL*/

public static function getExcelEscuela($cct){

	$sql = "select cct,cve_emp,tc.tipo_puesto as tipo_puesto ,horas,estatus_plaza, semestre 
	from tbl_plantilla tp, tc_puestos tc
	where Bnd_Captura =1 and tp.puesto =tc.codigo 
	and cct=\"$cct\" 
	order by semestre,cve_emp";
	//echo($sql);

		$query = Executor::doit($sql);
		return Model::many($query[0],new PlantillaData());
  }


}
?>


