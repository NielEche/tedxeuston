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
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.css">
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
              <div class="container nopadding">
                <div class="row">
                  <div class="col-12 col-xl-12">
                    <br>
                    <div class="container">
                        <div class="mypanel">
                        <?php
                        if (isset($_POST['speaker_details_btn']))
                        {
                            $id = $_POST['speaker_details_id'];
                            $ids = $_POST['events_details_id'];

                            $query = "SELECT * FROM speakers WHERE id='$id'";
                            $query_run = mysqli_query($connection, $query);

                            foreach ($query_run as $row)
                            { 
                        ?>
                          <ul style="padding:0px !important;">
                            <li style="list-style:none;">
                              <div class="board board--left">
                                <div class="row">
                                  <div class="col-12 col-md-6 nopadding">
                                    <div style="height:442px; width:auto;" class="board__image poster in-view">
                                      <?php echo '<img class="lazyload--el lazyload in-view__child" src="admin/speakerupload/'.$row['images'].'" " alt="'.$row['name'].'" width="100%" height="100%">' ?>
                                        <div class="poster--cover in-view in-view__child"></div>
                                    </div>
                                  </div>
                                  
                                  <div style="background-color: #ee543c;" class="col-12 col-md-6 order-md-1 ">
                                 
                                    <div style="padding-top:2px;" class="in-view"> 
                                      <?php
                                          if($query_run) {

                                          
                                              $querys = "SELECT * FROM events WHERE id='$ids'";
                                              $query_runs = mysqli_query($connection, $querys);

                                            foreach ($query_runs as $rowss){
                                            
                                        ?>
                                      <div class=" member__name member__name1 in-view__child in-view__child--fadein in-view__child--in js-video-lead">
                                        <?php echo '<img style="object-fit: cover;  width:555px; height:370px;" src="admin/upload/'.$rowss['event_image'].'" " alt="'.$rowss['event_name'].'" width="555px " height="370px">' ?>
                                        <div style="position:relative; overflow:hidden; margin-bottom:0px;" class=' newvideo member__name1 in-view__child in-view__child--fadein in-view__child--in'><?php echo $row['video_url'] ?></div>
                                      </div>
                                      <?php 
                                          
                                        }
                                      }
                                      ?>
                                    </div>
                                    <script>
                                          function video_lead_play_state(element, active)
                                                {
                                                    var $active = $(element).closest(".js-video-lead").find(".btn-play-active");
                                                    var $default = $(element).closest(".js-video-lead").find(".btn-play-default");

                                                    if (active) {
                                                        $active.show();
                                                        $default.hide();
                                                    } else {
                                                        $active.hide();
                                                        $default.show();
                                                    }
                                                }


                                                $(document).ready(function () {
                                                    // hide the videos and show the images
                                                    var $videos = $(".js-video-lead iframe");
                                                    $videos.hide();
                                                    $(".js-video-lead > img").not(".btn-play").show();

                                                    // position the video holders
                                                    $(".js-video-lead").css("position", "relative");

                                                    // prevent autoplay on load and add the play button
                                                    $videos.each(function (index, video) {
                                                        var $video = $(video);

                                                        // prevent autoplay due to normal navigation
                                                        var url = $video.attr("src");
                                                        if (url.indexOf("&autoplay") > -1) {
                                                            url = url.replace("&autoplay=1", "");
                                                        } else {
                                                            url = url.replace("?autoplay=1", "");
                                                        }
                                                        $video.attr("src", url).removeClass(
                                                            "js-video-lead-autoplay"
                                                        );

                                                        // add and position the play button
                                                        var top = parseInt(parseFloat($video.css("height")) / 2) - 15;
                                                        var left = parseInt(parseFloat($video.css("width")) / 2) - 21;
                                                        var $btn_default = $("<img />").attr("src", "assets/media/play-default.png").css({
                                                            "position": "absolute",
                                                            "top": top + "px",
                                                            "left": left + "px",
                                                            "z-index": 100
                                                        }).addClass("btn-play btn-play-default");
                                                        var $btn_active = $("<img />").attr("src", "assets/media/play-active.png").css({
                                                            "display": "none",
                                                            "position": "absolute",
                                                            "top": top + "px",
                                                            "left": left + "px",
                                                            "z-index": 110
                                                        }).addClass("btn-play btn-play-active");
                                                        $(".js-video-lead").append($btn_default).append($btn_active);
                                                    });


                                                    $(".js-video-lead img").on("click", function (event) {
                                                        var $holder = $(this).closest(".js-video-lead");
                                                        var $video = $holder.find("iframe");
                                                        var url = $video.attr("src");
                                                        url += (url.indexOf("?") > -1) ? "&" : "?";
                                                        url += "autoplay=1";
                                                        $video.addClass("js-video-lead-autoplay").attr("src", url);
                                                        $holder.find("img").remove();
                                                        $video.show();
                                                    });

                                                    $(".js-video-lead > img").on("mouseenter", function (event) {
                                                        video_lead_play_state(this, true);
                                                    });

                                                    $(".js-video-lead > img").not(".btn-play").on("mouseleave", function (event) {
                                                        video_lead_play_state(this, false);
                                                    });
                                                });
                                    </script>
                                    
                                    <div style=" padding-top:10px;" class="board__copy in-view">
                                       <p style="text-transform: uppercase; margin:0px !important;" class="sub-head dashed in-view__child in-view__child--fadein"></span> <?php echo $row['talk_title'] ?></p>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </li>
                            <li style="list-style:none;">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-md-1 ">
                                  <div class="board__copy in-view">
                                      <h2 style="text-transform: uppercase;" class="in-view__child in-view__child--fadein"><?php echo $row['name'] ?></h2> 
                                      <p style="text-transform: uppercase;" class="sub-head dashed in-view__child in-view__child--fadein"><?php echo $row['occupation'] ?></p>
                                      <p style="margin-left:0px;" class=" indent in-view__child in-view__child--fadein"><?php echo $row['speaker_bio'] ?></p>      
                                      <p style="margin-left:0px;" class="board__copy--links indent in-view__child in-view__child--fadein">
                                            <span class="sub-head dashed dashed--reverse dashed--hover in-view__child">
                                                <a href="<?php echo $row['instagram'] ?>"><span class="sr-only">Follow us on instagram</span><i class="fa fa-lg fa-instagram"></i></a>
                                                <a href="<?php echo $row['linkedin'] ?>"><span class="sr-only">Follow us on linkedin</span><i class="fa fa-lg fa-linkedin-square"></i></a>
                                                <a href="<?php echo $row['twitter'] ?>"><span class="sr-only">Follow us on twitter</span><i class="fa fa-lg fa-twitter-square"></i></a>
                                            </span>
                                        </p>
                                  </div>
                                </div>
                                <div style="display:flex; align-items:flex-end;" class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-md-1 ">
                                  <div class="board__copy in-view">
                                  <?php
                                      if($query_run) {

                                      
                                          $querys = "SELECT * FROM events WHERE id='$ids'";
                                          $query_runs = mysqli_query($connection, $querys);

                                        foreach ($query_runs as $rowss){
                                        
                                    ?>
                                      <div style="display:flex; justify-content:flex-start; margin:0px !important;" class="board__copy--links indent in-view__child in-view__child--fadein"> 
                                        <form action="eventspeakers.php" method="post">
                                            <input type="hidden" name="event_speaker_id" value="<?php echo $rowss['id'] ?>"> 
                                          <button style="cursor:pointer; border:0px; background:none;" class="nopadding" type="submit" name="add_eventspeaker_btn" >
                                            <p style="text-transform: uppercase; line-height:1.1; " class="sub-head  in-view__child in-view__child--fadein"> <i style="font-size:20px; color:#ee543c;" class="fa fa-arrow-circle-left"></i> Back To Event</p>    
                                          </button>
                                        </form> 
                                      </div> 
                                      <?php 
                                          
                                          }
                                        }
                                        ?>
                                  </div>

                                  <div class="board__copy in-view">
                                    <?php
                                      if($query_run) {

                                        if (isset($_POST['speaker_details_btn']))
                                        {

                                       
                                        $queryy = "SELECT * FROM speakers WHERE id = (SELECT min(id) FROM speakers WHERE event_id='$ids' and id > '$id' )";
                                        $queryy_run = mysqli_query($connection, $queryy);

                                        foreach ($queryy_run as $rows){
                                        
                                    ?>
                                      <div style="display:flex; justify-content:flex-end;" class="">
                                          <?php echo '<img class="lazyload--el lazyload in-view__child" src="admin/speakerupload/'.$rows['images'].'" " alt="'.$rows['name'].'" width="107px" height="107px">' ?>
                                      </div>
                                      <div style="display:flex; justify-content:flex-end;" class="board__copy--links indent in-view__child in-view__child--fadein"> 
                                        <form action="speakerdetails.php" method="post">
                                            <input type="hidden" name="speaker_details_id" value="<?php echo $rows['id'] ?>">
                                            <input type="hidden" name="events_details_id" value="<?php echo $rows['event_id'] ?>"> 
                                            <button style="cursor:pointer; border:0px; background:none;" class="nopadding" type="submit" name="speaker_details_btn" >
                                              <p style="text-transform: uppercase; padding-top:12px;" class="sub-head in-view__child in-view__child--fadein">Next Talk <i style=" font-size:20px; color:#ee543c;" class="fa fa-arrow-circle-right"></i></p>
                                            </button>
                                        </form>
                                      </div>
                                      <?php 
                                            }
                                          }
                                        }
                                        ?>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                          <?php
                            } 
                        ?>
                        <?php
                            }
                            else
                            {
                                echo " 
                                <div class='col-lg-12 p-5'>
                                    <h1>NO RECORD FOUND</h1>
                                 </div>";
                            }
                        ?>
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
          include('includes/footer.php');
        ?>