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
                <h1>Blog</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus rerum maxime enim odit illum in molestias beatae doloremque, ratione optio.</p>
            </div>
        </div>
    </header>
    <!-- End of Header -->

    <!-- Blog Section -->
    <section id="blog" class="py-4">
        <div class="container">
            <div class="title-wrap">
                <h2 class="sm-title">Read these blogs for information</h2>
                <h3 class="lg-title">Recent Blogs</h3>
            </div>
            <div class="blog-row">
                <!-- Blog Item -->
                <div class="blog-item my-2 shadow">
                    <div class="blog-item-top">
                        <img src="images/test 5.jpg" alt="blog image">
                        <span class="blog-date">Nov 30, 2024</span>
                    </div>
                    <div class="blog-item-bottom">
                        <span>Work</span>
                        <a href="#">Trust us and be free</a>
                        <p class="text">
                            At CADWorld, we specialize in bringing ideas to life with cutting-edge 3D design solutions. Whether you’re in architecture, manufacturing, or entertainment, our expert team transforms your concepts into stunning visuals and functional models.
                        </p>
                    </div>
                </div>
                <!-- Another Blog Item -->
                <div class="blog-item my-2 shadow">
                    <div class="blog-item-top">
                        <img src="images/test 5.jpg" alt="blog image">
                        <span class="blog-date">Nov 30, 2024</span>
                    </div>
                    <div class="blog-item-bottom">
                        <span>Work</span>
                        <a href="#">Trust us and be free</a>
                        <p class="text">
                            At CADWorld, we specialize in bringing ideas to life with cutting-edge 3D design solutions. Whether you’re in architecture, manufacturing, or entertainment, our expert team transforms your concepts into stunning visuals and functional models.
                        </p>
                    </div>
                </div>
                <!-- Another Blog Item -->
                <div class="blog-item my-2 shadow">
                    <div class="blog-item-top">
                        <img src="images/test 5.jpg" alt="blog image">
                        <span class="blog-date">Nov 30, 2024</span>
                    </div>
                    <div class="blog-item-bottom">
                        <span>Work</span>
                        <a href="#">Trust us and be free</a>
                        <p class="text">
                            At CADWorld, we specialize in bringing ideas to life with cutting-edge 3D design solutions. Whether you’re in architecture, manufacturing, or entertainment, our expert team transforms your concepts into stunning visuals and functional models.
                        </p>
                    </div>
                </div>
                <!-- Another Blog Item -->
                <div class="blog-item my-2 shadow">
                    <div class="blog-item-top">
                        <img src="images/test 5.jpg" alt="blog image">
                        <span class="blog-date">Nov 30, 2024</span>
                    </div>
                    <div class="blog-item-bottom">
                        <span>Work</span>
                        <a href="#">Trust us and be free</a>
                        <p class="text">
                            At CADWorld, we specialize in bringing ideas to life with cutting-edge 3D design solutions. Whether you’re in architecture, manufacturing, or entertainment, our expert team transforms your concepts into stunning visuals and functional models.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section -->

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
