<!DOCTYPE html>
<html>
<head>
	<title>Video</title>
</head>
<body>
	<a href="video.php">Videos</a> <br>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" name="submit" value="Upload">
	</form>

<?php
$con = mysqli_connect("localhost","root","","colleges");
if(isset($_POST['submit']))
{
	$name = $_FILES['file']['name'];
	$temp = $_FILES['file']['tmp_name'];

	move_uploaded_file($temp,"upload/".$name);
	$q = "INSERT INTO videoup (name) VALUES ('$name')";
	if(mysqli_query($con,$q))
	{
		echo "Subminted to Dababase...";
	}
		echo "<br>".$name." has been uploaded.";
	}
	?>

</body>
</html>