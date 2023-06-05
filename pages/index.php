<?php

include "databases/db.php";

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}

$total_records = count($db->select($pdo));
$limit = 3;
$total_page = ceil($total_records / $limit);
$offset = ($page - 1) * $limit;

$pagi = $db->pagination($pdo, $offset, $limit);

?>


<!DOCTYPE html>
<html>
   <head>
      <title>Home</title>
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Salary</th>
                        <th scope="col">City</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach($pagi as $user) { ?>
                     <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['salary'] ?></td>
                        <td><?= $user['city'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['created'] ?></td>
                        <td><?= $user['updated'] ?></td>
                        <td scope="col">
                           <a href="#" class="btn btn-info">Edit</a>
                           <a href="#" class="btn btn-danger">Remove</a>
                           <a href="#" class="btn btn-success">View</a>
                        </td>
                     </tr>
                     <?php } ?>        
                  </tbody>
               </table>
            </div>
         </div>
      </div>
    

<nav aria-label="Page navigation example">
	<ul class="pagination">		
		<?php if ($page > 1) { ?>
		<li class="page-item"><a class="page-link" href="?page=<?= ($page - 1) ?>">Previous</a></li>
		<?php } ?>
<?php for ($i = 1; $i < $total_page; $i++) {
    echo '		  	    
	    <li class="page-item"><a class="page-link" href="?page=' .
        $i .
        '">' .
        $i .
        '</a></li>	    	  
	   ';
} ?>      <?php if ($total_page > $page) { ?>
        <li class="page-item"><a class="page-link" href="?page=<?= ($page + 1) ?>">Next</a></li>
        <?php } ?>
	</ul>	
</nav>

</body>
</html>

