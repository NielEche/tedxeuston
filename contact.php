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
                            <a href="partner.php">Partners</a>
                          </li>
                          <li>
                            <a href="gallery.php">Gallery</a>
                          </li>
                          <li>
                            <a href="contact.php" style="color: rgb(247, 23, 53); text-decoration: underline;">Contact</a>
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
                    <header class="page-header">
                      <h1 class="page-title">How can we <br>help you today?</h1>
                    </header>
                    <div class="row double-gutters">
                      <div class="col-12 col-lg-8 offset-lg-1 order-lg-2">
                        <p class="big">Interested in working with us or just want to say hello?</p>
                       <form action="/message" method="post">
                          <p>
                            <input type="text" name="name" id="name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Name">
                          </p>
                          <p>
                            <input type="email" name="email" id="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Email">
                          </p>
                          <p>
                            <textarea name="message" id="message" cols="40" rows="10" aria-invalid="false" placeholder="How can we help?"></textarea>
                          </p>
                          <p>
                            <input style="border-radius: 0px !important;" class="btn btn--primary" type="submit" id="sender" value="Send message">
                          </p>
                        </form>
                      </div>
                      <div class="col-12 col-lg-3 order-lg-1">
                        <h5 class="color--secondary">TEDxEuston</h5>
                        <p class="color--body-alt">London <br>United Kingdom</p>
                        <p class="text-body-2"><a href="tel:+31205302200">team@tedxeuston.com</a><br><a href="mailto:team@tedxeuston.com">partners@tedxeuston.com</a></p>
                      </div>
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