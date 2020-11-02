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
                            <a href="speakers.php">Events</a>
                          </li>
                          <li>
                            <a href="partner.php" style="color: rgb(247, 23, 53); text-decoration: underline;">Partners</a>
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
                            ?> </li>
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
                    <div class="team-members">
                      <div class="">
                        <div class="row">
                          <div class="col-lg-12 col-12 ">
                            <h1 style="margin-bottom:0px;">Our partners</h1>
                            <h4>Together, we are all working as one to share ideas and accelerate African innovation</h4>
                            <p>Collaboration is at the heart of what we do at TEDxEuston. Each year, we work with a range of organisations to deliver a series of inspiring events for our community. Thanks to the generosity of our partners, we have been able to champion a new generation of thought leadership and responsible engagement with Africa.</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row"  style="margin-left: 0px !important;">
                              <h4>Principal Partner</h4>
                            </div>
                            <div class="row"  style="margin-left: 0px !important;">
                            <?php
                                $query = "SELECT * FROM partners WHERE partner_type='1'";
                                $query_run = mysqli_query($connection, $query);

                                if (mysqli_num_rows($query_run) > 0) 
                                {
                                  ?>

                                  <?php
                                      while ($row = mysqli_fetch_assoc($query_run))
                                    {
                                ?>
                              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                <figure> <?php echo '<img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="admin/partner/'.$row['partner_image'].'" alt="" width="445" height="445">' ?>
                                      <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                  </figure>
                              </div>  
                              <?php
                                    
                                  }
                                ?>
                                <?php
                              }
                              else
                              {
                                echo " ";
                              }
                            ?>
                            </div>
                          </div>


                          <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <br>
                            <div class="row" style="margin-left: 0px !important;"><h4>Major partners</h4></div>
                            <div class="row">
                              <div class="col-6 col-lg-3">
                                    <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/logo_hires2.jpg" data-src="partners/andaz.png" alt="" width="445" height="445">
                                      <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                    </figure>
                              </div>
                            </div>
                          </div>-->
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row" style="margin-left: 0px !important;"><h4>Partners</h4></div>
                            <div class="row">
                              <?php
                                $query = "SELECT * FROM partners WHERE partner_type='2'";
                                $query_run = mysqli_query($connection, $query);

                                if (mysqli_num_rows($query_run) > 0) 
                                {
                                  ?>

                                  <?php
                                      while ($row = mysqli_fetch_assoc($query_run))
                                    {
                                ?>
                               <div class="col-6 col-lg-3">
                                    <figure> <?php echo '<img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="admin/partner/'.$row['partner_image'].'" alt="" width="445" height="445">' ?>
                                      <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                    </figure>
                              </div>
                              <?php
                                    
                                  }
                                ?>
                                <?php
                              }
                              else
                              {
                                echo " ";
                              }
                            ?>
                            
                            </div>
                          </div>

                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row" style="margin-left: 0px !important;"><h4>Community Partners</h4></div>
                            <div class="row">
                            <?php
                                $query = "SELECT * FROM partners WHERE partner_type='3'";
                                $query_run = mysqli_query($connection, $query);

                                if (mysqli_num_rows($query_run) > 0) 
                                {
                                  ?>

                                  <?php
                                      while ($row = mysqli_fetch_assoc($query_run))
                                    {
                                ?>
                              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <figure> <?php echo '<img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="admin/partner/'.$row['partner_image'].'" alt="" width="445" height="445">' ?>
                                  <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                </figure>
                              </div>
                              <?php
                                    
                                  }
                                ?>
                                <?php
                              }
                              else
                              {
                                echo " ";
                              }
                            ?>
                            </div>
                          </div>

                        </div>
                         <br>
                        <br>
                        <br>
                       <div class="col-lg-12 col-md-12"><p>For more information about working with TEDxEuston, please send an email to <strong>
                        partners@tedxeuston.com</strong> or <strong>media@tedxeuston.com</strong>. We welcome in-kind contributions for all areas of the event including press, merchandising and hospitality. Space to creatively engage with attendees in the TEDxEuston Marketplace can be hired on request, based on availability.</p></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
            </section>
            <br>
            <br>
            <br>
          </main>
        </div>
      </div>

      <?php
        include('includes/footer1.php');
     ?>