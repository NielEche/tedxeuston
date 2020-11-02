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
						<h4 class="m-0  font-weight-bold text-primary"> Edit Gallery</h4>
					</div>
					<div class="card-body">
						 
						<?php
							if (isset($_POST['edit_gallery_btn']))
							 {
								$id = $_POST['gallery_id'];

								$query = "SELECT * FROM speakers WHERE id='$id'";
								$query_run = mysqli_query($connection, $query);

								foreach ($query_run as $row )
								 {
								
								 ?>

								<form id="form-register" class="p-t-15" action="code.php" method="POST" role="form" enctype="multipart/form-data">
									<input type="hidden" name="gallery_id" value="<?php echo $row['id'] ?>">
									<div class="form-group">
										<label>Upload Image</label>
										<input type="file" name="edit_image" id="team_image" value="<?php echo $row['images']; ?>" class="form-control" >
									</div>
									<div class="form-group ">
										<label>Type</label>
										<select class="form-control" name="talk_type">
										<option value="<?php echo $row['talk_type']; ?>"><?php echo $row['talk_type']; ?></option>
										<option value="talk">Talk</option>
										<option value="performance">Performance</option>
										</select>
										
									</div>
								
									<div class="form-group">
										<label>Video Header</label>
										<input type="text" name="video_name" value="<?php echo $row['name']; ?>" class="form-control" placeholder="Enter tilte">
									</div>
									<div class="form-group">
										<label>Event Year</label>
										<input type="text" name="event_name" value="<?php echo $row['event_name']; ?>" class="form-control" placeholder="Enter Subtitle">  
									</div>
									<div class="form-group">
										<label>Youtube Embed Url</label>
										<input type="text" rows="9" name="video_url" value='<?php echo $row['video_url']; ?>' class="form-control" placeholder="">
									</div>

									<a href="gallery.php" class="btn btn-danger">CANCEL</a>
									<button type="submit" name="update_gallery_btn" class="btn btn-primary">Update</button>
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