<?php 
session_start();
//print_r($_POST);exit;

 include('connection.php');
 //print_r($_POST); exit;
 if(isset($_POST['contact'])){
 	$name    = $_POST['name'];
 	$email   = $_POST['email'];
 	$numbers = $_POST['numbers'];
 	$msg     = $_POST['msg'];
 	$vehicle_name     = $_POST['vehicle_name'];

    $sql = "INSERT INTO contact(name,email,numbers,msg,vehicle_name)
 	VALUES ('$name', '$email', '$numbers', '$msg', '$vehicle_name')";
 	$rs = mysqli_query($conn, $sql); 
 	if($rs)
 	{
      if($vehicle_name == 'Mazda'){
 		   header('Location: maz.html?msgs=del#down');

      }else if($vehicle_name == 'Odyssey'){
         header('Location: ody.html?msgs=del#down');

      }else if($vehicle_name == 'Misc Cars'){
         header('Location: mis.html?msgs=del#down');
      }else if ($vehicle_name == 'Mitchell'){
         header('Location: mit.html?msgs=del#down');
      }
 	}
 	else
 	{
 		echo "Error:".$sql;
 	}
 }

?>