<!doctype html>
<html lang="en">
  <head>
    <title> RF.org &mdash; Ripples Foudation</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    rel="stylesheet" integrity "sha384-wvfXpqpZZVQGK6TAh5PV1GOfQNHSoD2xbE+QkPxCAF1NEevoEH3S10sibVcOQVnN" crossorigin = "anonymous">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/jquery-ui.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
    }
    .carousel-caption{
     position:absolute;
     left: 50%;
     top: 50%;
     transform: translate(-50%, -50%);
     padding: 30px;
     width: 80%;
     height: 30%;
     background: rgba(0, 0, 0, 0.5);
    }

    .test{
      font-family: Roboto, serif;
      font-weight: 700;
      font-size: 3.5vw;
      line-height: 0.5;
      color: #ea6153;
      text-indent: 20px;
    }

    .test1{
      font-family: Roboto, serif;
      font-weight: 700;
      font-size: 4.5vw;
      line-height: 1;
      color: #ffffff;
    }
    </style>


    <style>
    body {font-family: Arial, Helvetica, sans-serif;}

    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 40%;
      padding: 12px 20px;
      margin: 8px 0;
      display: block;
      border: 1px solid #ccc;
      /*box-sizing: border-box; */
    }

    /* Set a style for all buttons */
    .sub_btn {
      background-color: #3377FF;
      color: 		#800000;
      padding: 14px 20px;
      margin: 8px 0;
      padding-left: 10px;
      border: none;
      cursor: pointer;
      width: 10%;
      transform-origin: bottom right;
    }

    .sub_btn:hover {
      opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.3); /* Black w/ opacity */
      padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 40%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #FF6347;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)}
      to {-webkit-transform: scale(1)}
    }

    @keyframes animatezoom {
      from {transform: scale(0)}
      to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }
      .cancelbtn {
         width: 100%;
      }
    }
    </style>

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-grow text-danger" role="status">
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
                    <li class="nav-item <?php echo $active_stand?>"><a href="#stand-section" class="nav-link">What we stand for</a></li>
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

                <li class="has-children">
                  <a href="#events-section" class="nav-link">Events</a>
                  <ul class="dropdown">
                    <li class="nav-item <?php echo $active_news?>"><a href="#news-section" class="nav-link">News Room</a></li>
                    <li class="nav-item <?php echo $active_plan?>"><a href="#child-section" class="nav-link">Sponsor a child</a></li>
                    <li class="nav-item <?php echo $active_blog?>"><a href="#blog-section" class="nav-link">Blog</a></li>
                  </ul>
                </li>


                <li class="nav-item <?php echo $active_Services?>"><a href="#programmes-section" class="nav-link">Our Programmes</a></li>
                <li class="nav-item <?php echo $active_sponsers?>"><a href="#sponsors-section" class="nav-link">Sponsors</a></li>
                <li class="nav-item <?php echo $active_donate?>"><a href="ripples/donate" class="nav-link">Donate</a></li>
                <li class="nav-item <?php echo $active_Contact?>"><a href="#contact-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
    </header>
