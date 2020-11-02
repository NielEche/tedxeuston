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
						<h4 class="m-0  font-weight-bold text-primary"> Edit Partners</h4>
					</div>
					<div class="card-body">
						 
						<?php
							if (isset($_POST['edit_partner_btn']))
							 {
								$id = $_POST['edit_partner_id'];

								$query = "SELECT * FROM partners WHERE id='$id'";
								$query_run = mysqli_query($connection, $query);

								foreach ($query_run as $row )
								 {
								
								 ?>

								<form id="form-register" class="p-t-15" action="code.php" method="POST" role="form" enctype="multipart/form-data">
									<input type="hidden" name="edit_partner_id" value="<?php echo $row['id'] ?>">
									<div class="form-group">
										<label>Upload Image</label>
										<input type="file" name="edit_partner_image" id="partner_image" value="<?php echo $row['partner_image']; ?>" class="form-control" >
									</div>
									<div class="form-group">
										<label>Partner Name</label>
										<input type="text" name="edit_partner_name" value="<?php echo $row['partner_name']; ?>" class="form-control" placeholder="Enter Name">
									</div>
									<div class="form-group ">
										<label>Partner Type</label>
										<select class="form-control" name="edit_partner_type">
										<option value="<?php echo $row['partner_type']; ?>"><?php echo $row['partner_type']; ?></option>
										<option value="1">Principal Partner</option>
                                        <option value="2">Partners</option>
                                        <option value="3">Community Partners</option>
										</select>
										
									</div>
									
									<a href="partners.php" class="btn btn-danger">CANCEL</a>
									<button type="submit" name="update_partners_btn" class="btn btn-primary">Update</button>
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