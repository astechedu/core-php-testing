<?php
$csrf_token = bin2hex(random_bytes(32)); 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<input type="text" name="name">
		<input type="hidden" name="token" value="<?php echo $csrf_token;?>">
	</form>
</body>
</html>