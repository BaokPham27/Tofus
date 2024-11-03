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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.jpg">
    <title>Tofus</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="Our-work.css">
    <link rel="stylesheet" href="iframeLogin.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
</head>

<body>


    <div class="scroll-up-btn">
        <a href="#"> <i class="fas fa-angle-up"></i></a>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="#">Tof<span>us.</span></a>
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
                    <a>Project<i class="fas fa-chevron-down"></i></a>
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

    <div class="menu-animal">
        <i class="fas solid fa-bars" style="color: #fff;"></i>
    </div>
    <div class="sidebar">
        <ul class="menu">
            <li><i class="fas fa-times-circle close" style="color: white;"></i></li>
            <li><a class="filter-item" href="OurWork.php#home" data-filter="mammal">Home</a></li>
            <li><a class="filter-item" href="OurWork.php#Protect" data-filter="pisces">Protect Animal</a></li>
            <li><a class="filter-item" href="OurWork.php#Bio" data-filter="reptilia">Viodiversity Conservation</a></li>
            <li><a class="filter-item" href="OurWork.php#Volunteer" data-filter="avres">Volunteer</a></li>
            <li><span>Contact<span style="color:crimson; margin-left: 0;">Us</span></span> </li>
            <li><i class="fab fa-facebook" style="color: rgb(81, 97, 237);"></i> <i class="fab fa-instagram"
                    style="color: rgb(201, 12, 141);"></i></li>
        </ul>
    </div>

    <section class="box1" id="home">
        <video src="https://www.dropbox.com/s/t28iq2fd7mi4gy7/first.mp4?dl=1" autoplay muted loop></video>
    </section>
    <div class="main">
        <!-- White box -->
        <div class="white_box"  id="Protect">
            <div class="container">

                <div class="title_white_box">
                    <span class="title_span_wb">Tofus and wildlife conservation projects.
                        Development</span>
                </div>


                <div class="black_box_left">
                    <div class="text_box">
                        <h3 class="h3">Safeguarding Wildlife: A Critical Imperative for Ecological and Economic
                            Well-being.</h3>
                        <br />
                        <span class="span">Protecting wildlife is crucial as it faces a significant decline. Wildlife
                            populations have plummeted by 68% since 1970, posing risks to ecosystems and economies.
                            Conservation projects aim to address habitat destruction, illegal trade, pollution, and
                            climate change. They preserve biodiversity and ensure species' survival. Collaborative
                            efforts and sustainable practices are key. </span>
                    </div>
                </div>

                <div class="other_box_right">

                    <div class="other_box_store">

                        <div class="other_item">
                            <div class="icon_div">
                                <i class="fa-solid fa-seedling icon"></i>
                            </div>
                            <div class="text_box_right">
                                <h4 class="title">Protecting Elephant Species</h4>
                                <span class="span_inf">Elephants are in danger due to illegal hunting activities.</span>
                            </div>
                        </div>

                        <div class="other_item">
                            <div class="icon_div">
                                <i class="fa-solid fa-seedling icon"></i>
                            </div>
                            <div class="text_box_right">
                                <h4 class="title">Rhino Conservation</h4>
                                <span class="span_inf">Estimates suggest that there are only 3-8 individuals left in
                                    Vietnam, with no male individuals remaining.</span>
                            </div>
                        </div>

                        <div class="other_item">
                            <div class="icon_div">
                                <i class="fa-solid fa-seedling icon"></i>
                            </div>
                            <div class="text_box_right">
                                <h4 class="title">Sea Turtle Restoration</h4>
                                <span class="span_inf">The number of individuals has drastically declined, with fewer
                                    than 250 mature individuals remaining.</span>
                            </div>
                        </div>

                        <div class="other_item">
                            <div class="icon_div">
                                <i class="fa-solid fa-seedling icon"></i>
                            </div>
                            <div class="text_box_right">
                                <h4 class="title">Preserving the Rhinopithecus</h4>
                                <span class="span_inf">There are approximately 80 individuals living in the national
                                    park, and efforts are being made to protect them.</span>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="scroll-image">

        </div>

        <!-- Black part -->
        <div class="black-sect" id="Bio">
            <div class="blb-container">
                <div class="title_black_sect">
                    <span class="title_span_blb">Tofus and Biodiversity Conservation</span>
                </div>

                <div class="blb-content">
                    <div class="blb-content-item">
                        <div class="desc-icon ">
                            <i class="fa-solid fa-water icon"></i>
                        </div>
                        <div class="blb-title ">
                            <h3 class="title">Nha Trang Coral Reefs</h3>
                        </div>
                        <div class="blb-info ">
                            <span class="blb-text">Restore coral reefs in Vietnam's Nha Trang region. It involves monitoring reef decline, establishing conservation areas, restoring reefs through coral planting, and implementing environmental protection measures to prevent further destruction.</span>
                        </div>
                    </div>
                    <div class="blb-content-item">
                        <div class="desc-icon ">
                            <i class="fa-solid fa-water icon"></i>
                        </div>
                        <div class="blb-title ">
                            <h3 class="title">Mekong Delta Mangrove Forests</h3>
                        </div>
                        <div class="blb-info ">
                            <span
                                class="blb-text">Conserve mangrove forests in Vietnam's Mekong Delta region. Activities include establishing conservation areas, monitoring and researching key animal and plant species, and implementing environmental protection measures to prevent land loss, control pollution, and maintain water quality.</span>
                        </div>
                    </div>
                    <div class="blb-content-item">
                        <div class="desc-icon ">
                            <i class="fa-solid fa-water icon"></i>
                        </div>
                        <div class="blb-title ">
                            <h3 class="title">Tra Khuc River Basin</h3>
                        </div>
                        <div class="blb-info ">
                            <span
                                class="blb-text">Focuses on conserving and sustainably developing the Tra Khuc River Basin in Central Vietnam. Activities include managing designated areas, preserving biodiversity, promoting sustainable agriculture, and raising community awareness about the importance of conservation and sustainable use of natural resources in the region.</span>
                        </div>
                    </div>
                </div>

                <div class="blb-bg">
<img src="images/ElephantBanner.jpg"/>
                </div>
            </div>
        </div>


        <!-- Panigation -->
        <div class="last-sect"  id="Volunteer">
            <div class="last-title">
                <h1>TOFUS AND VOLUNTEER WORK</h1>
            </div>
            <div class="last-desc">
                In addition to projects with multilateral partners, TOFUS also promotes awareness-raising and implements volunteer work. Together, we build a brighter and livable world.
            </div>
            <div class="grid-container">

                <div class="item1">
                    <div class="item-title">
                        <span class="item-text item-text--L">Protect Animals</span>
                    </div>
                </div>
                <div class="item2">
                    <div class="item-title">
                        <span class="item-text">clean up</span>
                    </div>
                </div>
                <div class="item3">
                    <div class="item-title">
                        <span class="item-text">Sustainable Future</span>
                    </div>
                </div>
                <div class="item4">
                    <div class="item-title">
                        <span class="item-text">Reduce Plastic Waste</span>
                    </div>
                </div>
                <div class="item5">
                    <div class="item-title">
                        <span class="item-text">Green Commute</span>
                    </div>
                </div>
                <div class="item6">
                    <div class="item-title">
                        <span class="item-text item-text--L">Plant for Future</span>
                    </div>
                </div>

            </div>
        </div>

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

        <footer class="footer" style="background-image: url(images/footer.jpg)">
        <div class="foot_top section" id="lien_he">
            <div class="container" style="padding-inline: 30px;">
                <div class="foot_brand">
                    <a href="#" class="logo">Tofus</a>

                    <p class="foot_text">
                        Thông tin liên hệ:
                        <a href="mailto:Tofus@gmail.com" class="link">Tofus@gmail.com</a>
                    </p>

                </div>

                <ul class="foot_list">
                    <li>
                        <p class="foot_list_title">About Us</p>
                    </li>

                    <li>
                        <a href="Home.html#about" class="foot_link">Who we are?</a>
                    </li>

                    <li>
                        <a href="Home.html#teams" class="foot_link">Members</a>
                    </li>


                </ul>

                <ul class="foot_list">
                    <li>
                        <p class="foot_list_title">Issues</p>
                    </li>

                    <li>
                        <a href="Home.html#story" class="foot_link">Tiger's Story</a>
                    </li>

                    <li>
                        <a href="Home.html#solution" class="foot_link">Solution</a>
                    </li>

                    <li>
                        <a href="Animal.html" class="foot_link">Animals</a>
                    </li>

                    <li>
                        <a href="Enviroment.html" class="foot_link">Environment</a>
                    </li>
                </ul>

                <ul class="foot_list">
                    <li>
                        <p class="foot_list_title">Projects</p>
                    </li>

                    <li>
                        <a href="OurWork.html#Protect" class="foot_link">Protect Wild Animals</a>
                    </li>

                    <li>
                        <a href="OurWork.html#Bio" class="foot_link">Biodiversity Conservation</a>
                    </li>

                    <li>
                        <a href="OurWork.html#Volunteer" class="foot_link">Volunteer</a>
                    </li>
                </ul>
                <ul class="foot_list">
                    <li>
                        <p class="foot_list_title">Partners</p>
                    </li>

                    <li>
                        <a href="#" class="foot_link">Vietnam - Korea University</a>
                    </li>

                    <li>
                        <a href="#" class="foot_link">Partners 2</a>
                    </li>

                    <li>
                        <a href="#" class="foot_link">Partners 3</a>
                    </li>
                </ul>
                <ul class="foot_list">
                    <li>
                        <p class="foot_list_title">Contact</p>
                    </li>

                    <li>
                        <a href="Home.html#contact" class="foot_link">Contact Us</a>
                    </li>

                    <li>
                        <a href="" class="foot_link" class="ban-btn">Tofus Hub</a>
                    </li>
                </ul>

            </div>
        </div>

        <div class="powered">
            <span>Created By <a href="#" target="_blank">Tofus</a> | <span class="far fa-copyright"></span> 2023 All
                rights
                reserved.</span>
        </div>
    </footer>
    </div>
    <!-- Footer section -->




    <script src="ourWorkscript.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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