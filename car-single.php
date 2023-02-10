
<?php
$number=0;
require_once("connection.php");
if(isset($_GET['id'])) {
	$number = $_GET['id'];
	// do something with the number here
}

// echo "Number: " . $number;
$sql = "SELECT * FROM cars WHERE id = '$number'";
$result = mysqli_query($conn, $sql);

$sql1 = "SELECT * FROM features WHERE car_id = '$number'";
$result1 = mysqli_query($conn, $sql1);


function getFeatures($row1,string $feature, $displayName)
{
	
	if($row1[$feature]=="1")
	{
		?>
		<li class="check">
			<span class="ion-ios-checkmark"></span>
			<?= $displayName?>
		</li>
		
		<?php
	}
	else
	{
		
		?>
		<li class="remove">
		<span class="ion-ios-close"></span>
		<?= $displayName?>
		<?php
	}
}



?>
<!DOCTYPE html >
<html lang="en">
<?php
	require_once("head.php");
  ?>
  <body>
    
  	<?php 
    require_once('nav.php');
	
    ?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Car Details</h1>
          </div>
        </div>
      </div>
    </section>
		

		<section class="ftco-section ftco-car-details">
			<?php
			if (mysqli_num_rows($result) > 0) 
			{
				while($row = mysqli_fetch_assoc($result)) 
				{
				?>
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-12">
								<div class="car-details">
									<div class="img rounded" style="background-image: url(images/Cars/<?=$row['pic']?>);border-radius: 130px !important;"></div>
									<div class="text text-center">
										<span class="subheading"><?=$row['name']?></span>
										<h2><?=$row['company']?></h2>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="row">
							<div class="col-md d-flex align-self-stretch ftco-animate">
							<div class="media block-6 services">
							<div class="media-body py-md-4">
								<div class="d-flex mb-3 align-items-center">
									<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"></span></div>
									<div class="text">
										<h3 class="heading mb-0 pl-3">
											Mileage
											<span>40,000</span>
										</h3>
									</div>
								</div>
							</div>
							</div>      
						</div>
						<div class="col-md d-flex align-self-stretch ftco-animate">
							<div class="media block-6 services">
							<div class="media-body py-md-4">
								<div class="d-flex mb-3 align-items-center">
									<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
									<div class="text">
										<h3 class="heading mb-0 pl-3">
											Transmission
											<span>Manual</span>
										</h3>
									</div>
								</div>
							</div>
							</div>      
						</div> -->
						<!-- <div class="col-md d-flex align-self-stretch ftco-animate">
							<div class="media block-6 services">
							<div class="media-body py-md-4">
								<div class="d-flex mb-3 align-items-center">
									<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
									<div class="text">
										<h3 class="heading mb-0 pl-3">
											Seats
											<span>5 Adults</span>
										</h3>
									</div>
								</div>
							</div>
							</div>      
						</div> -->
						<!-- <div class="col-md d-flex align-self-stretch ftco-animate">
							<div class="media block-6 services">
							<div class="media-body py-md-4">
								<div class="d-flex mb-3 align-items-center">
									<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-backpack"></span></div>
									<div class="text">
										<h3 class="heading mb-0 pl-3">
											Luggage
											<span>4 Bags</span>
										</h3>
									</div>
								</div>
							</div>
							</div>      
						</div> -->
						<!-- <div class="col-md d-flex align-self-stretch ftco-animate">
							<div class="media block-6 services">
							<div class="media-body py-md-4">
								<div class="d-flex mb-3 align-items-center">
									<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
									<div class="text">
										<h3 class="heading mb-0 pl-3">
											Fuel
											<span>Petrol</span>
										</h3>
									</div>
								</div>
							</div>
							</div>      
						</div> -->
						<!-- </div> -->
						<?php
						if (mysqli_num_rows($result1) > 0) 
						{
							while($row1 = mysqli_fetch_assoc($result1)) 
							{
								?>
								<div class="row">
									<div class="col-md-12 pills">
												<div class="bd-example bd-example-tabs">
													<div class="d-flex justify-content-center">
													<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

														<li class="nav-item">
														<a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
														</li>
														<li class="nav-item">
														<a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
														</li>
														<!-- <li class="nav-item">
														<a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
														</li> -->
													</ul>
													</div>

												<div class="tab-content" id="pills-tabContent">
													<div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
														<div class="row">
															<div class="col-md-4">
																<ul class="features">
																		<?php
																		echo getFeatures($row1,"Airconditions", "Airconditions");
																		echo getFeatures($row1,"Child_Seat", "Child Seat");
																		echo getFeatures($row1,"GPS", "GPS");
																		echo getFeatures($row1,"Luggage", "Luggage");
																		echo getFeatures($row1,"Music", "Music");
																		?>
																</ul>
															</div>
															<div class="col-md-4">
																<ul class="features">
																		<?php
																		echo getFeatures($row1,"Seat_Belt", "Seat Belt");
																		echo getFeatures($row1,"Sleeping_Bed", "Sleeping Bed");
																		echo getFeatures($row1,"Water", "Water");
																		echo getFeatures($row1,"Bluetooth", "Bluetooth");
																		echo getFeatures($row1,"Onboard_computer", "Onboard computer");
																		?>
																</ul>
															</div>
															<div class="col-md-4">
																<ul class="features">
																		<?php
																		echo getFeatures($row1,"Audio_input", "Audio input");
																		echo getFeatures($row1,"Long_Term_Trips", "Long Term Trips");
																		echo getFeatures($row1,"Car_Kit", "Car Kit");
																		echo getFeatures($row1,"Remote_central_locking", "Remote central locking");
																		echo getFeatures($row1,"Climate_control", "Climate control");
																		?>
																</ul>
															</div>
														</div>
													</div>

													<div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
													<p><?=$row['description']?></p>
													</div>

													<!-- <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
													<div class="row">
															<div class="col-md-7">
																<h3 class="head">23 Reviews</h3>
																<div class="review d-flex">
																	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
																	<div class="desc">
																		<h4>
																			<span class="text-left">Jacob Webb</span>
																			<span class="text-right">14 March 2018</span>
																		</h4>
																		<p class="star">
																			<span>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																			</span>
																			<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
																		</p>
																		<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
																	</div>
																</div>
																<div class="review d-flex">
																	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
																	<div class="desc">
																		<h4>
																			<span class="text-left">Jacob Webb</span>
																			<span class="text-right">14 March 2018</span>
																		</h4>
																		<p class="star">
																			<span>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																			</span>
																			<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
																		</p>
																		<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
																	</div>
																</div>
																<div class="review d-flex">
																	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
																	<div class="desc">
																		<h4>
																			<span class="text-left">Jacob Webb</span>
																			<span class="text-right">14 March 2018</span>
																		</h4>
																		<p class="star">
																			<span>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																			</span>
																			<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
																		</p>
																		<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
																	</div>
																</div>
															</div>
															<div class="col-md-5">
																<div class="rating-wrap">
																	<h3 class="head">Give a Review</h3>
																	<div class="wrap">
																		<p class="star">
																			<span>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				(98%)
																			</span>
																			<span>20 Reviews</span>
																		</p>
																		<p class="star">
																			<span>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				(85%)
																			</span>
																			<span>10 Reviews</span>
																		</p>
																		<p class="star">
																			<span>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				(70%)
																			</span>
																			<span>5 Reviews</span>
																		</p>
																		<p class="star">
																			<span>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				(10%)
																			</span>
																			<span>0 Reviews</span>
																		</p>
																		<p class="star">
																			<span>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				<i class="ion-ios-star"></i>
																				(0%)
																			</span>
																			<span>0 Reviews</span>
																		</p>
																	</div>
																</div>
															</div>
														</div>
													</div> -->
												</div>
												</div>
									</div>
										</div>
								<?php
							}
						}
						?>
					</div>
				<?php
				}
			}
	  ?>
    </section>

	<section class="ftco-section ftco-no-pt bg-light" id="maketrip" style="padding-top:300px;">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-4 d-flex align-items-center">
	  						<form method="POST" class="request-form ftco-animate bg-primary">
		          					<h2>Make your trip</h2>
			    				<div class="form-group">
			    					<label for="" class="label">Pick-up location</label>
			    					<input type="text" class="form-control" name="pick_location" placeholder="City, Airport, Station, etc" required>
			    				</div>
			    				<div class="form-group">
			    					<label for="" class="label">Drop-off location</label>
			    					<input type="text" class="form-control" name="drop_location" placeholder="City, Airport, Station, etc" required>
			    				</div>
			    				<div class="d-flex">
			    					<div class="form-group mr-2">
										<label for="" class="label">Pick-up date</label>
										<input type="text" class="form-control" name="pick_date" id="book_pick_date" placeholder="Date" required>
			              			</div>
									<div class="form-group ml-2">
										<label for="" class="label">Drop-off date</label>
										<input type="text" class="form-control" name="drop_date" id="book_off_date" placeholder="Date" required>
									</div>
		              			</div>
								<div class="form-group">
									<label for="" class="label">Pick-up time</label>
									<input type="text" class="form-control" name="pick_time" id="time_pick" placeholder="Time" required>
								</div>
								<div class="form-group">
									<?php
									// session_start();
									if($_SESSION)
									{
										?>
										<input type="submit" value="Rent A Car Now" class="btn btn-secondary py-3 px-4">
										<?php
									}
									else
									{
										?>
										<a class="btn btn-secondary py-3 px-4" href="Login.php">Rent A Car Now</a>
										<!-- <input type="submit" value="Rent A Car Now" class="btn btn-secondary py-3 px-4"> -->
										<?php
									}
									?>
									<!-- <input type="submit" value="Rent A Car Now" class="btn btn-secondary py-3 px-4"> -->
								</div>
			    			</form>
	  					</div>
	  					<div class="col-md-8 d-flex align-items-center">
	  						<div class="services-wrap rounded-right w-100">
	  							<h3 class="heading-section mb-4">Better Way to Rent Your Perfect Cars</h3>
	  							<div class="row d-flex mb-4">
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Choose Your Pickup Location</h3>
				                </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Select the Best Deal</h3>
					              </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Reserve Your Rental Car</h3>
					              </div>
					            </div>      
					          </div>
					        </div>
					        <p><a href="car.php" class="btn btn-primary py-3 px-4">Reserve Your Perfect Car</a></p>
	  						</div>
	  					</div>
	  				</div>
				</div>
  		</div>
    </section>
    <section class="ftco-section ftco-no-pt bg-light" style="background-color: #fff !important;padding-top:50px">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">CHOOSE CAR</span>
            <h2 class="mb-2">Related Cars</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
              <?php
                $query = "SELECT * FROM `cars`";            
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                  ?>
                  <div class="item">
                  <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(images/cars/<?= $row['pic']?>);">
                    </div>
                    <div class="text">
                      <h2 class="mb-0"><a href="#"><?= $row['name']?></a></h2>
                      <div class="d-flex mb-3">
                        <span class="cat"><?= $row['company']?></span>
                        <p class="price ml-auto">$<?= $row['day']?> <span>/day</span></p>
                      </div>
                      <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php?id=<?= $row['id']?>" class="btn btn-secondary py-2 ml-1">Details</a></p>
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
    </section>
    

    <?php
    require_once( 'footer.php');
    ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <?php
  require_once('scripts.php')
  ?>
    
  </body>
</html>





<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	$user_id = $_SESSION['id'];
	$car_id = $number;
	$pick_location = mysqli_escape_string($conn, $_POST['pick_location']);
	$drop_location = mysqli_escape_string($conn, $_POST['drop_location']);
	$pick_date = mysqli_escape_string($conn, $_POST['pick_date']);
	$drop_date = mysqli_escape_string($conn, $_POST['drop_date']);
	$pick_time = mysqli_escape_string($conn, $_POST['pick_time']);
	$reserve_date = date("Y/m/d H:i:s");
	$trip_status = "Processing";



	$query = "INSERT INTO `trips` (`user_id`, `car_id`, `pick_location`, `drop_location`, `pick_date`, `drop_date`, `pick_time`, `reserve_date`, `trip_status`)VALUES
	('" . $user_id . "', '" . $car_id . "', '" . $pick_location . "', '" . $drop_location . "', '" . $pick_date . "', '" . $drop_date . "', '" . $pick_time . "', '" . $reserve_date . "', '" . $trip_status . "')";
	if (mysqli_query($conn, $query)) {
		?>
		<script>
			swal("Done!", "Wait a call from our driver!", "success");
		</script>
		<?php
	} else {
		// echo$query;
		echo mysqli_error($conn);
	}
	// Close the connection
	mysqli_close($conn);
}

?>