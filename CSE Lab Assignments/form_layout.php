<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

$nameErr = $rollErr = $deptErr = 
$microwaveErr = $microprocessorErr =
$industrial_electronicsErr = "" ;


$name = $roll = $department = "";


$microwave = $microprocessor = 
$industrial_electronics = 0;

$mwGrade = $mpGrade = $ieGrade = "X";

$anyErr = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "You forgot your name!";
	$anyErr = true;
  } else {
    $name = pre_process($_POST["name"]);
   
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Invalid name!";
	  $anyErr = true;
    }
  }
  
  if (empty($_POST["roll"])) {
    $rollErr = "You forgot your roll number!";
	$anyErr = true;
  } else {
    $roll = pre_process($_POST["roll"]);
    
    if (num_process($roll)<=140900 || num_process($roll)>=1409061) {
      $rollErr = "Invalid roll number!";
	  $anyErr = true;
    }
  }
    
  if (empty($_POST["department"])) {
    $deptErr = "You forgot your department!";
	$anyErr = true;
  } else {
     $department = $_POST["department"];
	 if (!preg_match("/^[a-zA-Z ]*$/",$department)) {
      $deptErr = "Invalid department name!";
	  $anyErr = true;
    }
    
  }

  if (empty($_POST["microwave"])) {
    $microwaveErr = "Your forgot your Microwave exam mark!";
	$anyErr = true;
  } else {
	  $microwave = $_POST["microwave"];
	  if($microwave<0 || $microwave>100){
         $microwaveErr = "Out of range mark!!!";
		 $anyErr = true;
	  }
	  else
	  {
		  $mwGrade = marks_to_grade($microwave);
	  }
	 
  }
  
  
  
   if (empty($_POST["microprocessor"])) {
    $microprocessorErr = "Your forgot your Microprocessor exam mark!";
	$anyErr = true;
  } else {
	  $microprocessor = $_POST["microprocessor"];
	  if($microprocessor<0 || $microprocessor>100){
		  $microprocessorErr = "Out of range mark!!!";
		  $anyErr = true;
	  }
	  else
	  {
		  $mpGrade = marks_to_grade($microprocessor);
	  }
  
  }
  
  
   if (empty($_POST["industrial_electronics"])) {
    $industrial_electronicsErr = "Your forgot your Industrial Electronics exam mark!";
	$anyErr = true;
  } else {
	  $industrial_electronics = $_POST["industrial_electronics"];
	  if($industrial_electronics<0 || $industrial_electronics>100){
         $industrial_electronicsErr = "Out of range mark!!!";
		 $anyErr = true;
	  }
	 else
	  {
		  $ieGrade = marks_to_grade($industrial_electronics);
	  }
  }

 
}
function num_process($num)
{
	return intval($num);
}
function pre_process($value) {
  $value = trim($value);
  $value = htmlspecialchars($value);
  return $value;
}
function marks_to_grade($markstr)
{
	$mark = num_process($markstr);
	if($mark>=80)
		return 'A+';
	else if($mark>=75)
		return 'A';
	else if($mark>=70)
		return 'A-';
	else if($mark>=65)
		return 'B+';
	else if($mark>=60)
		return 'B';
	else if($mark>=55)
		return 'B-';
	else if($mark>=50)
		return 'C+';
	else if($mark>=45)
		return 'C';
	else if($mark>=40)
		return 'D';
	else
		return 'F';
	
}
?>

<h2>GPA calculation Assignment</h2>
<p><span class="error">* must complete.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Roll: <input type="text" name="roll" value="<?php echo $roll;?>">
  <span class="error">* <?php echo $rollErr;?></span>
  <br><br>
  Department: <input type="text" name="department" value="<?php echo $department;?>">
  <span class="error"><?php echo $deptErr;?></span>
  <br><br>
  
  Microwave marks (percentage): <input type="text" name="microwave" value="<?php echo $microwave;?>">
  <span class="error">* <?php echo $microwaveErr;?></span>
  <br><br>
  
  Microprcessor marks (percentage): <input type="text" name="microprocessor" value="<?php echo $microprocessor;?>"> 
  <span class="error">* <?php echo $microprocessorErr;?></span>
  <br><br>
  
  Industrial Electronics marks (percentage): <input type="text" name="industrial_electronics" value="<?php echo $industrial_electronics;?>">
  <span class="error">* <?php echo $industrial_electronicsErr;?></span>
  <br><br>

  
  
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your result is:</h2>";
echo $name;
echo "<br>";
echo $roll;
echo "<br>";
echo $department;
echo "<br>";
if(!$anyErr){
echo "Grades:<br>";
echo "Microwave grade: ";
echo $microwave;
echo $mwGrade;
echo "<br>";
echo "Microprocessor grade: ";
echo $mpGrade;
echo "<br>";
echo "Industrial Electronics grade: ";
echo $ieGrade;
echo "<br>";
}
else
{
	echo "Sorry your grade couldn't be processed due
	to error";
}
?>

</body>
</html>