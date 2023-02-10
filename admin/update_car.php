<?php
session_start();
$id=$_SESSION['id'];
$fname=$_SESSION['fname'];
$admin=$_SESSION['admin'];
if(!$id || $admin == 0)
{
  header("Location: ../index.php");
}
?>
<?php
$id=0;
require_once("../connection.php");
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	// do something with the number here
}
  function getfeature($featuresrow, $feature, $name)
  {
    if($featuresrow[$feature]==1)
    {
      ?>
      <input type="checkbox" checked name="<?=$feature?>" class="form-control" id="examplecarimage" placeholder=""> <?=$name?>
      <?php
    }
    else
    {
      ?>
      <input type="checkbox" name="<?=$feature?>" class="form-control" id="examplecarimage" placeholder=""> <?=$name?>
      <?php
    }
  }
  function IfResult($feature)
  {
    if(isset($_POST[$feature]))
      {
        return 1;
      }
      else
      {
        return 0;
      }
  }
  if($_SERVER['REQUEST_METHOD']=='POST')
{
  
  // car
  $name = mysqli_escape_string($conn, $_POST['name']);
  $company = mysqli_escape_string($conn, $_POST['company']);
  $description = mysqli_escape_string($conn, $_POST['description']);
  $rating = mysqli_escape_string($conn, $_POST['rating']);
  $hour = mysqli_escape_string($conn, $_POST['hour']);
  $day = mysqli_escape_string($conn, $_POST['day']);
  $month = mysqli_escape_string($conn, $_POST['month']);
  // Features  
  $Airconditions =IfResult('Airconditions');
  $Child_Seat =IfResult('Child_Seat');
  $GPS =IfResult('GPS');
  $Luggage =IfResult('Luggage');
  $Music =IfResult('Music');
  $Seat_Belt =IfResult('Seat_Belt');
  $Sleeping_Bed =IfResult('Sleeping_Bed');
  $Water =IfResult('Water');
  $Bluetooth =IfResult('Bluetooth');
  $Onboard_computer =IfResult('Onboard_computer');
  $Audio_input =IfResult('Audio_input');
  $Long_Term_Trips =IfResult('Long_Term_Trips');
  $Car_Kit =IfResult('Car_Kit');
  $Remote_central_locking =IfResult('Remote_central_locking');
  $Climate_control =IfResult('Climate_control');

  

  
  $FirstQuery = "UPDATE `cars` SET `name`='$name',`company`='$company',`description`='$description',`rating`='$rating',`hour`='$hour',`day`='$day',`month`='$month' WHERE `id` = '$id'";
  // $FirstQuery = "UPDATE `cars` where `id` = '$id' set('name','company','description','rating','hour','day','month') values( `$name`,`$company`,`$description`,`$ratign`,`$hour`,`$day`,`$month`)";
  $SecondQuery = "UPDATE `features` SET `Airconditions`='$Airconditions',`Child_Seat`='$Child_Seat',`GPS`='$GPS',`Luggage`='$Luggage',`Music`='$Music',`Seat_Belt`='$Seat_Belt',`Sleeping_Bed`='$Sleeping_Bed',`Water`='$Water',`Bluetooth`='$Bluetooth',`Onboard_computer`='$Onboard_computer',`Audio_input`='$Audio_input',`Long_Term_Trips`='$Long_Term_Trips',`Car_Kit`='$Car_Kit',`Remote_central_locking`='$Remote_central_locking',`Climate_control`='$Climate_control' WHERE `car_id`='$id'";
  // $SecondQuery = "UPDATE `features` where `car_id` = '$id' set('Airconditions','Child_Seat','GPS','Luggage','Music','Seat_Belt','Sleeping_Bed','Water','Bluetooth','Onboard_computer','Audio_input','Long_Term_Trips','Car_Kit','Remote_central_locking','Climate_control') values( `$Airconditions`,`$Child_Seat`,`$GPS`,`$Luggage`,`$Music`,`$Seat_Belt`,`$Sleeping_Bed`,`$Water`,`$Bluetooth`,`$Onboard_computer`,`$Audio_input`,`$Long_Term_Trips`,`$Car_Kit`,`$Remote_central_locking`,`$Climate_control`)";
  if(mysqli_query($conn, $FirstQuery) && mysqli_query($conn, $SecondQuery))
  {
    header("Location: all_cars.php?status=Updated");
  }
  else
  {
    ?>
    <script>
			swal("Error!", "An Error Occured, please try again!", "danger");
		</script>
		<?php
  }

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./assets/images/favicon.png" />
    <style>
        .div_center{
            text-align: center;
            padding-top:40px;
        }
        .div_center h1{
            font-size:20px;
            font-weight:bold;
        }
        .form-control{
            background-color: #2A3035 !important;
        }
        .form-control:focus{
            color: #fff !important;
        }

        table{
            margin-top: 20px;
        }
        table th{
            color: rgb(240, 239, 239) !important;
        }
        table tbody{
            color: rgb(174, 172, 172) !important;
        }
        #examplecarcategory{
            width: 100%;
            height: 40px;
            background-color: #2a3035;
            color: #fff !important;
            cursor: pointer;
        }
        #examplecarimage{
            height: fit-content;
            cursor: pointer;
        }
        input,select{
            border-radius: 10px !important;
        }
        .btntn{
            height: 40px;
            width: 120px;
            margin-left: auto;
            margin-right: 30px;
        }
        input[type="file"]
        {
            width: 95.5%;
            margin-left: 1%;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:./partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="./index.php"><img src="./assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="./index.php"><img src="./assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="./assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?=$fname?></h5>
                  <span>Admin</span>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="./index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#cars" aria-expanded="false" aria-controls="cars">
              <span class="menu-icon">
                <i class="mdi mdi-car"></i>
              </span>
              <span class="menu-title">Cars</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="cars">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="all_cars.php">All cars</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_car.php">Add car</a></li>
              </ul>
            </div>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="users.php">
                  <span class="menu-icon">
                    <i class="mdi mdi mdi-account-multiple"></i>
                  </span>
                  <span class="menu-title">Users</span>
                </a>
              </li>
         <li class="nav-item menu-items">
            <a class="nav-link" href="all_trips.php">
              <span class="menu-icon">
                <i class="mdi mdi-car-connected"></i>
              </span>
              <span class="menu-title">All trips</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:./partials/_navbar.php -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="./assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            
            <ul class="navbar-nav navbar-nav-right">
              
              
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="./assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?=$fname?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="../Logout.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php
              $select="SELECT * FROM `cars` WHERE `id` =" .$id. " LIMIT 1";
              $result=mysqli_query($conn,$select);
              $carrow=mysqli_fetch_assoc($result);

              $select2="SELECT * FROM `features` WHERE `car_id` =" .$id. " LIMIT 1";
              $result2=mysqli_query($conn,$select2);
              $featuresrow=mysqli_fetch_assoc($result2);
              ?>
            <form action="" method="POST" >
            <div class="div_center">
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <h1 class="card-title">Update car</h1>
                          <div class="form-group row">
                            <label for="exampletitle" class="col-sm-3 col-form-label">Car Name</label>
                            <div class="col-sm-9">
                              <input name="name" type="text" class="form-control" id="exampletitle" value="<?= $carrow['name'] ?>" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampletitle" class="col-sm-3 col-form-label">Company Name</label>
                            <div class="col-sm-9">
                              <input name="company" type="text" class="form-control" id="exampletitle" value="<?= $carrow['company'] ?>" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampledescription" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                              <textarea name="description" style="height: 120px" type="text" class="form-control" id="" required><?= $carrow['description'] ?></textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleprice" class="col-sm-3 col-form-label">Rating</label>
                            <div class="col-sm-9">
                              <input name="rating" type="number" max="5" min="1" class="form-control" value="<?= $carrow['rating'] ?>" id="exampleprice" placeholder="">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleprice" class="col-sm-3 col-form-label">per hour</label>
                            <div class="col-sm-9">
                              <input name="hour" type="number" class="form-control" value="<?= $carrow['hour'] ?>" id="exampleprice" placeholder="">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleprice" class="col-sm-3 col-form-label">per day</label>
                            <div class="col-sm-9">
                              <input name="day" type="number" class="form-control" value="<?= $carrow['day'] ?>" id="exampleprice" placeholder="">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="exampleprice" class="col-sm-3 col-form-label">per month</label>
                            <div class="col-sm-9">
                              <input name="month" type="number" class="form-control" value="<?= $carrow['month'] ?>" id="exampleprice" placeholder="">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="examplecarfeatures" class="col-sm-3 col-form-label">car features</label>
                            <div class="col-sm-9" style="display: flex;flex-wrap: wrap;line-height: 3;">
                                <div class="col-md-4">
                                  <?php 
                                      getfeature($featuresrow, "Airconditions", "Airconditions");
                                  ?>
                                </div>
                                <div class="col-md-4">
                                    <!-- <input type="checkbox" name="Child_Seat" class="form-control" id="examplecarimage" placeholder=""> Child Seat -->
                                    <?php 
                                      getfeature($featuresrow, "Child_Seat", "Child Seat");
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <!-- <input type="checkbox" name="GPS" class="form-control" id="examplecarimage" placeholder=""> GPS -->
                                    <?php 
                                      getfeature($featuresrow, "GPS", "GPS");
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <!-- <input type="checkbox" name="Luggage" class="form-control" id="examplecarimage" placeholder=""> Luggage -->
                                    <?php 
                                      getfeature($featuresrow, "Luggage", "Luggage");
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <!-- <input type="checkbox" name="Music" class="form-control" id="examplecarimage" placeholder=""> Music -->
                                    <?php 
                                      getfeature($featuresrow, "Music", "Music");
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <!-- <input type="checkbox" name="Seat_Belt" class="form-control" id="examplecarimage" placeholder=""> Seat Belt -->
                                    <?php 
                                      getfeature($featuresrow, "Seat_Belt", "Seat Belt");
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <!-- <input type="checkbox" name="Sleeping_Bed" class="form-control" id="examplecarimage" placeholder=""> Sleeping Bed -->
                                    <?php 
                                      getfeature($featuresrow, "Sleeping_Bed", "Sleeping Bed");
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <!-- <input type="checkbox" name="Water" class="form-control" id="examplecarimage" placeholder=""> Water -->
                                    <?php 
                                      getfeature($featuresrow, "Water", "Water");
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <!-- <input type="checkbox" name="Bluetooth" class="form-control" id="examplecarimage" placeholder=""> Bluetooth -->
                                    <?php 
                                      getfeature($featuresrow, "Bluetooth", "Bluetooth");
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <!-- <input type="checkbox" name="Onboard_computer" class="form-control" id="examplecarimage" placeholder=""> Onboard computer -->
                                    <?php 
                                      getfeature($featuresrow, "Onboard_computer", "Onboard computer");
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <!-- <input type="checkbox" name="Audio_input" class="form-control" id="examplecarimage" placeholder=""> Audio input -->
                                    <?php 
                                      getfeature($featuresrow, "Audio_input", "Audio input");
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <!-- <input type="checkbox" name="Long_Term_Trips" class="form-control" id="examplecarimage" placeholder=""> Long Term Trips -->
                                    <?php 
                                      getfeature($featuresrow, "Long_Term_Trips", "Long Term Trips");
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <!-- <input type="checkbox" name="Car_Kit" class="form-control" id="examplecarimage" placeholder=""> Car Kit -->
                                    <?php 
                                      getfeature($featuresrow, "Car_Kit", "Car Kit");
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <!-- <input type="checkbox" name="Remote_central_locking" class="form-control" id="examplecarimage" placeholder=""> Remote central locking -->
                                    <?php 
                                      getfeature($featuresrow, "Remote_central_locking", "Remote central locking");
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <!-- <input type="checkbox" name="Climate_control" class="form-control" id="examplecarimage" placeholder=""> Climate control -->
                                    <?php 
                                      getfeature($featuresrow, "Climate_control", "Climate control");
                                    ?>
                                </div>
                            </div>
                          </div>
                        </div>
                        
                        <button type="submit" class=" btntn btn btn-primary">Submit</button>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </form>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
</div>
    <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="./assets/js/off-canvas.js"></script>
    <script src="./assets/js/hoverable-collapse.js"></script>
    <script src="./assets/js/misc.js"></script>
    <script src="./assets/js/settings.js"></script>
    <script src="./assets/js/todolist.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <!-- endinject -->
  </body>
</html>
<?php

?>