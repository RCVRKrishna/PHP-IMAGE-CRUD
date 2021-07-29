<?php 

session_start();

$conn = mysqli_connect("localhost","root","","phptutorials");

if(isset($_POST['save_stud_image']))
{
	$name = $_POST['stud_name'];
	$class = $_POST['stud_class'];
	$phone = $_POST['stud_phone'];
	$image = $_FILES['stud_image']['name'];

	$query = "INSERT INTO student (stud_name,stud_class,stud_phone,stud_image) VALUES ('$name','$class','$phone','$image')";
	$query_run = mysqli_query($conn, $query);

	if ($query_run)
	{
		move_uploaded_file($_FILES["stud_image"]["tmp_name"], "upload/", $_FILES['stud_image']['name']);
		$_SESSION['status'] = "Image stored successfully";
		header('Location: create.php');

	}
	else
	{
		$_SESSION['status'] = "Image not inserted.!";
		header('Location: create.php');
	}
}


?>