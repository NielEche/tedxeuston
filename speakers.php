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
  </head>
  <body class="page">
    <div class="site" id="page">
    <header class="site-header" id="masthead" style="background:#eff0f1;">
      <div class="site-header__wrap">
        <div class="container-fluid">
          <div class="row in-view">
            <div class="col-12 col-xl-10 offset-xl-1">
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
                            <a href="#">About</a>
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
                            <a href="speakers.php" style="color: rgb(247, 23, 53); text-decoration: underline;">Events</a>
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
                            <li style="background-color: #ee543c !important; color:#fff; padding-left:16px !important; padding-right: 16px; margin-top:0px; " >
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
                            ?></li>
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

    <div class="site-content" id="content">
      <div class="content-area" id="primary">
        <main class="site-main" id="main">
          <section class="section section--singular">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12 col-xl-10 offset-xl-1">
                <section style="padding-bottom:0px;">
                  <header class="page-header">
                    <h1 class="page-title">Events</h1>
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
                  <div class="row">
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
                     <div class="col-12 col-lg-3">
                      <div class="speaker-neat">
                        <div class="speaker-neat__image poster in-view">
                          <a style="text-transform: uppercase;"class="speakersname"><h5 class="in-view__child in-view__child--fadein"><?php echo $row['event_name'] ?></h5></a>
                         
                          <form action="eventspeakers.php" method="post">
															<input type="hidden" name="event_speaker_id" value="<?php echo $row['id'] ?>">
                            <div style="">
                           
                            <figure> <button style="cursor:pointer; border: 0px !important;  background:none !important;" class=" nopadding"  type="submit" name="add_eventspeaker_btn" >
                            <?php echo '<img style="object-fit: cover; width:600px !important; height:100%;" class="lazyload--el eventsimage lazyload in-view__child" src="admin/upload/'.$row['event_image'].'" " alt="'.$row['event_name'].'"width="600" height="600"> ' ?>
                              <div class="poster--cover in-view in-view__child"></div>
                            </button></figure></div>
                          </form>

                        </div>
                        <div class="speaker-neat__copy in-view">
                          <p style="text-transform: uppercase;" class="in-view__child in-view__child--fadein"><?php echo $row['event_theme'] ?></p>
                         
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
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
      </div>
    </div>

    <?php
        include('includes/footer1.php');
     ?>