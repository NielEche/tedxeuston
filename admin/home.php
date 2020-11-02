<?php

	include('security.php');

	include('includes/header.php');
	include('includes/navbar.php');
?>


	<div class="page-content-wrapper ">
		<div class="content ">
			<?php
			$query = "SELECT * FROM homepage";
			$query_run = mysqli_query($connection, $query);

			if (mysqli_num_rows($query_run) > 0) 
			{
				?>

				<?php
						while ($row = mysqli_fetch_assoc($query_run))
					{
				?>
			<div class="modal fade fill-in" id="modalFillIn" tabindex="-1" role="dialog" aria-hidden="true">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				<i class="pg-close"></i>
				</button>
				<div class="modal-dialog modal-dialog2">
					<div class="modal-content">
						<div class="modal-body p-0">
							<div class="row">
								<div class="col-lg-12 ">
									<?php echo '<img src="'.$row['images'].'" width="100%;" alt="Image">' ?> 
								</div>
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
					echo "No Record Found";
				}
			?>
		</div>
	</div>
										

<div class="page-container ">
	<div class="page-content-wrapper ">
		<div class="content ">
			
			<div class="jumbotron" data-pages="parallax">
				<div class=" container-fluid   container-fixed-lg">
					<div class="inner">
						<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Web Pages</a></li>
						<li class="breadcrumb-item active">Home Page</li>
						</ol>
					</div>
				</div>
			</div>
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
			<div class=" container-fluid container-fixed-lg p-3" >
				<div class="card card-transparent">
					<section >
						<header class="card-body p-0">
						<br>
							<h1 class="page-title"  style="color: #000; font-weight: bold !important;">Homepage header</h1>
						</header>
					</section>
				</div>	
			</div>
			<?php
				$query = "SELECT * FROM homepage";
				$query_run = mysqli_query($connection, $query);

				if (mysqli_num_rows($query_run) > 0) 
				{
			?>

			<?php
					while ($row = mysqli_fetch_assoc($query_run))
				{
			?>
							
			<div class=" container-fluid container-fixed-lg " >
				<div class="card card-transparent">
					<section >
						<header style="float:right; display:flex;" class="card-body ">
							<h4 class="text-center page-title "  style="background-color:#ee543c; color: #fff; font-weight: bold !important; font-size: 15px; padding: 5px 20px 5px 20px;"><?php echo $row['file_title']; ?> 
							</h4>
							<form class="m-0" action="homepage_header.php" method="post">
								<input type="hidden" name="edit_homefile_id" value="<?php echo $row['id'] ?>">
							  	<button style="border-radius:0; height:82%;" type="submit" name="edit_homefile_btn" class="btn btn-success"><i class="fa fa-pencil"></i></button>
							</form>
							
						</header>
					</section>
				</div>	
			</div>
			<hr>
			<div class=" container-fluid container-fixed-lg p-3">
				<div class="row">	
							
					<div class="card card-transparent">
						<div class="card-body">
							<div class="row ">
								<div style="cursor:pointer !important;" class="col-xl-6 col-md-6" data-target="#modalFillIn" data-toggle="modal" id="btnFillSizeToggler">
									<?php echo '<img src="'.$row['images'].'" width="100%;" alt="Image">' ?> 
								</div>
								<div class="col-xl-6 col-md-6 p-0">
										<div class="card-body">
										<label style="color:#000;">Section 2</label>
											<textarea style="font-size: 15px !important; font-weight:bold ; color:#000;" type="text"  class="form-control" rows="5" readonly><?php echo $row['section2cap']; ?></textarea>
										</div>
									
										<div class="form-group card-body">
											<label style="color:#000;">WATCH VIDEOS NOW</label><br>
											<button  class="btn btn-lg btn-rounded btn-primary m-r-20 m-b-10"> <a style="color:#fff;" href="<?php echo $row['video_url']; ?>"> Watch Video Now</a></button>
											<!--<input type="text" style="color:#000;" name="edit_video_url" value="<?php echo $row['video_url']; ?>" class="form-control" placeholder="Enter link" readonly> --> 
										</div>	
								</div>
							</div>
						</div>
							
						<div class="card-body">
						
							<div style="display: flex; justify-content:flex-end;">
								<form action="homepage_header.php" method="post">
									<input type="hidden" name="edit_home_id" value="<?php echo $row['id'] ?>">
									<button type="submit" name="edit_homeimg_btn" class="btn btn-success btn-cons m-b-10"><i class="fa fa-paste"></i>EDIT</button>
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
							echo "No Record Found";
						}
					?>
	
					<hr>
			<div class=" container-fluid container-fixed-lg " >
				<div class="card card-transparent">
					<section >
						<header class="card-body p-0">
						<br>
							<h1 class="page-title"  style="color: #000; font-weight: bold !important;">Speakers</h1>
						</header>
					</section>
				</div>	
			</div>
			<div class=" container-fluid   container-fixed-lg">
				<div class="row">	


					<?php
						$query = "SELECT * FROM (SELECT * FROM speakers ORDER BY id DESC LIMIT 4)Varl
						ORDER BY id ASC ";
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
                                        <?php echo '<img src="speakerupload/'.$row['images'].'" width="120px;" height="120px;" alt="Image">' ?>
                                    </div>
                                    <h5 style="font-size:16px;"> <?php echo $row['name'] ?></h5> 
                                    <div class="card card-transparent ">
                                        <ul class="nav nav-tabs nav-tabs-fillup" data-init-reponsive-tabs="dropdownfx">
                                            <li class="nav-item">
                                                <a href="#" class="active" data-toggle="tab"
                                                    data-target="#<?php echo $row['id'] ?>1"><span>Profile</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="tab"
                                                    data-target="#<?php echo $row['id'] ?>2"><span>Details</span></a>
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
                                                        <h6 style="text-transform:uppercase; font-size:12px;" class="bold"><?php echo $row['occupation'] ?></h6>
                                                        <a style="color: #000 !important;" href="<?php echo $row['instagram'] ?> "><span class="sr-only">Follow us on instagram</span><i class="fa fa-lg fa-instagram"></i></a>
                                                        <a style="color: #000 !important;" href="<?php echo $row['linkedin'] ?> "><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a>
                                                        <a style="color: #000 !important;" href="<?php echo $row['twitter'] ?>"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a>
                                                    
                                                    </div>
                                            
                                                </div>
                                            </div>
                                            <div class="tab-pane slide-left" id="<?php echo $row['id'] ?>2">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <p style="font-size:10px;" class="m-0">Talk Title</p>
                                                        <h6 style="text-transform:uppercase; font-size:12px;" class="bold m-0 pb-1"><?php echo $row['talk_title'] ?></h6>
                                                        <p style="font-size:10px;" class="m-0">Speaker Bio</p>
                                                        <p><?php echo $row['speaker_bio'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane slide-left" id="<?php echo $row['id'] ?>3">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                    <div  class='member__name member__name1 in-view__child in-view__child--fadein in-view__child--in' height="100px"><?php echo $row['video_url'] ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="btn-group">
                                        <form action="speaker_edit.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                            <button type="submit" name="edit_speaker_btn" class="btn btn-success"><i class="fa fa-pencil"></i>
                                            </button>
                                        </form>
                                        <form  action="code.php" method="POST">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>">
                                            <button type="submit" name="speaker_delete_btn" class="btn btn-danger"><i class="fa fa-trash-o"></i>
                                            </button>
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
				</div>
			</div>
		</div>
	</div>
</div>



<?php
	include('includes/scripts.php');
	include('includes/footer.php');
?>