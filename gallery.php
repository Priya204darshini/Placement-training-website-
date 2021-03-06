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
                            <li><a href="index.php">GALLERY</a></li>
                            <li><a href="testimonials.php">TESTIMONIAL</a></li>
                            <li><a href="contact.php">CONTACT US</a></li>
                        </ul>
                    </nav>
                    <img src="images/menu.png" class="menu-icon" 
                    onclick="menutoggle()">
                </div>
            </div>
        </div>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-1f124847-ba6f-4ef8-90d4-49c86178b3d9"></div>
<!---------------------Gallery---------------------->
        <div class="small-container">
            <div class="row">
                <div class="col-4">
                    <img src="images/img1.jpg">
                </div>
                <div class="col-4">
                    <img src="images/img2.jpg">
                </div>
                <div class="col-4">
                    <img src="images/img3.jpg">
                </div>
                <div class="col-4">
                    <img src="images/img4.jpg">
                </div>
                <div class="col-4">
                    <img src="images/placement1.jpg">
                </div>
                <div class="col-4">
                    <img src="images/placementclass.jpg">
                </div>
                <div class="col-4">
                    <img src="images/placementclass1.jpg">
                </div>
                <div class="col-4">
                    <img src="images/placementstu.jpg">
                </div>
                <div class="col-4">
                    <img src="images/placementstu1.jpg">
                </div>
                <div class="col-4">
                    <img src="images/placementstu2.jpg">
                </div>
                <div class="col-4">
                    <img src="images/placementstu3.jpg">
                </div>
                <div class="col-4">
                    <img src="images/place3.jpg">
                </div>
            </div>
            <div class="page-btn">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#10132;</span>
            </div>
            <video class="video" width="510" height="420" controls>
                <source src="videos/10 Most important aptitude topics for placement preparation..mp4">
            </video>
            <video class="video" width="510" height="420" controls>
                <source src="videos/How to Prepare Aptitude for Campus Placement __ Placement Preparation __ Aptitude for Placement.mp4">
            </video>
            <p>want to know more about placement training..<br>
            <ul>
                <li><a href="https://youtu.be/AFh1-fqdaf4">Learn More</a><br></li>
                <li><a href="https://youtu.be/tnc9ojITRg4">Learn More</a><br></li>
                <li><a href="https://youtu.be/ZwZPAP2mbCA">Learn More</a><br></li>
            </ul>
            <br>
            <a href="#" class="btn">Watch More &#10132;</a>

        </div>        
        <!----------Footer---------->
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
                            were live forever.."</p>
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
