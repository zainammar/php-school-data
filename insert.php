<?php 
include("connection.php");
include("script.php");
?>
<style>
table{
	width:80%;
	 padding-bottom:15px;
}
th{
	
	background-color:black;
	color:white;
	 font-size:18px;
}
td{
	background-color:#E7E7E7;
	color:black;
	 font-size:14px;
     font-family: 'Roboto', sans-serif;
	 text-decoration:none;
	 border: 1px solid #BEBDBD;

}
</style>



<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php 
include("nev.php");
?>
<form action="" method="POST">
Rool No.</br><input type="text" name="roll" value=""/></br></br>
Name</br><input type="text" name="name" value=""/></br></br>
Class</br><input type="text" name="class" value=""/></br></br>
Section</br><input type="text" name="section" value=""/></br></br>
<input type="submit" name="submit" value="submit"/>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$rn = $_POST['roll'];
    $nm = $_POST['name'];
    $cl = $_POST['class'];
    $sc = $_POST['section'];
	
	if($rn!="" &&  $nm!="" && $cl!="" && $sc!="")
	{
		$query = "INSERT INTO   student_record VALUES ('$rn' ,'$nm' , '$cl' , '$sc')";
        $data = mysqli_query($conn, $query);
		
		if($data)
	  {
		echo  "data inserted";
	  }
	}
	else 
	{
		echo "All Fields are requierd";
	}
}	

 






?>

</div>

</body>
</html>
