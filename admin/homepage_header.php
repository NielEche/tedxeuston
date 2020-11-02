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
						<h4 class="m-0  font-weight-bold text-primary"> Edit Homepage</h4>
					</div>
					<div class="card-body">
						<?php
							if (isset($_POST['edit_homeimg_btn']))
							 {
								$id = $_POST['edit_home_id'];

								$query = "SELECT * FROM homepage WHERE id='$id'";
								$query_run = mysqli_query($connection, $query);

								foreach ($query_run as $row)
								 {
								
								 ?>

								<form id="form-register" class="p-t-15" action="code.php" method="POST" role="form" enctype="multipart/form-data">
								
									<input type="hidden" name="edit_home_id" value="<?php echo $row['id'] ?>">
								
									<div class="form-group">
										<label>Edit Header Image</label>
										<input type="file" name="edit_home_image" id="home_image" value="<?php echo $row['images']; ?>" class="form-control" >
										
									</div>
									<div class="form-group">
										<label>Section 2</label>
										<textarea type="text" rows="9"  name="edit_section2cap"  value="<?php echo $row['section2cap']; ?>" class="form-control" placeholder="Description"><?php echo $row['section2cap']; ?></textarea>  
									</div>
									<div class="form-group ">
										<label>WATCH VIDEOS NOW</label>
										<input type="text" name="edit_video_url" value="<?php echo $row['video_url']; ?>" class="form-control" placeholder="Enter link">  
									</div>	
								
									<a href="home.php" class="btn btn-danger">CANCEL</a>
									<button type="submit" name="home_update_btn" class="btn btn-primary">Update</button>
								</form>

								 <?php
								 } 
							}
						?>
							
					</div>

					<div class="card-body">
						<?php
							if (isset($_POST['edit_homefile_btn']))
							 {
								$id = $_POST['edit_homefile_id'];

								$query = "SELECT * FROM homepage WHERE id='$id'";
								$query_run = mysqli_query($connection, $query);

								foreach ($query_run as $row)
								 {
								
								 ?>

								<form id="form-register" class="p-t-15" action="code.php" method="POST" role="form" enctype="multipart/form-data">
								
									<input type="hidden" name="edit_home_id" value="<?php echo $row['id'] ?>">

									<div class="form-group">
										<label>File Title</label>
										<input type="text" name="edit_file" value="<?php echo $row['file_title']; ?>" class="form-control" placeholder="Enter Name">
									</div>
									<div class="form-group">
										<label>Edit PDF FIle </label>
										<input type="file" name="edit_file_link" id="file_link" value="<?php echo $row['file_link']; ?>" class="form-control" >
										
									</div>
									
								
									<a href="home.php" class="btn btn-danger">CANCEL</a>
									<button type="submit" name="home_update_btn2" class="btn btn-primary">Update</button>
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