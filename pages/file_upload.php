<?php

if(isset($_POST['submit'])) {  

$uploaddir = 'images/';
$uploadfile = $uploaddir.time().'_'.basename($_FILES['file']['name']);
//echo '<pre>';
if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {	
    echo "Possible file upload attack!\n";
}
//echo 'Here is some more debugging info:';
//print_r($_FILES);
//print "</pre>";
}

?>

<div class="container">
	<div class="row">
		<div class="col-md-6 m-auto mt-5">
			<form action="" method="post" enctype= multipart/form-data>
				<label class="form-label" for="customFile">Choose a File:</label>
				<input type="file" name="file" id="customFile" class="form-control" />
				<input type="submit" name="submit" value="FileUpload" class="mt-2 btn btn-info form-control" />
			<!--
			<label for="formFileMultiple" class="form-label">Multiple files input example</label>
			<input class="form-control" type="file" id="formFileMultiple" multiple />
			-->
			</form>
		</div>
	</div>
</div>