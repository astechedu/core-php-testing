<?php

class dbcon {

    private $db_host = 'localhost';
    private $db_user = 'root';
	private $db_password = '';
	private $db_db = 'phpcart';
	
	private $result = array();
    private $conn=null;

	public function __construct() {

       $this->conn = mysqli_connect($this->db_host,$this->db_user,$this->db_password,$this->db_db);  
      
	}

	public function conn() {      
      //
	}

	public function insert($product_id,$product_name,$product_price,$product_quantity) {
       
       $sql = "insert into products(id,name,price,quantity) values('".$product_id."','".$product_name."','".$product_price."','".$product_quantity."')";
       $query = mysqli_query($this->conn,$sql);

       if($query){
          return true;
       }

        return false;       
      
	}

	public function fetchall() {
	    $sql = 'select *from products';
		$query = mysqli_query($this->conn,$sql);
        $result = array();
		while( $row = mysqli_fetch_assoc($query))  {

          $result[] = $row;
		}

		return $result;		
	}

	public function fetchByCode($code) {  	   
	    $sql = 'select * from products where code = '.$code;   
		$query = mysqli_query($this->conn,$sql);
        $result = array();
		while( $row = mysqli_fetch_array($query))  {
       echo "<pre>";print_r($row);
          $result[] = $row;
		}
   echo "<pre>"; print_r($result); exit;
		return $result;	

	}	

	public function fetchbyid($product_id) {

	    $sql = 'select *from products where id='.$product_id;
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

	public function delete($product_id) {
       
       $sql = "drop table products where product_id = ".$product_id ;
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