<?php
$page = 'chell';
include('header.php');
?>

<?php 
$sql2 = "select * from contact where vehicle_name = 'Mitchell'";
$result = mysqli_query($conn, $sql2);                                                                                                                                                             
?>

<?php

if (isset($_GET['id'])) {
        $id = $_GET['id'];
        mysqli_query($conn, "DELETE FROM contact WHERE id='$id'");
        header('location: maz.php?msg=del');
        
    }
?>

<script>
function checkdelete2()
{
    return confirm('Are you sure you want to delete this data?');
}
</script>


<div class="container btm">
	<div class="row lr">
		<div class="col-md-12">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
             <?php if(@$_GET['msg']=='del'){
                        ?>
                        <div class="alert alert-danger alert-dismissible text-center font-weight-bold">Delete Successfully
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        </div>
              <?php } ?>
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Message</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=mysqli_fetch_array($result)){ ?>
      <tr>
        
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['numbers']; ?></td>
        <td><?php echo $row['msg']; ?></td>
        
        <td> <a href="maz.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" name="del" onclick="return checkdelete2()">Delete</a></td>
        
      </tr> 
  <?php } ?>
</tbody>
    </table>

		</div>
	</div>
</div>


   <script>
   	$(document).ready(function() {
    $('#example').DataTable();
} );
   </script> 

<?php include('footer.php')?>