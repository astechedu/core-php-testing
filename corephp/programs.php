<?php
// Star Patterns
?>

<!DOCTYPE html>
<html>
<head>
	<title>Programs</title>
</head>
<body>
<h1>How to Reverse a Number?</h1>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="card text-white bg-black p-5">

<?php
//How to Reverse a Number


$num = 3344;
$rev = 0;

echo "Number: ".$num;
echo "<br>";

while($num > 1) {

$rem = $num%10;
$rev = ($rev * 10) + $rem;

$num /= 10;

}


echo "Reverse: ".$rev;






















// End of Code 


?>

			</div>
		</div>
	</div>
</div>
</body>
</html>