<?php

	include('security.php');

	include('includes/header.php');
	include('includes/navbar.php');
?>


<div class="page-container ">
	<div class="page-content-wrapper ">
		<div class="content ">
			<div class="modal fade stick-up" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header clearfix text-left">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
							</button>
							<h5>Edit <span class="semi-bold">Details</span></h5>
						</div>
						<div class="modal-body">
							<form action="code.php" method="POST" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Name</label>
											<input type="text" name="speaker_name" placeholder="Enter Name" class="form-control" required>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Occupation</label>
											<input type="text" name="speaker_occupation" placeholder="Enter Occupation" class="form-control" required>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Instagram</label>
											<input type="text" name="speaker_instagram" placeholder="Enter Instagram Link" class="form-control" required>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Linkedin</label>
											<input type="text" name="speaker_linkedin" placeholder="Enter Linkedin Link" class="form-control" required>
										</div>
									</div>
								</div>	

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Twitter</label>
											<input type="text" name="speaker_twitter" placeholder="Enter Twitter Link" class="form-control" required>
										</div>
									</div>
								</div>	


								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Image</label>
											<input type="file" id="speaker_image" name="speaker_image" class="form-control" required>
										</div>
									</div>
								</div>

								<div class="row">
								<div class="col-md-8">
								</div>
								<div class="col-md-4 m-t-10 sm-m-t-10">
									<button type="submit" name="speaker_save" class="btn btn-primary btn-block m-t-5">Save</button>
								</div>
							</div>
							</form>
							
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade stick-up" id="modalSlideUp" tabindex="-1" role="dialog" aria-hidden="false">
				<div class="modal-dialog ">
					<div class="modal-content-wrapper">
						<div class="modal-content">
							<div class="modal-header clearfix text-left">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
								</button>
								<h5>Payment <span class="semi-bold">Information</span></h5>
								<p class="p-b-10">We need payment information inorder to process your order</p>
							</div>
							<div class="modal-body">
								<form action="code.php" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Name</label>
												<input type="text" name="speaker_name" placeholder="Enter Name" class="form-control" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Occupation</label>
												<input type="text" name="speaker_occupation" placeholder="Enter Occupation" class="form-control" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Instagram</label>
												<input type="text" name="speaker_instagram" placeholder="Enter Instagram Link" class="form-control" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Linkedin</label>
												<input type="text" name="speaker_linkedin" placeholder="Enter Linkedin Link" class="form-control" required>
											</div>
										</div>
									</div>	

									<div class="row">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Twitter</label>
												<input type="text" name="speaker_twitter" placeholder="Enter Twitter Link" class="form-control" required>
											</div>
										</div>
									</div>	


									<div class="row">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Image</label>
												<input type="file" id="speaker_image" name="speaker_image" class="form-control" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-8">
										</div>
										<div class="col-md-4 m-t-10 sm-m-t-10">
											<button type="submit" name="speaker_save" class="btn btn-primary btn-block m-t-5">Save</button>
										</div>
									</div>
								</form>
								
							</div>
					   	</div>
					</div>
				</div>
			</div>

			<div class="modal fade stick-up" id="modalSlideLeft" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="modal-content-wrapper">
						<div class="modal-content">
							<div class="modal-header clearfix text-left">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
								</button>
								<h5>Payment <span class="semi-bold">Information</span></h5>
								<p class="p-b-10">We need payment information inorder to process your order</p>
							</div>
							<div class="modal-body">
								<form action="code.php" method="POST" enctype="multipart/form-data">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Name</label>
												<input type="text" name="speaker_name" placeholder="Enter Name" class="form-control" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Occupation</label>
												<input type="text" name="speaker_occupation" placeholder="Enter Occupation" class="form-control" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Instagram</label>
												<input type="text" name="speaker_instagram" placeholder="Enter Instagram Link" class="form-control" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Linkedin</label>
												<input type="text" name="speaker_linkedin" placeholder="Enter Linkedin Link" class="form-control" required>
											</div>
										</div>
									</div>	

									<div class="row">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Twitter</label>
												<input type="text" name="speaker_twitter" placeholder="Enter Twitter Link" class="form-control" required>
											</div>
										</div>
									</div>	


									<div class="row">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Image</label>
												<input type="file" id="speaker_image" name="speaker_image" class="form-control" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-8">
										</div>
										<div class="col-md-4 m-t-10 sm-m-t-10">
											<button type="submit" name="speaker_save" class="btn btn-primary btn-block m-t-5">Save</button>
										</div>
									</div>
								</form>
								
							</div>
					   	</div>
					</div>
				</div>
			</div>

			<div class="jumbotron" data-pages="parallax">
				<div class=" container-fluid   container-fixed-lg">
					<div class="inner">
						<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Web Pages</a></li>
						<li class="breadcrumb-item active">Live Stream Page</li>
						</ol>
					</div>
						<section style="padding-bottom:0px;">
	                  <header class="page-header">
	                    <h1  class="page-title" style="font-weight: bold !important;">Live Stream</h1>
	                    <!--<h5 class="page-subtitle"><span>Meet the dreamweavers.</span></h5>-->
	                  </header>
	                  <div class="paragraph in-view in-view--in">
	                    <div class="row in-view__child in-view__child--fadein in-view__child--in">
	                      <div class="col-12 col-lg-6">
	                        <!--<div class="dashed in-view__child in-view__child--in">
	                          <p>We curate our speakers bearing in mind the African narrative. Our speakers are thinkers, builders and innovators that are Africans by origin, working on African problems or Africans in the diaspora making a difference in the societies they find themselves notwithstanding the fact that peoples of other descent can as well be invited to speak to our audience as far as they meet our rigorous screening process during curation.</p>
	                        </div>-->
	                      </div>
	                    </div>
	                  </div>
	                </section>
				</div>
			</div>

			<div class="">
				<div class=" container-fluid   container-fixed-lg">
					<div class="card card-transparent">


						<div class="card-header ">
							<div class="pull-right">
								<div class="col-xs-12">
									<button id="btnStickUpSizeToggler" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add
									</button>
								</div>

								<div class="pull-left">
									<?php
										if(isset($_SESSION['success']) && $_SESSION['success'] !='')
										{
											echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].' </h2>';
											unset($_SESSION['success']);
										}
										if (isset($_SESSION['status']) && $_SESSION['status'] !='')
										 {
											echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
											unset($_SESSION['status']);
										}
									?>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					
					</div>
				</div>


				<div class=" container-fluid   container-fixed-lg">
					<div class="row">	


						<?php
							$query = "SELECT * FROM livestream";
							$query_run = mysqli_query($connection, $query);

							if (mysqli_num_rows($query_run) > 0) 
							{
								?>


					
								<?php
										while ($row = mysqli_fetch_assoc($query_run))
									 {
								?>
			 
								<div class="col-md-3">
									<div class="card card-transparent">
										<div class="card-header ">
											<div class="card-title">
											<?php echo '<img src="upload/'.$row['images'].'" width="120px;" height="120px;" alt="Image">' ?>
											</div>
										</div>
										<div class="card-body">

											<h4 style="color:#000 !important;" class="text-primary no-margin">(<?php echo $row['id'] ?>) <?php echo $row['name'] ?></h4>
											<br>
											<p><?php echo $row['occupation'] ?></p>
											<a style="color: #000 !important;" href="<?php echo $row['instagram'] ?> "><span class="sr-only">Follow us on instagram</span><i class="fa fa-lg fa-instagram"></i></a>
											<a style="color: #000 !important;" href="<?php echo $row['linkedin'] ?> "><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a>
											<a style="color: #000 !important;" href="<?php echo $row['twitter'] ?>"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a>
											<br>
											<br>
											<form action="speaker_edit.php" method="post">
												<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
												<button type="submit" name="edit_speaker_btn" class="btn btn-success">EDIT</button>
											</form>
											<form action="code.php" method="POST">
												<input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
												<button type="submit"  name="speaker_delete_btn" class="btn btn-danger">DELETE</button>
											</form>
											<hr>
										</div>
									</div>
								</div>

								<?php
										
									}
								?>

						<?php
							}
							else
							{
								echo "No Record Found";
							}
						?>
					</div>
				</div>
			</div>

			<div class="">
				<div class=" container-fluid   container-fixed-lg">
					<div class="card card-transparent">


						<div class="card-header ">
							<div class="pull-right">
								<div class="col-xs-12">
									<button class="btn btn-primary btn-cons" id="btnToggleSlideUpSize"><i class="fa fa-plus"></i> Add</button>
								</div>

								<div class="pull-left">
									<?php
										if(isset($_SESSION['success']) && $_SESSION['success'] !='')
										{
											echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].' </h2>';
											unset($_SESSION['success']);
										}
										if (isset($_SESSION['status']) && $_SESSION['status'] !='')
										 {
											echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
											unset($_SESSION['status']);
										}
									?>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					
					</div>
				</div>


				<div class=" container-fluid   container-fixed-lg">
					<div class="row">	


						<?php
							$query = "SELECT * FROM livestream";
							$query_run = mysqli_query($connection, $query);

							if (mysqli_num_rows($query_run) > 0) 
							{
								?>


					
								<?php
										while ($row = mysqli_fetch_assoc($query_run))
									 {
								?>
			 
								<div class="col-md-3">
									<div class="card card-transparent">
										<div class="card-header ">
											<div class="card-title">
											<?php echo '<img src="upload/'.$row['images'].'" width="120px;" height="120px;" alt="Image">' ?>
											</div>
										</div>
										<div class="card-body">

											<h4 style="color:#000 !important;" class="text-primary no-margin">(<?php echo $row['id'] ?>) <?php echo $row['name'] ?></h4>
											<br>
											<p><?php echo $row['occupation'] ?></p>
											<a style="color: #000 !important;" href="<?php echo $row['instagram'] ?> "><span class="sr-only">Follow us on instagram</span><i class="fa fa-lg fa-instagram"></i></a>
											<a style="color: #000 !important;" href="<?php echo $row['linkedin'] ?> "><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a>
											<a style="color: #000 !important;" href="<?php echo $row['twitter'] ?>"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a>
											<br>
											<br>
											<form action="speaker_edit.php" method="post">
												<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
												<button type="submit" name="edit_speaker_btn" class="btn btn-success">EDIT</button>
											</form>
											<form action="code.php" method="POST">
												<input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
												<button type="submit"  name="speaker_delete_btn" class="btn btn-danger">DELETE</button>
											</form>
											<hr>
										</div>
									</div>
								</div>

								<?php
										
									}
								?>

						<?php
							}
							else
							{
								echo "No Record Found";
							}
						?>
					</div>
				</div>
			</div>
			

		</div>
	</div>
</div>








<div class="overlay hide" data-pages="search">

<div class="overlay-content has-results m-t-20">

<div class="container-fluid">

<img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">


<a href="#" class="close-icon-light overlay-close text-black fs-16">
<i class="pg-close"></i>
</a>

</div>

<div class="container-fluid">

<input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
<br>
<div class="inline-block">
<div class="checkbox right">
<input id="checkboxn" type="checkbox" value="1" checked="checked">
<label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
</div>
</div>
<div class="inline-block m-l-10">
<p class="fs-13">Press enter to search</p>
</div>

</div>

<div class="container-fluid">
<span>
<strong>suggestions :</strong>
</span>
<span id="overlay-suggestions"></span>
<br>
<div class="search-results m-t-40">
<p class="bold">Pages Search Results</p>
<div class="row">
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>
<img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
<p class="hint-text">via john smith</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div>T</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
<p class="hint-text">via pages</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
<div><i class="fa fa-headphones large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
<p class="hint-text">via pagesmix</p>
</div>
</div>

</div>
<div class="col-md-6">

<div class="">

<div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
<div><i class="fa fa-facebook large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
<p class="hint-text">via facebook</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
<div><i class="fa fa-twitter large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-text">via twitter</p>
</div>
</div>


<div class="">

<div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
<div><i class="fa fa-google-plus large-text "></i>
</div>
</div>

<div class="p-l-10 inline p-t-5">
<h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
<p class="hint-text">via google plus</p>
</div>
</div>

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