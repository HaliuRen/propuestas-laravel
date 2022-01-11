<?php

if(count($_POST)>0){ 
	$user = UserData::getById($_POST["user_id"]);


 
	$user->name = $_POST["name"];
	 
	$user->username = $_POST["username"];
	$user->email = $_POST["email"];
	$user->status = isset($_POST["status"])?1:0;

	$user->update();

	if($_POST["password"]!=""){
		$user->password = sha1(md5($_POST["password"]));
		$user->update_passwd();
print "<script>alert('Se ha actualizado el password');</script>";

	}

print "<script>window.location='index.php?view=/usuarios/users';</script>";


}


?>