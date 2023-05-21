<?php
session_start();

$html = '';
$vercode = true;

if (isset($_POST["vercode"]) != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
	 $vercode = false;
     $html = '<div class="text-danger"><strong>Incorrect verification code.</strong></div>';
} else {
	 $vercode = true;
     // add form data processing code here
     $html = '<div class="text-info"><strong>Verification successful.</strong></div>';
};
?>