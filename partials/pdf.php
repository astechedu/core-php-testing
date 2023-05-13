<?php

// Require composer autoload
require_once __DIR__ . '/../vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

echo $_POST['userid'];

$html='
	 <table>
	  <tr>
	    <th>Company</th>
	    <th>Contact</th>
	    <th>Country</th>
	  </tr>
	  <tr>
	    <td>"'.$_POST["userid"].'"</td>
	    <td>Maria Anders</td>
	    <td>Germany</td>
	  </tr>
	</table> 
';

// Write some HTML code:
$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output();

?>

	  