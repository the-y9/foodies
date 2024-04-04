<?php 
	include('dbConfig.php');
		?>

<!--sql values-->
				<?php
						$qr=mysqli_query($cn,"select * from foodies1 order by title");
						while($urow=mysqli_fetch_array($qr)){
							?>


<div class="col-md-5 h=15px">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
      <!-- Card -->
							  <div id="<?php  echo $urow['id']; ?>" class="card m-2" style="width: 20rem;">

								<!--Card image-->
								<div class="view overlay">
								  <img class="card-img-top" src="<?php echo $urow['imagepath']; ?>" alt="Card image cap">
								  <a href="#!">
									<div class="mask rgba-white-slight"></div>
								  </a>
								</div>

								<!--Card content-->
								<div class="card-body">

								  <!--Title-->
								  <h4 class="card-title"><?php echo $urow['title']; ?></h4>
								  
								  
								  
								  <!--Text-->
						      	
								<a class="collapsed" data-toggle="collapse" href="#b<?php echo $urow['id']; ?>" aria-expanded="false" aria-controls="collapseContent">							  
								  <button type="button" class="btn btn-light-blue btn-md">Read more</button></a>
								  <p class="card-text collapse" id="b<?php echo $urow['id']; ?>">Build.</p>

								</div>

							  </div>
							  <?php 
						}
						?>
							  <!-- Card -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>