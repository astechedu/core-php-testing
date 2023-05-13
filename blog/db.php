<?php

class db {

    private string $db_host = 'localhost';
    private string $db_user = 'root';
	private string $db_password = '';
	private string $db_db = 'practice';
	
	private  $result = array();
    private  $conn;

	public function __construct() {

       $this->conn = new mysqli($this->db_host,$this->db_user,$this->db_password,$this->db_db);        
      
	}

	public function conn() {      
      //
	}

	public function addPost($author,$title,$post,$city,$password,$role) {
       
	    $sql = "insert into blogs(name,title,post,city,password,role) values('".$author."','".$title."','".$post."','".$city."','".$password."','".$role."')";
		 $result = $this->conn->query($sql); 
		 
       if($result){

          return true;
       }

          return false;       
      
	}

	public function authenticate($admin_name, $admin_password) {
        //$dmin_namea = real_escape_string($admin_name);
        //$dmin_passworda = real_escape_string($admin_password);

	    $sql = "select *from blogs WHERE name = '".$admin_name."' and password ='".$admin_password."'";
		 $result = $this->conn->query($sql); 
        $user = array();
		while($row = $result->fetch_array(MYSQLI_ASSOC))  {
           
          $user[] = $row;

		}         

		  return $user;	

	}	

	public function fetchall() {
	    $sql = 'select *from blogs';
		$result = $this->conn->query($sql);
		$data = array();        
		while( $row = $result->fetch_array(MYSQLI_ASSOC))  {

          $data[] = $row;
		}

		return $data;		
	}

	public function fetchbyid($id) {

	    $sql = 'select *from users where id='.$id;
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
    
    public function search($search) {

    	$sql = "select *from blogs where title like '%".$search."%'";
        $result = $this->conn->query($sql); 
        //$result = $query->fetch(MYSQLI_ASSOC);
        $data = array();

		while( $row = $result->fetch_array(MYSQLI_ASSOC))  {

          $data[] = $row;
		}
        
		return $data;	
        	
    }

	public function delete($id) {
       
       $sql = "drop table users where id = ".$id ;
       $query = mysqli_query($this->conn,$sql);

       if($query){
          return true;
       }

          return false; 
	}	

	public function __destruct() {
		$this->conn->close();
	}		

}

?>