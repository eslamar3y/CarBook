<!DOCTYPE html>
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Pricing</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="car-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th class="bg-primary heading">Per Hour Rate</th>
						        <th class="bg-dark heading">Per Day Rate</th>
						        <th class="bg-black heading">Leasing</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="">
							  <?php
								$query = "SELECT * FROM `cars`";
								// $query = "SELECT * FROM `users` WHERE `email` ='" . $email . "' and `password` = '" . $password ;
							
								$result = mysqli_query($conn, $query);
								while ($row = mysqli_fetch_array($result)) {?>
									<td class="car-image"><div class="img" style="background-image:url(images/cars/<?=$row['pic']?>);border-radius: 13px !important;"></div></td>
									<td class="product-name">
										<h3><?=$row['name']?></h3>
										<p class="mb-0 rated">
											<span>rated:</span>
											<?php
												$rate = $row['rating'];
												$counter=1;
												for($i = 0; $i <5; $i++) 
												{
													if($counter<=$rate)
													{
														$counter++;
														?>
														<span class="ion-ios-star" style="color: #01d28e;"></span>
														<?php
													}
													else
													{
														?>
														<span class="ion-ios-star" style="color: rgba(0, 0, 0, 0.1)"></span>
														<?php
													}
													?>
													<?php
												}
											?>
											
											<!-- <span class="ion-ios-star"></span>
											<span class="ion-ios-star"></span>
											<span class="ion-ios-star"></span>
											<span class="ion-ios-star"></span> -->
										</p>
									</td>
									
									<td class="price">
										<p class="btn-custom"><a href="car-single.php?id=<?= $row['id']?>#maketrip">Rent a car</a></p>
										<div class="price-rate">
											<h3>
												<span class="num"><small class="currency">$</small> <?=$row['hour']?></span>
												<span class="per">/per hour</span>
											</h3>
											<span class="subheading">$3/hour fuel surcharges</span>
										</div>
									</td>
									
									<td class="price">
										<p class="btn-custom"><a href="car-single.php?id=<?= $row['id']?>#maketrip">Rent a car</a></p>
										<div class="price-rate">
											<h3>
												<span class="num"><small class="currency">$</small> <?=$row['day']?></span>
												<span class="per">/per day</span>
											</h3>
											<span class="subheading">$3/hour fuel surcharges</span>
									</div>
									</td>

									<td class="price">
										<p class="btn-custom"><a href="car-single.php?id=<?= $row['id']?>#maketrip">Rent a car</a></p>
										<div class="price-rate">
											<h3>
												<span class="num"><small class="currency">$</small> <?=$row['month']?></span>
												<span class="per">/per month</span>
											</h3>
											<span class="subheading">$3/hour fuel surcharges</span>
										</div>
									</td>
								</tr>
							  <?php } ?>
							  <!-- END TR-->

						      <!-- <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-2.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr>END TR -->

						      <!-- <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-3.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr>END TR -->

						      <!-- <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-4.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr>END TR -->


						      <!-- <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-5.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr>END TR -->


						      <!-- <tr class="">
						      	<td class="car-image"><div class="img" style="background-image:url(images/car-6.jpg);"></div></td>
						        <td class="product-name">
						        	<h3>Cheverolet SUV Car</h3>
						        	<p class="mb-0 rated">
						        		<span>rated:</span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        		<span class="ion-ios-star"></span>
						        	</p>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 10.99</span>
							        		<span class="per">/per hour</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						        
						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 60.99</span>
							        		<span class="per">/per day</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>

						        <td class="price">
						        	<p class="btn-custom"><a href="#">Rent a car</a></p>
						        	<div class="price-rate">
							        	<h3>
							        		<span class="num"><small class="currency">$</small> 995.99</span>
							        		<span class="per">/per month</span>
							        	</h3>
							        	<span class="subheading">$3/hour fuel surcharges</span>
							        </div>
						        </td>
						      </tr>END TR -->
						    </tbody>
						  </table>
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