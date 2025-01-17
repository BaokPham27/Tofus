<?php
session_start();
if (isset($_SESSION['account'])) {
    $biến = $_SESSION['account'];
    $biến2 = $_SESSION['Admin'];
}
include 'db/connect.php';
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.jpg">
    <title>Tofus</title>
    <link rel="stylesheet" href="style2.css">

    <link rel="stylesheet" href="iframeLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <style>
        body {
            overflow-x: hidden;
        }

        /* footer section styling */
        footer {
            background: #111;
            padding: 15px 23px;
            color: #fff;
            text-align: center;
        }

        footer span a {
            color: crimson;
            text-decoration: none;
        }

        footer span a:hover {
            text-decoration: underline;
        }

        .powered a {
            display: inline;
        }
    </style>

</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
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
                <li><a href="" style="color:rgb(159, 233, 230);" class="ban-btn">Tofus
                        Hub</a></li>
                <li><a href="" class="menu-btn">Store</a></li>

                <li><a href="index.php#contact">Contact Us</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>


    <section class="box1" id="home">
        <video src="https://www.dropbox.com/s/bw0bid0qsedr6d2/vid-cutted1.mp4?dl=1" autoplay muted loop></video>
        <h1>save the world</h1>
        <h3>would you ?</h3>
        <a href="OurWork.php" class="boxBtn1" target="_blank">Join Us</a>
    </section>
    <!-- home section start -->








    <!-- about section start -->
    <section class="about reveal" id="about">
        <div class="max-width">
            <h2 class="title">About us</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/logo2.jpg" alt="profile pic">
                </div>
                <div class="column right">
                    <div class="text">We are <span class="typing-2"></span></div>
                    <p>Hello, we are a group of four young students studying at the Vietnamese-Korean University of
                        Information Technology and Communications. We have created this website with the purpose of
                        raising awareness about the protection of wildlife, particularly forests, and environmental
                        conservation in general, through real data and gentle stories with profound messages. Our goal
                        is to preserve the balance of ecosystems and maintain a stable natural environment.</p>

                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="container services reveal" id="story">
        <h2 class="title">Save The Forest</h2>
        <div class="slider-wrapper">
            <div class="slider">

                <img id="slide-1" src="images/ảnh_bìa.gif" alt="ảnh bìa" />
                <img id="slide-1" src="images/p1.gif" alt="pic 1" />
                <img id="slide-1" src="images/p1_1.gif" />
                <img id="slide-1" src="images/p1_1_1.gif" />
                <img id="slide-1" src="images/p1_2.gif" />
                <img id="slide-1" src="images/p2.1.gif" />
                <img id="slide-1" src="images/p2.gif" />
                <img id="slide-1" src="images/p3.gif" />
                <img id="slide-1" src="images/p4.gif" />
                <img id="slide-1" src="images/p6.gif" />
                <img id="slide-1" src="images/p7.gif" />
                <img id="slide-1" src="images/p8.gif" />
                <img id="slide-1" src="images/p9.gif" />
                <img id="slide-1" src="images/p10.gif" />

            </div>



            <span class="arrow arrow-prev"></span>
            <span class="arrow arrow-next"></span>
        </div>
        <a class="read" href="Animal.php">READ MORE</a>
    </section>

    <!-- skills section start -->
    <section class="products skills reveal" id="Solution">


        <h2 class="title">My Solution</h2>
        <div class="box-container" id="ao">

            <div class="box">
                <div class="image">
                    <img src="images/Solution1.jpg" alt="">
                    <div class="rear-img">
                        <h1 class="topic">Forest Fires</h1>
                        <span>
                            Raise awareness not only among people in the plains but also among those living in remote
                            areas, especially those closest to the forests, to prevent regrettable incidents. Be
                            vigilant against forest destroyers and report suspicious activities to the authorities
                            promptly.

                        </span>
                    </div>

                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/Solution2.jpg" alt="">
                    <div class="rear-img">
                        <h1 class="topic">Wildlife Poaching</h1>
                        <span>
                            Establish conservation areas and national parks to provide the best protection for wild
                            species. Law enforcement agencies should be more determined in dismantling these criminal
                            networks, aiming to maintain a balanced ecosystem.
                    </div>
                </div>

            </div>

            <div class="box">
                <div class="image">
                    <img src="images/Solution3.jpg" alt="">
                    <div class="rear-img">
                        <h1 class="topic">Climate Change</h1>
                        <span>
                            Reduce waste and emissions, promote energy conservation, and regularly organize green
                            activities. Combined with effective communication campaigns, these efforts can enhance the
                            forest conservation awareness of the general public.
                        </span>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/Solution4.jpg" alt="">
                    <div class="rear-img">
                        <h1 class="topic">Urban Expansion Deforestation</h1>
                        <span>
                            Authorities should adjust their policies to balance the development of physical
                            infrastructure for society while meeting the necessary forest area requirements. Utilize
                            available land for construction instead of abandoning it and encroaching on forested land.
                        </span>
                    </div>
                </div>

            </div>
        </div>

        <div class="carousel owl-carousel hehe">
            <div class="card">
                <div class="box">
                    <div class="image">
                        <img src="images/Solution1.jpg" alt="">
                        <div class="rear-img">
                            <h1 class="topic">Forest Fires</h1>
                            <span>
                                Raise awareness not only among people in the plains but also among those living in
                                remote areas, especially those closest to the forests, to prevent regrettable incidents.
                                Be vigilant against forest destroyers and report suspicious activities to the
                                authorities promptly.
                            </span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <div class="image">
                        <img src="images/Solution2.jpg" alt="">
                        <div class="rear-img">
                            <h1 class="topic">Wildlife Poaching</h1>
                            <span>
                                Establish conservation areas and national parks to provide the best protection for wild
                                species. Law enforcement agencies should be more determined in dismantling these
                                criminal networks, aiming to maintain a balanced ecosystem.
                            </span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="box">
                    <div class="image">
                        <img src="images/Solution3.jpg" alt="">
                        <div class="rear-img">
                            <h1 class="topic">Climate Change</h1>
                            <span>
                                Reduce waste and emissions, promote energy conservation, and regularly organize green
                                activities. Combined with effective communication campaigns, these efforts can enhance
                                the forest conservation awareness of the general public.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <div class="image">
                        <img src="images/Solution4.jpg" alt="">
                        <div class="rear-img">
                            <h1 class="topic">Urban Expansion Deforestation</h1>
                            <span>
                                Authorities should adjust their policies to balance the development of physical
                                infrastructure for society while meeting the necessary forest area requirements. Utilize
                                available land for construction instead of abandoning it and encroaching on forested
                                land.
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- teams section start -->
    <section class="teams reveal" id="teams">
        <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/Bao.jpg" alt="">
                        <div class="text" style="font-size: 22px;">Phạm Hoàng Bảo</div>
                        <p><i class="fas fa-code"></i> Web developer<br>" It's not a bug, it's a Feature".</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/Khanh3.jpg" alt="">
                        <div class="text" style="font-size: 22px;">Nguyễn Đình Quốc Khánh</div>
                        <p><i class="fas fa-code"></i> Web developer<br>" I am Quoc Khanh because i was born on 2nd
                            Sep".</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/Hoang.png" alt="">
                        <div class="text" style="font-size: 22px;">Bùi Minh Hoàng</div>
                        <p><i class="fas fa-book-reader"></i> Contentor<br>" If you know the error but don't fix it,
                            it's a bug.".</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/Huong.jpg" alt="">
                        <div class="text" style="font-size: 22px;">Lê Thị Thu Hương</div>
                        <p><i class="fas fa-palette"></i> Designer<br>" Size doesn't mean anything".</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>For more information, questions, or inquiries, please don't hesitate to get in touch with us.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Group</div>
                                <div class="sub-title">Tofus</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">470 Đường Trần Đại Nghĩa </div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">Tofus290411@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
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


    <!-- footer section start -->
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

    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <script src="jquery.ui.touch-punch.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"
        integrity="sha512-0bEtK0USNd96MnO4XhH8jhv3nyRF0eK87pJke6pkYf3cM0uDIhNJy9ltuzqgypoIFXw3JSuiy04tVk4AjpZdZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="scriptPopUp.js"></script>
    <script>
        $('.ban-btn').click(function (e) {
            alert("Đang trong giai doạn phát triển! Theo dõi trang này trực tiếp tại vòng chung kết BWD được tổ chức tại VKU vào ngày 22/07");
        });
    </script>
</body>

</html>