<!doctype html>
<html lang="en">
  <head>
    <title> RF.org &mdash; Ripples Foudation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-danger" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <a nav class="navbar-brand"><img src ="images/logo1.png" alt="Doggo" width="130" height="50"></a>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="nav-item <?php echo $active_index ?>"><a href="#home-section" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">About Us</a>
                  <ul class="dropdown">
                    <li class="nav-item <?php echo $active_Team?>"><a href="#team-section" class="nav-link">Our Team</a></li>
                    <li class="nav-item <?php echo $active_Pricing?>"><a href="#stand-section" class="nav-link">What we stand for</a></li>
                    <li class="nav-item <?php echo $active_FAQ?>"><a href="#faq-section" class="nav-link">FAQs About us</a></li>
                    <li class="has-children">
                      <a href="#">More Links</a>
                      <ul class="dropdown">
                        <li><a href="#">COVID-19</a></li>
                        <li><a href="#">Next Reachouts</a></li>
                        <li><a href="#">Starting with us</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="nav-item <?php echo $active_news?>"><a href="#news-section" class="nav-link">News</a></li>
                <li class="nav-item <?php echo $active_Services?>"><a href="#programmes-section" class="nav-link">Our Programmes</a></li>
                <li class="nav-item <?php echo $active_Testimonials?>"><a href="#sponsers-section" class="nav-link">Sponsers</a></li>
                <li class="nav-item <?php echo $active_Blog?>"><a href="#blog-section" class="nav-link">Blog</a></li>
                <li class="nav-item <?php echo $active_Contact?>"><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>
