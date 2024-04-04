<?php
	include('dbConfig.php');
		?>

<!--Section: company card-->
        <section>
	
							
    <div class="main-wrapper">
        <div class="container-fluid">

            <div class="row">	
			<div class="col-md-3">
			<!--sql values-->
				<?php
						$qs1=mysqli_query($cn,"select * from infinty");
						while($urow=mysqli_fetch_array($qs1)){
							?>
			
			
            <!-- Rotating card -->
            <div class="card-wrapper " style="width: 20rem;" >
              <div id="<?php echo $urow['ROLL']; ?>" class="card-rotating effect__click h-100 w-100" >
				
				
                <!--Front Side-->
                <div class="face front card">

                  <!-- Image-->
                  <div class="view overlay">
                    <img class="card-img-top" src="<?php echo $urow['IMAGEPATH']; ?>" alt="Example photo">
                    <a>
                      <div class="mask rgba-white-slight waves-effect waves-light"></div>
                    </a>
                  </div>

                  <!--Content-->
                  <div class="card-body">

                    <a class="rotate-btn float-right" data-card="<?php echo $urow['ROLL']; ?>"><i class="fa fa-share-alt fa-lg"></i></a>
                    <h4 class=""><?php echo $urow['NAME']; ?></h4>
                    <hr>
                    <p class="card-text">HOUSE:<?php echo $urow['HOUSE']; ?></p>
					<p class="card-text">CLASS:<?php echo $urow['CLASS']; ?></p>
                    <a class="link-text">
                      <h5>Read more <i class="fa fa-angle-double-right"></i></h5>
                    </a>

                  </div>

                </div>
                <!--Front Side-->

                <!--Back Side-->
                <div class="face back">

                  <!-- Content -->
                  <div class="content text-center">

                    <h4 class="card-title font-weight-bold my-4">Social shares <i class="fa fa-close rotate-btn text-muted" data-card="<?php echo $urow['ROLL']; ?>"></i></h4>
                    <hr>
                    <!-- Social Icons -->
                    <ul class="list-unstyled list-inline d-flex justify-content-center flex-wrap">
                      <li class="list-inline-item"><a class="btn-floating btn-dribbble waves-effect waves-light"><i class="fa fa-dribbble"> </i></a></li>
                      <li class="list-inline-item"><a class="btn-floating btn-slack waves-effect waves-light"><i class="fa fa-slack"> </i></a></li>
                      <li class="list-inline-item"><a class="btn-floating btn-ins waves-effect waves-light"><i class="fa fa-instagram"> </i></a></li>
                      <li class="list-inline-item"><a class="btn-floating btn-pin waves-effect waves-light"><i class="fa fa-pinterest"> </i></a></li>
                      <li class="list-inline-item"><a class="btn-floating btn-tw waves-effect waves-light"><i class="fa fa-twitter"> </i></a></li>
                      <li class="list-inline-item"><a class="btn-floating btn-gplus waves-effect waves-light"><i class="fa fa-google-plus"> </i></a></li>
                      <li class="list-inline-item"><a class="btn-floating btn-git waves-effect waves-light"><i class="fa fa-github"> </i></a></li>
                    </ul>
                    <h5 class="font-weight-bold my-4">Join our community</h5>
                    <hr>
                    <!-- Social Icons -->
                    <ul class="list-unstyled list-inline d-flex justify-content-center flex-wrap mt-4">
                      <li class="list-inline-item"><a class="btn btn-fb px-4 waves-effect waves-light"><i class="fa fa-facebook"> </i></a></li>
                      <li class="list-inline-item"><a class="btn btn-tw px-4 waves-effect waves-light"><i class="fa fa-twitter"> </i></a></li>
                      <li class="list-inline-item"><a class="btn btn-li px-4 waves-effect waves-light"><i class="fa fa-linkedin"> </i></a></li>
                      <li class="list-inline-item"><a class="btn btn-ins px-4 waves-effect waves-light"><i class="fa fa-instagram"> </i></a></li>
                    </ul>

                  </div>

                </div>
                <!--Back Side-->

              </div>
            </div>
			</div>
            <!-- Rotating card -->

						<?php
						}
						?>
									</div>
             
                       
            </div>
        </div>
        </section>
        <!--Section: company card-->

					