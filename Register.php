<!DOCTYPE html>
<html lang="en">
<?php
  require_once("head.php");
  require_once("connection.php");

  $error_fields = array();

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //validation
    if (!(isset($_POST['fname']) && !empty($_POST['fname']))) {
        $error_fields[] = "fname";
    }
    if (!(isset($_POST['lname']) && !empty($_POST['lname']))) {
        $error_fields[] = "lname";
    }
    if (!(isset($_POST['email']) && !empty($_POST['email']))) {
        $error_fields[] = "email";
    }
    if (!(isset($_POST['phone']) && !empty($_POST['phone']))) {
        $error_fields[] = "phone";
    }
    if (!(isset($_POST['address']) && !empty($_POST['address']))) {
        $error_fields[] = "address";
    }
    if (!(isset($_POST['password']) && !empty($_POST['password']))) {
        $error_fields[] = "password";
    }
    if (strlen($_POST['password'])<8) {
        $error_fields[] = "Cpassword";
    }

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

      if(count($error_fields)==0 )
      {
        $query = "INSERT INTO users (fname, lname, email, phone, address, password, admin)values('$fname','$lname', '$email', '$phone', '$address', '$password', '0')";
            if($conn->query($query))
            {
                header("Location: Login.php");
            }else{
                echo '<script>alert("Error");</script>';
            }
            $conn->close();
      }
      
    }


  ?>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Car<span>Book</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	      </button>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay">
      </div>

      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate pb-5" style="margin-bottom:25%; text-align:center;">
            <h1>Register</h1>
          </div>
        </div>
        <div class="row d-flex mb-5 contact-info" style="justify-content: center;margin-top: -20%;">
          <div class="col-md-8 block-9 mb-md-5">
            <form method="POST"  class="bg-light p-5 contact-form" style="border-radius: 13px;">
              <div class="form-group">
                <input type="text" class="form-control" name="fname" placeholder="First Name" value="<?=(isset($_POST['fname'])) ? $_POST['fname'] : '' ?>">
                <?php if (in_array("fname", $error_fields))
                    echo "*Please enter your First name"; ?>
                <br />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="lname" placeholder="Last Name" value="<?=(isset($_POST['lname'])) ? $_POST['lname'] : '' ?>">
                <?php if (in_array("lname", $error_fields))
                    echo "*Please enter your Last name"; ?>
                <br />
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" value="<?=(isset($_POST['email'])) ? $_POST['email'] : '' ?>">
                <?php if (in_array("email", $error_fields))
                    echo "*Please enter your Email"; ?>
                <br />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="Phone number" value="<?=(isset($_POST['phone'])) ? $_POST['phone'] : '' ?>">
                <?php if (in_array("phone", $error_fields))
                    echo "*Please enter your Phone number"; ?>
                <br />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="address" placeholder="Address" value="<?=(isset($_POST['address'])) ? $_POST['address'] : '' ?>">
                <?php if (in_array("address", $error_fields))
                    echo "*Please enter your address"; ?>
                <br />
              </div>
              <div class="form-group">
                <input type="Password" class="form-control" name="password" placeholder="Password" value="<?=(isset($_POST['password'])) ? $_POST['password'] : '' ?>">
                <?php if (in_array("password", $error_fields))
                    echo "*Please enter your password"; ?>
                <br />
                <?php if (in_array("Cpassword", $error_fields))
                    echo "*8 Characters at least"; ?>
                <br />
              </div>
              
              <div class="form-group">
                You have an account? <a href="Login.php"> Login</a>
                <br>
                <br>
                <input type="submit" style="    display: block;margin: auto;" value="Register" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?php
  require_once('scripts.php')
  ?>
    
  </body>
</html>