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
							<h5>Add <span class="semi-bold">Event Details</span></h5>
						</div>
						<div class="modal-body">
							<form action="code.php" method="POST" enctype="multipart/form-data">

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Image</label>
											<input type="file" id="event_image" name="event_image" class="form-control" required>
										</div>
									</div>
								</div>

                                <div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Event Name</label>
											<input type="text" name="event_name" placeholder="event name" class="form-control" required>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Event Theme</label>
											<input type="text" name="event_theme" placeholder="event theme" class="form-control" required>
										</div>
									</div>
								</div>

                                <div class="row">
									<div class="col-md-12">
										<div class="form-group form-group-default">
											<label>Event Date</label>
											<input type="date" name="event_date" placeholder="event date" class="form-control" required>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group ">
											<label>About</label>
											<textarea rows="10" type="text" name="about_event" placeholder="About Event" class="form-control"></textarea>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-8">
									</div>
									<div class="col-md-4 m-t-10 sm-m-t-10">
										<button type="submit" name="event_save" class="btn btn-primary btn-block m-t-5">Save</button>
									</div>
								</div>
							</form>
							
						</div>
					</div>
				</div>
			</div>

			<?php
				$query = "SELECT * FROM events";
				$query_run = mysqli_query($connection, $query);

				if (mysqli_num_rows($query_run) > 0) 
				{
			?>

			<?php
					while ($row = mysqli_fetch_assoc($query_run))
					{
			?>
			<div class="modal fade slide-up disable-scroll" id="<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-hidden="false">
				<div class="modal-dialog ">
					<div class="modal-content-wrapper">
						<div class="modal-content">
							<div class="modal-header clearfix text-left">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
								</button>
								<h5>Add Event <span class="semi-bold">Programme</span></h5>
								<p class="p-b-10">Add New Or Update already existing Event Programme</p>
							</div>
							<div class="modal-body">
								<div class="form-group-attached">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group form-group-default">
									
											<?php 
												echo '<embed src="upload/'.$row['event_file'].'" width="100%" type="application/pdf"> ';
											?>
											</div>
										</div>
									</div>
								</div>
								<form action="code.php" method="POST" enctype="multipart/form-data" role="form">
									<div class="form-group-attached">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Event Programme or Brochure</label><br>
													<input type="file" id="event_file" name="event_file" class="form-control" required>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 m-t-10 sm-m-t-10">
											<input type="hidden" name="more_id" value="<?php echo $row['id'] ?>">
											<button type="submit" name="event_more_save" class="btn btn-primary btn-block m-t-5">Save</button>
										</div>
									</div>
								</form>
								
							</div>
						</div>
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
				echo "";
			}
			?>


			<div class="jumbotron" data-pages="parallax">
				<div class=" container-fluid   container-fixed-lg">
					<div class="inner">
						<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Web Pages</a></li>
						<li class="breadcrumb-item active">Events Page</li>
						</ol>
					</div>
				</div>
			</div>


			<div class=" container-fluid   container-fixed-lg">
				<div class="card card-transparent">

					<section style="padding-bottom:0px;">
	                  <header class="page-header">
	                    <h1 class="page-title" style="font-weight: bold !important;">Events</h1>
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
								<button id="btnStickUpSizeToggler" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add Event
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
							$result_count = mysqli_query($connection, "SELECT COUNT(*) As total_records FROM `events`"
								);
								$total_records = mysqli_fetch_array($result_count);
								$total_records = $total_records['total_records'];
								$total_no_of_pages = ceil($total_records / $total_records_per_page);
								$second_last = $total_no_of_pages - 1;
						
						$query = "SELECT * FROM `events`  LIMIT $offset, $total_records_per_page ";
						$query_run = mysqli_query($connection, $query);

						if (mysqli_num_rows($query_run) > 0) 
						{
							?>

							<?php
									while ($row = mysqli_fetch_assoc($query_run))
								 {
							?>
		 
							<div class="col-md-3 p-0">
								<div class="card card-transparent m-0">
									<div class="card-header ">
										<div class="card-title events">
											<?php echo '<img src="upload/'.$row['event_image'].'" class="eventsimg" width="100%;"" alt="Image">' ?>
										</div>
									</div>
									<div class="card-body ">
										<div class="eventdetails">
											<h5 class="m-0"><?php echo $row['event_name'] ?></h5>
											<h6 class="m-0"><?php echo $row['event_theme'] ?></h6>
											<p class="m-0"><?php echo $row['event_date'] ?></p>	
										</div>
										
										<div style="display: flex;">
											<div class="dropdown dropdown-default">
												<button class="btn dropdown-toggle text-center" style="width:150px!important;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="#">
														<form action="speakers.php" method="post">
															<input type="hidden" name="event_speaker_id" value="<?php echo $row['id'] ?>">
															<button type="submit" name="add_eventspeaker_btn" class="btn btn-success">SPEAKERS</button>
														</form>
													</a>
													<a class="dropdown-item" href="#">
															<div class="card-body p-0">
																<input type="hidden" name="event_id" value="<?php echo $row['id'] ?>">
																<button class="btn  btn-success" data-target="#<?php echo $row['id'] ?>" data-toggle="modal" >ADD MORE</button>
															</div><br>
															<!--<button class="btn btn-green btn-lg  btn-success" id="btnToggleSlideUpSize">ADD MORE </button>-->
														</a>

													<a class="dropdown-item" href="#">
														<form action="events_add.php" method="post">
															<input type="hidden" name="event_id" value="<?php echo $row['id'] ?>">
															<button type="submit" name="edit_event_btn" class="btn btn-success">EDIT <i class="fa fa-pencil"></i></button>
														</form>
													</a>
													<a class="dropdown-item" href="#">
														<form action="code.php" method="POST">
															<input type="hidden" name="eventdelete_id" value="<?php echo $row['id'] ?>">
															<button type="submit"  name="event_delete_btn" class="btn btn-danger">DELETE  <i class="fa fa-trash-o"></i></button>
														</form>
													</a>
												</div>
											</div>
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
							echo "No Event Found";
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