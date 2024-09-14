<?php
// Star Patterns
?>

<!DOCTYPE html>
<html>
<head>
	<title>Star Patterns</title>
</head>
<body>
<h1>Star Pattern</h1>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="card text-white bg-black p-5">

<?php
//Star Printing 

$no=5;
$nos=0;

for($i=0; $i<$no;){                     //$nos=0, $i=0;
  
	if($nos <= $i){

		echo "&nbsp;"."*"."&nbsp;";
		$nos++;                         //$nos=1, $i=0;

	}else{

 		echo "<br>";                  //
 		$nos=0;
 		$i++;                         //$nos=0, $i=1
	}
       
}



// End of Code 




?>

			</div>
		</div>
	</div>
</div>
</body>
</html>






























<?php
/*
//Star Printing 
$n=5;
$nos=0;
 for($i=0;$i<$n;) {

   if($nos <= $i){	       
	     echo "&nbsp;*&nbsp;";   
	     $nos++;
   }else{
	 	//echo "&nbsp;"."*"."&nbsp;";
	 	echo "<br>"; 
	 	$nos=0;
	 	$i++;
   }
 }  
// End of Code 
*/
?>