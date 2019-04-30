<?php
require_once("db.php");
?>

<?php
 
class Student{
	
	public $table = "tbl_student";
	
	private $name;
	private $dep;
	private $age;
	
	public function setName($name){
		$this->name = $name;
	}
	public function setdept($dep){
		$this->dep = $dep;
	}
	public function setAge($age){
		$this->age = $age;
	}
	
	
	//Insert Data
	
	public function insertData(){
		
		$sql = "INSERT INTO $this->table(name,dep,age) VALUES(:name,:dep,:age)";
		
		$stmt = Db::prepareOwn($sql);
		
		$stmt->bindParam(":name",$this->name);
		$stmt->bindParam(":dep",$this->dep);
		$stmt->bindParam(":age",$this->age);
		
		return $stmt->execute();
	}

	//Read data for update
	
	
function readById($id){
		
		$sql = "SELECT * FROM $this->table WHERE id=:id";
		
		$stmt = Db::prepareOwn($sql);
		$stmt->bindParam(":id",$id);
		$stmt->execute();
		return $stmt->fetch();	
	}
	
	
	//Update Data
	
	
	function updateData($id){
		
		$sql = "UPDATE $this->table SET name=:name,dep=:dep,age=:age WHERE id=:id";
		$stmt = Db::prepareOwn($sql);
		$stmt->bindParam(":name",$this->name);
		$stmt->bindParam(":dep",$this->dep);
		$stmt->bindParam(":age",$this->age);
		$stmt->bindParam(":id",$id);
		return $stmt->execute();
	}
	

	
	//Read Data
	public function readAll(){
		
		$sql = "SELECT * FROM $this->table";
		$stmt = Db::prepareOwn($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	
	
	//Delete Data
	
	public function deleteData($id){
		
		$sql = "DELETE FROM $this->table WHERE id=:id";
		$stmt = Db::prepareOwn($sql);
		$stmt->bindParam(":id",$id);
		return $stmt->execute();
	}
	
}








?>