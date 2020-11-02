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
        <main style="background-color: #fff !important;" class="site-main" id="main">
          <br>
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



          <!--<section class="section" id="gallery">
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
                    <iframe style="position: relative; top: 0; left: 0; width: 100%;" src="https://flickrembed.com/cms_embed.php?source=flickr&amp;layout=responsive&amp;input=www.flickr.com/photos/tedxeuston&amp;sort=0&amp;by=user&amp;theme=default&amp;scale=fit&amp;speed=5000&amp;limit=50&amp;skin=default&amp;autoplay=true" scrolling="no" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" height="700" frameborder="0"></iframe><script type="text/javascript">function showpics(){var a=$("#box").val();$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?tags="+a+"&tagmode=any&format=json&jsoncallback=?",function(a){$("#images").hide().html(a).fadeIn("fast"),$.each(a.items,function(a,e){$("<img/>").attr("src",e.media.m).appendTo("#images")})})}</script>
                  </div>
                </div>
              </div>
            </div>
          </section>-->

          <section class="section" style="background-color: #fff !important; color:#000 !important;">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12 col-xl-10 offset-xl-1">
                  <div class="team-members">
                    
                    <div class="in-view in-view--in">
                       <h1 class="page-title page-title2">Gallery Result</h1>
                    </div>
                
                    <div class="padding-top margin-top">
                      <div class="row">
                      	  <?php
                          if (isset($_POST['submit-search'])) {
                           $talk_type = mysqli_real_escape_string ($connection , $_POST['talk_type'] );
                            $speaker_tags = mysqli_real_escape_string ($connection , $_POST['speaker_tags'] );
                            $event_name =  mysqli_real_escape_string ($connection , $_POST['event_name'] );
                            $search =  mysqli_real_escape_string ($connection , $_POST['search'] );
                          }
                            

                           if (!empty($_POST['talk_type'])) {
                            $where[] = " talk_type LIKE '%".$_POST['talk_type']."%' ";
                            $params[] = '%' . $_POST['talk_type'] . '%';
                            }
                            if (!empty($_POST['speaker_tags'])) {
                            $where[] = " speaker_tags LIKE '%".$_POST['speaker_tags']."%' ";
                            $params[] = '%' . $_POST['speaker_tags'] . '%';
                            }
                            if (!empty($_POST['event_name'])) {
                            $where[] = " event_name LIKE '%".$_POST['event_name']."%' ";
                            $params[] = '%' . $_POST['event_name'] . '%';
                            }
                            if (!empty($_POST['search'])) {
                            $where[] = " talk_type LIKE '%".$_POST['search']."%' ";
                            $params[] = '%' . $_POST['search'] . '%';
                            }
                            if (!empty($_POST['search'])) {
                            $where[] = " speaker_tags LIKE '%".$_POST['search']."%' ";
                            $params[] = '%' . $_POST['search'] . '%';
                            }
                            if (!empty($_POST['search'])) {
                            $where[] = " event_name LIKE '%".$_POST['search']."%' ";
                            $params[] = '%' . $_POST['search'] . '%';
                            }
                            if (!empty($_POST['search'])) {
                            $where[] = " name LIKE '%".$_POST['search']."%' ";
                            $params[] = '%' . $_POST['search'] . '%';
                            }

                            $sql_where = !empty($where) ? ' where ' . implode(' or ', $where) : '';
                            $query = mysqli_query ($connection, "SELECT * FROM speakers $sql_where");

                            
                              
                                while ($row = mysqli_fetch_assoc($query)) {
                                

                            echo "<div class='col-12 col-lg-2'>
                        <div class='member'>
                          <div class='member__image poster poster--square in-view in-view--in'>
                            <a href='#' data-toggle='modal' data-modal-external-file='dreamweavers.php' data-target='#myModal1'><figure>
                              <img class='lazyload--el in-view__child lazyloaded in-view__child--in' src='admin/speakerupload/" . $row['images'] . "' data-src='admin/speakerupload/" . $row['images'] . "' alt='' width='445' height='445'>
                              <div class='poster--cover in-view in-view__child in-view--in in-view__child--in'>
                                
                              </div>
                            </figure></a>
                          </div>
                          <div class='member__info in-view in-view--in'>
                            <h6 class='member__name member__name1 in-view__child in-view__child--fadein in-view__child--in'>" . $row['name']."</h6>
                            <p class='member__title member__title1 sub-head-2 in-view__child iYn-view__child--fadein in-view__child--in'>" . $row['event_name']."</p>
                          </div>
                        </div>
                             <!-- Modal -->
                          <div class='modal fade' id='myModal1' role='dialog'>
                            <div class='modal-dialog'>
                              <!-- Modal content-->
                              <div class='modal-content'>
                                <div class='modal-header'>
                                  <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                   <h6 class='member__name member__name1 in-view__child in-view__child--fadein in-view__child--in' style='color: #000;'>" . $row['name']."</h6>
                                    <p class='member__title member__title1 sub-head-2 in-view__child in-view__child--fadein in-view__child--in'>" . $row['event_name']."</p>
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

                          ?>
                      

                  
                    </div>
                  </div>
                   <div class="widget_nav_menu">
                  <div class="signup-form-container">
                    <a class="btn btnplus btn--secondary" style="background: red; color:fff !important; font-size: 10px; font-weight: bold !important; border-radius: 0px !important;  border-color: #fff !important;  " href="gallery.php" >Go Back</a>
                  </div>
                </div>
                <br>
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