


<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CADWORLD</title>
    <meta name="description" content="">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="font/fonts.css">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/utility.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="css/background .css">


</head>
<body>
   


    <!-- Navbar -->
    <nav class="navbar">
        <div class="container flex">
            <a href="index.html" class="site-brand">
                <img src="images/15.jpg" alt="CADWORLD Logo" style="height: 40px; vertical-align: middle;">
               
            </a>
            <button type="button" id="navbar-show-btn" class="flex">
                <i class="fas fa-bars"></i>
            </button>
            <div id="navbar-collapse">
                <button type="button" id="navbar-close-btn" class="flex">
                    <i class="fas fa-times"></i>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item">
                        <a href="gallery.php" class="nav-link">Gallery</a></li>
                    <li class="nav-item">
                        <a href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item">
                        
                        <a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a></li>
                        <!-- theme changes button -->
                        <li>
                            <input type="checkbox" id="theme-toggle-btn">
                            <label for="theme-toggle-btn"></label>
                          </li>
                




                         <!-- theme changes button end -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Header -->
    <header class="flex">
        <div class="container">
            <div class="header-title">
                <h1>Leave Your Footprints</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus rerum maxime enim odit illum in molestias beatae doloremque, ratione optio.
                </p>
            </div>
            <div class="header-form">
                <h2>Choose your Service location:</h2>
                <form class="flex">
                    <input type="text" class="form-control" placeholder="Destination name">
                    <input type="date" class="form-control" placeholder="Date">
                    <input type="number" class="form-control" placeholder="Price (Rs)">
                    <input type="submit" class="btn" value="Search">
                </form>
            </div>
        </div>
    </header>
    <!-- End of Header -->

    <!-- Featured Section -->
    <section id="featured" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <span class="sm-title">Know about some places</span>
                <h2 class="lg-title">Featured</h2>
            </div>
            <div class="featured-row">
                <!-- Featured Item 1 -->
                <div class="featured-item my-2 shadow">
                    <img src="images/html1.avif" alt="Featured">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            CADWORLD 3D Design
                        </span>
                        <div> 
                            <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                        </div>
                    </div>
                </div>

                <!-- Featured Item 2 -->
                <div class="featured-item my-2 shadow">
                    <img src="images/html2.jpg" alt="Featured">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            CADWORLD 3D Design
                        </span>
                        <div> 
                            <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                        </div>
                    </div>
                </div>

                <!-- Featured Item 3 -->
                <div class="featured-item my-2 shadow">
                    <img src="images/html3.jpg" alt="Featured">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            CADWORLD 3D Design
                        </span>
                        <div> 
                            <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                        </div>
                    </div>
                </div>
                 <!-- Featured Item 3 -->
                 <div class="featured-item my-2 shadow">
                    <img src="images/4.jpg" alt="Featured">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            CADWORLD 3D Design
                        </span>
                        <div> 
                            <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                        </div>
                    </div>
                </div>
                 <!-- Featured Item 3 -->
                 <div class="featured-item my-2 shadow">
                    <img src="images/html5.jpeg" alt="Featured">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            CADWORLD 3D Design
                        </span>
                        <div> 
                            <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                        </div>
                    </div>
                </div>

                <!-- Featured Item 4 -->
                <div class="featured-item my-2 shadow">
                    <img src="images/html6.jpg" alt="Featured">
                    <div class="featured-item-content">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                            CADWORLD 3D Design
                        </span>
                        <div> 
                            <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Featured Section -->



    <!--  services section -->
      <section id="services" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <span class="sm-title">know about services that we offer
                </span>
                <h2 class ="lg-title">Our services</h2>
                
            </div>
            <div class ="services-row">
                <div class="services-item">
                    <span class="services-icon">
                        <i class="fas fa-CADWORLD">

                        </i>
        
                    </span>

                    <h3>3D Designing</h3>
                    <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                    <a href = "#" class="btn">Readmore</a>

                </div>
                <div class="services-item">
                    <span class="services-icon">
                        <i class="fas fa-map-marked-alt">

                        </i>
        
                    </span>

                    <h3>Reverse Engineering</h3>
                    <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                    <a href = "#" class="btn">Readmore</a>
                    </div>

                    <div class="services-item">
                        <span class="services-icon">
                            <i class="fas fa-map-marked-alt">
    
                            </i>
            
                        </span>
    
                        <h3>CMM SERVICES</h3>
                        <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                        <a href = "#" class="btn">Readmore</a>
                        
    
    
    
                    </div>
                <div class="services-item">
                    <span class="services-icon">
                        <i class="fas fa-money-bill">

                        </i>
        
                    </span>

                    <h3>suitable prices</h3>
                    <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                    <a href = "#" class="btn">Readmore</a>


                </div>
            </div>
        </div>
      </section>
      <!-- end of services section -->


       <!-- testimonials section 
      <-<section id="testimonials" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <span class="sm-title">What our clients say about us</span>
                <h2 class="lg-title">Testimonials</h2>
            </div>
            <div class="test-row">
                <div class="test-item">
                    <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                    <div class="test-item-info">
                        <img src="images/test 4.jpg" alt="testimonial">
                        <div>
                            <h3>CADWORLD SERVICES</h3>
                            <p class="text">The CADWORLD</p>
                        </div>
                    </div>
                </div>

                <div class="test-item">
                    <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                    <div class="test-item-info">
                        <img src="images/test3.jpg" alt="testimonial">
                        <div>
                            <h3>KRUSHANG PATEL-CEO & FOUNDER</h3>
                            <p class="text">The CADWORLD</p>
                        </div>
                    </div>
                </div>
                <div class="test-item">
                    <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                    <div class="test-item-info">
                        <img src="images/test 4.jpg" alt="testimonial">
                        <div>
                            <h3>CLIENTS</h3>
                            <p class="text">The CADWORLD</p>
                        </div>
                    </div>
                </div>
                <div class="test-item">
                    <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                    <div class="test-item-info">
                        <img src="images/test 5.jpg" alt="testimonial">
                        <div>
                            <h3>EMPLOYEES_WORK</h3>
                            <p class="text">The CADWORLD</p>
                        </div>
                    </div>
                </div>
                Add more testimonials here as needed -->
           <!--- </div>
        </div>
    </section> -->





<!-- testimonials section -->
<section id="testimonials" class="py-4">
    <!-- Video Background -->
    <div class="video-background">
        <video id="testimonials-video" autoplay muted loop playsinline>
           <source src="videos/3130284-uhd_3840_2160_30fps.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Testimonials Content -->
    <div class="container">
        <div class="title-wrap">
            <span class="sm-title">What our clients say about us</span>
            <h2 class="lg-title">Testimonials</h2>
        </div>
        <div class="test-row">
            <div class="test-item">
                <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                <div class="test-item-info">
                    <img src="images/test 4.jpg" alt="testimonial">
                    <div>
                        <h3>CADWORLD SERVICES</h3>
                        <p class="text">The CADWORLD</p>
                    </div>
                </div>
            </div>

            <div class="test-item">
                <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                <div class="test-item-info">
                    <img src="images/test3.jpg" alt="testimonial">
                    <div>
                        <h3>KRUSHANG PATEL-CEO & FOUNDER</h3>
                        <p class="text">The CADWORLD</p>
                    </div>
                </div>
            </div>
            <div class="test-item">
                <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                <div class="test-item-info">
                    <img src="images/test 4.jpg" alt="testimonial">
                    <div>
                        <h3>CLIENTS</h3>
                        <p class="text">The CADWORLD</p>
                    </div>
                </div>
            </div>
            <div class="test-item">
                <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
                <div class="test-item-info">
                    <img src="images/test 5.jpg" alt="testimonial">
                    <div>
                        <h3>EMPLOYEES_WORK</h3>
                        <p class="text">The CADWORLD</p>
                    </div>
                </div>
            </div>
            <!-- Add more testimonials here as needed -->
        </div>
    </div>
</section>
<!-- end testimonials section -->
<!-- end testimonials section -->

<!-- end testimonials section -->



















    <!-- video section 
    <section id="video">
        <div class="video-wrapper">
            <video id="main-video" autoplay muted loop playsinline>
                <source src="videos/3130284-uhd_3840_2160_30fps.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <button type="button" id="play-btn">
                <i class="fas fa-play"></i>
            </button>
        </div>
    </section> 
    -->



    <!-- 2nd video section  -->
     <!-- Video section -->


    <!-- end   -->
     
     <!-- end video section -->

     <!-- footer -->
     <footer class="py-4">
        <div class="container footer-row">
            <!-- Footer Branding -->
            <div class="footer-item">
                <a href="index.html" class="site-brand">
                    Cad<span>World</span>
                </a>
                <p class="text">Cheap 3D scanning makes reverse engineering easier than ever</p>
            </div>
    
            <!-- Social Media Links -->
            <div class="footer-item">
                <h2>Follow us on:</h2>
                <ul class="social-links">
                    <li>
                        <a href="https://www.facebook.com/yourprofile" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/yourprofile" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/yourprofile" target="_blank"> 
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.whatsapp.com/yourprofile" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </div>
    
            <!-- Services Section -->
            <div class="footer-item">
                <h2>Services:</h2>
                <ul>
                    <li><a href="#">3D Engineering</a></li>
                    <li><a href="#">Reverse Engineering</a></li>
                    <li><a href="#">CMM</a></li>
                </ul>
            </div>
    
            <!-- Subscribe Form -->
            <div class="footer-item subscribe-form">
                <h2>Subscribe for Newsletter!</h2>
                <form class="flex">
                    <input type="email" placeholder="Enter your email" class="form-control" required>
                    <input type="submit" class="btn" value="Subscribe">
                </form>
            </div>
        </div>
    </footer>
    
      <!-- end footer -->
    



    <!-- JS -->
    <script src="script.js">
        
    </script>



</body>
</html>

