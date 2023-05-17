<?php 

include '../databases/db.php';



if(isset($_POST['submit'])){

  if($_SERVER['REQUEST_METHOD'] == "POST"){

    echo $username = $_POST['username'] ?? '';
    echo $salary = $_POST['salary'] ?? '';
    echo $city = $_POST['city'] ?? '';
    
    $username = validate($username);
    //$salary = validate($salary);
    $city = validate($city);

    $user = $db->add($pdo,$username,$salary,$city);

    if($user == 1){
      echo "User Added";
    }

  }

}


 function validate($data) {
    $data = trim($data);
    $data = htmlentities($data);
    return $data;
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
</navbar>


<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100" data-aos="fade-up" data-aos-duration="3000">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>


                <form class="mx-1 mx-md-4" method="post" action="">

                <form class="mx-1 mx-md-4">


                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">

                      <input type="text" name="username" id="form3Example1c" class="form-control" />

                      <input type="text" id="form3Example1c" class="form-control" />

                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">

                      <input type="text" name="salary" id="form3Example3c" class="form-control" />
                      <label class="form-label" for="form3Example3c">Salary</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="city" id="form3Example3c" class="form-control" />
                      <label class="form-label" for="form3Example3c">City</label>
                    </div>
                  </div>
             <!--
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
=======
>>>>>>> 08ed1290c5911b178bbb5e631f65ebcbcdc656b8
                      <input type="email" id="form3Example3c" class="form-control" />
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>
<<<<<<< HEAD
                 
=======
>>>>>>> 08ed1290c5911b178bbb5e631f65ebcbcdc656b8

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    </div>
                  </div>

<<<<<<< HEAD
                -->


                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>


                  <!--
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" class="btn btn-primary btn-lg">Register</button>
                  </div>
                   -->

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="submit" name="submit" value="submit" class="btn btn-primary btn-lg">
                  </div>



                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" class="btn btn-primary btn-lg">Register</button>
                  </div>


                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section


<!-- Footer -->
<footer>
<?php include '../partials/footer.php'; ?>
</footer>