<?php

  include('includes/connect.php');

?>
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
                          <a href="#" style="color: rgb(247, 23, 53); text-decoration: underline;">About</a>
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
    
      <section class="section section--singular2 video">
        <video controls poster="assets/media/group.jpg" style="width: 100%;" height="auto" >
          <source src="assets/media/aboutvid.mp4" type="video/mp4">
        </video> 
      </section>
          <!--<section class="section section--singular2" id="ourstory">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12 col-xl-12 aboutvideo nopadding">
  
                    <header class="page-header">
                      <iframe src="https://www.youtube.com/embed/JwOSh1vWhdo" poster="assets/media/vid.jpg" allow="autoplay; encrypted-media" allowfullscreen="" width="100%" height="700" frameborder="0"></iframe>
                    </header>
                  </div>
                </div>
              </div>
            </section>-->
            <!--<script>
              $(".video__placeholder, .video__button").on("click", function() {
                if (!$("#video-player").length) {
                  var video =
                    '<iframe id="video-player" src="' +
                    $(".video__placeholder").attr("data-video") +
                    '" frameborder="0" allowfullscreen wmode="opaque"></iframe>';
                  $(video).insertAfter($(".video__placeholder"));
                  $(".video__button").addClass("is-playing");
                } else {
                  $(".video__button").removeClass("is-playing");
                  $("#video-player").remove();
                }
              });

            </script>-->

      <section class="section section--singular" id="ourstory" style="padding-top:20px !important;">
          <div class="container-fluid">
          <div class="row in-view">
            <div class="col-12 col-xl-10 offset-xl-1">
              <header style="margin-bottom: 10px !important;" class="page-header">
                <h1 class="page-title">Our Story</h1>
                <h5 class="page-subtitle"><span>A people with a purpose...</span></h5>
              </header>
              <?php
                $query = "SELECT * FROM about_details";
                $query_run = mysqli_query($connection, $query);

                if (mysqli_num_rows($query_run) > 0) 
                {
                  
                      while ($row = mysqli_fetch_assoc($query_run))
                      {
                  ?>
              <div class="paragraph in-view in-view--in">
                <div class="row in-view__child in-view__child--fadein in-view__child--in">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 in-view__child in-view__child--fadein in-view__child--in">
                  <div style="margin-left: 0px !important;" class="reveal__copy indent">
                    <p style="width: 750px !important;" class=" in-view__child in-view__child--fadein in-view__child--in"><?php echo $row['abouttext']; ?></p>
                  </div>
                </div>
                 <div class="col-6 col-md-6 col-sm-12 col-12 in-view__child in-view__child--fadein in-view__child--in">
                  <div style="margin-left: 0px !important;" class="reveal__copy indent">
                    <p style="width: 750px !important;" class="in-view__child in-view__child--fadein in-view__child--in">
                    <?php echo $row['abouttext2']; ?>
                    </p>
                  </div>
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
      </section>
      

      <div class="site-content" id="content" style="color:#000;">
        <div class="content-area" id="primary">
          <main class="site-main" id="main">
            <section class="section section--singular">
            <div class="container-fluid">
              <div class="row in-view">
                <div class="col-12 col-xl-10 offset-xl-1">
                  <header class="page-header">
                      <h1 class="page-title">The Team</h1>
                  </header>
                </div>
              </div>
            </div>
              <div class="container">
                <div class="row">
                  <div class="col-lg-12 col-md-12" id="team">
                    <div class="row">
                     <?php
                      $query = "SELECT * FROM about_team";
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
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#<?php echo $row['id'] ?>">
                              <figure>
                                <?php echo '<img class="lazyload--el lazyload in-view__child" src="admin/teamupload/'.$row['images'].'"  alt="Image" width="445" height="600">' ?>
                                <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>

                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein"  style="font-weight:bold !important; text-transform: uppercase; font-size:15px !important; "><?php echo $row['name'] ?></h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;"><?php echo $row['role'] ?></p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="<?php echo $row['id'] ?>" role="dialog">
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                  <div class="row">
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member" style="padding-bottom: 0px; margin-bottom:0px;">
                                        <div class="member__image poster poster--square in-view in-view--in">
                                          <figure>
                                          <?php echo '<img class="lazyload--el lazyload in-view__child" src="admin/teamupload/'.$row['images'].'"  alt="Image" width="445" height="600">' ?>
                                          <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member">
                                        <div class="member__info in-view in-view--in">
                                          <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;"><?php echo $row['name'] ?></h6>
                                          <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;"><?php echo $row['role'] ?></p>
                                          <p class="member__title member__title1  in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;"><?php echo $row['bio'] ?></p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <p class="statusMsg"></p>
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
                </div>
              </div>
            </section>
          </main>
        </div>
      </div>

      <section class="section section--singular" id="ourstory" style="padding-top:20px !important;">
          <div class="container-fluid">
          <div class="row in-view">
            <div class="col-12 col-xl-10 offset-xl-1">
             
              <header style="margin-bottom: 10px !important;" class="page-header">
                 <h1 class="page-title">About TED</h1>
               
                <h5 class="page-subtitle"><span>Ideas worth spreading...</span></h5>
              </header>
              <div class="paragraph in-view in-view--in">
                <div class="row in-view__child in-view__child--fadein in-view__child--in">
                <div class="col-6 col-md-6 col-sm-12 col-12 in-view__child in-view__child--fadein in-view__child--in">
                  <div style="margin-left: 0px !important;" class="reveal__copy indent">
                    <p style="width: 750px !important;" class=" in-view__child in-view__child--fadein in-view__child--in">TED is a non-profit organisation devoted to Ideas Worth Spreading. Started as a four-day conference in California 30 years ago, TED has grown to support its mission with multiple initiatives. The two annual TED Conferences invite the world's leading thinkers and doers to speak for 18 minutes or less. Many of these talks are then made available, free, at TED.com. TED speakers have included Bill Gates, Jane Goodall, Elizabeth Gilbert, Sir Richard Branson, Nandan Nilekani, Philippe Starck, Ngozi Okonjo-Iweala, Sal Khan and Daniel Kahneman.</p>
                  </div>
                </div>
                 <div class="col-6 col-md-6 col-sm-12 col-12 in-view__child in-view__child--fadein in-view__child--in">
                  <div style="margin-left: 0px !important;" class="reveal__copy indent">
                    <p style="width: 750px !important;" class="in-view__child in-view__child--fadein in-view__child--in">The annual TED Conference takes place each spring in Vancouver, British Columbia. TED's media initiatives include TED.com, where new TED Talks are posted daily; the Open Translation Project, which provides subtitles and interactive transcripts as well as translations from volunteers worldwide; the educational initiative TED-Ed. TED has established the annual TED Prize, where exceptional individuals with a wish to change the world get help translating their wishes into action; TEDx, which supports individuals or groups in hosting local, self- organized TED-style events around the world, and the TED Fellows program, helping world-changing innovators from around the globe to amplify the impact of their remarkable projects and activities.</p>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--<section>
        <div class="container-fluid nopadding">
            <div class="one withsmallpadding ppb_header " style="padding-bottom:40px !important;text-align:left;padding:30px 0 30px 0;background-color:#ffff;color:#000;">
                <div class="standard_wrapper">
                  <div class="page_content_wrapper">
                    <div class="inner">
                      <div class="indent">
                      <div style="margin:auto;width:100%;"><h2 class="ppb_title" style="color:#000; font-size:45px !important; text-align:left;">About TED
                      </h2>
                      <h5 class="page-subtitle"><span>Ideas worth spreading...</span></h5>
                        <div class="in-view__child in-view__child--fadein in-view__child--in">
                          <div class="col-12 col-lg-6">
                            <div class="dashed in-view__child in-view__child--in">
                              <p>TED is a non-profit organisation devoted to Ideas Worth Spreading. Started as a four-day conference in California 30 years ago, TED has grown to support its mission with multiple initiatives. The two annual TED Conferences invite the world's leading thinkers and doers to speak for 18 minutes or less. Many of these talks are then made available, free, at TED.com. TED speakers have included Bill Gates, Jane Goodall, Elizabeth Gilbert, Sir Richard Branson, Nandan Nilekani, Philippe Starck, Ngozi Okonjo-Iweala, Sal Khan and Daniel Kahneman.</p>
                            </div>
                          </div>
                          <div class="col-12 col-lg-6">
                            <div class="in-view__child in-view__child--in">
                              <p>The annual TED Conference takes place each spring in Vancouver, British Columbia. TED's media initiatives include TED.com, where new TED Talks are posted daily; the Open Translation Project, which provides subtitles and interactive transcripts as well as translations from volunteers worldwide; the educational initiative TED-Ed. TED has established the annual TED Prize, where exceptional individuals with a wish to change the world get help translating their wishes into action; TEDx, which supports individuals or groups in hosting local, self- organized TED-style events around the world, and the TED Fellows program, helping world-changing innovators from around the globe to amplify the impact of their remarkable projects and activities.</p>
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
      </section>-->
      <?php
        include('includes/footer.php');
     ?>