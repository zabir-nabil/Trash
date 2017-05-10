<html>
<body>
<form>
<input type "text" name="num"

<?php
$value=test_input($_POST["no"]);
echo $value;
function test_input($data){
return $data;}