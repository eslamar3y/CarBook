

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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Choose Your Car</h1>
          </div>
        </div>
      </div>
    </section>
		

		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
			<?php
				// Set the number of items per page
				$per_page = 6;
				
				// Get the total number of items from the database
				$total_count_query = "SELECT COUNT(*) FROM cars";
				$total_count_result = mysqli_query($conn, $total_count_query);
				$total_count = mysqli_fetch_array($total_count_result)[0];
				
				// Calculate the total number of pages
				$total_pages = ceil($total_count / $per_page);
				
				// Get the current page number from the URL
				$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
				
				// Ensure the current page is within the bounds of the total number of pages
				$current_page = max(min($total_pages, $current_page), 1);
				
				// Calculate the offset for the query
				$offset = ($current_page - 1) * $per_page;
				
				// Get the items for the current page
				$items_query = "SELECT * FROM cars LIMIT {$per_page} OFFSET {$offset}";
				$items_result = mysqli_query($conn, $items_query);
				
				// Loop through the items and display them
				while ($row = mysqli_fetch_array($items_result)) {
					?>
					<div class="col-md-4">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url(images/cars/<?=$row['pic']?>);">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="car-single.php"><?=$row['name']?></a></h2>
								<div class="d-flex mb-3">
									<span class="cat"><?=$row['company']?></span>
									<p class="price ml-auto">$<?=$row['day']?> <span>/day</span></p>
								</div>
								<p class="d-flex mb-0 d-block"><a href="car-single.php?id=<?= $row['id']?>#maketrip" class="btn btn-primary py-2 mr-1">Book now</a> <a href="car-single.php?id=<?=$row['id']?>" class="btn btn-secondary py-2 ml-1">Details</a></p>
							</div>
						</div>
					</div>
					<?php
				}
				
				// Display the pagination links
				

				?>
				</div>
    			<div class="row mt-5">
          		<div class="col text-center">
            	<div class="block-27">
              	<ul>
				  
				<?php
				for ($i = 1; $i <= $total_pages; $i++) {
					if ($i == $current_page) {
						?>
							<li class="active"><span><?=$i?></span></li>
						<?php
					} else {
					// echo "<a href='?page={$i}'>{$i}</a>";
						?>
							<li><?php echo "<a href='?page={$i}'>{$i}</a>"?></li>
						<?php
					}
				}
				echo "</div>";
				?>
				<!-- <li><a href="#">&lt;</a></li> -->
                <!-- <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li> -->
              </ul>
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