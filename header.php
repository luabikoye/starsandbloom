<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
        .logo{
            margin: 12px;
        }

        /* Dropdown Button */
.dropbtn {
  background-color: transparent;
  color: white;
  padding: 16px;
  margin-left: 12px;
  margin-right: 12px;
  /* padding: 16px; */
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 190px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: transparent;}



    </style>
</head>
<body>
     <!--header-->
 <header id="site-header" class="w3lhny-head fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
        <h1 class="sublogs"> <a class="navbar-brand" href="index.php">
            <span class="sublog"><span class="fa " aria-hidden="true">
                <!-- <img src="./assets/images/logo2.png" class="logo" alt=""> -->

          </a></h1>
        <!-- if logo is image enable this    -->
  <a class="navbar-brand" href="index.php" >
      <img src="./assets/images/4logix-white.png" alt="logo" class="logo img-fluid"  style="margin-left:-50px" />
  </a>
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-lg-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <div class="dropdown">
<center>  <button class="dropbtn nav-link">Who we are</button></center>
  <div class="dropdown-content">
    <a href="./about.php">About Us</a>
    <a href="./vision.php">Mission & Vision</a>
    <a href="./people.php">Our People</a>
    <!-- <a href="./technology.php">Technology</a> -->
  </div>
</div>
            <!-- <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
             -->
            <div class="dropdown">
<center>  <button class="dropbtn nav-link">Services</button></center>
  <div class="dropdown-content">
    <a href="./facility_management.php">Facility Management</a>
    <a href="./renewable_energy.php">Renewable Energy</a>
    <a href="./infrastructure.php">Infrastructure</a>
    <a href="./technology.php">Global Sourcing</a>
  </div>
</div>
            <!-- <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li> -->

            <!-- <li class="nav-item">
              <a class="nav-link" href="./client.php">Clients</a>
            </li> -->

            <li class="nav-item">
              <a class="nav-link" href="projects.php">Projects</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Careers</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>


            <!--/search-right-->


            <!-- <nav class="ml-lg-5">
              <div class="search-bar">
                <form class="search">
                  <input type="search" class="search__input" name="search" placeholder="Search here.."
                    onload="equalWidth()" required>
                  <span class="fa fa-search search__icon"></span>
                </form>
              </div>
            </nav> -->
            <!--//search-right-->
          </ul>
            
          <a class="nav-link" href="4LOGIX BROCHURE.pdf" download><button class="btn btn-style btn-primary">Download Brochure</button></a>

        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!--/header-->
</body>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
 var topIMG = "./assets/images/4logix-white.png";
var sclIMG = "./assets/images/4logix-black.png";

$('img[alt="Gabriela Silveira"]').attr("class", "logo")

$(window).scroll(function() {
   var value = $(this).scrollTop();
   if (value > 50)
      $(".logo").attr("src", sclIMG);
   else
      $(".logo").attr("src", topIMG);
});
</script>
</html>