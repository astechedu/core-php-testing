<?php
class Database {
	private $pdo;
	public $host = 'localhost';
	public $user = 'root';
	public $pass = '';
	public $db = 'api';

	public function __construct(){
		//
    }

	public function connect(){
		try{
			$dsn = "mysql:host=".$this->host.";dbname=".$this->db;
			$this->pdo = new PDO($dsn, $this->user, $this->pass);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $this->pdo;
		}catch(PDOException $e){
			echo "Connection failed: <br />".$e->getMessage();
		}
	}

	public function close_pdo(){		
		$pdo = $this->connect();		
		$pdo = null;
	}

	public function getAllUsers(){
		try{
			$this->pdo = $this->connect();	
			$sql = "select *from users";	
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute();
			$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $users;

		}catch(PDOException $e){
			echo "Connection failed: <br />".$e->getMessage();
		}		
	}

	public function addUser($name, $age){
		    $this->pdo = $this->connect();	
		    $reqData = array('name' => filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS), 
		    	'age' => filter_var($age, FILTER_SANITIZE_NUMBER_INT)
		    );	

			$sql = "insert into users(name, age) values(:name, :age)";	
			$stmt = $this->pdo->prepare($sql);
			print_r($stmt->execute($reqData));
	}

	public function deleteUser($id){
		    $this->pdo = $this->connect();	
		    $reqData = array(
		    	'id' => filter_var($id, FILTER_SANITIZE_NUMBER_INT)
		    );	

		    $checkUserId = $this->findById($id);
		    if($checkUserId == 1){

			$sql = "delete from users where id=:id";	
			$stmt = $this->pdo->prepare($sql); 
			$stmt->execute($reqData);
			echo "Rcorod successfully deleted id=".$reqData['id'];
		    }else{
		    	echo "Recored not found: id=".$reqData['id'];
		    }	
	}
	public function findById($id){
		    $this->pdo = $this->connect();	
		    $reqData = array( 
		    	'id' => filter_var($id, FILTER_SANITIZE_NUMBER_INT)
		    );	

			$sql = "select id from users where id=:id";	
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute($reqData);
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			//print_r($result);
			
			if($result['id'] != '' && $reqData['id'] == $result['id']){ 
				return true;
			}else{
				return false;
			}       
	}

	public function checkUser($id){
		$this->pdo = $this->connect();	

		$stmt = $this->pdo->prepare('SELECT * FROM users WHERE ID="'.$id.'"');
		//$stmt->bindParam(1, $id, PDO::PARAM_INT);
		
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);	
		if(empty($row) ){		   
           return false;
		}else{ 			
			return true;			
		}
		   
	}
}


$db = new Database();
$db->connect();
//$db->findById(75);
if($db->checkUser(10) == true){
	echo "Recored found";
}else{
	echo "Recored not found";
}
//$db->addUser('a<a?jay> " " of 1=1 v',993);
//$db->deleteUser(29);
echo "<pre>";print_r($db->getAllUsers());
$db->close_pdo();
?>