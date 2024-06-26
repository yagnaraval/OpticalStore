<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>AR Optical Store</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Bootstrap 3 template for corporate business" />
  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/cubeportfolio.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />


  <!-- Theme skin -->
  <link id="t-colors" href="skins/default.css" rel="stylesheet" />

  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />

  <!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

</head>

<body>


  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <ul class="topleft-info">
                <li><i class="fa fa-phone"></i> +91 8347165960</li>
              </ul>
            </div>
            <div class="col-md-6">
              <div id="sb-search" class="sb-search">
                <form>
                  <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
                  <input class="sb-search-submit" type="submit" value="">
                  <span class="sb-icon-search" title="Click to start searching"></span>
                </form>
              </div>


            </div>
          </div>
        </div>
      </div>

      <div class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" width="199" height="52" /></a>
          </div>
          <div class="navbar-collapse collapse ">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                  data-close-others="false">Home <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="index.php">Home slider 1</a></li>
                  <li><a href="index2.php">Home slider 2</a></li>

                </ul>

              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0"
                  data-close-others="false">Features <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="typography.php">Typography</a></li>
                  <li><a href="components.php">Components</a></li>
                  <li><a href="pricing-box.php">Pricing box</a></li>
                  <li class="dropdown-submenu">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">Pages</a>
                    <ul class="dropdown-menu">
                      <li><a href="fullwidth.php">Full width</a></li>
                      <li><a href="right-sidebar.php">Right sidebar</a></li>
                      <li><a href="left-sidebar.php">Left sidebar</a></li>
                      <li><a href="comingsoon.php">Coming soon</a></li>
                      <li><a href="search-result.php">Search result</a></li>
                      <li><a href="404.php">404</a></li>
                      <li><a href="register.php">Register</a></li>
                      <li><a href="login.php">Login</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="portfolio.php">Portfolio</a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown"
                  data-delay="0" data-close-others="false">Blog <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="blog-rightsidebar.php">Blog right sidebar</a></li>
                  <li><a href="blog-leftsidebar.php">Blog left sidebar</a></li>
                  <li><a href="post-rightsidebar.php">Post right sidebar</a></li>
                  <li><a href="post-leftsidebar.php">Post left sidebar</a></li>
                </ul>
              </li>
              <li class="active"><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="breadcrumb">
              <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
              <li class="active">Contact</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="map">
        
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3706.0118449804504!2d72.13839691448088!3d21.741066485616887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5191bd732c7f%3A0x3e49ba0a716df6b0!2s421%2F244%2C%20Sagwadi%2C%20Kaliyabid%2C%20Bhavnagar%2C%20Gujarat%20364002!5e0!3m2!1sen!2sin!4v1620905165301!5m2!1sen!2sin" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2>Contact us <small>get in touch with us by filling form below</small></h2>
            <hr class="colorgraph">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email"
                  data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                  placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><button type="submit" class="btn btn-theme btn-block btn-md">Send Message</button></div>
            </form>
            <hr class="colorgraph">

          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="widget">
              <h4>Get in touch with us</h4>
              <address>
                <strong>AR Optical Store</strong><br>
                421/244 Kaliyabid,
				Bhavnagar,Gujarat </address>
              <p>
                <i class="icon-phone"></i> (+91) 8347165960 <br>
                <i class="icon-envelope-alt"></i> ravalyagna@gmail.com
              </p>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="widget">
              <h4>Information</h4>
              <ul class="link-list">
                <li><a href="#">Press release</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Career center</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>

          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="widget">
              <h4>Pages</h4>
              <ul class="link-list">
                <li><a href="#">Press release</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Career center</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="widget">
              <h4>Newsletter</h4>
              <p>Fill your email and sign up for monthly newsletter to keep updated</p>
              <div class="form-group multiple-form-group input-group">
                <input type="email" name="email" class="form-control">
                <span class="input-group-btn">
                  <button type="button" class="btn btn-theme btn-add">Subscribe</button>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="copyright">
                <p>&copy; Yagna Raval - All Right Reserved</p>
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                  -->
                  Designed by <a href="https://instagram.com/yagnaraval">Yagna Raval</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="social-network">
                <li><a href="https://www.facebook.com/yagna.raval.73/" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/ravalyagna" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.linkedin.com/in/yagna-raval-21a197205/" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								<!--<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>-->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.min.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/classie.js"></script>
  <script src="js/uisearch.js"></script>
  <script src="js/jquery.cubeportfolio.min.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

</body>

</html>
