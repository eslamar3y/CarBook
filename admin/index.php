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

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css">
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <style>
      a
      {
        color: #6c7293;
      }
      a:hover
      {
        color: #ddd;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.php -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
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
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- In Use -->
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
              <span class="menu-title">All Trips</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.php -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            
            <ul class="navbar-nav navbar-nav-right">
              
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
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
                </div>
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
            
            
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title">Recent Users</h4>
                      <p class="text-muted mb-1 small"><a  href="./users.php">View all</a></p>
                    </div>
                    <div class="preview-list">
                    <?php
                        require_once('../Connection.php');
                        $query = "SELECT * FROM `users`  ORDER BY id DESC Limit 4";                    
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) 
                        {
                        ?>
                          <div class="preview-item border-bottom">
                            <div class="preview-item-content d-flex flex-grow">
                              <div class="flex-grow">
                                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                  <h6 class="preview-subject"><?=$row['fname']?></h6>
                                  <p class="text-muted text-small"><?php 
                                  if($row['admin']==1) 
                                  {
                                    echo "Admin";
                                  }else
                                  {
                                    echo "User";
                                  }
                                  ?></p>
                                </div>
                                <p class="text-muted"><?=$row['email']?></p>
                              </div>
                            </div>
                          </div>
                        <?php
                        }
                        ?>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Available Cars</h4>
                      <p class="text-muted mb-1"><a  href="./all_cars.php">View all</a></p>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <?php
                          require_once('../Connection.php');
                          $query = "SELECT * FROM `cars` Limit 5";                      
                          $result = mysqli_query($conn, $query);
                          $count = 0;
                          while ($row = mysqli_fetch_array($result)) 
                          {
                            $count++;
                            if($count==5)
                            {
                              ?>
                                    <div class="preview-item">
                                  <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                    <img class="img-responsive" src="../images/Cars/<?=$row['pic']?>" alt="">
                                    </div>
                                  </div>
                                  <div class="preview-item-content d-sm-flex flex-grow">
                                    <div class="flex-grow">
                                      <h6 class="preview-subject"><?=$row['name']?></h6>
                                      <p class="text-muted mb-0"><?=$row['company']?></p>
                                    </div>
                                    <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <?php
                                    $rate = $row['rating'];
                                    $counter=1;
                                    for($i = 0; $i <5; $i++) 
                                    {
                                      if($counter<=$rate)
                                      {
                                        $counter++;
                                        ?>
                                        <p class="text-muted mb-0" style="display:inline;"><img style="width:10px;" src="./assets/images/star1.png" alt=""></p>
                                        <?php
                                      }
                                      else
                                      {
                                        ?>
                                        <p class="text-muted mb-0"style="display:inline;"><img style="width:10px;" src="./assets/images/star2.png" alt=""></p>
                                        <?php
                                      }
                                      ?>
                                      <?php
                                    }
                                    ?>
                                    </div>
                                  </div>
                                </div>
                              <?php
                              break;
                            }
                                ?>
                              <div class="preview-item border-bottom">
                                <div class="preview-thumbnail">
                                  <!-- <div class="preview-icon bg-primary"> -->
                                    <!-- <i class="mdi mdi-file-document"></i> -->
                                    <img class="img-responsive" src="../images/Cars/<?=$row['pic']?>" alt="">
                                  <!-- </div> -->
                                </div>
                                <div class="preview-item-content d-sm-flex flex-grow">
                                  <div class="flex-grow">
                                    <h6 class="preview-subject"><?=$row['name']?></h6>
                                    <p class="text-muted mb-0"><?=$row['company']?></p>
                                  </div>
                                  <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                    <?php
                                    $rate = $row['rating'];
                                    $counter=1;
                                    for($i = 0; $i <5; $i++) 
                                    {
                                      if($counter<=$rate)
                                      {
                                        $counter++;
                                        ?>
                                        <p class="text-muted mb-0" style="display:inline;"><img style="width:10px;" src="./assets/images/star1.png" alt=""></p>
                                        <?php
                                      }
                                      else
                                      {
                                        ?>
                                        <p class="text-muted mb-0"style="display:inline;"><img style="width:10px;" src="./assets/images/star2.png" alt=""></p>
                                        <?php
                                      }
                                      ?>
                                      <?php
                                    }
                                    ?>
                                    
                                    
                                    
                                    <!-- <p class="text-muted mb-0">30 tasks, 5 issues </p> -->
                                  </div>
                                </div>
                              </div>
                            <?php
                            
                            
                          }
                          ?>
                          <!-- <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-success">
                                <i class="mdi mdi-cloud-download"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Wordpress Development</h6>
                                <p class="text-muted mb-0">Upload new design</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">1 hour ago</p>
                                <p class="text-muted mb-0">23 tasks, 5 issues </p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-info">
                                <i class="mdi mdi-clock"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Project meeting</h6>
                                <p class="text-muted mb-0">New project discussion</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">35 minutes ago</p>
                                <p class="text-muted mb-0">15 tasks, 2 issues</p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-danger">
                                <i class="mdi mdi-email-open"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Broadcast Mail</h6>
                                <p class="text-muted mb-0">Sent release details to team</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">55 minutes ago</p>
                                <p class="text-muted mb-0">35 tasks, 7 issues </p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-warning">
                                <i class="mdi mdi-chart-pie"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">UI Design</h6>
                                <p class="text-muted mb-0">New application planning</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">50 minutes ago</p>
                                <p class="text-muted mb-0">27 tasks, 4 issues </p>
                              </div>
                            </div>
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title">Trips Status</h4>
                      <p class="text-muted mb-1"><a  href="./all_trips.php">View all</a></p>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>User ID</th>
                            <th>Car ID</th>
                            <th>Pick location</th>
                            <th>Drop location</th>
                            <th>Pick date</th>
                            <th>Drop date</th>
                            <th>Pick time</th>
                            <th>Reserve date</th>
                            <th >Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $query = "SELECT * FROM `trips` Limit 5";                      
                          $result = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_array($result)) 
                          {
                          ?>
                          <tr>
                              <td><?=$row['id']?></td>
                              <td><?=$row['user_id']?></td>
                              <td><?=$row['car_id']?></td>
                              <td><?=$row['pick_location']?></td>
                              <td><?=$row['drop_location']?></td>
                              <td><?=$row['pick_date']?></td>
                              <td><?=$row['drop_date']?></td>
                              <td><?=$row['pick_time']?></td>
                              <td><?=$row['reserve_date']?></td>
                            <td>
                              <?php
                              if($row['trip_status']=="Processing")
                              {
                                ?>
                                <div class="badge badge-outline-info">Processing</div>
                                <?php
                              }else if($row['trip_status']=="Approved")
                              {
                                ?>
                                <div class="badge badge-outline-warning">Approved</div>
                                <?php
                              }
                              else if($row['trip_status']=="Finished")
                              {
                                ?>
                                <div class="badge badge-outline-success">Finished</div>
                                <?php
                              }
                              ?>
                            </td>
                          </tr>
                          <?php
                          }
                          ?>
                          <!-- <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="assets/images/faces/face2.jpg" alt="image" />
                              <span class="pl-2">Estella Bryan</span>
                            </td>
                            <td> 02312 </td>
                            <td> $14,500 </td>
                            <td> Website </td>
                            <td> Cash on delivered </td>
                            <td> 04 Dec 2019 </td>
                            <td>
                              <div class="badge badge-outline-warning">Pending</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="assets/images/faces/face5.jpg" alt="image" />
                              <span class="pl-2">Lucy Abbott</span>
                            </td>
                            <td> 02312 </td>
                            <td> $14,500 </td>
                            <td> App design </td>
                            <td> Credit card </td>
                            <td> 04 Dec 2019 </td>
                            <td>
                              <div class="badge badge-outline-danger">Rejected</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="assets/images/faces/face3.jpg" alt="image" />
                              <span class="pl-2">Peter Gill</span>
                            </td>
                            <td> 02312 </td>
                            <td> $14,500 </td>
                            <td> Development </td>
                            <td> Online Payment </td>
                            <td> 04 Dec 2019 </td>
                            <td>
                              <div class="badge badge-outline-success">Approved</div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="assets/images/faces/face4.jpg" alt="image" />
                              <span class="pl-2">Sallie Reyes</span>
                            </td>
                            <td> 02312 </td>
                            <td> $14,500 </td>
                            <td> Website </td>
                            <td> Credit card </td>
                            <td> 04 Dec 2019 </td>
                            <td>
                              <div class="badge badge-outline-success">Approved</div>
                            </td>
                          </tr> -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.php -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>