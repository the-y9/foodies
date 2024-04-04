<?php 
	include('dbConfig.php');
		?>

	<!--sql values-->
				<?php
						$qr=mysqli_query($cn,"select * from foodies1 where category='Delights' order by title");
						while($urow=mysqli_fetch_array($qr)){
							?>
			
	  
		

            <!-- Rotating card -->
			<div class="row">
			<div class="col-md-1"></div>
            <div class="card-wrapper ">
              <div id="<?php  echo $urow['id']; ?>" class="card-rotating effect__click text-center h-100 w-100">

                <!-- Front Side -->
                <div class="face front">
				  <div class="card-body" style="width: 20rem;">

                  <!-- Image-->
                  <div class="card-up view overlay">
                    <img class="card-img-top" src="<?php echo $urow['imagepath']; ?>" alt="">
                  </div>

                  <div class="card-body">
                    <h4 class="font-weight-bold mb-3"><?php echo $urow['title']; ?></h4>
                    <p class="font-weight-bold "><?php echo $urow['content']; ?></p>
                    <!-- Triggering button -->
                    <a class="rotate-btn" data-card="<?php  echo $urow['id']; ?>"><i class="fa fa-repeat"></i> Know more</a>
                  </div>
                  </div>
                </div>
                <!-- Front Side -->

                <!-- Back Side -->
                <div class="face back" >
                  <div class="card-body" style="width: 50rem;">

                    <!-- Content -->
                    <h4 class="font-weight-bold mb-0"></h4>
                    <hr>
                    <p><?php echo $urow['extra']; ?></p>
                    <hr>
                    <!-- Social Icons -->
                   
                    <!-- Triggering button -->
                    <a class="rotate-btn" data-card="<?php  echo $urow['id']; ?>"><i class="fa fa-undo"></i></a>

                  </div>
                </div>
                <!-- Back Side -->

              </div>
            </div>
            </div>
            <!-- Rotating card -->
<hr>

	  <?php 
						}
						?>
	
	<hr>
	
	