<!-- PHP Search date between two dates -->
<!-- PHP Search date between two dates: Working -->

<?php

$sub_qry="";

if(isset($_POST['submit'])) {

  $from=$_POST['from'];
  $fromArr=explode("/", $from);
  $from=$fromArr[2]."-".$fromArr[0]."-".$fromArr[1];
  $from=$from." 00:00:00";

  $to=$_POST['to'];  
  $toArr=explode("/", $to);
  $to=$toArr[2]."-".$toArr[0]."-".$toArr[1];
  $to=$to." 23:59:59";

echo $from;

$sub_qry = " where created_at >= '$from' && created_at <= '$to'";

$con = new mysqli("localhost","root","","yii2");
$result = $con->query("select name,price from products $sub_qry order by id desc");


$serchedData = array();

if($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {       
    $serchedData[] = $row;  
      //echo "<pre>";print_r($serchedData);
  }
}

}

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Select a Date Range</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> 


</head>
<body>
 
  <!-- Select From and To Dates -->
  <h1>Fetch Data Between Two Dates: FromDate & ToDate</h1>
  <form action="" method="POST">
  <label for="from">From</label>
  <input type="text" id="from" name="from" required="required">
  <label for="to">to</label>
  <input type="text" id="to" name="to" required="required">
  <input type="submit" name="submit" value="Filter">
  </form>


<table border=2>
<thead>
  <tr>
    <th>Name</th><th>Price</th>
  </tr>
</thead>
<tbody>
<?php

if(isset($serchedData) && $serchedData !== '') {
  
  foreach($serchedData as $us) {
     echo "<tr>";
     echo "<td>".$us['name']."</td>";   
     echo "<td>"."$".$us['price']."</td>";  
     echo "</tr>";
  }

}?>
</tbody>
</table>





</body>
</html>

<script>
  $( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );
  
</script>
 
