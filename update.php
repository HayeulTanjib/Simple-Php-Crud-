<?php
require_once("student_sql.php");
?>

<!-- Update Data -->

<?php


$user = new Student;

if(isset($_POST["edit"])){
	
	$id = $_POST["id"];
	$name = $_POST["name"];
	$dep = $_POST["dep"];
	$age = $_POST["age"];
	
	$user -> setName($name);
	$user -> setdept($dep);
	$user -> setAge($age);
	
	
	
	if($user->updateData($id)){
		header("location:index.php?update");
	}
	
}












?>