<?php
session_start();
if (isset($_SESSION['account'])) {
    $biến = $_SESSION['account'];
    $biến2 = $_SESSION['Admin'];
}
include 'db/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="images/logo.jpg">
  <title>Enviroment</title>
  <link rel="stylesheet" href="styleEnviroment.css">
  <link rel="stylesheet" href="iframeLogin.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
  <div class="loading-page " >
    <svg id="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
      <path
        d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z" />
    </svg>
    <div class="name-container">
      <div class="logo-name">Tofus</div>
    </div>
  </div>



  <nav class="navbar">
    <div class="max-width">

      <ul class="menu">
        <div class="logo"> <a href="index.php">Tof<span>us.</span></a></div>
        <li><a href="index.php#home" class="menu-btn">Home</a></li>
        <li class="menu-btn1">
          <a class="menu-btn1">Issues<i class="fas fa-chevron-down"></i></a>
          <ul class="submenu">
            <li><a href="index.php#story">Story of Tiger </a></li>
            <li><a href="Animal.php">Animal</a></li>
            <li><a href="Enviroment.php">Enviroment</a></li>
          </ul>
        </li>
        <li class="menu-btn1">
          <a class="menu-btn1">Project<i class="fas fa-chevron-down"></i></a>
          <ul class="submenu">
            <li class="submenu-btn">
              <a>Our Work<i class="fas fa-chevron-right"></i></a>
              <ul class="sub-submenu">
                <li><a href="OurWork.php#Protect">Protect Animal</a></li>
                <li><a href="OurWork.php#Bio">Biodiversity Conservation</a></li>
                <li><a href="OurWork.php#Volunteer">Volunteer</a></li>
              </ul>
            </li>
            <li><a href="index.php#teams">My team</a></li>
          </ul>
        </li>
        <li><a href="" style="color:rgb(159, 233, 230);" class="ban-btn">Tofus Hub</a></li>
                <li><a href="" class="menu-btn ban-btn">Store</a></li>

                <li><a href="index.php#contact">Contact Us</a></li>
      </ul>
      <div class="menu-btn">
        <i class="fas fa-bars"></i>
      </div>
      <div class="logo"> <a href="index.php">Tof<span>us.</span></a></div>
    </div>
  </nav>
 <!-- Login -->
 <?php if (isset($biến) && !empty($biến)) { ?>
  <div class="ad-banner" id="draggable">
  <div class="content">
      <a class="login-btn logout-btn" id="logout-btn">Logout</a>
  </div>
</div>
<?php } else { ?>
  <div class="ad-banner" id="draggable">
  <div class="content">
      <a class="login-btn">Login</a>
  </div>
</div>
<div class="login-popup">
  <div class="iframe-container">
      <iframe src="Login.php" frameborder="0"></iframe>
  </div>
</div>
<?php } ?>
  <div class="container">

    <div class="earth1996" id="earth1996">

      <div>
        <button class="btn" type="button" id="btn1996">
          <strong>1996</strong>
          <div id="container-stars">
            <div id="stars"></div>
          </div>
          <div id="glow">
            <div class="circle"></div>
            <div class="circle"></div>
          </div>
        </button>
      </div>

      <div class="rear-img ">
        <h1 class="topic">"Greenless" Planet</h1>
        <span>

          In 2020, the state of the environment continued to be a matter of concern. The forest cover had further
          decreased to approximately 25%, indicating an alarming decline in the world's forests and their biodiversity.
          The atmosphere faced persistent challenges, with high levels of air pollution persisting, including elevated
          concentrations of greenhouse gases such as carbon dioxide (CO2) and methane (CH4), contributing to climate
          change. The oceans were under increasing stress due to rising sea levels, warming temperatures, and ocean
          acidification, posing threats to marine ecosystems and their delicate balance. These pressing environmental
          issues underscored the urgent need for sustainable practices and global efforts to mitigate the impacts of
          human activities on the planet.
        </span>
      </div>

      <iframe src="earth1996.html"></iframe>
  
        <a href="#earth2020" class="scroll-down" address="true"></a>

    </div>


    <div class="earth2020" id="earth2020">
      <div>
        <button class="btn" type="button" id="btn2020">
          <strong>2020</strong>
          <div id="container-stars">
            <div id="stars"></div>
          </div>

          <div id="glow">
            <div class="circle"></div>
            <div class="circle"></div>
          </div>
        </button>
      </div>
      <section>
      <a href="#earth1996" class="scroll-up" address="true"></a>
    </section>
      <div class="rear-img ">
        <h1 class="topic">"Greenful" Planet</h1>
        <span>
          In 1996, the environment faced significant challenges. Forest cover had declined to around 30%, indicating a
          substantial loss of valuable ecosystems. The atmosphere was burdened with high levels of air pollution,
          exceeding recommended thresholds for pollutants such as sulfur dioxide (SO2), nitrogen dioxide (NO2), and
          particulate matter (PM). The oceans experienced rising sea surface temperatures and increased ocean
          acidification, endangering marine life and coral reefs. These conditions highlighted the urgent need for
          global environmental conservation efforts.
        </span>
      </div>
      <iframe src="earth2020.html"></iframe>


 
    </div>

  
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r73/three.min.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/141228/OrbitControls.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"
    integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="EnviromentScript.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
  <script src="jquery.ui.touch-punch.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js" integrity="sha512-0bEtK0USNd96MnO4XhH8jhv3nyRF0eK87pJke6pkYf3cM0uDIhNJy9ltuzqgypoIFXw3JSuiy04tVk4AjpZdZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="scriptPopUp.js"></script>
  <script>
    $(function () {
      $('#btn1996').click(function () {
        var screenWidth = $(window).width();
        if(screenWidth >= 768){
        $('.earth2020').toggleClass("active");
        $('.earth1996').removeClass("active");
        $('#btn2020').toggleClass("hide");
      }else{
        $('.earth2020').toggleClass("active");
      }
      });

      $('#btn2020').click(function () {
        var screenWidth = $(window).width();
        if(screenWidth >= 768){
        $('.earth1996').toggleClass("active");
        $('.earth2020').removeClass("active");
        $('#btn1996').toggleClass("hide");
        }else{
          $('.earth1996').toggleClass("active");
        }
      });
    });

  </script>
      <script>
        $('.ban-btn').click(function (e) {
            alert("Đang trong giai doạn phát triển! Theo dõi trang này trực tiếp tại vòng chung kết BWD được tổ chức tại VKU vào ngày 22/07");
        });
    </script>
</body>

</html>