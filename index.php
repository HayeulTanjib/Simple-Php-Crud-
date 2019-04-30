<?php 
require_once("header.php");
require_once("student_sql.php");

?>
<?php
if(isset($_GET["update"])){
	?>
<div class="alert alert-success">
  <strong>Success!</strong> Data Updated Successfully    <!--update alert-->
</div> 
<?php }?>

<?php
if(isset($_GET["delete"])){
?>
<div class="alert alert-danger">
  <strong>Success!</strong> Data Deleted Successfully    <!--delete alert-->
</div>

<?php }?>


<!-- Insert Data -->

<?php 

$user = new Student;

if(isset($_POST["sub"])){
	
	$name = $_POST["name"];
	$dep = $_POST["dep"];
	$age = $_POST["age"];
	
	$user->setName($name);
	$user->setDept($dep);
	$user->setAge($age);
	
	$user->insertData();
	
	?>
	<div class="alert alert-success">
  <strong>Success!</strong> Data Inserted Successfully     <!--insert alert-->
</div>
	
<?php }?>



<!-- Read Data -->
	
	<div class="panel-heading"> 
	<h3>Students List <a class="pull-right btn btn-success" href="addstudent.php">Add</a></h3>
	</div>
	
	<div class="panel-body">
	
	
	<table class="table table-hover">
  <thead>
    <tr>
      <th class="bg-primary" scope="col">NO</th>
      <th class="bg-primary" scope="col">Name</th>
      <th class="bg-primary" scope="col">Department</th>
      <th class="bg-primary" scope="col">Age</th>
	  <th class="bg-primary" scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  
  <?php
  $i = 0;
  foreach($user->readAll() as $key => $value){
	  $i++;
	  ?>
  
  
    <tr>
      <td scope="row"><?php echo $i?></td>
      <td style=cursor: pointer; ><?php echo $value["name"]?></td>
      <td><?php echo $value["dep"]?></td>
      <td><?php echo $value["age"]?></td>
	   <td> 
	   <?php echo "<a class= 'btn btn-primary' href='editdata.php?action=edit&id=".$value['id']."'>EDIT </a>";?>
	  
	   <?php echo "<a class='btn btn-danger' href='delete.php?action=delete&id=".$value['id']."'
	              onclick='return confirm(\"Are you sure?\")' >DELETE</a>";?> 
		
	  
	  </td>
    </tr>
    
	<?php } ?>
	
  </tbody>
    </table>
	</div>
	
	
	<?php require_once("footer.php");?>
	