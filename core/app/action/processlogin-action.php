<?php
 

if(Session::getUID()=="") {

$user = $_POST['username'];
$pass = sha1(md5($_POST['password']));

$base = new Database();
$con = $base->connect();
 $sql = "select * from user where (username!=\"\" and (username= \"".$user."\"
 and password= \"".$pass."\") ) and status=1 and update_info=0";
//print $sql;
$query = $con->query($sql);
$found = false;
$userid = null;
while($r = $query->fetch_array()){
	$found = true ;
	$userid = $r['id'];
}

if($found==true) {
//	session_start();
//	print $userid;
	$_SESSION['user_id']=$userid ;
//	setcookie('userid',$userid);
//	print $_SESSION['userid'];
	print "Cargando ... $user";
 print "<script>window.location.href='index.php';</script>";


	//print "<script>window.location='./';</script>";
}else {

	   
    Core::alert("Usuario y/o contraseña incorrecto");
	print "<script>window.location='index.php?view=login';</script>";

  	 
}

}else{
	print "<script>window.location='./';</script>";

}
?>
