<?php 
session_start();
//print_r($_POST);exit;

 include('../connection.php');
 //print_r($_POST); exit;

 if(isset($_POST['login'])){
// print_r($_POST);exit;
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "select * from admin where username = '$username' and password = '$password'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	if(mysqli_affected_rows($conn) == 0){
		header("location: index.php?msgs=del");
	}else{
	$_SESSION['user_id'] = $row['id'];
		header("location: maz.php");
	}
}

?>