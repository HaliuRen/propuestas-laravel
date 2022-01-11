<?php
class ViewPdfData {
	public static $tablename = "tw_entrega";


	public function ViewPdfData(){
			
		 
		 
			 
		}

	public static function getPdfTb(){
		$sql = "select te.*,tc.turno ,tc.localidad, tc.municipio 
from tw_entrega te, tc_cct tc 
where te.Cct =tc.cct   and SUBSTRING(te.Zona,1,2)=\"TB\" 
order by orden,cct";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::many($query[0],new ViewPdfData());

	}

	public static function getPdfZona($zona){
		$sql = "select te.*,tc.turno ,tc.localidad, tc.municipio 
from tw_entrega te, tc_cct tc 
where te.Cct =tc.cct   and te.Zona=\"$zona\" 
order by orden,cct";
		$query = Executor::doit($sql);
		//echo($sql);
		return Model::many($query[0],new ViewPdfData());

	}

 public static function getIdPdfTb($Id){
		$sql = "select te.*,case 
when te.Horas=\"20\" then \"Docente\"
when te.Horas =\"30\" then \"Responsble Plantel\"
end as Funcion,tc.turno ,tc.localidad, tc.municipio 
from tw_entrega te, tc_cct tc 
where te.Cct =tc.cct  and SUBSTRING(te.Zona,1,2)=\"TB\" and Disponible_Id =$Id";
		$query = Executor::doit($sql);
		//Core::alert($sql);
		return Model::one($query[0],new ViewPdfData());

	}

 
  
 
}
?>