<?php
session_start();

$html = '';
$vercode = true;

if(isset($_POST["submit"])){

	if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
		 
	     $html = '<span class="mx-2 text-danger"><strong>Incorrect verification code.</strong></span>';
	     $vercode = false;
	} else {	 
	     // add form data processing code here
	     $html = '<span class="mx-2 text-info"><strong>Verification successful.</strong></span>';
	     $vercode = true;
	};

}

?>