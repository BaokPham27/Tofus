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
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/png" href="images/logo.jpg">
  <title>Animal</title>
  <link rel="stylesheet" href="style2.css" />
  <link rel="stylesheet" href="Animal_Css.css" />
  <link rel="stylesheet" href="iframeLogin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
  <!-- partial:index.partial.html -->

  <body class="loading">
    <!-- add karla font -->

    <nav class="navbar">
      <div class="max-width">
        <div class="logo">
          <a href="index.php">Tof<span>us.</span></a>
        </div>
        <ul class="menu">
          <li><a href="index.php#home" class="menu-btn">Home</a></li>
          <li class="menu-btn1">
            <a>Issues<i class="fas fa-chevron-down"></i></a>
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
      </div>
    </nav>





    <main>
      <div class="sidebar">
        <ul class="menu">
          <li><i class="fas fa-times-circle close" style="color: white;"></i></li>
          <li><a class="filter-item active" data-filter="mammal">Mammal</a></li>
          <li><a class="filter-item" data-filter="pisces">Pisces</a></li>
          <li><a class="filter-item" data-filter="reptilia">Reptilia</a></li>
          <li><a class="filter-item" data-filter="avres">Avres</a></li>
          <li><a class="filter-item" data-filter="amphibian">Amphibian</a></li>
          <li><span>Contact<span style="color:crimson; margin-left: 0;">Us</span></span> </li>
          <li><i class="fab fa-facebook" style="color: rgb(81, 97, 237);"></i> <i class="fab fa-instagram"
              style="color: rgb(201, 12, 141);"></i></li>
        </ul>
      </div>
      <!-- Mammal -->
      <div id="slider1" class="item mammal">
        <div class="slider-inner">
          <div id="slider-content">
            <div class="meta">Species</div>
            <h2 id="slide-title1">Black <br />Rhinoceros</h2>
            <span data-slide-title="0">Black <br />Rhinoceros</span>
            <span data-slide-title="1">Mountain <br />Gorillas</span>
            <span data-slide-title="2">Sumatran <br />Elephant</span>
            <span data-slide-title="3">Sumatran <br />Tiger</span>
            <div class="meta">Status</div>
            <div id="slide-status1"> A critically endangered species due to poaching and habitat loss.<br> Efforts are
              being made to protect the remaining populations,<br> but the species continues to face significant
              threats.<br> Conservation measures and international cooperation are essential for its survival.</div>
            <span data-slide-status="0">A critically endangered species due to poaching and habitat loss.<br> Efforts
              are being made to protect the remaining populations,<br> but the species continues to face significant
              threats.<br> Conservation measures and international cooperation are essential for its survival.</span>
            <span data-slide-status="1">Classified as critically endangered.<br> With a population of around 1,000
              individuals,<br> their survival is threatened by habitat loss, poaching,<br> and political
              instability.<br> Conservation efforts and strict protection measures<br> have shown positive results in
              recent years,<br> but continued efforts are needed to ensure their long-term survival.</span>
            <span data-slide-status="2">A subspecies of Asian Elephant found in Sumatra, Indonesia.<br> With habitat
              loss due to deforestation, human-elephant conflict,<br> and illegal activities as key threats,<br> the
              Sumatran Elephant is critically endangered.<br> Conservation efforts focus on habitat protection, conflict
              mitigation,<br> and combating poaching and illegal trade.</span>
            <span data-slide-status="3">A critically endangered subspecies found only<br> on the Indonesian island of
              Sumatra.<br> With fewer than 400 individuals remaining,<br> its main threats include habitat loss,
              poaching,<br> and the illegal wildlife trade.<br> Conservation efforts focus on protecting its
              habitats,<br> anti-poaching measures, and raising awareness for tiger conservation.</span>
          </div>
        </div>

        <img src="images/mammal/Black-Rhinoceros-.png" class="item mammal" />
        <img src="images/mammal/Mountain-Gorilla.png" class="item mammal" />
        <img src="images/mammal/Sumatran-Elephant.png" class="item mammal" />
        <img src="images/mammal/Sumatran-Tiger.png" class="item mammal" />

        <div id="pagination1" class="pagination1">
          <div class="menu-animal">
            <i class="fas solid fa-bars" style="color: aliceblue;"></i>
          </div>
     
          <button class="active" data-slide="0"></button>
          <button data-slide="1"></button>
          <button data-slide="2"></button>
          <button data-slide="3"></button>
        </div>
      </div>
      <!-- Pisces -->
      <div id="slider2" class="item pisces">
        <div class="slider-inner">
          <div id="slider-content">
            <div class="meta">Species</div>
            <h2 id="slide-title2">African<br />Coelacanth</h2>
            <span data-slide-title="0">African <br />Coelacanth</span>
            <span data-slide-title="1">Devils Hole<br />Pupfish </span>
            <span data-slide-title="2">European <br />Sturgeon</span>
            <span data-slide-title="3">Pondicherry<br />Shark</span>
            <div class="meta">Status</div>
            <div id="slide-status2">A deep-sea fish species found in the western Indian Ocean.<br> It is considered a
              "living fossil" due to its ancient lineage and<br> unique physical features. Although rare, it is
              currently classified<br> as Least Concern on the IUCN Red List, indicating a relatively stable<br>
              population. Conservation efforts aim to promote sustainable fishing<br> practices and protect its habitat.
            </div>
            <span data-slide-status="0">A deep-sea fish species found in the western Indian Ocean.<br> It is considered
              a "living fossil" due to its ancient lineage and<br> unique physical features. Although rare, it is
              currently classified<br> as Least Concern on the IUCN Red List, indicating a relatively stable<br>
              population. Conservation efforts aim to promote sustainable fishing<br> practices and protect its
              habitat.</span>
            <span data-slide-status="1">A critically endangered fish species found only<br> in the geothermal pool
              called Devils Hole in Nevada,<br> United States. With a small size and specialized habitat,<br> it faces
              threats such as changes in water chemistry and human<br> disturbances. Conservation efforts focus on
              protecting and managing<br> Devils Hole to ensure the survival of this critically endangered
              species.</span>
            <span data-slide-status="2">A critically endangered fish species found<br> in European rivers and coastal
              waters.<br> Overfishing, habitat loss, and pollution<br> have led to its severe population decline.<br>
              Conservation efforts focus on fishing bans,<br> habitat restoration, and captive breeding programs<br> to
              ensure its survival.</span>
            <span data-slide-status="3">A critically endangered shark species found<br> in the Indo-West Pacific.
              Overfishing, habitat<br> degradation, and targeted fishing for its fins<br> and meat have greatly reduced
              its population.<br> Conservation efforts aim to protect its habitat and <br>regulate fishing
              practices.</span>
          </div>
        </div>

        <img src="images/Pisces/African Coelacanth.png" />
        <img src="images/Pisces/Devils Hole Pupfish.png" />
        <img src="images/Pisces/European Sturgeon.png" />
        <img src="images/Pisces/pondicherry shark.png" />

        <div id="pagination2" class="pagination2">

          <div class="menu-animal">
            <i class="fas solid fa-bars" style="color: aliceblue;"></i>
          </div>
          <button class="active" data-slide="0"></button>
          <button data-slide="1"></button>
          <button data-slide="2"></button>
          <button data-slide="3"></button>
        </div>
      </div>

      <!-- Reptilia -->
      <div id="slider3" class="item reptilia">
        <div class="slider-inner">
          <div id="slider-content">
            <div class="meta">Species</div>
            <h2 id="slide-title3">The <br />Gharial</h2>
            <span data-slide-title="0">The <br />Gharial</span>
            <span data-slide-title="1">Leatherback <br />Leatherback</span>
            <span data-slide-title="2">Philippine <br />Crocodile</span>
            <span data-slide-title="3">Round Island <br />Keel-scaled Boa </span>
            <div class="meta">Status</div>
            <div id="slide-status3">A critically endangered crocodile species found<br> in India and Nepal. Its long,
              narrow snout and<br> specialized jaws distinguish it. Habitat loss, water pollution,<br> and illegal
              hunting are the main threats. The population<br> has significantly declined, with only a few hundred
              individuals<br> remaining. Conservation efforts involve habitat protection, captive breeding, and
              reintroduction programs.</div>
            <span data-slide-status="0">A critically endangered crocodile species found<br> in India and Nepal. Its
              long, narrow snout and<br> specialized jaws distinguish it. Habitat loss, water pollution,<br> and illegal
              hunting are the main threats. The population<br> has significantly declined, with only a few hundred
              individuals<br> remaining. Conservation efforts involve habitat protection, captive breeding, and
              reintroduction programs.</span>
            <span data-slide-status="1">Classified as vulnerable on the IUCN Red List.<br> Threats include habitat loss,
              pollution, climate<br> change, fishing gear entanglement, and poaching.<br> Conservation efforts focus on
              protecting nesting beaches<br> and promoting sustainable fishing practices.</span>
            <span data-slide-status="2">A critically endangered species native to the Philippines.<br> With a population
              of fewer than 250 individuals, it faces<br> threats from habitat loss, hunting, and fishing.
              Conservation<br> efforts focus on habitat protection, captive breeding, and raising awareness for its
              survival.</span>
            <span data-slide-status="3">a critically endangered snake species endemic<br> to Round Island near
              Mauritius. Its population<br> is declining due to habitat degradation, invasive<br> species, and
              predation. Conservation efforts aim<br> to restore habitats, control predators, and raise awareness for
              its protection.</span>
          </div>
        </div>

        <img src="images/Reptilia/Gharial-crocodile.png" />
        <img src="images/Reptilia/Leatherback-Turtle.png" />
        <img src="images/Reptilia/philippine-crocodile.png" />
        <img src="images/Reptilia/Round-Island-Keel-scaled-Boa.png" />

        <div id="pagination3" class="pagination3">

          <div class="menu-animal">
            <i class="fas solid fa-bars" style="color: aliceblue;"></i>
          </div>
          <button class="active" data-slide="0"></button>
          <button data-slide="1"></button>
          <button data-slide="2"></button>
          <button data-slide="3"></button>
        </div>
      </div>
      <!-- Avres -->
      <div id="slider4" class="item avres">
        <div class="slider-inner">
          <div id="slider-content">
            <div class="meta">Species</div>
            <h2 id="slide-title4">Black-faced <br />Spoonbill</h2>
            <span data-slide-title="0">Black-faced <br />Spoonbill</span>
            <span data-slide-title="1">The <br />Kakapo</span>
            <span data-slide-title="2">Madagascar <br />Pochard</span>
            <span data-slide-title="3">Yellow-eyed <br />Penguin</span>
            <div class="meta">Status</div>
            <div id="slide-status4">This endangered bird species faces threats<br> from habitat loss, pollution, and
              disturbance<br> caused by human activities.<br> Conservation efforts focus on protecting habitats,<br>
              international cooperation, and wetland restoration.<br> Continued monitoring and conservation actions
              are<br> essential for its long-term survival.</div>
            <span data-slide-status="0">This endangered bird species faces threats<br> from habitat loss, pollution, and
              disturbance<br> caused by human activities.<br> Conservation efforts focus on protecting habitats,<br>
              international cooperation, and wetland restoration.<br> Continued monitoring and conservation actions
              are<br> essential for its long-term survival.</span>
            <span data-slide-status="1">The Kakapo, a critically endangered parrot from New Zealand,<br> is one of the
              world's rarest birds.<br> Conservation efforts aim to safeguard its habitat,<br> manage predators, and
              boost its small population<br> of approximately 200 individuals. The survival of<br> this unique species
              depends on ongoing conservation<br> actions and public backing.</span>
            <span data-slide-status="2">Critically endangered diving duck from Madagascar,<br> once thought extinct.<br>
              Less than 60 individuals remain due to habitat destruction.<br> Conservation efforts focus on protecting
              habitats and captive breeding.</span>
            <span data-slide-status="3">An endangered species found in New Zealand.<br> With a declining population, it
              faces threats<br> such as habitat loss, predation, human disturbance,<br> and disease. Conservation
              efforts focus on protecting<br> nesting sites and managing threats to ensure its survival.</span>
          </div>
        </div>

        <img src="images/Aves/Black-faced-Spoonbill.png" />
        <img src="images/Aves/Kakapo.png" />
        <img src="images/Aves/Madagascar-Pochard.png" />
        <img src="images/Aves/Yellow-eyed-Penguin.png" />

        <div id="pagination4" class="pagination4">

          <div class="menu-animal">
            <i class="fas solid fa-bars" style="color: aliceblue;"></i>
          </div>
          <button class="active" data-slide="0"></button>
          <button data-slide="1"></button>
          <button data-slide="2"></button>
          <button data-slide="3"></button>
        </div>
      </div>
      <!-- Amphibian -->
      <div id="slider5" class="item amphibian">
        <div class="slider-inner">
          <div id="slider-content">
            <div class="meta">Species</div>
            <h2 id="slide-title5">The <br />Axolotl</h2>
            <span data-slide-title="0">The <br />Axolotl</span>
            <span data-slide-title="1">Chinese Giant <br />Salamande</span>
            <span data-slide-title="2">Golden <br />Mantella </span>
            <span data-slide-title="3">Poison<br />Dart Frogs</span>
            <div class="meta">Status</div>
            <div id="slide-status5">The Axolotl, a unique salamander from Mexico,<br> is critically endangered due to
              habitat loss and pollution.<br> Conservation efforts focus on protecting remaining populations<br> through
              habitat preservation and captive breeding.</div>
            <span data-slide-status="0">The Axolotl, a unique salamander from Mexico,<br> is critically endangered due
              to habitat loss and pollution.<br> Conservation efforts focus on protecting remaining populations<br>
              through habitat preservation and captive breeding.</span>
            <span data-slide-status="1">A critically endangered amphibian found in China.<br> It is the world's largest
              salamander,<br> reaching lengths of up to 1.8 meters (5.9 feet).<br> Threats such as habitat loss,
              pollution,<br> and overexploitation have led to its decline.<br> Conservation efforts are underway, but
              the species<br> remains at risk of extinction. </span>
            <span data-slide-status="2">Endangered frog species in Madagascar facing threats<br> from habitat loss and
              illegal pet trade.<br> Conservation efforts aim to protect remaining<br> populations and raise awareness
              for their<br> conservation needs.</span>
            <span data-slide-status="3">Snown for their vibrant colors and toxic skin,<br> are currently endangered.<br>
              Habitat loss, pollution, and illegal<br> pet trade pose significant threats<br> to their survival.<br>
              Conservation efforts are vital to protect their <br>habitats and raise awareness about<br> their
              importance.</span>
          </div>
        </div>

        <img src="images/amphibian/Axolotl.png" />
        <img src="images/amphibian/Chinese-Giant-Salamander.png" />
        <img src="images/amphibian/Golden Mantella.png" />
        <img src="images/amphibian/Poison-Dart-Frogs.png" />

        <div id="pagination5" class="pagination5">

          <div class="menu-animal">
            <i class="fas solid fa-bars" style="color: aliceblue;"></i>
          </div>
          <button class="active" data-slide="0"></button>
          <button data-slide="1"></button>
          <button data-slide="2"></button>
          <button data-slide="3"></button>
        </div>
      </div>
    </main>
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-40525870-5"></script>

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-40525870-5");
    </script>
  </body>
  <!-- partial -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r83/three.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="Animal_js.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <script src="jquery.ui.touch-punch.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js" integrity="sha512-0bEtK0USNd96MnO4XhH8jhv3nyRF0eK87pJke6pkYf3cM0uDIhNJy9ltuzqgypoIFXw3JSuiy04tVk4AjpZdZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="scriptPopUp.js"></script>
    <script>
        $('.ban-btn').click(function (e) {
            alert("Đang trong giai doạn phát triển! Theo dõi trang này trực tiếp tại vòng chung kết BWD được tổ chức tại VKU vào ngày 22/07");
        });
    </script>
</body>

</html>