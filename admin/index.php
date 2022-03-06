<?php session_start();
//echo $_SESSION['user_id'];exit;
if(isset($_SESSION['user_id'])){
  header("location: maz.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel</title>
		<!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- Slider -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
     <!-- style css -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- AOS -->
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
<section>
    
<div class="container">
    <form method="post" action="proccess.php">
        <input type="hidden" name="vehicle_name" value="Mazda">
    <div class="row justify-content-center align-content-center" style="height: 100vh;">
    	<div class="col-md-3"></div>
        <div class="col-md-6"> 
            <div class="inp">
                <h3 class="admin">Admin Panel</h3>
                <?php if(@$_GET['msgs']=='del'){
                        ?>
                        <div class="alert alert-success alert-dismissible text-center font-weight-bold">
                        	Invalid Username and Password
                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        </div>
              <?php } ?>
             		<div class="form-group mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label><br>
                        <input type="text" class="form" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
                    </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label><br>
                <input type="password" class="form" id="exampleInputEmail1" name="password" aria-describedby="emailHelp">
            </div>       
                                            
            <!--    <input type="checkbox" class="pass" onclick="myFunction()">Show Password -->
                      <br>
                <div class="text-center">
                    <input type="submit" value="Login" class="dark_btn" name="login" class="sumbit">
                </div>      
                
            </div>
        </div>
       <div class="col-md-3"></div>
    </form>
</div>
</section>
<!-- end contact us -->

</body>
</html>