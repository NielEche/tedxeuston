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
											<label>Image</label>
											<input type="file" id="team_image" name="team_image" class="form-control" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Name</label>
											<input type="text" name="name" placeholder="Enter Name" class="form-control">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Role</label>
											<input type="text" name="role" placeholder="Enter Role" class="form-control">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group ">
											<label>Bio</label>
											<textarea rows="10" type="text" name="bio" placeholder="Enter Bio" class="form-control"></textarea>
										</div>
									</div>
								</div>

								<div class="row">
								<div class="col-md-8">
								</div>
								<div class="col-md-4 m-t-10 sm-m-t-10">
									<button type="submit" name="team_save" class="btn btn-primary btn-block m-t-5">Save</button>
								</div>
							</div>
							</form>
							
						</div>
					</div>
				</div>
			</div>

			<div class="jumbotron" data-pages="parallax">
				<div class=" container-fluid   container-fixed-lg">
					<div class="inner">
						<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Web Pages</a></li>
						<li class="breadcrumb-item active">About Page</li>
						</ol>
					</div>
				</div>
			</div>

			
			<form  id="form-register" class="p-t-15" action="code.php" method="POST" role="form" enctype="multipart/form-data">
				<div class=" container-fluid   container-fixed-lg " >
					<div class="card-body">
						<?php
							if(isset($_SESSION['success']) && $_SESSION['success'] !='')
							{
								echo '
								<div class="alert alert-success" role="alert">
									<button class="close" data-dismiss="alert"></button>
									<strong>Success: </strong>'.$_SESSION['success'].'
								</div>';
								unset($_SESSION['success']);
							}
							if (isset($_SESSION['status']) && $_SESSION['status'] !='')
								{
								echo '<div class="alert alert-danger" role="alert">
								<button class="close" data-dismiss="alert"></button>
								<strong>Danger: </strong>'.$_SESSION['status'].'
								</div>';
								
								unset($_SESSION['status']);
							}
						?>
					</div>
					<div class="card card-transparent">
						<section style="padding-bottom:0px;">
		                  <header class="page-header">
		                  	<br>
		                      <h1 class="page-title" style="font-weight: bold !important;">OUR STORY</h1>
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

		                <div class="container-fluid p-0">
							<div class=" card card-default" >
								<div class="card-header ">
									<!--<div class="card-title">WYSIWYG editors
									</div>-->
									<div class="tools">
										<a class="collapse" href="javascript:;"></a>
										<a class="config" data-toggle="modal" href="#grid-config"></a>
										<a class="reload" href="javascript:;"></a>
										<a class="remove" href="javascript:;"></a>
									</div>
								</div>
								<div class="container-md-height m-b-20" >
									<div class="row m-lg-0">
											<?php
											$query = "SELECT * FROM about_details";
											$query_run = mysqli_query($connection, $query);

											if (mysqli_num_rows($query_run) > 0) 
											{
												
														while ($row = mysqli_fetch_assoc($query_run))
													 {
												?>
										<div class="col-xl-6 col-lg-6 bg-white" >
											<div class="full-height">
												<div class="card-body ">
													<label style="font-weight: bold !important;">A people with a purpose...</label>
													<textarea type="text" name="edit_about_text" class="form-control" placeholder="write here" rows="9"><?php echo $row['abouttext']; ?></textarea>
													<!--<div class="summernote-wrapper">
														<div name="edit_text" id="summernote"><?php echo $row['headtext']; ?></div>
													</div>-->
												</div>
											</div>
										</div>

										<div class="col-xl-6 col-lg-6">
											<div class="card card-transparent">
												<div class="card-body">
													<!--<label style="color: #fff !important;">HOME HEAD 2</label>-->
													<br>
													<br>
													<textarea type="text" name="edit_about_text2" class="form-control" rows="9"><?php echo $row['abouttext2']; ?></textarea>
												</div>
											</div>
										</div>
										<?php							
												}
												
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
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="container-fluid card-body ">
						<header class="page-header">
							<button type="submit" name="aboutdetails_update_btn" class="btn btn-primary">Update</button>
						</header>
					</div>
				</div>
			</form>


			<div class=" container-fluid   container-fixed-lg">
				<div class="card card-transparent">
					<div class="card-header ">
						<div class="card-title">
							  <h1 class="page-title" style="font-weight: bold !important;">THE TEAM</h1>
						</div>
						<div class="pull-right">
							<div class="col-xs-12">
								<button id="btnStickUpSizeToggler" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add Team Member
								</button>
							</div>
							<div class="pull-left">

							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="card-body">
					<div class="row">
					<?php

						if (isset($_GET['page_no']) && $_GET['page_no']!="") {
							$page_no = $_GET['page_no'];
							} else {
								$page_no = 1;
							} 
							$total_records_per_page = 8;

							$offset = ($page_no-1) * $total_records_per_page;
							$previous_page = $page_no - 1;
							$next_page = $page_no + 1;
							$adjacents = "2";
							$result_count = mysqli_query($connection, "SELECT COUNT(*) As total_records FROM `about_team`"
								);
								$total_records = mysqli_fetch_array($result_count);
								$total_records = $total_records['total_records'];
								$total_no_of_pages = ceil($total_records / $total_records_per_page);
								$second_last = $total_no_of_pages - 1;

						
						$query = "SELECT * FROM `about_team` LIMIT $offset, $total_records_per_page ";
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
										<?php echo '<img src="teamupload/'.$row['images'].'" width="100px;" height="100px;" alt="Image">' ?>
										</div>
									</div>
									<div class="card-body">

										<h4 style="color:#000 !important;" class="text-primary no-margin"><!--(<?php echo $row['id'] ?>)--> <?php echo $row['name'] ?></h4>
										<br>
										<p style="font-weight:bold;"><?php echo $row['role'] ?></p>
										<p><?php echo "<p style='height:50px;'>".substr($row['bio'], 0, 50)."....</p>" ?></p>
										
										<div style="display: flex; justify-content:flex-start;">
											<form action="about_edit.php" method="post">
												<input type="hidden" name="edit_team_id" value="<?php echo $row['id']; ?>">
												<button type="submit" name="edit_team_btn" class="btn btn-success"><i class="fa fa-pencil"></i></button>
											</form>
											<form action="code.php" method="post">
												<input type="hidden" name="delete_team_id" value="<?php echo $row['id']; ?>">
												<button type="submit" name="delete_team_btn" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
											</form>
										
										</div>
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
					<div class="container-fluid container-fixed-lg bg-white no-padding">
							<div class="card card-transparent">
								<div class="card-body">
									<div id="tableWithExportOptions_wrapper" class="dataTables_wrapper no-footer">
										<div class="row">
											<div >
												<div class="dataTables_paginate paging_simple_numbers" id="tableWithExportOptions_paginate">
													<ul class="pagination">
														<?php if($page_no > 1){
														echo "<li class='paginate_button'><a aria-controls='tableWithExportOptions' tabindex='0' href='?page_no=1'>First Page</a></li>";
														} ?>
															
														<li class="paginate_button previous" id="tableWithExportOptions_previous" <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
														<a <?php if($page_no > 1){
														echo "href='?page_no=$previous_page'";
														} ?> aria-controls="tableWithExportOptions" data-dt-idx="0" tabindex="0"><i class="pg-arrow_left"></i></a>
														</li>

														<?php
															if ($total_no_of_pages <= 10){   
																for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
																if ($counter == $page_no) {
																echo "<li class='paginate_button active'><a aria-controls='tableWithExportOptions' tabindex='0'>$counter</a></li>"; 
																		}else{
																	echo "<li class='paginate_button'><a aria-controls='tableWithExportOptions' tabindex='0' href='?page_no=$counter'>$counter</a></li>";
																			}
																	}
															} elseif ($total_no_of_pages > 10){
																if($page_no <= 4) { 
																	for ($counter = 1; $counter < 8; $counter++){ 
																	if ($counter == $page_no) {
																	echo "<li class='paginate_button active'><a aria-controls='tableWithExportOptions' tabindex='0'>$counter</a></li>"; 
																	}else{
																			echo "<li class='paginate_button'><a aria-controls='tableWithExportOptions' tabindex='0' href='?page_no=$counter'>$counter</a></li>";
																				}
																}
																echo "<li><a>...</a></li>";
																echo "<li class='paginate_button'><a aria-controls='tableWithExportOptions' tabindex='0' href='?page_no=$second_last'>$second_last</a></li>";
																echo "<li class='paginate_button'><a aria-controls='tableWithExportOptions' tabindex='0' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
																}
																} elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) { 
																	echo "<li class='paginate_button'><a aria-controls='tableWithExportOptions' tabindex='0' href='?page_no=1'>1</a></li>";
																	echo "<li class='paginate_button'><a aria-controls='tableWithExportOptions' tabindex='0' href='?page_no=2'>2</a></li>";
																	echo "<li class='paginate_button disabled' id='tableWithExportOptions_ellipsis'><a aria-controls='tableWithExportOptions'  tabindex='0'>...</a></li>";
																	for (
																		$counter = $page_no - $adjacents;
																		$counter <= $page_no + $adjacents;
																		$counter++
																		) { 
																		if ($counter == $page_no) {
																	echo "<li class='paginate_button active'><a aria-controls='tableWithExportOptions' tabindex='0'>$counter</a></li>"; 
																	}else{
																			echo "<li class='paginate_button'><a aria-controls='tableWithExportOptions' tabindex='0' href='?page_no=$counter'>$counter</a></li>";
																			}                  
																		}
																	echo "<li><a>...</a></li>";
																	echo "<li class='paginate_button'><a aria-controls='tableWithExportOptions' tabindex='0' href='?page_no=$second_last'>$second_last</a></li>";
																	echo "<li class='paginate_button'><a aria-controls='tableWithExportOptions' tabindex='0' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
																	} else {
																		echo "<li class='paginate_button'><a aria-controls='tableWithExportOptions' tabindex='0' href='?page_no=1'>1</a></li>";
																		echo "<li class='paginate_button'><a aria-controls='tableWithExportOptions' tabindex='0' href='?page_no=2'>2</a></li>";
																		echo "<li class='paginate_button disabled' id='tableWithExportOptions_ellipsis'><a aria-controls='tableWithExportOptions'  tabindex='0'>...</a></li>";
																		for (
																			$counter = $total_no_of_pages - 6;
																			$counter <= $total_no_of_pages;
																			$counter++
																			) {
																			if ($counter == $page_no) {
																		echo "<li class='active'><a>$counter</a></li>"; 
																		}else{
																				echo "<li><a href='?page_no=$counter'>$counter</a></li>";
																		}                   
																			}
																		}
														?>
															
														<li class="paginate_button next" id="tableWithExportOptions_next" <?php if($page_no >= $total_no_of_pages){
														echo "class='disabled'";
														} ?>>
														<a aria-controls="tableWithExportOptions"  tabindex="0" <?php if($page_no < $total_no_of_pages) {
														echo "href='?page_no=$next_page'";
														} ?>><i class="pg-arrow_right"></i></a>
														</li>
														
														<?php if($page_no < $total_no_of_pages){
														echo "<li class='paginate_button '><a aria-controls='tableWithExportOptions'  tabindex='0' href='?page_no=$total_no_of_pages'>Last </a></li>";
														} ?>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

				</div>
					</div>
				</div>
			</div>


			<!--<form  id="form-register" class="p-t-15" action="code.php" method="POST" role="form" enctype="multipart/form-data">
				<div class=" container-fluid   container-fixed-lg " >
					<div class="card card-transparent">
						<section style="padding-bottom:0px;">
		                  <header class="page-header">
		                  	<br>
		                      <h1 class="page-title" style="font-weight: bold !important;">ABOUT TED</h1>
		    
		                  </header>
		                  <div class="paragraph in-view in-view--in">
		                    <div class="row in-view__child in-view__child--fadein in-view__child--in">
		                      <div class="col-12 col-lg-6">
		                      </div>
		                    </div>
		                  </div>
		                </section>
					
						<div class=" container-fluid p-0">
							<div class=" card card-default" >
								<div class="card-header ">
									<div class="tools">
										<a class="collapse" href="javascript:;"></a>
										<a class="config" data-toggle="modal" href="#grid-config"></a>
										<a class="reload" href="javascript:;"></a>
										<a class="remove" href="javascript:;"></a>
									</div>
								</div>
								<div class="container-md-height m-b-20" >
									<div class="row m-lg-0">
											<?php
											$query = "SELECT * FROM about_ted";
											$query_run = mysqli_query($connection, $query);

											if (mysqli_num_rows($query_run) > 0) 
											{
												
														while ($row = mysqli_fetch_assoc($query_run))
													 {
												?>
										<div class="col-xl-6 col-lg-6 bg-white" >
											<div class="full-height">
												<div class="card-body ">
													<label style="font-weight: bold !important;">Ideas Worth Spreading...</label>
													<textarea type="text" name="edit_tedabout_text" class="form-control" rows="9"><?php echo $row['tedabouttext']; ?></textarea>
													
												</div>
											</div>
										</div>

										<div class="col-xl-6 col-lg-6">
											<div class="card card-transparent">
												<div class="card-body">
													<br>
													<br>
													<textarea type="text" name="edit_tedabout_text2" class="form-control" rows="9"><?php echo $row['tedabouttext2']; ?></textarea>
												</div>
											</div>
										</div>
										<?php							
												}
												
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
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="container-fluid card-body ">
						<header class="page-header">
							<button type="submit" name="aboutted_update_btn" class="btn btn-primary">Update</button>
						</header>
					</div>
				</div>
			</form>-->

		</div>
	</div>
</div>

<?php
	include('includes/scripts.php');
	include('includes/footer.php');
?>