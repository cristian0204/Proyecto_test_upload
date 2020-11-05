<?php 
$con = mysqli_connect("localhost","root","","colleges");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Reproducion de Videos </title>
</head>
<body>

<?php
if(isset($_GET['id']))
{
	
	$id = $_GET['id'];
	$q = "select name from videoup where id=$id";
	$query = mysqli_query($con,$q);
	while($row = mysqli_fetch_assoc($query))
	{
	$name = $row['name'];
	}
	echo "You are watching".$name."<br>";
	echo "<center><video width='800' controls> <source src='upload/".$name."' type='video/mp4'></video></center>";
}
else
{
	echo "Error!";
}
?>

</body>
</html>