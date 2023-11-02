<?php
$user=$_POST['username'];
$pass=$_POST['Password'];
$reg=/[a-zA-Z]+$/
if (isset($_POST['login'])) {
	if($user.match($reg) && $pass=="123456")
	echo "Welcome";
    else
    	echo "wrong Password";
}
?>