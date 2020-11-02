<?php

	include('security.php');

	include('includes/header.php');
	include('includes/navbar.php');
?>
	
        <div class=" container-fluid   container-fixed-lg">
            <div class="card card-transparent">
                <div class="page-container">
                    <div class="page-content-wrapper ">
                        <div class="content ">
                        
                            <div class="modal fade stick-up" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header clearfix text-left">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                                            </button>
                                            <h5>Add <span class="semi-bold">Speaker</span></h5>
                                        </div>
                                        <div class="modal-body">
                                            <?php
                                            if (isset($_POST['add_eventspeaker_btn']))
                                            {
                                                $id = $_POST['event_speaker_id'];

                                                $query = "SELECT * FROM events WHERE id='$id'";
                                                $query_run = mysqli_query($connection, $query);

                                                foreach ($query_run as $row)
                                                {
                                                
                                            ?>
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
                                                            <label>Event</label>
                                                            <input style="color:#000;" type="text" name="event_name" value="<?php echo $row['event_name']; ?>" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Event</label>
                                                            <input style="color:#000;" type="text" name="event_id" value="<?php echo $row['id']; ?>" class="form-control" readonly>
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
													<div class="col-md-12">
														<div class="form-group form-group-default">
															<label>Speaker Youtube Embed Url</label>
															<input type="text" name="video_url" placeholder="Video Url" class="form-control" required>
														</div>
													</div>
												</div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group form-group-default ">
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
                                                            <label>Talk Title</label>
                                                            <input type="text" name="talk_title" placeholder="Talk Title" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                              
                                                 <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group ">
                                                            <label>Bio</label>
                                                            <textarea rows="7" type="text" name="speaker_bio" placeholder="Speaker bio" class="form-control"></textarea>
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
                                                    <div class="col-md-4 m-t-10 sm-m-t-10">
                                                        <button type="submit" name="speaker_save" class="btn btn-primary btn-block m-t-5">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <?php
                                                    } 
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="card shadow mb-2">
                                    <div class="card-body">
                                        <?php
                                            if (isset($_POST['add_eventspeaker_btn']))
                                            {
                                                $id = $_POST['event_speaker_id'];

                                                $query = "SELECT * FROM events WHERE id='$id'";
                                                $query_run = mysqli_query($connection, $query);

                                                foreach ($query_run as $row)
                                                {
                                                
                                                ?>
                                                
                                                <div class="card-header p-0">
                                                    <h4 class=" font-weight-bold text-primary"> <?php echo $row['event_name']; ?> Speakers</h4>
                                                </div>

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
				
                <div class="card-header ">
                    <div class="pull-right">
                        <div class="col-xs-12">
                            <button id="btnStickUpSizeToggler" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> Add Speaker
                            </button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>     
        
        <div class=" container-fluid   container-fixed-lg">
            <div class="card card-transparent">
                <div class="page-container">
                    <div class="page-content-wrapper ">
                        <div class="content ">
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
                                if (isset($_POST['add_eventspeaker_btn']))
                                {
                                    $id = $_POST['event_speaker_id'];

                                    $query = "SELECT * FROM speakers WHERE event_id='$id'";
                                    $query_run = mysqli_query($connection, $query);

                                    foreach ($query_run as $row)
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
                                    <hr>
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
             
<?php
	include('includes/scripts.php');
	include('includes/footer.php');
?>