<?php
	include('dbConfig.php');
	//if(isset($_POST['show'])){
		?>
		
		<table class = "table table-bordered alert-warning table-hover">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Action</th>
			</thead>
				<tbody>
				
					<?php
						$quser=mysqli_query($cn,"select * from user");
						while($urow=mysqli_fetch_array($quser)){
							?>
								<tr>
									<td><?php echo $urow['firstname']; ?></td>
									<td><?php echo $urow['lastname']; ?></td>
									<td>
									<button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $urow['userid']; ?>">
									<span class = "glyphicon glyphicon-pencil"></span> Edit</button>
									<button class="btn btn-danger delete" value="<?php echo $urow['userid']; ?>">
									<span class = "glyphicon glyphicon-trash"></span> Delete</button>
									<?php include('updateModal.php'); ?>
									</td>
								</tr>
							<?php
						}
					
					?>
				</tbody>
			</table>
		<?php
	//}

?>