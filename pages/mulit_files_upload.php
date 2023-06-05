<?php

if(isset($_POST['submit'])){

    $countfiles = count($_FILES['file']['name']);

    $totalFileUploaded = 0;
    for($i=0;$i<$countfiles;$i++){
         $filename = $_FILES['file']['name'][$i];

         ## Location
         $location = "../images/".time().'_'.$filename;
         $extension = pathinfo($location,PATHINFO_EXTENSION);
         $extension = strtolower($extension);

         ## File upload allowed extensions
         $valid_extensions = array("jpg","jpeg","png","pdf","docx");

         $response = 0;
         ## Check file extension
         if(in_array(strtolower($extension), $valid_extensions)) {
              ## Upload file
              if(move_uploaded_file($_FILES['file']['tmp_name'][$i],$location)){

                   echo "file name : ".$filename."<br/>";

                   $totalFileUploaded++;
              }
         }

    }
    echo "Total File uploaded : ".$totalFileUploaded;
}

?>


      <!-- Header -->
      <header id="header">
         <?php include '../partials/header.php'; ?>
      </header>
      <!-- Header -->
      <navbar id="navbar">
      <div class="container">
         <?php include '../partials/navbar.php'; ?>
      </div>

<div class="container">
	<div class="row">

	<h1>Multi Files Uploading</h1>
		<div class="col-md-6 m-auto mt-5">
			<form action="" method="post" enctype= multipart/form-data>
				<label class="form-label1" for="customFile1">Choose a File 1:</label>
				<input type="file" name="file[]" id="customFile" class="form-control" />
				<label class="form-label2" for="customFile2">Choose a File 2:</label>
				<input type="file" name="file[]" id="customFile" class="form-control" />
				<input type="submit" name="submit" value="FileUpload" class="mt-2 btn btn-info form-control" />
			<!--
			<label for="formFileMultiple" class="form-label">Multiple files input example</label>
			<input class="form-control" type="file" id="formFileMultiple" multiple />
			-->
			</form>
		</div>
	</div>
</div>

<!-- Footer -->
<footer id="footer">
   <?php include '../partials/footer.php'; ?>
</footer>