<?php
 
		$p = new UserData();
		$continuar = true;
		if($_POST["username"]!=""){
			if(UserData::getByUserName($_POST["username"])!=null){ $continuar=false; }

		}
		if($continuar){
		$p->name = $_POST["name"];
		$p->username = $_POST["username"];
		$p->zona= $_POST["zona"];
		$p->password = sha1(md5($_POST["password"]));
		$p->kind = $_POST["kind_id"];
		
				
	  
		 
		$px = $p->add2();
		}else{
			Core::alert("El nombre de usuario ya esta en uso!");
			Core::redir("./?view=/usuarios/newuser");
		}

		Core::redir("./?view=/usuarios/users");
?>