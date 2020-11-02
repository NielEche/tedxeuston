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
							<h5>Add <span class="semi-bold">Video Details</span></h5>
						</div>
						<div class="modal-body">
							<form action="code.php" method="POST" enctype="multipart/form-data">

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Image</label>
											<input type="file" id="images" name="images" class="form-control" required>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Video header</label>
											<input type="text" name="name" placeholder="enter header" class="form-control" required>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Type</label>
				                            <select class="form-control" name="talk_type">
				                              <option>All</option>
				                              <option value="talk">Talk</option>
				                              <option value="performance">Performance</option>
				                            </select>
											
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Event</label>
											<input type="text" name="event_name" placeholder="Enter Event name" class="form-control" required>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default ">
											<label>Tags</label>
											<input class="tagsinput custom-tag-input" name="speaker_tags" type="text" >
										</div>
									</div>
								</div>
                                                

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Youtube Embed Url</label>
											<input type="text" name="video_url" placeholder="Video Url" class="form-control" required>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-8">
									</div>
									<div class="col-md-4 m-t-10 sm-m-t-10">
										<button type="submit" name="gallery_save" class="btn btn-primary btn-block m-t-5">Save</button>
									</div>
								</div>
							</form>
							
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade stick-up" id="myvidModal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header clearfix text-left">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
							</button>
						</div>
						<div class="modal-body">
			 				<div class="card-header ">
								<div class="card-title">
								<?php echo $row['video'] ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		<div class="modal fade fill-in" id="modalFillIn" tabindex="-1" role="dialog" aria-hidden="true">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			<i class="pg-close"></i>
			</button>
			<div class="modal-dialog ">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="text-left p-b-5"><span class="semi-bold"> </h5>
					</div>
					<div class="modal-body">
						<div class="row">

					<?php
						$query = "SELECT * FROM speakers";
						$query_run = mysqli_query($connection, $query);

						if (mysqli_num_rows($query_run) > 0) 
						{
							?>


				
							<?php
									while ($row = mysqli_fetch_assoc($query_run))
								 {
							?>
		 
							<div class="card-header ">
								<div class="card-title">
								<?php echo $row['video_url'] ?>
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
					<div class="modal-footer">
					</div>
				</div>
			</div>
		</div>




			<div class="jumbotron" data-pages="parallax">
				<div class=" container-fluid   container-fixed-lg">
					<div class="inner">
						<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Web Pages</a></li>
						<li class="breadcrumb-item active">Gallery Page</li>
						</ol>
					</div>
				</div>
			</div>


			<div class=" container-fluid   container-fixed-lg">
				<div class="card card-transparent">

					<section style="padding-bottom:0px;">
	                  <header class="page-header">
	                    <h1 class="page-title" style="font-weight: bold !important;">Gallery</h1>
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

					<div class="card-header ">
						<div class="pull-right">
							<div class="col-xs-12">
								<button id="btnStickUpSizeToggler" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add Video
								</button>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					
				</div>
			</div>


			<div class=" container-fluid   container-fixed-lg">
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
						$result_count = mysqli_query($connection, "SELECT COUNT(*) As total_records FROM `speakers`"
							);
							$total_records = mysqli_fetch_array($result_count);
							$total_records = $total_records['total_records'];
							$total_no_of_pages = ceil($total_records / $total_records_per_page);
							$second_last = $total_no_of_pages - 1;


					$query = "SELECT * FROM `speakers` LIMIT $offset, $total_records_per_page ";
					$query_run = mysqli_query($connection, $query);


					if (mysqli_num_rows($query_run) > 0) 
					{
					?>

					<?php
						while ($row = mysqli_fetch_assoc($query_run))
					{
					?>

							
							<div class="col-md-3">
                                    <div class="card-title speakers">
										<?php echo '<img src="speakerupload/'.$row['images'].'" width="100px;" height="100px;" alt="Image">' ?>
									</div>
                                    <div class="card card-transparent ">
                                        <ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
                                            <li class="nav-item">
                                                <a href="#" class="active" data-toggle="tab"
                                                    data-target="#<?php echo $row['id'] ?>1"><span>Details</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="tab"
                                                    data-target="#<?php echo $row['id'] ?>3"><span>Video</span></a>
                                            </li>
                                        </ul>

                                        <div class="tab-content">
                                            <div class="tab-pane slide-left active" id="<?php echo $row['id'] ?>1">
                                                <div class="row column-seperation">
                                                    <div class="col-lg-12">
                                                        <h6 style="text-transform:uppercase; font-size:12px;" class="bold"><?php echo $row['name'] ?></h6>
														<h6 style="text-transform:uppercase; font-size:10px;" class="bold"><?php echo $row['event_name'] ?></h6>
													</div>
                                            
                                                </div>
                                            </div>
                                            
                                            <div class="tab-pane slide-left" id="<?php echo $row['id'] ?>3">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                    <div  class='member__name member__name1 in-view__child in-view__child--fadein in-view__child--in' height="100px"><?php echo $row['video'] ?></div>
										 			</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="btn-group">
											<form action="gallery_edit.php" method="post">
												<input type="hidden" name="gallery_id" value="<?php echo $row['id'] ?>">
												<button type="submit" name="edit_gallery_btn" class="btn btn-success"><i class="fa fa-pencil"></i></button>
											</form>
											<form action="code.php" method="POST">
												<input type="hidden" name="gallerydelete_id" value="<?php echo $row['id'] ?>">
												<button type="submit"  name="gallery_delete_btn" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
											</form>
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
</div>



<?php
	include('includes/scripts.php');
	include('includes/footer.php');
?>