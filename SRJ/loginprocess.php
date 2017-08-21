<?php
session_start();




?>
<?php

$usn = $_POST['user'];
$psw = $_POST['pass'];

$cn = new mysqli("127.0.0.1","root","","polash");
if($cn)
{
	//echo 'Database connected successfully!';
}
else
{
    phpAlert('Error happened in connecting');
}
//echo '<br><br>---------------------------';
if($cn->select_db("users"))
{
	//echo "Selected DB<br/>";
}
else
{
	echo("Couldn't select db.<br/>");
}
//echo "<br/>";
$user_get = mysqli_query($cn, "SELECT * FROM users WHERE user_name='$usn' AND pass='$psw' ");
$user = mysqli_fetch_array($user_get);

if(sizeof($user)==0)
{
	$url = 'login.php?status=2';

    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
	
	
}
else
{

$_SESSION["user"] = $usn;
$_SESSION["pass"] = $pass;

$url = 'index.php?status=1';

    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
	
	
	
	
}


?>