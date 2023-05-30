<?php 
include 'DatabaseInterface.php';
include 'DatabaseMethods.php';

class MySQLDriver extends 
DatabaseMethods implements DatabaseInterface { 
    public function __construct($host, $db, $uid, $password) 
    { 
        parent::__construct($host, $db, $uid, $password);   

         $this->host = $host;
         $this->db = $db;
         $this->uid = $uid;
         $this->password = $password;
    } 

    public function db_connect() 
    {          
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=utf8mb4";

          try{

            $pdo = new PDO($dsn, $this->uid, $this->password);           
            
            return $pdo;

          }catch(PDOException $e){

              return $e->getMessage();  
              exit;            
          }

    }

    public function select($pdo) 
    {      
        $result = array();
        //$dsn = "mysql:host=$this->host;dbname=$this->db;charset=utf8mb4";
        $options = [
          PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
        ];

          try{

            //$pdo = new PDO($dsn, $this->uid, $this->password, $options);
            $stmt = $pdo->prepare('select *from users');
            $stmt->execute();
            //echo "<pre>";print_r($stmt->fetchAll());
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            

          }catch(PDOException $e){

              return $e->getMessage();              
          }
             
    } 

    public function authenticate($pdo,$username,$password) 
    { 
      echo "<pre>";print_r($pdo);
         //$result = array();
        //$dsn = "mysql:host=$this->host;dbname=$this->db;charset=utf8mb4";
        $options = [
          PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
        ];

          try{

            //$pdo = new PDO($dsn, $this->uid, $this->password, $options);
            $stmt = $pdo->prepare('select *from users where name = :username and password = :password');
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            //echo "<pre>";print_r($stmt->fetchAll());
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            

          }catch(PDOException $e){

              return $e->getMessage();              
          }      
    } 

    public function remove($where) 
    { 
    } 
    public function add($pdo, $username, $salary, $city) 
    { 
        //$result = array();
        //$dsn = "mysql:host=$this->host;dbname=$this->db;charset=utf8mb4";
        $options = [
          PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
        ];

          try{

            //$pdo = new PDO($dsn, $this->uid, $this->password, $options);
            $stmt = $pdo->prepare('insert into users(name,salary,city) value(name=:username,salary=:salary,city=:city)');
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':salary', $salary);
            $stmt->bindParam(':city', $city);
            $stmt->execute();
            //echo "<pre>";print_r($stmt->fetchAll());           
            return true;
            
          }catch(PDOException $e){

              echo $e->getMessage();    
              echo $e->getLine(); 
              echo $e->getCode();           
          }      


    } 
    public function get($where) { 

    } 
    public function update($where) {
        
    } 
} 
?>
