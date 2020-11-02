<?php

	include('security.php');

	include('includes/header.php');
	include('includes/navbar.php');
?>

<div class="page-container">
	<div class="page-content-wrapper ">
		<div class="content ">
			<div class="container">
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h4 class="m-0  font-weight-bold text-primary"> Edit Event</h4>
					</div>
					<div class="card-body">
						 
						<?php
							if (isset($_POST['edit_event_btn']))
							 {
								$id = $_POST['event_id'];

								$query = "SELECT * FROM events WHERE id='$id'";
								$query_run = mysqli_query($connection, $query);

								foreach ($query_run as $row )
								 {
								
								 ?>

								<form id="form-register" class="p-t-15" action="code.php" method="POST" role="form" enctype="multipart/form-data">
									<input type="hidden" name="event_id" value="<?php echo $row['id'] ?>">
									<div class="form-group">
										<label>Upload Image</label>
										<input type="file" name="event_image" id="event_image" value="<?php echo $row['images']; ?>" class="form-control" >
									</div>
									<div class="form-group">
										<label>Event Name</label>
										<input type="text" name="event_name" value="<?php echo $row['event_name']; ?>" class="form-control" placeholder="Enter tilte">
									</div>
									<div class="form-group">
										<label>Event Theme</label>
										<input type="text" name="event_theme" value="<?php echo $row['event_theme']; ?>" class="form-control" placeholder="Enter tilte">
									</div>
									<div class="form-group">
										<label>Event Date</label>
										<input type="date" name="event_date" value="<?php echo $row['event_date']; ?>" class="form-control" placeholder="Enter Subtitle">  
									</div>
									
									<div class="form-group">
										<label>About Event</label>
										<textarea type="text" rows="9" name="about_event" value="<?php echo $row['about_event']; ?>" class="form-control" placeholder="Description"><?php echo $row['about_event']; ?></textarea>  
									</div>

									<a href="events.php" class="btn btn-danger">CANCEL</a>
									<button type="submit" name="update_event_btn" class="btn btn-primary">Update</button>
								</form>

								 <?php
								 } 
							}
						?>
							
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<?php
	include('includes/scripts.php');
	include('includes/footer.php');
?>