<?php

class dbcon {

    private $db_host = 'localhost';
    private $db_user = 'root';
	private $db_password = '';
	private $db_db = 'phpcart';
	
	private $result = array();
    private $conn=null;

	public function __construct() {

       $this->conn = new mysqli($this->db_host,$this->db_user,$this->db_password,$this->db_db);  
      
	}

	public function conn() {      
      //
	}

	public function insert($product_id,$product_name,$product_price,$product_quantity) {
       
       $sql = "insert into products(id,name,price,quantity) values('".$product_id."','".$product_name."','".$product_price."','".$product_quantity."')";
       $query = $this->conn->query($sql);

       if($query){
          return true;
       }

        return false;       
      
	}

	public function fetchall() {
	    $sql = 'select *from products';
		$query = $this->conn->query($sql);
        $result = array();
		while( $row = $this->conn->fetch_assoc($query))  {

          $result[] = $row;
		}

		return $result;		
	}

	public function fetchByCode($code) {  	   

	    $sql = 'SELECT * FROM products WHERE code = '.$code;   

		$query = $this->conn->query($sql);

        $result = array();
		while( $row = $this->conn->fetch_assoc($query))  {
       //echo "<pre>";print_r($row);
          $result[] = $row;
		}

        //echo "<pre>"; print_r($result); exit;

		return $result;	

	}	

	public function fetchById($product_id) {

	    $sql = 'select *from products where id='.$product_id;
		$query = $this->conn->query($sql);
        $result = array();
		while( $row = $this->conn->fetch_assoc($query))  {

          $result[] = $row;
		}
       // echo "<pre>";print_r($result);
		return $result;	

	}	

	public function update() {
		
	}	

	public function edit() {
		
	}	

	public function fetchByJoin() {  	   

	    $sql = 'SELECT * FROM products p inner join categories c ON p.category_id=c.category_id';   

		$query = $this->conn->query($sql);

        $result = array();
		while( $row = $this->conn->fetch_assoc($query))  {
       //echo "<pre>";print_r($row);
          $result[] = $row;
		}

        //echo "<pre>"; print_r($result); exit;

		return $result;	

	}	

//SELECT p.Name, p.Price, p.Image
//FROM Product p
//INNER JOIN (ProductLookup pl) ON (p.Product_ID = pl.Product_ID)
//WHERE pl.Category_ID = 1

	public function fetchByCategoryName($category_name) {  	   

	    $sql = "SELECT * FROM  products p  inner join categories c ON p.category_id=c.category_id
	    where c.category_name = '$category_name'";	       

		$result = $this->conn->query($sql);

        $cats = array();
		while( $row = $result->fetch_assoc())  {
       
          $cats[] = $row;
		}        

		return $result;	

	}	
	

//-------------------------------------------------------------------------------------------
//$category_slug = $_GET['category'];
//$category_data = getSlugActive('categories',$category_slug);
//$category = mysqli_fetch_array($category_data);
//$cid = $category['id'];

	public function getSlugActive($table,$slug) {
		global $con;
		$query = "select * from $table WHERE slug='$slug' and status='0' LIMIT 1";
		return $query_run = $this->conn->query($query);
	}

    
	public function getProductByCatetory($category_id) {
		global $con;
		$query = "select * from products WHERE category_id='$category_id' and status='0'";
		return $query_run = $this->conn->query($query);
	}
//--------------------------------------------------------------------------------------------

	public function delete($product_id) {
       
       $sql = "drop table products where product_id = ".$product_id ;
       $query = $this->conn->query($sql);

       if($query){
          return true;
       }

          return false; 
	}	


	public function fetchAllCategories() {  	   

	    $sql = "SELECT * FROM categories";	       

		$query = $this->conn->query($sql);

        $result = array();
		while( $row = mysqli_fetch_assoc($query))  {
       
          $result[] = $row;
		}        

		return $result;	

	}	

	public function admin_login($email,$password) { 
		

	}

		public function __destruct() {
		$this->conn = $this->conn->close();
	}		

}


?>