<?php 
include("connection.php");
include("script.php");
error_reporting(0);
?>




<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
include("nev.php");
?>
<form action="" method="GET">
Rool No.</br><input type="text" name="roll" value="<?php echo $_GET['rn'];?>"/></br></br>
Name</br><input type="text" name="name" value="<?php echo $_GET['nm'];?>"/></br></br>
Class</br><input type="text" name="class" value="<?php echo $_GET['cl'];?>"/></br></br>
Section</br><input type="text" name="section" value="<?php echo $_GET['sc'];?>"/></br></br>
<input type="submit" name="submit" value="Update"/>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET")
{ 
   $roll = $_GET['roll'];
   $name = $_GET['name'];
   $class = $_GET['class'];
   $section = $_GET['section'];
   $query = "UPDATE STUDENT_RECORD SET NAME ='$name', CLASS ='$class', section ='$section'  WHERE ROLL='$roll'";
   mysqli_query($conn ,$query);
   if($data)
   {
	   echo "recod update";
}
else
{
	echo "<font color='blue'>Record not update";
}
}
?>


</div>
</body>
</html>
