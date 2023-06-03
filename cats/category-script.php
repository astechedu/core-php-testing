<?php
//Show Categories
function show_category(){     

        include 'database.php';	     
        
        $sql1 = "select * from categories";

		$res = mysqli_query($conn, $sql1);		   
        $data=array();
        if($res->num_rows > 0){

        	while($row = mysqli_fetch_assoc($res)){
               $data[] = $row;
        	}

        }
		return $data;
}


//Adding Categories
 function add_category(){

      if(isset($_POST['addcat'])){  

        include 'database.php';	

        $cat_name = $_POST['category_name']??'';
        
        $sql1 = "select * from categories where category_name='".$cat_name."'";

		$res = mysqli_query($conn, $sql1);	

		//echo "<pre>"; print_r($res);	

		if($res->num_rows > 0){

			$cat_name."Category already exits";

		}else{

        	$sql1 = 'insert into categories(category_name) values("'.$cat_name.'")';

        	$res = mysqli_query($conn, $sql1);

          if($res){ 

        	echo "Added Category...";         

          }

        }

      }     
}


//Adding Sub Categories

 function add_sub_category(){

      if(isset($_POST['addcat'])){  

        include 'database.php';
         
        $cat_name = $_POST['category_name']??'';
        
        $sql1 = "select * from categories where category_name='".$cat_name."'";

		$res = mysqli_query($conn, $sql1);	

		//echo "<pre>"; print_r($res);	

		if($res->num_rows > 0){

			$cat_name."Category already exits";

		}else{

        	$sql1 = 'insert into categories(category_name) values("'.$cat_name.'")';

        	$res = mysqli_query($conn, $sql1);

          if($res){ 

        	echo "Added Sub Category...";         

          }

        }

      }     
}


?>

