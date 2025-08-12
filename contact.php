
<!doctype html>
<html lang="zxx">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content="We provide full range of premium industry services for your business">
<meta name="description" content="Constancy and unity of purpose is vital to achieving our mission. We create a positive environment where people and the organization can excel.">
<meta name="keywords" content="Facility Management, Renewable Energy, Infrastructure, Global Sourcing">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">

<title>4Logix | Facility Management & Infrastructure| Contact Us </title>
  <link href="./assets/images/icon.png" rel="icon" >
  <link href="//fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <!--header-->
  <?php 
 include "./header.php";
 ?>
  <!--/header-->
  <!--/inner-page-->

  <div class="inner-banner">
  </div>
  <section class="w3l-breadcrumb">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.php">Home</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us</li>
      </ul>
    </div>
  </section>
  <!--//inner-page-->
  <!-- /contact-section -->
  <section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
    <!-- <p>Address: 65B, Opebi road, Opebi, Ikeja</p> -->
      <div class="header-section text-center mx-0 mb-md-5 mb-4">
        <h6 class="title-subhny">Contact Us</h6>
        <h5>Send a Message</h5>
      </div>
      <div class="contact-grids d-grid">
        <div class="contact-left-img">
          <p><b>Phone: </b>08093030120</p>
          <p><b>Email: </b>info@4logix.com</p>
          <p><b>Address: </b>65B Opebi road, Ikeja, Lagos, Nigeria.</p> <br>
          <img src="assets/images/contact.jpg" class="img-fluid radius-image" alt="">
        </div>
        <div class="contact-right">
          <form action="contact_mail.php" method="post" class="signin-form">
          <?php if($msg) { echo '<div class="alert alert-success">'.$msg.'</div>'; } ?>
          <?php if($errmsg) { echo '<div class="alert alert-danger">'.$errmsg.'</div>'; } ?>
            <div class="input-grids">

              <input type="text" name="name" id="w3lName" placeholder="Your Name*" class="contact-input"
                required="" />
              <input type="email" name="email" id="w3lSender" placeholder="Your Email*" class="contact-input"
                required="" />
              <input type="text" name="text" id="w3lSubect" placeholder="Subject*" class="contact-input"
                required="" />
              <!-- <input type="text" name="w3lWebsite" id="w3lWebsite" placeholder="Website URL*" class="contact-input"
                required="" /> -->
            </div>
            <div class="form-input">
              <textarea name="message" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
            </div>
            <div class="form-buttonhny text-lg-right">
              <button class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>
        </div>
        </div></div>
      <div class=" mt-5 mb-lg-5 pb-lg-4">
      <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4592652144024!2d3.3590478147710376!3d6.589695995234378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9240360b3b0d%3A0xa276b02a537eaefc!2s65b%20Opebi%20Rd%2C%20Opebi%20101233%2C%20Ikeja!5e0!3m2!1sen!2sng!4v1649868218308!5m2!1sen!2sng" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
  <!-- 65B Opebi Road,
Ikeja,
Lagos,
Nigeria -->


  <!-- //contact-section -->
  <!-- footer-28 block -->
  <?php 
 include "./footer.php";
 ?>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
    <!-- //footer-28 block -->
  </footer>

  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>