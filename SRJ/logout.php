<?php
//destruct mode

session_start();


session_unset();


session_destroy();

$url = 'login.php?status=4';

ob_start();
header('Location: '.$url);
ob_end_flush();
die();

?>