<?php
include("connection.php");
$roll = $_GET['rn'];
$query = "DELETE FROM STUDENT_RECORD WHERE ROLL='$roll'";
$data = mysqli_query($conn, $query);
if($data)
{
	echo "your data is remove from database";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/school/display.php">
	<?php
}
else
{
	echo "Sorry Remove Process failed";
}
?>