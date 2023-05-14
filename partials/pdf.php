<?php

// Require composer autoload
require_once __DIR__ . '/../vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();


// Beginning Buffer to save PHP variables and HTML tags
ob_start();

$day = date('d');
$year = date('Y');
$month = date('F');


$html="
	 <table border='1' width='100%' cellpadding='10' cellspacing='0'>
	  <thead>
	  <tr>
	    <th>Id</th>
	    <th>Name</th>
	    <th>Salary</th>
	  </tr>
	  </thead>
	  <tbody>
";

$html.='<tr>
	    <td>'.$_POST['id'].'</td>
	    <td>'.$_POST['name'].'</td>
	    <td>'.$_POST['salary'].'</td>	    
	  </tr>	  
';


$html.="
	</tbody>
	</table> 
";



//Set html header in table
$mpdf->setHTMLHeader("<h2 style='text-align:center;'>Daily Work Report:</h2>
                     <div style=''></div>
	               ");
// Write some HTML code:
$mpdf->WriteHTML($html);

//Set html Footer in table
$mpdf->setHTMLHeader("<p style='text-align:center;'>{PAGENO}</p>");


//Write a file name to download
//$file = "user_report.pdf";

// Output a PDF file directly to the browser
//$mpdf->Output($file,'D');

$mpdf->Output();

?>

	
