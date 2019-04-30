<?php require_once("header.php");?>



<div class="panel-heading"> 
	<h3>Please Add Student's Information<a class="pull-right btn btn-danger" href="index.php">Back</a></h3>
	</div>

<div class="panel-body">
	
<form action="index.php" method="POST">
  <div class="form-group">
    <label for="usr">Student Name</label>
    <input type="text" name="name" required="1" class="form-control" >
  </div>
  <div class="form-group">
    <label for="dep">Student Department</label>
    <input type="text" name="dep" required="1" class="form-control" >
  </div>
   <div class="form-group">
    <label for="sell">Student Age</label>
    <input type="text" name="age" required="1" class="form-control" >
  </div>
  
  <button type="submit" name="sub" class="btn btn-success">Submit</button>
  
</form>

</div>




<?php require_once("footer.php");?>