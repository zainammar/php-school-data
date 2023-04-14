
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
<body>
<?php 
include("nev.php");
?>
<br>
<?php 
include("connection.php");
include("script.php");
error_reporting(0);
$query = "SELECT * FROM student_record";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows ($data);

if ($total !=0)
{
?>
	<table>
	<tr> 
	<th>Roll # </th><th> Name </th><th> Class </th> <th> Section</th><th colspan="2"> Opreations</th>
	
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
	
    echo 
	"<tr>
	  <td>".$result['roll']." </td>
      <td>".$result['name']." </td>
	  <td>".$result['class']." </td>
	  <td>".$result['section']." </td>
	  <td><a href='update.php?rn=$result[roll]&nm=$result[name]&cl=$result[class]&sc=$result[section]&'>Edit</a></td>
	  <td><a href='delete.php?rn=$result[roll]' onclick='return checkedelete()'> Remove  </a></td>
	</tr>";

	}
	}
else

{
	echo "No record found";
}


?>
</table>
<script>
function checkedelete()
{
	return confirm ('Are you sure to remove this data?');
}
</script>
</div>
</body>