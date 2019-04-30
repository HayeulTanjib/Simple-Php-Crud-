<?php
require_once("header.php");
require_once("student_sql.php");
?>

<!-- Edit Data -->

<?php
$user = new Student;

if (isset($_GET["action"]) && $_GET["action"] == "edit"){
	
	$id = $_GET["id"];
	$result = $user->readById($id);
}
?>


<div class="panel-heading"> 
	<h3>Please Update Your Information<a class="pull-right btn btn-danger" href="index.php">Back</a></h3>
	</div>

<div class="panel-body">
	
<form action="update.php" method="POST">

  <div class="form-group">
    <label for="usr"></label>
    <input type="hidden" name="id" value="<?php echo $result ['id'];?>"  required="1" class="form-control" >
  </div>
  
  <div class="form-group">
    <label for="dep">Student Name</label>
    <input type="text" name="name"  value="<?php echo $result ['name'];?>"  required="1" class="form-control" >
  </div>
  
  <div class="form-group">
    <label for="dep">Student Department</label>
    <input type="text" name="dep"  value="<?php echo $result ['dep'];?>" required="1" class="form-control" >
  </div>
  
   <div class="form-group">
    <label for="sell">Student Age</label>
    <input type="text" name="age"  value="<?php echo $result ["age"];?>" required="1" class="form-control" >
  </div>
  
  <button type="submit" name="edit" class="btn btn-primary">Update</button>
  
</form>
</div>















<?php require_once("footer.php");?>