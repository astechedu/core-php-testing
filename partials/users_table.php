  <div class="row">   
   <div class="col-md-10">
       <caption>Users Listing</caption>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th><th>Name</th><th>Salary</th><th>City</th><th>Actions</th>
            </tr>
          </thead>
          <tbody>    
            <?php foreach($db_conn->fetchall() as $record) { ?>     
              <tr>    
      <td>
        <?= $record['id'] ?></td> <td><?= $record['name'] ?></td>
         <td><?= $record['salary'] ?></td> <td><?= $record['city'] ?></td> 
        <td> 
        <a href="/?action=d&id=<?= $record['id'] ?>" class="btn btn-xs btn-danger">Trash</a>           
       <!-- <a href="/?action=e&id=<?= $record['id'] ?>" class="btn btn-xs btn-info">Edit</a> -->
                  <!-- Rrash -->
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal" id="edit">
            Edit
          </button>

        <!-- <a href="/?action=v&id=<?= $record['id'] ?>" class="btn btn-xs btn-success" id="view">View</a> -->
           <input type="hidden" name="id" value="<?= $record['id'] ?>" id="vid">
           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalView" id="view">
            View
          </button> 
          
          <a href="#" class="btn btn-xs btn-secondary" id="pdfdownload">Download pdf</a>
          <input type="hidden" name="id" value="<?php echo $record['id']; ?>" id="id">   
          <input type="hidden" name="name" value="<?php echo $record['name']; ?>" id="name">   
          <input type="hidden" name="salary" value="<?php echo $record['salary']; ?>" id="salary">

        </td> 
        </tr> <?php } ?>    


</tbody>
</table> 


