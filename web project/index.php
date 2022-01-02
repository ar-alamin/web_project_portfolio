<?php
        $host = "localhost";
        $user = "root";
        $pass= "";
        $db = "project";

        $conn = mysqli_connect($host, $user, $pass, $db);

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $msg = $_POST['msg'];

            $sql = "INSERT INTO contact(name,email,phone,msg) VALUES('$name','$email','$phone','$msg')";

            $result = mysqli_query($conn,$sql);

            if($result){
                ?>
                    <script>
                        alert("Submission Successful");
                    </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert("Error!".mysql_error($conn));
                    </script>
                <?php
            }   
        }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>My Website</title>
</head>

<body>
    <!-- Header -->
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero">
                        <h1><span>P</span>rot <span>fo</span>lio</h1>
                    </a>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li><a href="#hero" data-after="Home">Home</a></li>
                        <li><a href="#services" data-after="Service">Services</a></li>
                        <li><a href="#projects" data-after="Projects">Projects</a></li>
                        <li><a href="#about" data-after="About">About</a></li>
                        <li><a href="#contact" data-after="Contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->


    <!-- Hero Section  -->
    <section id="hero">
        <div class="hero container">
            <div>
                <h1>Hello, <span></span></h1>
                <h1>We are <span></span></h1>
                <h1>Ashikull And Al Amin<span></span></h1>
                <a href="#projects" type="button" class="cta">Portfolio</a>
            </div>
        </div>
    </section>
    <!-- End Hero Section  -->

    <!-- Service Section -->
    <section id="services">
        <div class="services container">
            <div class="service-top">
                <h1 class="section-title">Serv<span>i</span>ces</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum deleniti maiores pariatur assumenda quas magni et, doloribus quod voluptate quasi molestiae magnam officiis dolorum, dolor provident atque molestias voluptatum explicabo!</p>
            </div>
            <div class="service-bottom">
                <div class="service-item">
                    <div class="icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h2>Web Design</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed architecto placeat beatae tenetur officia quod</p>
                </div>
                <div class="service-item">
                    <div class="icon"><i class="fas fa-tools"></i></div>
                    <h2>Web Devolopment</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed architecto placeat beatae tenetur officia quod</p>
                </div>
                <div class="service-item">
                    <div class="icon"><i class="fab fa-js-square"></i></div>
                    <h2>Programmer</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed architecto placeat beatae tenetur officia quod</p>
                </div>
                <div class="service-item">
                    <div class="icon"><i class="fas fa-analytics"></i></div>
                    <h2>Software Engineer</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed architecto placeat beatae tenetur officia quod</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->

    <!-- Projects Section -->
    <section id="projects">
        <div class="projects container">
            <div class="projects-header">
                <h1 class="section-title">Recent <span>Projects</span></h1>
            </div>
            <div class="all-projects">
                <div class="project-item">
                    <div class="project-info">
                        <h1>Project <span>1</span></h1>
                        <h2>Coding is Love</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt harum? Ipsum repellat
                            animi, fugit architecto voluptatum odit et!</p>
                    </div>
                    <div class="project-img">
                        <img src="./img/img-1.jpg" alt="img">
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Project <span>2</span></h1>
                        <h2>Coding is Love</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt harum? Ipsum repellat
                            animi, fugit architecto voluptatum odit et!</p>
                    </div>
                    <div class="project-img">
                        <img src="./img/img-3.png" alt="img">
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Project <span>3</span></h1>
                        <h2>Coding is Love</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt harum? Ipsum repellat
                            animi, fugit architecto voluptatum odit et!</p>
                    </div>
                    <div class="project-img">
                        <img src="./img/img-4.gif" alt="img">
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Project <span>4</span></h1>
                        <h2>Coding is Love</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt harum? Ipsum repellat
                            animi, fugit architecto voluptatum odit et!</p>
                    </div>
                    <div class="project-img">
                        <img src="./img/img-5.jpg" alt="img">
                    </div>
                </div>
                <div class="project-item">
                    <div class="project-info">
                        <h1>Project <span>5</span></h1>
                        <h2>Coding is Love</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt harum? Ipsum repellat
                            animi, fugit architecto voluptatum odit et!</p>
                    </div>
                    <div class="project-img">
                        <img src="./img/img-6.jpg" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Projects Section -->

    <!-- About Section -->
    <section id="about">
        <div class="about container">
            <div class="col-left">
                <div class="about-img">
                    <img src="./img/img-2.jpg" alt="img">
                </div>
            </div>
            <div class="col-right">
                <h1 class="section-title">About <span>me</span></h1>
                <h2>Front End Developer</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum beatae atque repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt exercitationem cumque earum
                    omnis ipsum rem accusantium quis, quas quia, accusamus provident suscipit magni! Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut, deserunt reprehenderit libero enim!</p>
                <a href="download.php?file=resume" class="cta">Download Resume</a>
            </div>
        </div>
    </section>
    <!-- End About Section -->

  <!-- Contact Section -->
  <div class="contact-title">
        <h2>CONT<span>ACT</span></h2>
        <div class="contuct-info">
            <ul>
                <li>01863924740</li>
                <li>Mirpur, Dhaka, Bangladesh</li>
                <li>ashikulmoula7@gmail.com</li>
            </ul>
        </div>
    </div>



    <form action="index.php" method="post" class="submit-info">
            <div>
                <label>Name :</label>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label>Email :</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label>Phone :</label>
                <input type="number" id="phone" name="phone">
            </div>
            <div>
                <label>Massege :</label>
                <textarea type="text" id="description" name="msg" rows="10" cols="66">
                </textarea>
            </div>
            <div>
                <button name="submit" type="submit">Submit</button>
            </div>

        </form>
  <!-- End Contact Section -->

  
  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
        <div class="brand">
            <h1><span>W</span>eb <span>So</span>liotions</h1>
        </div>
        <h2>Your Complete Web Solution</h2>
        <div class="social-icon">
            <div class="social-item">
                <a href="https://web.facebook.com/aralamin.bncd/" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
            </div>
            <div class="social-item">
                <a href="https://www.instagram.com/ashikulmoula7/" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
            </div>
            <div class="social-item">
                <a href="https://www.twitter.com/aralamin21/" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
            </div>
            <div class="social-item">
                <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
            </div>
        </div>
        <p>Copyright © 2021 Ashik and Al-amin. All rights reserved</p>
    </div>
</section>
<!-- End Footer -->

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
<script src="./app.js"></script>

</body>

</html>