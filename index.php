
<?php

	include('includes/connect.php');

?>
<!DOCTYPE html>
<html class="no-js" lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
   <title>TEDxEuston - African ideas worth spreading</title>
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//s.w.org">
    <link rel="icon" href="favicons/favicon-red.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla:400,700i,700|Poppins:700">
    <link rel="stylesheet" href="assets/css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
    <link rel="stylesheet" href="scheme-eliza.css" type="text/css" media="all">
    <link rel="stylesheet" href="style-custom.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/trackpad-scroll-emulator.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery.nouislider.min.css" type="text/css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="maxcdn/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="maxcdn/bootstrap.min.js"></script>
  </head>
  <body class="page">
    <div class="site" id="page">
      <header class="site-header" id="masthead" style="background:#eff0f1;">
        <div class="site-header__wrap">
          <div class="container-fluid">
            <div class="row in-view">
              <div class="col-12 col-xl-10 offset-xl-1 ">
                <div class="site-header__elements">
                  <div class="site-header__mobile hidden-lg-up">
                    <button class="site-header__mobile--trigger side-menu-trigger">
                      <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                  </div>
                  <div class="site-header__branding">
                    <div class="site-branding">
                      <a href="index.php" style="color: rgb(247, 23, 53); text-decoration: underline;">
                        <img src="assets/media/tedxelogo.svg" alt="" style="width: 116px; height: 72px">
                      </a>
                    </div>
                  </div>
                  <div class="site-header__nav hidden-md-down">
                    <div class="site-header__menu">
                      <nav class="main-navigation" aria-label="Site Menu" role="navigation">
                        <div class="menu-top-menu-container">
                          <ul class="menu" id="top-menu">
                            <li class="menu-item-has-children">
                              <a href="# " >About</a>
                              <ul class="sub-menu">
                                <li>
                                  <a href="about.php#ourstory">
                                    <span>Our story</span>
                                  </a>
                                </li>
                                <li>
                                  <a href="about.php#team">
                                    <span>Team</span>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a href="speakers.php">Events</a>
                            </li>
                            <li>
                              <a href="partner.php">Partners</a>
                            </li>
                            <li>
                              <a href="gallery.php">Gallery</a>
                            </li>
                            <li>
                              <a href="contact.php">Contact</a>
                            </li>
                             <!--<li>
                              <a href="livestream.php">Stream</a>
                            </li>-->
                            <li style="background-color: #ee543c !important; color:#fff; padding-left:16px !important; padding-right: 16px; margin-top: 0px; " >
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
                              <?php echo '<a class="tickets" href=" admin/upload/' .$row['file_link']. '" download="Legacy Programme">' .$row['file_title']. '</a> ' ?> 
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
                           </li>
                          </ul>
                        </div>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="site-content" id="content"  >
        <div class="content-area" id="primary">
          <main class="site-main" id="main">
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
            <section class="section section--singular2 video" style="background-color:#ee543c !important; ;">
                 <?php echo '<img src="admin/'.$row['images'].'" width="100%;" alt="Image" style="opacity: 1; left: 0px; width:100% !important;">' ?>
            </section>
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
             
            <section class="section" id="registration">
              <div class="container-fluid container2 section-block hero-3 hero-3-services-1 bottom nopadding" style="height: 0px !important;">
                <div class=" row1 tmh-perspective" style="max-width: 100% !important; ">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" data-animate-in="preset:slideInUpShort;duration:1000ms;delay:200ms;"   data-threshold="0.5" style="padding-left:0px !important; padding-right:0px !important; backface-visibility: hidden;transition-property: transform, opacity; transition-duration: 1000ms; transition-timing-function: cubic-bezier(0.11, 0.69, 0.66, 1.01); transition-delay: 200ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1); opacity: 1; visibility: visible; transform-origin: 50% 50% 0px;">
                      <div class="hero-content">
                        <div class="color-white bottom " style="height:100% !important;">
                         
                         <div class="indent">
                            <div class="col-12 col-xl-10 offset-xl-1  nopadding">
                              <h2 class="margin-top " style=" text-align:left !important; font-size:30px !important; line-height: 37px !important;">
                              <span style="width:90%; ">Watch some of our previous talks from the strategic thinkers, 
                                  builders &amp; influencers who are shaping
                                 Africa today</span>
                              </h2>
                            </div>
                            <div class="col-12 col-xl-10 offset-xl-1  nopadding">
                              <p class="padding-top margin-top in-view in-view--in" data-offset="90%" style="margin-bottom: 50px !important;">
                                <span class="d-inline-block in-view__child in-view__child--scalein in-view__child--in">
                                  <a style="border-radius:20px;" class="btn btn--primary" href="https://www.youtube.com/playlist?list=PLsRNoUx8w3rOQuPhZ-vCOe5ckAAJEz0ik&amp;app=desktop" target="blank">Watch videos now</a>
                                </span>
                              </p>
                            </div>
                         </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </section>
            <style type="text/css">
              .member, .member__info{
                margin-top:15%;
              }
              @media (max-width: 993px){
                .member__info{
                  margin-top:-5%;
                }
              }
              .speaker-title{
                margin:0px;
                font-size:1.1em;
                text-decoration: none !important;
                text-transform: none !important;
                line-height: 1;
              }
              .speaker-link{
                text-decoration: none;
                text-transform: none;
                margin-top:0px;
              }
            </style>
            <br>
            <section class="container webinar-speakers" id="details">
                <header class="heading-underline">
                    <h4 class="title"><span>Speakers</span></h4>
                </header>
                      <br>
                      <br>
                    <div class="row">
                    <?php
                      $query = "SELECT * FROM (SELECT * FROM speakers ORDER BY id DESC LIMIT 8)Varl
                      ORDER BY id ASC ";
                      $query_run = mysqli_query($connection, $query);

                      if (mysqli_num_rows($query_run) > 0) 
                      {
                        ?>

                  
                        <?php
                            while ($row = mysqli_fetch_assoc($query_run))
                          {
                        ?>
                       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">

                            <div class="speaker-neat">
                              <div class="speaker-neat__image poster in-view">
                                <form action="speakerdetails.php" method="post">
                                      <input type="hidden" name="speaker_details_id" value="<?php echo $row['id'] ?>">
                                      <input type="hidden" name="events_details_id" value="<?php echo $row['event_id'] ?>"> 
                                      <figure><button style="cursor:pointer; border:0px !important; background:none !important;" type="submit" name="speaker_details_btn" >
                                      <?php echo '<img class="lazyload--el lazyload in-view__child" src="admin/speakerupload/'.$row['images'].'" " alt="'.$row['name'].'" width="445" height="600">' ?>
                                      <div class="poster--cover in-view in-view__child"></div>
                                      </button></figure>
                                  </form>
                              </div>
                              <div class="speaker-neat__copy in-view">
                                <h5 style="text-transform:uppercase;" class="in-view__child in-view__child--fadein"><?php echo $row['name'] ?></h5>
                                <p style="text-transform:uppercase;" class="in-view__child in-view__child--fadein"><?php echo $row['occupation'] ?></p>
                              
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

                  <header class="heading-underline">
                    <h4 style="top:0px !important;" class="title">
                      <span><a href="speakers.php" class="link">See all speakers</a></span><br><br>
                    </h4>
                  </header>
                </section>
    
          </main>
        </div>
      </div>
     <?php 
      include('includes/footer.php');
     ?>