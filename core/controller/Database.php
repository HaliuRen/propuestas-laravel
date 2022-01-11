<?php
class Database {
	public static $db;
	public static $con;
	function __construct(){
		
		 

//$this->user="sems";$this->pass="mr05#mr16*jr16/";$this->host="198.71.227.86:3306";$this->ddbb="bdsems";
$this->user="sems";$this->pass="bdsems";$this->host="localhost";$this->ddbb="bdsems";

		//$this->user="sems";$this->pass="1234567jro";$this->host="localhost";$this->ddbb="bdsems";
	}
	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$acentos = $con->query("SET NAMES 'utf8'");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}

}
?>
