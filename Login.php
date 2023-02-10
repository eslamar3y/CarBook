<!DOCTYPE html>
<html lang="en">
  <?php
  $enter_fields=0;
    session_start();
    if($_SESSION)
			{
        header("Location: index.php");
      }
  // session_start();
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      //Connect to DB
      require_once('connection.php');
      //Escape any sepcial characters to avoid SQL Injection
      $email = mysqli_escape_string($conn, $_POST['email']);
      $password = $_POST['password'];
  
      //Select
      $query = "SELECT * FROM `users` WHERE `email` ='" . $email . "' and `password` = '" . $password . "' LIMIT 1";
      // $query = "SELECT * FROM `users` WHERE `email` ='" . $email . "' and `password` = '" . $password ;
  
      $result = mysqli_query($conn, $query);
      if ($row = mysqli_fetch_assoc($result)) {
          $_SESSION['id'] = $row['id'];
          $_SESSION['email'] = $row['email'];
          $_SESSION['fname'] = $row['fname'];
          $_SESSION['admin'] = $row['admin'];
          if ($row['admin'] == 1) {
              header("Location: admin/index.php");
              exit;
          } else {
              header("Location: index.php");
              exit;
          }
      } else {
            $enter_fields = 1;
      }
      //Close the connection
      mysqli_free_result($result);
      mysqli_close($conn);
  }
  ?>
  <body>
    <?php
      require_once("head.php");
    ?>
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
            <h1>Login</h1>
          </div>
        </div>
        <div class="row d-flex mb-5 contact-info" style="justify-content: center;margin-top: -20%;">
          <div class="col-md-8 block-9 mb-md-5">
            <form method="POST" class="bg-light p-5 contact-form" style="    border-radius: 13px;">
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="Password" name="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
              <?php 
                    if ($enter_fields)
                    echo "Wrong email or password"; ?>
                <!-- <br /> -->
              </div>
                You don't have an account? <a href="Register.php"> Register</a>
                <br>
                <br>
                <input type="submit" style="display: block;margin: auto;" value="Login" class="btn btn-primary py-3 px-5">
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
