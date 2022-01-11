<?php
class ProgramacionData {



public static function getMatricula($cct){

    $sql = "select * from tbl_matricula_grupos
    where cct=\"$cct\" " ;
    //echo($sql);

		$query = Executor::doit($sql);
		return Model::many($query[0],new ProgramacionData());
  }

  public static function getDocentes($cct){

    $sql = "select *
    from  tbl_agp_plantilla
    where cct=\"$cct\"" ;
    //echo($sql);

		$query = Executor::doit($sql);
		return Model::many($query[0],new ProgramacionData());
    }

    public static function getCct(){

      $sql = "select distinct cct from tbl_matricula_grupos " ;
      //echo($sql);
  
      $query = Executor::doit($sql);
      return Model::many($query[0],new ProgramacionData());
    
    }

}
?>
