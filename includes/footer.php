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
                        <a href="mailto:press@tedxeuston.com"><b>media@tedxeuston.com</b></a>
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

                    <?php
                      $query = "SELECT * FROM events ORDER BY event_date desc LIMIT 3";
                      $query_run = mysqli_query($connection, $query);

                      if (mysqli_num_rows($query_run) > 0) 
                      {
                        ?>

                  
                        <?php
                            while ($row = mysqli_fetch_assoc($query_run))
                          {
                        ?>
                          <form action="eventspeakers.php" method="post">
															<input type="hidden" name="event_speaker_id" value="<?php echo $row['id'] ?>">
                    
                            <li>
                            <button style="cursor:pointer; border: 0px !important;  background:none !important;" class=" nopadding"  type="submit" name="add_eventspeaker_btn" >
                            <a target="blank"><?php echo $row['event_name'] ?></a>
                            </button> </li>
                          </form>
                     
                        
                     
                     
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
                          <a href="https://twitter.com/tedxeuston" target="_blank"><i class="fa fa-twitter">  </i> Twitter</a>
                        </li>
                        <li>
                          <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li>
                          <a href="https://www.instagram.com/tedxeuston/" target="_blank"><i class="fa fa-instagram"></i> Instagram</a>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4 col-xl-2">
                <div class="widget">
                  <h2 class="widget-title">Never miss updates</h2>
                  <div class="widget_nav_menu">
                  <style>

                      /* The Modal (background) */
                      .modal1 {
                        display: none; /* Hidden by default */
                        position: fixed; /* Stay in place */
                        z-index: 1; /* Sit on top */
                        padding-top: 100px; /* Location of the box */
                        left: 0;
                        top: 0;
                        width: 100%; /* Full width */
                        height: 100%; /* Full height */
                        overflow: auto; /* Enable scroll if needed */
                        background-color: rgb(0,0,0); /* Fallback color */
                        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                      }

                      /* Modal Content */
                      .modal-content1 {
                        background-color: #fefefe;
                        margin: auto;
                        padding: 20px;
                        border: 1px solid #888;
                        width: 80%;
                      }

                      /* The Close Button */
                      .close1{
                        color: #aaaaaa;
                        float: right;
                        font-size: 28px;
                        font-weight: bold;
                      }

                      .close1:hover,
                      .close1:focus {
                        color: #000;
                        text-decoration: none;
                        cursor: pointer;
                      }
                      </style>
                    <div class="signup-form-container">
                      <a class="btn btnplus btn--secondary" style="background: red; color:#000 !important; font-size: 13px; border-radius: 0px !important;" data-toggle="modal" data-target="#myModal1" id="myBtn1">Subscribe</a>
                        <div class="modal fade" id="myModal1" role="dialog">
                          <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content1">
                             
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
							                  </button>
                                
                              </div>
                              <div class="modal-body">
                                  <div class="row">
                                    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                                    <style type="text/css">
                                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                                    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                                    We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                                    </style>
                                    <style type="text/css">
                                    #mc-embedded-subscribe-form input[type=checkbox]{display: inline; width: auto;margin-right: 10px;}
                                    #mergeRow-gdpr {margin-top: 20px;}
                                    #mergeRow-gdpr fieldset label {font-weight: normal;}
                                    #mc-embedded-subscribe-form .mc_fieldset{border:none;min-height: 0px;padding-bottom:0px;}
                                    </style>
                                    <div id="mc_embed_signup">
                                      <form action="https://tedxeuston.us2.list-manage.com/subscribe/post?u=c2ad8df403171791a2f8b5a7a&amp;id=2eefc8570d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                          <h2>Subscribe to our mailing list</h2>
                                        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                                          <div class="mc-field-group">
                                            <label for="mce-EMAIL">Email Address <span class="asterisk">*</span>
                                            </label>
                                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                                          </div>
                                          <div class="mc-field-group">
                                            <label for="mce-FNAME">First Name </label>
                                            <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                                          </div>
                                          <div class="mc-field-group">
                                            <label for="mce-LNAME">Last Name </label>
                                            <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                                          </div>
                                          <div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow content__gdprBlock mc-field-group">
                                            <div class="content__gdpr">
                                              <label>Marketing Permissions</label>
                                              <p>Please select all the ways you would like to hear from TEDxEuston:</p>
                                              <fieldset class="mc_fieldset gdprRequired mc-field-group" name="interestgroup_field">
                                              <label class="checkbox subfield" for="gdpr_7277"><input type="checkbox" id="gdpr_7277" name="gdpr[7277]" value="Y" class="av-checkbox "><span>Email</span> </label><label class="checkbox subfield" for="gdpr_7281"><input type="checkbox" id="gdpr_7281" name="gdpr[7281]" value="Y" class="av-checkbox "><span>Direct Mail</span> </label><label class="checkbox subfield" for="gdpr_7285"><input type="checkbox" id="gdpr_7285" name="gdpr[7285]" value="Y" class="av-checkbox "><span>Customized Online Advertising</span> </label>
                                              </fieldset>
                                              <p>You can unsubscribe at any time by clicking the link in the footer of our emails. For information about our privacy practices, please visit our website.</p>
                                            </div>
                                            <div class="content__gdprLegal">
                                              <p>We use Mailchimp as our marketing platform. By clicking below to subscribe, you acknowledge that your information will be transferred to Mailchimp for processing. <a href="https://mailchimp.com/legal/" target="_blank">Learn more about Mailchimp's privacy practices here.</a></p>
                                            </div>
                                          </div>
                                          <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                            <div class="response" id="mce-success-response" style="display:none"></div>
                                          </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c2ad8df403171791a2f8b5a7a_2eefc8570d" tabindex="-1" value=""></div>
                                          <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                        </div>
                                      </form>
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
          </div>
        </div>
      </footer>

    <div class="go-up" id="up">
      <a class="go-up__btn" href="#page">
        <span class="btn btn--primary btn--circle">
          <i class="fa fa-chevron-up"></i>
        </span>
      </a>
      </div>
      <div class="site-sidenav" id="sidenav">
        <div class="site-sidenav__overlay side-menu-swipeable" style="touch-action: pan-y; user-select: none;"></div>
          <div class="site-sidenav__elements side-menu-swipeable" style="touch-action: pan-y; user-select: none;">
            <div class="site-sidenav__branding">
              <div class="site-branding">
                <a href="index.php" style="color: rgb(247, 23, 53); text-decoration: underline;">
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
                        <a href="contact.php">Contact</a>
                      </li>
                       <!--<li>
                        <a href="livestream.php">Stream</a>
                      </li>-->
                      <li>
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
                              <?php echo '<a style="color:red;" href=" admin/upload/' .$row['file_link']. '" download="Legacy Programme">' .$row['file_title']. '</a> ' ?> 
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
                           
    <script src="assets/jquery/jquery-1.9.1.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <script src="assets/js/slide.js"></script>
    <script src="assets/js/home.js"></script>
    <script type="application/javascript" src="assets/js/lib.js"></script>
    <script defer async type="application/javascript" src="assets/js/app.js"></script>
    <script type="application/javascript" src="assets/js/lib.min.js"></script>
  </body>
</html>