<?php 
	include('dbConfig.php');
		?>



<!--Section: -->
<section id="multi-item-carousel">

  <!--Section: Live preview-->
  <section class="section-preview">


  
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

   

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1" class=""></li>
        <li data-target="#multi-item-example" data-slide-to="2" class=""></li>
       
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

		  <!--sql values-->
				<?php
						$qr=mysqli_query($cn,"select * from foodies1 where id in(10,6,4,9) order by title");
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
											<a href="indC.php" class="btn btn-primary waves-effect waves-light">Read More</a>
	
						  												
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
					
					
					
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

           <!--sql values-->
				<?php
						$qr=mysqli_query($cn,"select * from foodies1 where category='Italian Cuisine' and id in(40,36,37,38) order by title");
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
											<a href="italian.php" class="btn btn-primary waves-effect waves-light">Read More</a>
	
						  												
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
		
		
		
		
		
		<!--third slide-->
        <div class="carousel-item">

           <!--sql values-->
				<?php
						$qr=mysqli_query($cn,"select * from foodies1 where category='Spanish Cuisine' and id in(50,48,49,47) order by title");
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
											<a href="spain.php" class="btn btn-primary waves-effect waves-light">Read More</a>
	
						  												
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