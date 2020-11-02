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
						<h4 class="m-0  font-weight-bold text-primary"> Edit Speaker</h4>
					</div>
					<div class="card-body">
						<?php
							if (isset($_POST['edit_speaker_btn']))
							 {
								$id = $_POST['edit_id'];

								$query = "SELECT * FROM speakers WHERE id='$id'";
								$query_run = mysqli_query($connection, $query);

								foreach ($query_run as $row)
								 {
								
								 ?>

								<form id="form-register" class="p-t-15" action="code.php" method="POST" role="form" enctype="multipart/form-data">
								
									<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
									<div class="form-group">
										<label>Name</label>
										<input type="text" name="edit_name" value="<?php echo $row['name']; ?>" class="form-control" placeholder="Enter Name">
									</div>
									<div class="form-group">
										<label>Occupation</label>
										<input type="text" name="edit_occupation" value="<?php echo $row['occupation']; ?>" class="form-control" placeholder="Enter Occupation">  
									</div>
									<div class="form-group">
										<label>Instagram</label>
										<input type="text" name="edit_instagram" value="<?php echo $row['instagram']; ?>" class="form-control" placeholder="Enter Instagram link">  
									</div>
									<div class="form-group">
										<label>Linkedin</label>
										<input type="text" name="edit_linkedin" value="<?php echo $row['linkedin']; ?>" class="form-control" placeholder="Enter Linkedin link">  
									</div>
									<div class="form-group">
										<label>Twitter</label>
										<input type="text" name="edit_twitter" value="<?php echo $row['twitter']; ?>" class="form-control" placeholder="Enter Twitter link">  
									</div>
									<div class="form-group">
										<label>Upload Image</label>
										<input type="file" name="edit_speaker_image" id="speaker_image" value="<?php echo $row['images']; ?>" class="form-control" >
										
									</div>
									<div class="form-group">
										<label>Speaker Youtube Embed Url</label>
										<input type="text" rows="9" name="video_url" value='<?php echo $row['video_url']; ?>' class="form-control" placeholder="">
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
										<label>Talk Title</label>
										<input type="text" name="talk_title" value="<?php echo $row['talk_title']; ?>" class="form-control" placeholder="Enter Name">
									</div>
									<div class="form-group">
										<label>Speaker Bio</label>
										<textarea type="text" rows="9" name="speaker_bio" value="<?php echo $row['speaker_bio']; ?>" class="form-control" placeholder="Description"><?php echo $row['speaker_bio']; ?></textarea>  
									</div>

									<div class="form-group">
										<label>Speaker Tags</label>
										<input type="text" name="speaker_tags" value="<?php echo $row['speaker_tags']; ?>" class="tagsinput custom-tag-input" placeholder="Enter Name">
									</div>
								
									<a href="events.php" class="btn btn-danger">CANCEL</a>
									<button type="submit" name="speaker_update_btn" class="btn btn-primary">Update</button>
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