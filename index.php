<?php
session_start();

//not go back to home page after logout
if(!isset($_SESSION['username'])){
    echo "You are not Logged-In";
     header('location:login.php');
 }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xplore skills</title>
    <link rel="stylesheet" href="./Assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">
</head>




<body>
    <section class="header">
        <nav>
            <a  href="home.php"  class="logo">Xplore
                <i class="fab fa-staylinked"></i>kill
            </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="programs.html">Programs</a></li>
                    <li><a href="admission.html" target="_blank">Admission</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html" target="_blank">Contact</a></li>
                    <li><a href="logout.php" >logout</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text_box">
            <h2>GET READY</h2>
            <h3>welcome to <span style="color: yellow;">
            <?php echo $_SESSION['username'] ; ?>
            </span> </h3> <br>
            <p id="headtext">TO DISCOVER UAF CAMPUS</p>
            <p>UAF is a learner-centered institution in which every individual is inspired by a rich campus life and challenged enough to pursue and celebrate knowledge, creativity and public service
                <br> 
            </p>
            <a href="#" class="hero_btn">Visit Us To Know More</a>
        </div>
    </section>

    <!-- Course Section Start -->
    <section class="course">
        <div class="PageBlock">
            
            <div class="Clear"></div>
        </div>
        <h1>EXPLORE OUR 60+ <br> MAJOR PROGRAMS</h1>
        <p>The Foundation of UAF was laid in 1906 with the name of punjab Agricultural college and research institute.</p>

        <div class="row">
            <div class="course-col">
                <h3>Undergraduate Programs</h3>
                <p>This University provide many Undergraduate Programs . Doctor of Veternity Medicien (DVM) ,Pharm-D ,Microbiology, physics,chemistry and Many more. You can visit all programs</p>
            </div>
            <div class="course-col">
                <h3>Postgraduate Programs</h3>
                <p>This University provide a chance to accomplish many Postgraduate Programs . Agronomy, Antomology, Forestry ,Soil Science, Biotechnology and many more programs .You can visit all programs</p>

            </div>
            <div class="course-col">
                <h3>International Students</h3>
                <p>The Foreign Students Advisor Office (FSA) at the University of Agriculture, Faisalabad (UAF), Pakistan, is dedicated to helping foreign students with the admission process and beyond.</p>
            </div>
        </div>
    </section>
    <!-- Course Section End -->

    <!-- Campus Section Start-->

    <section class="campus">
        <div class="PageBlock">
            <div class="verticalLine"></div>
            <div class="Clear"></div>
        </div>
        <h1>VISIT OUR CAMPUSES</h1>
        <p>Visit these campuses located in burewala, okara and toba tek singh</p>

        <div class="row">
            <div class="campus-col">
                <img src="Assets/img/Campus1.png" alt="">
                <div class="layer">
                    <h3>Burewala</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="Assets/img/download (8).jfif" alt="">
                <div class="layer">
                    <h3>Toba Tek Singh</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="Assets/img/images.jfif" alt="">
                <div class="layer">
                    <h3>Okara</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Campus Section End -->

    <!-- Facilities Section Start -->
    <section class="facilities">
        <div class="PageBlock">
            <div class="verticalLine"></div>
            <div class="Clear"></div>
        </div>
        <h1>Our Facilities</h1>
        <p>Here are some facities that UAF provide you along with the study</p>

        <div class="row">
            <div class="facilities-col">
                <img src="Assets/img/libary.png" alt="">
                <h3>Best Libary</h3>
                <p>University has best library.
                You can take or read any kind of books from library.
                </p>
            </div>
            <div class="facilities-col">
                <img src="Assets/img/playground.png" alt="">
                <h3>Athletics</h3>
                <p>Different types of playground and stadiums for cricket ,volley ball, hockey and football.
                </p>
            </div>
            <div class="facilities-col">
                <img src="Assets/img/food.png" alt="">
                <h3>Tasty and Healthy Food</h3>
                <p>Healthy and tasty food are always available at any time
                </p>
            </div>
        </div>
    </section>
    <!-- Facilities Section End -->

    <!-- Testimonials Section Start -->
    <section class="testimonials">
        <div class="PageBlock">
            <div class="verticalLine"></div>
            <div class="Clear"></div>
        </div>
        <h1>What Our Student Says</h1>
        

        <div class="row">
            <div class="testimonials-col">
                <img src="Assets/img/Tanveer_Mech.jpg" alt="oo..">
                <div>
                    <p>It was my immense luck and fortune to be the part of this University where I can grow. The entire faculty and department leaves no stone unturned to shape one\'s future. My four years at University have been a wonderful experience of learning with prolific exposure to outside. </p>
                    <h3>Tanveer Ahmed</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
            </div>
            <div class="testimonials-col">
                <img src="Assets/img/Nitin_jangir.jpg" alt="oo..">
                <div>
                    <p>"My experience at this University is great and memorable. The mentors at this University helped us enhance my academic and interpersonal skills. I am thankful to Training & Placement cell for providing a platform to enhance my skills"</p>
                    <h3>Usman Sohail</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
            </div>
        </div>
        
    
    </section>
    <!-- Testimonials Section End -->

    <!-- Call To Action Section Start -->
    <section class="cta">
        <h1>GET READY FOR A BRIGHT FUTURE</h1>
        <a href="contact.html" class="hero_btn">CONTACT US</a>
    </section>
    <!-- Call To Action Section End -->

    <!-- Footer Section Start -->
    <section class="footer">
        <hr>
        <h2>About Us</h2>
        <p>More than a century old, UAF is a learner-centered institution in which every individual is inspired by a rich campus life <br> and challenged enough to pursue and celebrate knowledge, creativity and public service.

        <div class="icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin"></i>
        </div>
        <p>Made with <i class="fas fa-heart"></i> by <a href="index.html">The Next Gen Developers</a></p>
        <p>Copyright © 2021 <a href="index.html">University</a>. All Rights Reserved</p>
    </section>
    <!-- Footer Section End -->

    <script src="Assets/script.js"></script>
    <script src="Assets/script1.js"></script>
</body>

</html>