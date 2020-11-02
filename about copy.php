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
                            <a href="speakers.php">Speakers</a>
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
                           <a class="tickets" href="assets/media/LegacyProgramme.pdf" download="Legacy Programme">Download Programme</a>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/chikwe.jpeg" data-src="assets/media/chikwe.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>

                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein"  style="font-weight:bold !important; font-size:15px !important; ">Chikwe Ihekweazu</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Co-Founder</p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                         <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
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
                                          <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/chikwe.jpeg" data-src="assets/media/chikwe.jpeg" alt="" width="445" height="600">
                                            <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member">
                                        <div class="member__info in-view in-view--in">
                                           <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Chikwe Ihekweazu</h6>
                                          <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Co-Founder</p>
                                          <p class="member__title member__title1  in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Chikwe is a&nbsp;TED Fellow and co-founder of TEDxEuston. He is an infectious disease epidemiologist and currently works as CEO of the Nigeria Centre for Disease Control (NCDC). He has over 20 years’ experience working in senior public health and leadership positions in several National Public Health Institutes, including the South African National Institute for Communicable Diseases (NICD), the UK's Health Protection Agency, and Germany’s&nbsp;Robert Koch Institute (RKI). In between public service,&nbsp;he was&nbsp;Managing Partner of&nbsp;EpiAFRIC&nbsp;- a health consultancy firm based in Abuja and curator of the health policy advocacy platform, Nigeria Health Watch</p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal1"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/ike.jpeg" data-src="assets/media/ike.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important; ">Ike Anya</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Co-Founder
                            </p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                        <div class="modal fade" id="myModal1" role="dialog">
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
                                          <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/ike.jpeg" data-src="assets/media/ike.jpeg" alt="" width="445" height="600">
                                            <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member">
                                        <div class="member__info in-view in-view--in">
                                           <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Ike Anya</h6>
                                          <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Co-Founder</p>
                                          <p class="member__title member__title1  in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Ike is a Nigerian public health doctor and writer. Inspired by his experience as a Fellow at TED in Arusha in 2007, together with Chikwe Ihekweazu he founded the advocacy platform Nigeria Health Watch in 2007 and TEDxEuston in 2009. Following several years in senior positions in public health in the U.K., he is currently a principal partner & co-founder of  EpiAfric, a public health consultancy based in Abuja. Ike was a co-founder of the Abuja Literary Society and is on the advisory council of the Caine Prize for African Writing. </p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal2"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/amina.jpeg" data-src="assets/media/paddy.png" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important; ">Paddy Anigbo</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Treasurer</p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                        <div class="modal fade" id="myModal2" role="dialog">
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
                                          <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/paddy.png" data-src="assets/media/paddy.png" alt="" width="445" height="600">
                                            <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member">
                                        <div class="member__info in-view in-view--in">
                                           <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Paddy Anigbo</h6>
                                          <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Treasurer</p>
                                          <p class="member__title member__title1 in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Paddy is a Chartered IT Professional Member of the British Computer Society, who after a fulfilled career in the corporate world took a venture into entrepreneurship. Diro Systems was formed in 2008 following a lifelong dream to run a successful IT company.  Diro systems is now in it’s 10th year of operations, and has since expanded into Nigeria and serviced both big and small medium enterprises delivering excellent enterprise systems and services.  A strong volunteer career from childhood has led to involvement in several not for profit ventures including TEDxEuston, FGCE Project Hope, TEDLagos Ideas Search 2017 and TEDxOguiRoad.</p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal3"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/felicia.jpeg" data-src="assets/media/felicia.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important; ">Felicia Meyerowitz-Singh </h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Board Member</p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                        <div class="modal fade" id="myModal3" role="dialog">
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
                                          <figure><img class="lazyload--el in-view__child in-view__child--in lazyloaded" src="assets/media/felicia.jpeg" data-src="assets/media/felicia.jpeg" alt="" width="445" height="600">
                                            <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member">
                                        <div class="member__info in-view in-view--in">
                                           <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Felicia Meyerowitz-Singh</h6>
                                          <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Board Member</p>
                                          <p class="member__title member__title1  in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Felicia is a member of our Foundation Board and joined the TEDxEuston team in 2010. She is a committed business person, pioneering new solutions to old issues, through her award-winning Fintech startup Akoni. Felicia is South African, and aims to provide leadership in entrepreneurship, and drive and support diversity as a female founder as well as to leverage the impact of financial services. </p>
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

                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal4"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/amina.jpeg" data-src="assets/media/amina.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important;">Amina Abonde Adigun</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Curator</p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                        <div class="modal fade" id="myModal4" role="dialog">
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
                                          <figure><img class="lazyload--el in-view__child in-view__child--in lazyloaded" src="assets/media/amina.jpeg" data-src="assets/media/amina.jpeg" alt="" width="445" height="600">
                                            <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member">
                                        <div class="member__info in-view in-view--in">
                                           <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Amina Abonde Adigun</h6>
                                          <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Curator</p>
                                          <p class="member__title member__title1 in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Amina is a paediatric audiologist by trade, sales manager by day and curator of ideas by night. She joined the team in 2011 and was initially responsible for securing and building partnerships alongside Paddy, before taking on the mantle of co-curator in 2015. With a strong passion for global health, Amina is a member of the projects committee for the hearing loss charity Sound Seekers. When not travelling for work or voluntary healthcare projects, you can find Amina travelling for pleasure with several books in tow. When not travelling full stop, then Amina will be podcasting, eating desserts or listening to live music. </p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal5"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/ifediba.jpeg" data-src="assets/media/ifediba.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important; ">Ifediba Nwokedi-Greenstein</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Curator</p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                        <div class="modal fade" id="myModal5" role="dialog">
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
                                          <figure><img class="lazyload--el in-view__child in-view__child--in lazyloaded" src="assets/media/ifediba.jpeg" data-src="assets/media/ifediba.jpeg" alt="" width="445" height="600">
                                            <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member">
                                        <div class="member__info in-view in-view--in">
                                           <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Ifediba Nwokedi-Greenstein</h6>
                                          <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Curator</p>
                                          <p class="member__title member__title1 in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Ifediba has been the co-curator of TEDxEuston since 2015. She started her TEDxEuston journey as a volunteer in 2013 supporting the speaker management team. With an extensive background in psychotherapy and psychology in private practice and Secondary education, she now heads up the operations and communications for S. Greenstein Fine Diamond Jewellery. </p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal6"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/meryl.jpeg" data-src="assets/media/meryl.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important; ">Meryl Folb</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Speaker Management </p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                        <div class="modal fade" id="myModal6" role="dialog">
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
                                          <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/meryl.jpeg" data-src="assets/media/meryl.jpeg" alt="" width="445" height="600">
                                            <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member">
                                        <div class="member__info in-view in-view--in">
                                           <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Meryl Folb</h6>
                                          <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Speaker Management </p>
                                          <p class="member__title member__title1 in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Meryl went to her first TEDxEuston event in 2012. She shortly left the UK for a few years but returned to her next TEDxEuston event in 2016 and immediately volunteered to be part of the team. Meryl is part of the speaker management team. Meryl’s day job is heading up HR and Operations at an innovation centre. She regularly volunteers at charities that have great meaning to her. Meryl is a feeder by nature and in her spare time, she loves to cook and eat out. She is also a big fan of podcasts, going to museums, galleries and theatre.</p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal7"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/afolabi.jpeg" data-src="assets/media/afolabi.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important;">Afolabi Adekaiyaoja</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Speaker Management </p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                        <div class="modal fade" id="myModal7" role="dialog">
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
                                          <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/afolabi.jpeg" data-src="assets/media/afolabi.jpeg" alt="" width="445" height="600">
                                            <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member">
                                        <div class="member__info in-view in-view--in">
                                           <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Afolabi Adekaiyaoja</h6>
                                          <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Speaker Management</p>
                                          <p class="member__title member__title1  in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;"></p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal8"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/tola.jpeg" data-src="assets/media/tola.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important; ">Tola Ojuolape</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Visual Design </p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                        <div class="modal fade" id="myModal8" role="dialog">
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
                                        <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/tola.jpeg" data-src="assets/media/tola.jpeg" alt="" width="445" height="600">
                                          <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                        </figure>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-12 col-sm-12 ">
                                    <div class="member">
                                      <div class="member__info in-view in-view--in">
                                         <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Tola Ojuolape</h6>
                                        <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Visual Design</p>
                                        <p class="member__title member__title1 in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Tola is a Nigerian-Irish Designer. With a BA Hons in Interior Architecture and a MA in Branding and Communication Design, she currently works at the award winning multidisciplinary studio Blacksheep. In the past 7 years, she has worked with brands such as Ritz Carlton, Marriott Hotel Group & Brasserie Blanc with projects worldwide. With a passion for the African Continent, she is also the design lead at TEDxEuston and has worked with other African led organisations within the Art and Design spectrum. In her spare time she loves to travel, experience new cities and loves African Art.  2018 marked a new beginning for Tola as she is building her multidisciplinary studio with a focus on materiality and aesthetics for contemporary brands. </p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal9"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/kieron.jpg"  data-src="assets/media/kieron.jpg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important;">Kieron Lewis</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Graphic Design </p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                          </div>
                          <div class="modal fade" id="myModal9" role="dialog">
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
                                            <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/kieron.jpg" data-src="assets/media/kieron.jpg" alt="" width="445" height="600">
                                              <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                            </figure>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12 col-lg-12 col-sm-12 ">
                                        <div class="member">
                                          <div class="member__info in-view in-view--in">
                                             <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Kieron Lewis</h6>
                                            <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Graphic Design</p>
                                            <p class="member__title member__title1  in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Kieron (Kay) is a Graphic Artist with a strong background within digital, but a passion for print. 
                                            Since graduating from Southampton University with a BA (Hons) within Graphic Design, Marketing and Branding, he has worked at numerous award-winning creative agencies working with brands such as, IKEA, Land Rover and Virgin Atlantic.
                                             As well as being the Graphic Designer for TEDx Euston, Kay is also the Creative Director of Levile TV, as well as part of the creative duo, that is Olga & Kay. See kieronlewis.com to find out more!</p>
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
                       <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal10"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/sarah.jpeg" data-src="assets/media/sarah.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important;">Sarah Ann Filson</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Guest Experience Manager</p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                        <div class="modal fade" id="myModal10" role="dialog">
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
                                          <figure><img class="lazyload--el in-view__child in-view__child--in lazyloaded" src="assets/media/sarah.jpeg" data-src="assets/media/sarah.jpeg" alt="" width="445" height="600">
                                            <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member">
                                        <div class="member__info in-view in-view--in">
                                           <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Sarah Ann Filson</h6>
                                          <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Guest Experience Manager</p>
                                          <p class="member__title member__title1  in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Sarah joined the team in 2015 as Registration Coordinator, having previously attended and volunteered at TEDxEuston.  She works as a doctor in London, specialising in Infectious Diseases and Microbiology. She is also a council member and Trustee for the Royal Society of Medicine. Sarah is the social queen of the TEDxEuston team and can always recommend a good restaurant, show or event on any given night.  </p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal11"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/ritah.png" data-src="assets/media/ritah.png" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important;">Ritah Kambona</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Volunteer Manager</p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                        <div class="modal fade" id="myModal11" role="dialog">
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
                                          <figure><img class="lazyload--el in-view__child in-view__child--in lazyloaded" src="assets/media/ritah.png" data-src="assets/media/ritah.png" alt="" width="445" height="600">
                                            <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member">
                                        <div class="member__info in-view in-view--in">
                                           <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Ritah Kambona</h6>
                                          <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Volunteer Manager</p>
                                          <p class="member__title member__title1 in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Ritah is the Volunteer Manager for TEDxEuston.  She often refers to herself as a ‘Jane of all trades’. As a result, she has a unique ability to navigate complex issues. Her passion is Social Justice. She also thrives in growing and innovative organisations and ‘hounds’ institutions to do the right thing.  When she is not working, she’ll likely to be listening to SUBTRKT, Lingala, Lauryn Hill, Maxwell, all things musical, or upcycling!</p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal12"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/zainab.jpeg"  data-src="assets/media/zainab.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important; ">Zainab Sanusi</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Operations Manager</p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                         <div class="modal fade" id="myModal12" role="dialog">
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
                                          <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/zainab.jpeg" data-src="assets/media/zainab.jpeg" alt="" width="445" height="600">
                                            <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member">
                                        <div class="member__info in-view in-view--in">
                                           <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Zainab Sanusi</h6>
                                          <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Operations Manager</p>
                                          <p class="member__title member__title1  in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Better known as “Zeezee”, Zainab is the Operations Manager for TEDxEuston, and brings to life all the content of the infamous TEDxEuston goody bag. Her meticulous nature extends to her day-to-day role as a Doctor in the NHS, where she is currently training in the specialty of Obstetrics and Gynaecology. Outside of work, she is an avid reader, keen traveller, and commendable sportsperson usually to be found somewhere on a dance floor! </p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal13"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/mandy.jpeg" data-src="assets/media/mandy.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important; ">Mandy Maloyi</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Digital Communications Lead</p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                        <div class="modal fade" id="myModal13" role="dialog">
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
                                        <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/mandy.jpeg" data-src="assets/media/mandy.jpeg" alt="" width="445" height="600">
                                          <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                        </figure>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-12 col-sm-12 ">
                                    <div class="member">
                                      <div class="member__info in-view in-view--in">
                                         <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Mandy Maloyio</h6>
                                        <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Digital Communications Lead</p>
                                        <p class="member__title member__title1  in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Mandy is the Digital Communications Manager at TEDxEuston. Mandy leads the engagement of digital audiences across all TEDxEuston social channels. Together with the social media and design teams, she works to ignite African ideas worth spreading within the TEDxEuston digital communities. In her day job, Mandy works as a Marketing and Communications Officer where she is involved in delivering a range of communications projects across online, outdoor and in print media. In addition to this, she freelances her creative marketing skills through producing and editing podcasts, online shows and creating digital art. </p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal14"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/nancy.jpeg" data-src="assets/media/chika.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important;">Chika Unigwe</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Copywriter</p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                        <div class="modal fade" id="myModal14" role="dialog">
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
                                          <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/chika.jpeg" data-src="assets/media/chika.jpeg" alt="" width="445" height="600">
                                            <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member">
                                        <div class="member__info in-view in-view--in">
                                           <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Chika Unigwe</h6>
                                          <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Copywriter</p>
                                          <p class="member__title member__title1  in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Chika is a writer, a professor of creative writing, a wanna be kangaroo  and an eternal optimist. She is passionate about Africa, culture, social justice and feminism. She is interested in all the ways in which  art ( story-telling and film particularly)  can be utilized to combat single, dominant  narratives and believes in the redemptive ability  of art. Her novels include On Black Sisters Street and Nightdancer. She is the founder of Awele Creative Trust, a Nigerian based NGO that runs an annual writing contest for Nigerian youth.</p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal15"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/nancy.jpeg" data-src="assets/media/nancy.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important;">Nancy Adimora</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Partnerships</p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                        <div class="modal fade" id="myModal15" role="dialog">
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
                                        <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/nancy.jpeg" data-src="assets/media/nancy.jpeg" alt="" width="445" height="600">
                                          <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                        </figure>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-12 col-sm-12 ">
                                    <div class="member">
                                      <div class="member__info in-view in-view--in">
                                         <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Nancy Adimora</h6>
                                        <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Partnerships</p>
                                        <p class="member__title member__title1  in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Nancy is a Nigerian-Londoner who clearly thinks she’s cool enough to write about herself in third person. She works in Publishing and is the Founding Editor of AFREADA, an online platform featuring short stories from emerging writers across Africa.  After memorising three years worth of TEDxEuston talks, Nancy joined the team in 2015, and has since worked with a range of individual, corporate and foundation sponsors.  If you catch Nancy staring into the distance, she’s probably day-dreaming about a hot plate of Ofe Akwu, or thinking about social innovation and multimedia storytelling in Africa. When she isn’t preaching about “the power of ideas”, Nancy can be found waiting for her Green tea to cool, or stalking strangers on Instagram.</p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal16"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/sylvia.jpeg" data-src="assets/media/sylvia.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important;">Sylvia Waigwa</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Partnerships</p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                          </div>
                         <div class="modal fade" id="myModal16" role="dialog">
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
                                        <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/sylvia.jpeg" data-src="assets/media/sylvia.jpeg" alt="" width="445" height="600">
                                          <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                        </figure>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-12 col-sm-12 ">
                                    <div class="member">
                                      <div class="member__info in-view in-view--in">
                                         <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Sylvia Waigwa</h6>
                                        <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Partnerships</p>
                                        <p class="member__title member__title1 in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Sylvia is part of the partnerships team. She works as a procurement profession helping organisations make cost savings, maximise their operations, improve efficiencies while remaining effective. A role she has adopted in her personal life and she will haggle at any given opportunity.   Sylvia's passion for the African continent led her to recently complete a Masters in International Social Development, a decision largely inspired by attending the 2015 'Vision to Reality' TEDxEuston conference. She currently works for a child’s right INGO and hopes to do more in this sector.   She is happiest when watching a theatre production, backpacking or devouring a bowl of sweet potato fries.  </p>
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
                  
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal18"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/dami.jpeg" data-src="assets/media/dami.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important;">Dami Khadijah</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Brand & Marketing Lead</p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                         <div class="modal fade" id="myModal18" role="dialog">
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
                                          <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/dami.jpeg" data-src="assets/media/dami.jpeg" alt="" width="445" height="600">
                                            <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member">
                                        <div class="member__info in-view in-view--in">
                                           <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Dami Khadijah</h6>
                                          <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Brand & Marketing Lead</p>
                                          <p class="member__title member__title1  in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">A Strategist within the media publisher landscape, where Dami curates branded content for a multitude of clients within various sectors. Her current role at CNN, comprises of assisting in the business development of the Africa partnerships team whilst ideating and developing 360 campaigns and content. Her experience within advertising spans across a range of media publishers such as BBC and Refinery29, utilising and cultivating insights from audience data and research, working with a multitude of clients such as Mastercard, Spotify, Emirates, the Nigerian Government and more. A storyteller at large and creative director, her personal work has been featured and published on various platforms such as Tate Modern, i-D, CNN and more.
                                          Her passion for ‘African ideas worth spreading’ led to appointment to the core team in 2017, primarily working across all the teams to drive the brand reputation, curate content and extend the value proposition. She now leads the Media/PR arm alongside her Brand and Marketing role.</p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal19"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/ishaq.jpeg" data-src="assets/media/ishaq.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important;">Ishaq Adigun</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Community Engagement </p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                        <div class="modal fade" id="myModal19" role="dialog">
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
                                        <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/ishaq.jpeg" data-src="assets/media/ishaq.jpeg" alt="" width="445" height="600">
                                          <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                        </figure>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-12 col-lg-12 col-sm-12 ">
                                    <div class="member">
                                      <div class="member__info in-view in-view--in">
                                         <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Ishaq Adigun</h6>
                                        <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Community Engagement</p>
                                        <p class="member__title member__title1  in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Ishaq is a Financial Analyst. He attended his first TEDxEuston talk in 2013 as a volunteer, and has volunteered ever since then. This year he joined the core team as the Community Engagement Officer. Most people will describe him as being personable which is key to his role at TEDxEuston. A great man once said </p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal20"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/juwon.jpeg" data-src="assets/media/juwon.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important;">Juwon Layiwola</h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Accounts Manager</p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                        <div class="modal fade" id="myModal20" role="dialog">
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
                                          <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/juwon.jpeg" data-src="assets/media/juwon.jpeg" alt="" width="445" height="600">
                                            <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member">
                                        <div class="member__info in-view in-view--in">
                                           <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Juwon Layiwola</h6>
                                          <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Accounts Manager</p>
                                          <p class="member__title member__title1  in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Juwon is a typical Nigerian and works for an Investment Bank. He’s the Finance Officer for TEDxEuston, a role he started in 2018. He was honoured to join the TEDxEuston family after volunteering in their 2017 edition. He has previously been involved in TEDxSquareMile & TEDxLondon however there is something special about working with the TEDxEuston family and spreading the message of African ideas to the world. When Juwon’s not busy doing TEDxEuston work, usually at the same time as doing his day job, he’s mentoring or helping to set up an EquipAfrica Charity Trust (EACT), a charity aimed at improving the healthcare industry in sub-Saharan Africa.</p>
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
                      <div class="col-12 col-lg-3">
                        <div class="speaker-neat">
                          <div class="speaker-neat__image poster in-view">
                            <a href="#" data-toggle="modal" data-modal-external-file="dreamweavers.php" data-target="#myModal21"><figure><img class="lazyload--el lazyload in-view__child" src="assets/media/micheal.jpeg"  data-src="assets/media/micheal.jpeg" alt="" width="445" height="600">
                              <div class="poster--cover in-view in-view__child"></div>
                            </figure></a>
                          </div>
                          <div class="speaker-neat__copy in-view">
                            <h5 class="in-view__child in-view__child--fadein" style="font-weight:bold !important; font-size:15px !important;">Michael Adesina </h5>
                            <p class="in-view__child in-view__child--fadein" style="font-size:12px !important;">Production Manager </p>
                            <!--<p class="speaker-neat__links in-view__child in-view__child--fadein"><span class="sub-head dashed dashed--reverse dashed--hover in-view__child"><a href="#"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a><a href="#"><span class="sr-only">Follow us on facebook</span><i class="fa fa-lg fa-facebook-square"></i></a><a href="#"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a></span></p>-->
                          </div>
                        </div>
                         <div class="modal fade" id="myModal21" role="dialog">
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
                                          <figure><img class="lazyload--el in-view__child lazyloaded in-view__child--in" src="assets/media/micheal.jpeg" data-src="assets/media/micheal.jpeg" alt="" width="445" height="600">
                                            <div class="poster--cover in-view in-view__child in-view--in in-view__child--in"></div>
                                          </figure>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-sm-12 ">
                                      <div class="member">
                                        <div class="member__info in-view in-view--in">
                                           <h6 class="member__name member__name1 in-view__child in-view__child--fadein in-view__child--in" style="color: red;">Michael Adesina</h6>
                                          <p class="member__title sub-head-2 in-view__child in-view__child--fadein in-view__child--in" id="team_title" style="margin-bottom: 0px;">Production Manager</p>
                                          <p class="member__title member__title1  in-view__child in-view__child--fadein in-view__child--in" style="color:#000!important;">Michael has been part of the TEDxEuston family since December 2015. He currently serves as the Production lead on the team. He has also worked closely with production teams and sound engineers since 2013 as a volunteer and student. Michael is a graduate of international relations and has worked in international development since 2014. He is passionate about Africa and her people and the conversations that occur both on the continent and outside of it. Don’t tell anyone but his long-term goal is to create Africa’s very own Chatham house. </p>
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


      <footer class="site-footer" id="colophon" role="contentinfo">
        <div class="widget-area" role="complementary">
          <div class="container-fluid">
            <div class="row in-view">
              <div class="col-12 col-md-4 col-xl-2 offset-xl-1">
                <div class="widget">
                  <div class="widget_socials">
                    <div class="site-branding">
                      <a href="index.php">
                        <img src="assets/media/tedxelogo.svg" alt="" style="width: 116px; height: 72px">
                      </a>
                    </div>
                    <!--<div class="widget_socials__list">
                      <a class="widget_socials__item" href="https://twitter.com/hellopixudio" target="_blank">
                        <div class="sr-only">Follow us</div>
                        <i class="fa fa-twitter-square"></i>
                      </a>
                      <a class="widget_socials__item" href="https://behance.net/pixudio" target="_blank">
                        <div class="sr-only">Follow us</div>
                        <i class="fa fa-behance"></i>
                      </a>
                      <a class="widget_socials__item" href="https://www.instagram.com/hellopixudio/" target="_blank">
                        <div class="sr-only">Follow us</div>
                        <i class="fa fa-instagram"></i>
                      </a>
                      <a class="widget_socials__item" href="https://dribbble.com/pixudio" target="_blank">
                        <div class="sr-only">Follow us</div>
                        <i class="fa fa-dribbble"></i>
                      </a>
                    </div>-->
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-xl-2">
                <div class="widget">
                  <h2 class="widget-title">Contact</h2>
                  <div class="widget_nav_menu">
                    <ul>
                      <li>
                        <a href="mailto:team@tedxeuston.com">team@tedxeuston.com</a>
                      </li>
                      <li>
                        <a href="mailto:press@tedxeuston.com">media@tedxeuston.com</a>
                      </li>
                      <li>
                        <a href="mailto:volunteer@tedxeuston.com"><b>Want to volunteer?</b></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-xl-2">
                <div class="widget">
                  <h2 class="widget-title">Past events</h2>
                  <div class="widget_nav_menu">
                    <ul>
                      <li>
                        <a href="https://www.youtube.com/playlist?list=PLOtu7C7hVAIqz2EU_rETVX9fyr6tzSVLv" target="blank">2018 - DREAMWEAVERS</a>
                      </li>
                      <li>
                        <a href="https://www.youtube.com/playlist?list=PLOtu7C7hVAIqz2EU_rETVX9fyr6tzSVLv" target="blank">2017 - METAMORPHOSIS</a>
                      </li>
                      <li>
                        <a href="https://www.youtube.com/playlist?list=PLOtu7C7hVAIqz2EU_rETVX9fyr6tzSVLv" target="blank">2015 - VISION TO REALITY</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 offset-md-4 col-xl-2 offset-xl-0">
                <div class="widget">
                  <h2 class="widget-title">Follow us</h2>
                  <div class="widget_nav_menu">
                    <ul>
                        <li>
                          <a href="https://twitter.com/tedxeuston" target="_blank"><i class="fa fa-twitter">  </i>      Twitter</a>
                        </li>
                        <li>
                          <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i>       Facebook</a>
                        </li>
                        <li>
                          <a href="https://www.instagram.com/tedxeuston/" target="_blank"><i class="fa fa-instagram"></i>      Instagram</a>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4 col-xl-2">
                <div class="widget">
                  <h2 class="widget-title">Never miss updates</h2>
                  <div class="widget_nav_menu">
                    <div class="signup-form-container">
                      <a class="btn btnplus btn--secondary" style="background: red; color:#000 !important; font-size: 13px; border-radius: 0px !important;" href="https://www.universe.com/events/tedxeuston-legacy-tickets-MB8371" target="blank">Subscribe</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <div class="go-up" id="up"><a class="go-up__btn" href="#page"><span class="btn btn--primary btn--circle"><i class="fa fa-chevron-up"></i></span></a>
      </div>
      <div class="site-sidenav" id="sidenav">
        <div class="site-sidenav__overlay side-menu-swipeable" style="touch-action: pan-y; user-select: none;"></div>
        <div class="site-sidenav__elements side-menu-swipeable" style="touch-action: pan-y; user-select: none;">
          <div class="site-sidenav__branding">
            <div class="site-branding">
              <a href="index.php">
                <img src="assets/media/tedxelogo.svg" alt="" style="width: 116px; height: 72px">
              </a>
            </div>
          </div>
          <div class="site-sidenav__nav">
            <div class="site-sidenav__menu">
              <nav class="sidenav-navigation" aria-label="Site Mobile Menu" role="navigation">
                <div class="menu-sidenav-menu-container">
                  <ul class="menu" id="sidenav-menu">
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
                      <a href="speakers.php">Speakers</a>
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
                     <li>
                     <a style="color:red;"  href="assets/media/LegacyProgramme.pdf" download="Legacy Programme">Download Programme</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <script type="application/javascript" src="assets/js/lib.js"></script>
    <script defer async type="application/javascript" src="assets/js/app.js"></script>
  </body>
</html>