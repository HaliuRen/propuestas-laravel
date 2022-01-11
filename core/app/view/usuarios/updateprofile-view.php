<?php

if(count($_POST)>0){

	$user = UserData::getById($_POST["user_id"]);
 
  

	 

	if($_POST["password"]!=""){
		$user->password = sha1(md5($_POST["password"]));
		$user->update_passwd();
print "<script>alert('Se ha actualizado el password');</script>";

	}

print "<script>window.location='index.php?view=index';</script>";


}


?>