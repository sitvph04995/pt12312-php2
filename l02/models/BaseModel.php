<?php 
/**
* 
*/
class BaseModel
{
	static function where($arr = []){
		// tao ra lop static 
		$model = new static();
		// xay dung ra cau select voi table name tu lop static
		$model->queryBuilder = "select * from " . $model->tableName;
		$model->queryBuilder .= " where ";
		if(count($arr) == 2){
			$model->queryBuilder .= $arr[0] . " = '$arr[1]'"; 
		}
		if(count($arr) == 3){
			$model->queryBuilder .= $arr[0] . " " . $arr[1] . " '$arr[2]'"; 
		}
		
		return $model;
	}

	function andWhere($arr = []){
		$this->queryBuilder .= " and ";
		if(count($arr) == 2){
			$this->queryBuilder .= $arr[0] . " = '$arr[1]'"; 
		}
		if(count($arr) == 3){
			$this->queryBuilder .= $arr[0] . " " . $arr[1] . " '$arr[2]'"; 
		}
		
		return $this;
	}

	static function all(){

	}

	static function findOne($id){
		
	}

	function first(){

	}

	function orderBy($arr = []){

	}

	function delete(){

	}

	function get(){
		$conn = $this->getConnect();
		$stmt = $conn->prepare($this->queryBuilder);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
		return $result;
	}
	

	function getConnect()
	{
		$servername = '127.0.0.1';
		$dbname = 'php_1706';
		$dbusername = 'root';
		$dbpwd = '123456';
		$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $dbusername, $dbpwd);
		return $conn;
	}
}



 ?>