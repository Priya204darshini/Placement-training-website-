<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bionic Website</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=
        Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="index.php"><img src="images/Bionic Engineers Logo - White1.jpg" width="125px"></a>
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="about.php">ABOUT US</a></li>
                            <li><a href="gallery.php">GALLERY</a></li>
                            <li><a href="testimonials.php">TESTIMONIAL</a></li>
                            <li><a href="contact.php">CONTACT US</a></li>
                        </ul>
                    </nav>
                    <img src="images/menu.png" class="menu-icon" 
                    onclick="menutoggle()">
                </div>
                <div class="row">
                    <div class="col-2">
                        <h1>Placement<br>Training</h1>
                        <p>Success isn't always about greatness. It's about 
                        consistency. Consistent<br> hard work gains success. Greatness 
                        will come.</p>
                        <a href="about.php" class="btn">Explore Now &#10132;</a>
                    </div>
                    <div class="col-2">
                        <img src="images/place1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-1f124847-ba6f-4ef8-90d4-49c86178b3d9"></div>
<!--------------about section----------------->

<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="images/study.png" class="offer-img">
            </div>
            <div class="col-2">
                
                <h1>Why choose us?</h1>
                <small>Lorem Ipsum is simply dummy text of the printing 
                and typesetting industry. Lorem Ipsum has been the 
                industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and 
                scrambled it to make a type specimen book.</small>
                <a href="about.php" class="btn">Read More &#10132;</a>
            </div>
        </div>
    </div>
</div>

<!--------------gallery----------------->
        <div class="categories">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <img src="images/placementstu.jpg">
                    </div>
                    <div class="col-3">
                        <img src="images/placementstu1.jpg">
                    </div>
                    <div class="col-3">
                        <img src="images/placementstu2.jpg">
                    </div>
                </div>
            </div>
            <center><a href="gallery.php" class="btn">See More &#10132;</a></center>
        </div>
  
        <!----------Footer---------->
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="center box">
                            <h2>Address</h2>
                            <div class="content">
                                <div class="place">
                                    <span class="fas fa-map-marker-alt"></span>
                                    <span class="text">Mysore, Karnataka </span>
        
                                </div>
                                <div class="phone">
                                    <span class="fas fa-phone-alt"></span>
                                    <span class="text">+91---------</span>
        
                                </div>
                                <div class="email">
                                    <span class="fas fa-envelope"></span>
                                    <span class="text">123@gmail.com </span>
        
                                </div>
                            </div>
                        </div>
                        <div class="footer-col-2">
                            <img src="images/Bionic Engineers Logo - White1.jpg">
                            <p>"Live as if you were to die tomorrow. Learn as if you 
                                were live forever.."
                            </p>
                        </div>
                        <div class="left box">
                            <h2>Touch with us</h2>
                            <div class="content">

                                <div class="social">
                                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#"><span class="fab fa-instagram"></span></a>
                                    <a href="#"><span class="fab fa-youtube"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p class="copyright">Copyright 2021 - prposi </p>
                </div>
            </div>
        </footer>    
        <!-------Js for Toggle menu------->
        <script>
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";
                }
                else
                {
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>
    </body>
</html>
