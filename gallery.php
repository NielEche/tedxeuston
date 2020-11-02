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
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="maxcdn/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="maxcdn/bootstrap.min.js"></script>
  </head>
  <body class="page page2 ">
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
                            <a href="gallery.php" style="color: rgb(247, 23, 53); text-decoration: underline;">Gallery</a>
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
        
          <br>
          <br>
          <br>
         
          <section class="section " style="background-color: #fff !important; padding-top:20px; padding-bottom:30px; color:#000 !important;">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12 col-xl-10 offset-xl-1">
                  <div class="team-members">

                    <div class="in-view in-view--in">
                       <h1 class="page-title page-title2">Video Gallery</h1>
                    </div>
                   
                    <form  method="POST" id="search_form" class="searchform" action="searchform.php" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-sm-4">
                          <br class="visible-xs">
                            <label>Type</label>
                            <select class="form-control" name="talk_type">
                              <option>All</option>
                              <option value="talk">Talk</option>
                              <option value="performance">Performance</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                          <br class="visible-xs">
                          <label>Category</label>
                            <select class="form-control" name="speaker_tags">
                                <option>All</option>
                                <option value="African Ideas">African Ideas</option>
                                <option value="Art">Art</option>
                                <option value="Community">Community</option>
                                <option value="Culture">Culture</option>
                                <option value="Design">Design</option>
                                <option value="Ideas">Ideas</option>
                                <option value="TEDx">TEDx</option>
                                <option value="Education">Education</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Film">Film</option>
                                <option value="Music">Music</option>
                                <option value="Youth">Youth</option>
                                <option value="General and Miscellaneous">General &amp; Miscellaneous</option>
                                <option value="Environment">Environment</option>
                                <option value="Global Issues">Global Issues</option>
                                <option value="Science">Science</option>
                                <option value="Sustainability">Sustainability</option>
                                <option value="Startups">Startups</option>
                                <option value="Technology">Technology</option>
                                <option value="Health">Health</option>
                                <option value="Humanities">Humanities</option>
                                <option value="Society">Society</option>
                                <option value="Lifestyle">Lifestyle</option>
                                <option value="Performance">Performance</option>
                                <option value="Behind The Scenes">Behind The Scenes</option>
                                <option value="Civil Rights">Civil Rights</option>
                                <option value="LGBTI">LGBTI</option>
                                <option value="Life">Life</option>
                                <option value="Cities">Cities</option>
                                <option value="Business">Business</option>
                                <option value="Food">Food</option>
                                <option value="Finance">Finance</option>
                                <option value="How Ideas Spread">How Ideas Spread</option>
                                <option value="Politics">Politics</option>
                                <option value="Social Science">Social Science</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                          <br class="visible-xs">
                          <label>Event</label>
                          <select class="form-control" name="event_name">
                            <option value="">All</option>
                          <?php
                            $sql = mysqli_query($connection, "SELECT event_name From events");
                            $row = mysqli_num_rows($sql);
                            while ($row = mysqli_fetch_array($sql)){
                            echo "<option value='". $row['event_name'] ."'>" .$row['event_name'] ."</option>" ;
                            }
                            ?>
                          
                          </select>
                        </div>
                      <br>
                        <div class="col-sm-12">
                          <label>Keywords</label>
                          <div class="row">
                            <div class="col-sm-11">
                                <input id="q" class="form-control" name="search" value="">
                            </div>
                            <div class="col-sm-1"><br class="visible-xs">
                              <button  class="btn btn-default btn-block" type="submit" name="submit-search"><i class="fa fa-search"></i></button>
                              <!--<input class="btn btn-default btn-block" type="submit" value="GO">-->
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                 
                     
                    <div class="padding-top margin-top">
                      <div class="row">

                         <?php
                            $sql = "SELECT * FROM speakers";
                            $result = mysqli_query($connection, $sql);
                            $queryResults = mysqli_num_rows($result);

                            if($queryResults > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "
                                    <div class='col-12 col-lg-2'>
                                      <div class='member'>
                                        <div class='member__image poster poster--square in-view in-view--in'>
                                          <a href='#' data-toggle='modal' data-target='#" . $row['id'] . "'><figure>
                                            <img class='lazyload--el in-view__child lazyloaded in-view__child--in' src='admin/speakerupload/" . $row['images'] . "' data-src='admin/speakerupload/" . $row['images'] . "' alt='' width='445' height='445'>
                                            <div class='poster--cover in-view in-view__child in-view--in in-view__child--in'>
                                            </div>
                                          </figure></a>
                                        </div>
                                        <div class='member__info in-view in-view--in'>
                                        <h6  style='font-size:15px !important;' class='member__name member__name1 in-view__child in-view__child--fadein in-view__child--in'>" . $row['name']."</h6>
                                        <p style='font-size:12px !important; line-height:13px !important; color:red !important; text-transform:capitalize !important; letter-spacing:1px !important;' class='member__title member__title1 sub-head-2 in-view__child in-view__child--fadein in-view__child--in'>" . $row['talk_title']."</p>
                                      </div>
                                      </div>
                                      <!-- Modal -->
                                      <div class='modal fade' id='" . $row['id'] . "' role='dialog'>
                                        <div class='modal-dialog'>
                                          <!-- Modal content-->
                                          <div class='modal-content'>
                                            <div class='modal-header'>
                                              <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                              <h6 class='member__name member__name1 in-view__child in-view__child--fadein in-view__child--in' style='color: #000;'>" . $row['name']."</h6>
                                                <p class='member__title member__title1 sub-head-2 in-view__child in-view__child--fadein in-view__child--in'>" . $row['talk_title']."</p>
                                            </div>
                                            <div class='modal-body'>
                                                <p class='statusMsg'></p>
                                                <form class='form inputs-underline' method='post' id='insert_form' enctype='multipart/form-data' >
                                                    <div class='form-group'>
                                                        " . $row['video_url']."
                                                    </div>
                                                    <hr>
                                                </form>
                                                <!--end form-->
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>";
                                }
                            }
                        ?>
                    </div>

                </div>
              </div>
            </div>
          </div>
        </section> 
        <br>
          <br>
          <br>


        <!--<section class="module" data-module="topics-banner">
          <div class="container">
          <h1 class="screenreader">Explore TEDx Topics</h1>
            <div class="topics-banner-header">
              <h2 class="topics-banner-title">Inspire Me</h2>
              <div class="topics-banner-terms">
                <p>
                  <a href="#">Water</a>
                  <a href="gallery.php#2018">Event 2018 TEDxEuston</a>
                  <a href="#">Making A Difference</a>
                  <a href="#">Schools</a>
                  <a href="#">African Heritage</a>
                  <a href="#">Poetry</a>
                  <a href="#">AR</a>
                  <a href="#">Senate</a>
                  <a href="#">Collaboration</a>
                  <a href="#">Law</a>
                  <a href="#">Fiddle</a>
                  <a href="#">Graphics</a>
                  <a href="#">Art</a>
                  <a href="#">Music</a>
                  <a href="#">Public Health</a>
                </p>
              </div>
              <div class="topics-banner-ctas">
                  <a href="https://tedxbeaconstreet.com/watch/">More Video Topics </a>
                  <a href="https://tedxbeaconstreet.com/watch/?surprise_me=true" class="button has-outline">Surprise Me 
                  </a>  
              </div>
            </div>

            <div class="bg" style="background-image: url('https://tedxbeaconstreet.com/wp-content/uploads/2017/10/homepage-images-inspire-me-1800x678-1800x678.jpg');"></div>
          </div>
        </section>-->
            

          <section class="section" id="gallery">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12 col-xl-10 offset-xl-1">
                  <div class="in-view in-view--in">
                    <h1 style="color: white !important;" class="page-title page-title2">Events Gallery</h1>
                  </div>
                  <br>
                  <br>
                  <br>
                  <div class="in-view in-view--in">
                    <iframe style="position: relative; top: 0; left: 0; width: 100%;" src="https://flickrembed.com/cms_embed.php?source=flickr&amp;layout=responsive&amp;input=www.flickr.com/photos/tedxeuston&amp;sort=0&amp;by=user&amp;theme=default&amp;scale=fit&amp;speed=5000&amp;limit=100&amp;skin=default&amp;autoplay=true" scrolling="no" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" height="700" frameborder="0"></iframe><script type="text/javascript">function showpics(){var a=$("#box").val();$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?tags="+a+"&tagmode=any&format=json&jsoncallback=?",function(a){$("#images").hide().html(a).fadeIn("fast"),$.each(a.items,function(a,e){$("<img/>").attr("src",e.media.m).appendTo("#images")})})}</script>
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