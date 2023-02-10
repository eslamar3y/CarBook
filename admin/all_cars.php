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
$status=0;
require_once("../connection.php");
if(isset($_GET['status'])) {
	$status = $_GET['status'];
	// do something with the number here
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
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./assets/images/favicon.png" />
    <style>
      td
        {
            white-space:break-spaces !important;
        }
        input:hover
        {
          color: #fff !important;
        }
        textarea:hover
        {
          color: #fff !important;
        }
        @media (max-width: 1330px) 
        {
          .tableDev
          {
            overflow-x: scroll;
          }
        }
    </style>
    <?php
      require_once("../Connection.php");
    ?>
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
                <li class="nav-item "> <a class="nav-link" href="add_car.php">Add car</a></li>
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
            <div class="tableDev">
              <table class="table table-dark table-columns">
            </div>
                <thead>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Company</th>
                  <th>Description</th>
                  <th>Rating</th>
                  <th>Per hour</th>
                  <th>per day</th>
                  <th>per month</th>
                  <th>Image</th>
                  <th colspan="2" style="text-align: center">Actions</th>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT * FROM `cars`";
              
                  $result = mysqli_query($conn, $query);
                  while ($row = mysqli_fetch_array($result)) 
                  {
                  ?>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['company']?></td>
                        <td><?=$row['description']?></td>
                        <td><?=$row['rating']?></td>
                        <td><?=$row['hour']?></td>
                        <td><?=$row['day']?></td>
                        <td><?=$row['month']?></td>
                        <td><img class="img-responsive" style="width: 100px;height: 100px;" src="../images/Cars/<?=$row['pic']?>" alt=""></td>
                        <td><a onclick="return confirm('Are you sure you want to delete <?=$row['name']?>')" href="delete_car.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a></td>
                        <td><a class="btn btn-warning"  href="update_car.php?id=<?=$row['id']?>">Update</a></td>
                        
                    </tr>
                    <?php
                  }
                    ?>
                </tbody>
              </table>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
</div>
    <!-- plugins:js -->
    <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./assets/js/off-canvas.js"></script>
    <script src="./assets/js/hoverable-collapse.js"></script>
    <script src="./assets/js/misc.js"></script>
    <script src="./assets/js/settings.js"></script>
    <script src="./assets/js/todolist.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
    <!-- endinject -->
    <?php
    if ($status =='Added')
    {
      ?>
      <script>
        swal("Done!", "Car Added Succesfully!", "success");
      </script>
      <?php
    }
    if ($status =='Updated')
    {
      ?>
      <script>
        swal("Done!", "Car Updated Succesfully!", "success");
      </script>
      <?php
    }
    ?>
  </body>
</html>
