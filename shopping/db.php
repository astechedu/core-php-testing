<?php

class db {

    private $db_host = 'localhost';
    private $db_user = 'root';
	private $db_password = '';
	private $db_db = 'practice';
	
	private $result = array();
    private $conn=null;

	public function __construct() {

      // $this->conn = mysqli_connect($this->db_host,$this->db_user,$this->db_password,$this->db_db);  
      $this->conn = new mysqli($this->db_host,$this->db_user,$this->db_password,$this->db_db);        
	}

	public function conn() {      
      //
	}

	public function insert($id,$name,$salary,$city) {
       
       $sql = "insert into products(id,name,salary,city) values('".$id."','".$name."','".$salary."','".$city."')";
       $query = mysqli_query($this->conn,$sql);

       if($query){
          return true;
       }

        return false;       
      
	}

	public function fetchall() {
	    $sql = 'select *from products';
		$result = $this->conn->query($sql);
        $products = array();
		while( $row = $result->fetch_array(MYSQLI_ASSOC))  {

          $products[] = $row;
		}

		return $products;		
	}

	public function fetchbyid($id) {

	    $sql = 'select *from products where id='.$id;
		$query = mysqli_query($this->conn,$sql);
        $result = array();
		while( $row = mysqli_fetch_array($query))  {

          $result[] = $row;
		}

		return $result;	

	}	

	public function update() {
		
	}	

	public function edit() {
		
	}	

	public function delete($id) {
       
       $sql = "drop table products where id = ".$id ;
       $query = mysqli_query($this->conn,$sql);

       if($query){
          return true;
       }

          return false; 
	}	

	public function __destruct() {
		$this->conn = mysqli_close($this->conn);
	}		

}

?>