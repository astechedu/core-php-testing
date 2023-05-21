    	<div class="row">   
    	    <div class="col-md-6 offset-3"> 
    	       <h1>Captcha Testing</h1>		
			   <div style="width:20rem; text-align: left;">
					<form name="" method="post">

					<input type="text" name="name" required="required" placeholder="Name" class="m-2 form-control" />

					<input type="email" name="email" required="required" placeholder="Email" class=" m-2 form-control" />
                 
					<input type="text" name="vercode" size="10" required="required" placeholder="Varification code type here" class="m-2 form-control" />
					<?php if($vercode == false){ echo $html='';}else{ echo $html;} ?>

					<img src="captcha/captcha.php" class="img">

					<input type="submit" name="submit" value="Submit" class="m-2 btn btn-info form-control" />
				   </form>
			  </div>
		   </div>
	    </div>




