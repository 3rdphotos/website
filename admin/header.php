<?php session_start();
//echo $_SESSION['user_id'];exit;
if(!isset($_SESSION['user_id'])){
  header("location: index.php");
}
?>

<?php  include('../connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel List</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js" ></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">

<style>
	.row.lr {
    margin-top: 45px;
    box-shadow: 0px 0px 15px rgb(0 0 0 / 18%);
    padding: 22px 5px;
}
.active {
    font-weight: 800;
}
span.position-absolute.top-0.start-100.translate-middle.badge.rounded-pill.bg-success {
    margin-top: -5px;
    margin-left: 41px;
    color: white;
}
</style>
</head>

<body>
<!-- 	<?php 

$sqln = "select * from contact where see_contact = '0'";
$resultn = mysqli_query($conn, $sqln);
$num = mysqli_num_rows($resultn);                                                                                                                                                             
?> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Cars</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    	<li class="nav-item">
    		<!-- <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success" >
    			<?php echo $num; ?>
    		</span> -->
        	<a class="nav-link <?php if(isset($page) and $page == 'mazda'){ echo 'active';} ?>" href="maz.php">Mazda</a>
      </li>
      <li class="nav-item">
            <a class="nav-link <?php if(isset($page) and $page == 'Ody'){ echo 'active';} ?>" href="ody.php">Odyssey</a>
      </li>
      <li class="nav-item">
        	<a class="nav-link <?php if(isset($page) and $page == 'cars'){ echo 'active';} ?>" href="misc.php">A Misc Cars</a>
      </li>
      <li class="nav-item">
            <a class="nav-link <?php if(isset($page) and $page == 'chell'){ echo 'active';} ?>" href="chell.php">Mitchell</a>
      </li>
     <!-- <li class="nav-item">
        <a class="nav-link" href="edit_page.php">Contact Us</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
     
    </ul>
  </div>
</nav>


