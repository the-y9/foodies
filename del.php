<?php 
	include('dbConfig.php');
		?>



<!--Section: -->
<section id="multi-item-carousel">

  <!--Section: Live preview-->
  <section class="section-preview">


  
    <!--Carousel Wrapper-->
    <div id="example" class="carousel slide carousel-multi-item" data-ride="carousel">

   


      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

		    <!--sql values-->
				<?php
						$qr=mysqli_query($cn,"select * from foodies1 where category='Delights' and id in (65,66,67,68) order by title");
						while($urow=mysqli_fetch_array($qr)){
							?>
						
						<div class="row">
						<?php
						for ($i = 1; $i < 4; $i++){
							?>
							<div class="col-md-4">
							<?php
							$urow=mysqli_fetch_array($qr)	
							?>
		
									  <div" id="$i">
										<div class="card m-2">
										  <img class="card-img-top" src="<?php echo $urow['imagepath']; ?>">
										  <div class="card-body">
											<h4 class="card-title"><?php echo $urow['title']; ?></h4>
											<p class="card-text"><?php echo $urow['content']; ?><p>
											<a href="del1.php" class="btn btn-primary waves-effect waves-light">Read More</a>
	
						  												
										  </div>
										</div>
									  </div>
									  
						    
							<?php
								
						    }
							?>
							</div>
							<?php
								
						    }
							?>
									  
						 

        

        </div>
        <!--/.Second slide--> 
	
      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->

							

  </section>
  <!--Section: Live preview-->