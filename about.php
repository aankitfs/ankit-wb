<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CADWorld</title>
    <meta name="description" content="CADWorld specializes in cutting-edge 3D design solutions for architecture, manufacturing, and entertainment.">
    
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
                <a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item">
                        <a href="gallery.php" class="nav-link">Gallery</a></li>
                    <li class="nav-item">
                        <a href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item">
                        
                        <a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a></li>
                        <input type="checkbox" id="theme-toggle-btn">
                        <label for="theme-toggle-btn"></label>
                      </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Header -->
    <header class="flex header-sm">
        <div class="container">
            <div class="header-title">
                <h1>About</h1>
                <p>At CADWorld, we specialize in bringing ideas to life with cutting-edge 3D design solutions. Whether you’re in architecture, manufacturing, or entertainment, our expert team transforms your concepts into stunning visuals and functional models.

                </p>
                
            </div>
        </div>
    </header>
    <!-- End of Header -->

    <!--  about section -->

    <section id="about" class="py-4">
        <div class="container">
          <div class="title-wrap">
            <span class="sm-title">Things to know about us</span>
            <h2 class="lg-title">Our Story</h2>
          </div>
      
          <div class="about-row">
            <div class="about-left my-2">
              <img src="images/1 (4).webp" alt="About Image">
            </div>
      
            <div class="about-right">
              <h2>15 Years of Experience</h2>
              <p class="text">
                We combine innovation with precision to deliver results tailored to your needs. From realistic 3D renderings to efficient prototypes, CADWorld ensures your projects stand out and succeed.
              </p>
            </div>
          </div>
        </div>
      </section>
      





      <!-- end of about sectiom -->

      <!-- facts section -->
      <section id="facts" class="py-4 flex">
        <div class="container">
          <div class="title-wrap">
            <span class="sm-title">Know Some Facts</span>
            <h2 class="lg-title">Interesting Facts</h2>
          </div>
      
          <div class="facts-row">
            <div class="fact-item">
              <h3>100+</h3>
              <p>Projects Completed</p>
            </div>
            <div class="fact-item">
              <h3>50+</h3>
              <p>Happy Clients</p>
            </div>
            <div class="fact-item">
              <h3>15</h3>
              <p>Years of Experience</p>
            </div>
          </div>
        </div>
      </section>

       <!-- end of fact section -->


    <!-- Footer -->
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
    <!-- End Footer -->

    <!-- JS -->
    <script src="script.js"></script>

</body>
</html>
