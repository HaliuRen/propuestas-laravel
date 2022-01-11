<?php
class UpdateUserData {
	public static $tablename = "user";




	public function UpdateUserData(){
			$this  ->id="";
			$this  ->name="";
			$this  ->username="";
			$this  ->password="";
			$this  ->status="";
      $this  ->kind="";
      $this  ->update_info="";
      $this  ->created_at="";
	}



    public function update_info($cve_emp){
  		$sql = "update ".self::$tablename." set update_info=1 where username=\"$cve_emp\"";
  		Executor::doit($sql);
  	}
}

?>
