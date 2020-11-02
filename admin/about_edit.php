
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
						<h4 class="m-0  font-weight-bold text-primary"> Edit About Us</h4>
					</div>
					<div class="card-body">
						<?php
							$connection = mysqli_connect("localhost","root","","eustonadminpanel");
							if (isset($_POST['edit_team_btn']))
							 {
								$id = $_POST['edit_team_id'];

								$query = "SELECT * FROM about_team WHERE id='$id'";
								$query_run = mysqli_query($connection, $query);

								foreach ($query_run as $row )
								 {
								
								 ?>

								<form id="form-register" class="p-t-15" action="code.php" method="POST" role="form" enctype="multipart/form-data">
									<input type="hidden" name="edit_team_id" value="<?php echo $row['id'] ?>">
									<div class="form-group">
										<label>Upload Image</label>
										<input type="file" name="edit_team_image" id="team_image" value="<?php echo $row['images']; ?>" class="form-control" >
									</div>
									<div class="form-group">
										<label>Name</label>
										<input type="text" name="edit_team_name" value="<?php echo $row['name']; ?>" class="form-control" placeholder="Enter tilte">
									</div>
									<div class="form-group">
										<label>Role</label>
										<input type="text" name="edit_team_role" value="<?php echo $row['role']; ?>" class="form-control" placeholder="Enter Subtitle">  
									</div>
									<div class="form-group">
										<label>Bio</label>
										<textarea type="text" rows="9" name="edit_team_bio" value="<?php echo $row['bio']; ?>" class="form-control" placeholder="Description"><?php echo $row['bio']; ?></textarea>  
									</div>

									<a href="about.php" class="btn btn-danger">CANCEL</a>
									<button type="submit" name="update_team_btn" class="btn btn-primary">Update</button>
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