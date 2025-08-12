
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

    <title>4Logix | Facility Management | Infrastructure | Renewable Energy</title>
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
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Projects</li>
      </ul>
    </div>
  </section>
  <!--//inner-page-->
  <!-- about page about section -->

  
  <section>
      <div class="container" style="margin-top:80px;">
        <div class="title-content text-center">
          <h3 class="title-subhny">Some of our projects</h3> <br><br>
          <!-- <p style="margin-bottom: 10px;">Our Services Include:</p> -->
        </div><br>
          <h4>Renewable energy projects For Lagos State government</h4><br>
          <div class="row">
              <div class="col-md-3">
                  <img style="margin-bottom:30px;" class="img-fluid" src="assets/images/02/4.jpeg" alt="">
              </div> 
              <div class="col-md-3">
                  <img style="margin-bottom:30px;" class="img-fluid" src="assets/images/02/3.jpeg" alt="">
              </div> 
              <div class="col-md-3">
                  <img style="margin-bottom:30px;" class="img-fluid" src="assets/images/02/2.jpeg" alt="">
              </div> 
              <div class="col-md-3">
                  <img style="margin-bottom:30px;" class="img-fluid" src="assets/images/02/1.jpeg" alt="">
              </div> 
          </div>
      </div>
  </section>
 
  <section>
      <div class="container" style="margin-top:40px;margin-bottom:80px;">

          <h4 style="margin-top:30px;">Hospital rehabilitation and Facility Management for Sokoto state government</h4><br>
          <div class="row">
              <div class="col-md-3">
                  <img style="margin-bottom:30px;" class="img-fluid" src="assets/images/01/4.jpeg" alt="">
              </div> 
              <div class="col-md-3">
                  <img style="margin-bottom:30px;" class="img-fluid" src="assets/images/01/3.jpeg" alt="">
              </div> 
              <div class="col-md-3">
                  <img style="margin-bottom:30px;" class="img-fluid" src="assets/images/01/2.jpeg" alt="">
              </div> 
              <div class="col-md-3">
                  <img style="margin-bottom:30px;" class="img-fluid" src="assets/images/01/1.jpeg" alt="">
              </div> 
              <div class="col-md-3">
                  <img style="margin-bottom:30px;" class="img-fluid" src="assets/images/01/5.jpeg" alt="">
              </div> 
              <div class="col-md-3">
                  <img style="margin-bottom:30px;" class="img-fluid" src="assets/images/01/6.jpeg" alt="">
              </div> 
              <div class="col-md-3">
                  <img style="margin-bottom:30px;" class="img-fluid" src="assets/images/01/7.jpeg" alt="">
              </div> 
          </div>
      </div>
  </section>
 

   <!-- home page block grids -->
   <!--//team-->
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