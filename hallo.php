<?php 
include("connection.php");
$query = "INSERT INTO   student_record VALUES ('$rn' ,'$nm' , '$cl' , '$sc')";
$data = mysqli_query($conn, $query);
?>