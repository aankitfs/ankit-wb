


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
                        <li>
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
                <h1>Gallery</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus rerum maxime enim odit illum in molestias beatae doloremque, ratione optio.
                </p>
            </div>
           
        </div>
    </header>
    <!-- End of Header -->

    <!-- gallery section -->
     <div id="gallery" class="py-4">
        <div class="container">
            <div class="gallery-row">
                <div class="gallery-item shadow">
                    <img src="images/1 (2).jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus">
                        </i>
                    </span>
                </div>

                <div class="gallery-item shadow">
                    <img src="images/test2.jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus">
                        </i>
                    </span>
                </div>
                <div class="gallery-item shadow">
                    <img src="images/features.jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus">
                        </i>
                    </span>
                </div>

                <div class="gallery-item shadow">
                    <img src="images/4.jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus">
                        </i>
                    </span>
                </div>
                <div class="gallery-item shadow">
                    <img src="images/5.jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus">
                        </i>
                    </span>
                </div>
                <div class="gallery-item shadow">
                    <img src="images/6.jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus">
                        </i>
                    </span>
                </div>
                <div class="gallery-item shadow">
                    <img src="images/1 (7).jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus">
                        </i>
                    </span>
                </div>
                <div class="gallery-item shadow">
                    <img src="images/1 (8).jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus">
                        </i>
                    </span>
                </div>
                <div class="gallery-item shadow">
                    <img src="images/1 (10).jpg" alt="gallery img">
                    <span class="zoom-icon">
                        <i class="fas fa-search-plus">
                        </i>
                    </span>
                </div>



            </div>
        </div>
     </div>


    <!-- end gallery section -->

    <!-- img model -->
    <div id="img-modal-box">
        <div id="img-modal">
            <!-- Close Button -->
            <button type="button" id="modal-close-btn" class="flex">
                <i class="fas fa-times"></i>
            </button>
    
            <!-- Previous Button -->
            <button type="button" id="prev-btn" class="flex">
                <i class="fas fa-chevron-left"></i>
            </button>
    
            <!-- Next Button -->
            <button type="button" id="next-btn" class="flex">
                <i class="fas fa-chevron-right"></i> <!-- Corrected to "right" for next -->
            </button>
    
            <!-- Image -->
            <img src="images/1 (2).jpg" alt="Modal Image">
        </div>
    </div>
    
   <!-- end of img modal -->

<!-- popular services -->
<section id="popular" class="py-4">
    <div class="title-wrap">
      <span class="sm-title">Know about Services</span>
      <h2 class="lg-title">Popular services</h2>
    </div>
  
    <div class="popular-row">
      <!-- Item 1 -->
      <div class="popular-item shadow">
        <img src="images/1 (10).jpg" alt="Featured">
        <div>
          <span>3D scanning and Details</span>
          <ul class="rating flex">
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star-half-alt"></i></li>
            <li>&nbsp;600 reviews</li>
          </ul>
          <p class="text">Cheap 3D scanning makes reverse engineering easier than ever.</p>
        </div>
      </div>
  
      <!-- Item 2 -->
      <div class="popular-item shadow">
        <img src="images/1 (10).jpg" alt="Featured">
        <div>
          <span>3D scanning and Details</span>
          <ul class="rating flex">
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star-half-alt"></i></li>
            <li>&nbsp;600 reviews</li>
          </ul>
          <p class="text">Cheap 3D scanning makes reverse engineering easier than ever.</p>
        </div>
      </div>
  
      <!-- Item 3 -->
      <div class="popular-item shadow">
        <img src="images/1 (10).jpg" alt="Featured">
        <div>
          <span>3D scanning and Details</span>
          <ul class="rating flex">
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star-half-alt"></i></li>
            <li>&nbsp;600 reviews</li>
          </ul>
          <p class="text">Cheap 3D scanning makes reverse engineering easier than ever.</p>
        </div>
      </div>
  
      <!-- Item 4 -->
      <div class="popular-item shadow">
        <img src="images/1 (10).jpg" alt="Featured">
        <div>
          <span>3D scanning and Details</span>
          <ul class="rating flex">
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star-half-alt"></i></li>
            <li>&nbsp;600 reviews</li>
          </ul>
          <p class="text">Cheap 3D scanning makes reverse engineering easier than ever.</p>
        </div>
      </div>
  
      <!-- Item 5 -->
      <div class="popular-item shadow">
        <img src="images/1 (10).jpg" alt="Featured">
        <div>
          <span>3D scanning and Details</span>
          <ul class="rating flex">
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star-half-alt"></i></li>
            <li>&nbsp;600 reviews</li>
          </ul>
          <p class="text">Cheap 3D scanning makes reverse engineering easier than ever.</p>
        </div>
      </div>
  
      <!-- Item 6 -->
      <div class="popular-item shadow">
        <img src="images/1 (10).jpg" alt="Featured">
        <div>
          <span>3D scanning and Details</span>
          <ul class="rating flex">
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star"></i></li>
            <li><i class="fas fa-star-half-alt"></i></li>
            <li>&nbsp;600 reviews</li>
          </ul>
          <p class="text">Cheap 3D scanning makes reverse engineering easier than ever.</p>
        </div>
      </div>
    </div>
  </section>
  

<!-- end of popular services -->


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
    <script src="script.js"></script>
    <script>
      
// Select all gallery items
const allGalleryItem = document.querySelectorAll('.gallery-item');

// Select necessary modal elements
const imgModalDiv = document.getElementById('img-modal-box');
const modalCloseBtn = document.getElementById('modal-close-btn');
const nextBtn = document.getElementById('next-btn');
const prevBtn = document.getElementById('prev-btn');
const modalImage = imgModalDiv.querySelector('#img-modal img'); // Modal image element

let imgIndex = 0; // Initialize image index

// Add event listeners to gallery items
allGalleryItem.forEach((galleryItem, index) => {
    galleryItem.addEventListener('click', () => {
        imgModalDiv.style.display = "block"; // Show the modal
        const imgSrc = galleryItem.querySelector('img').src; // Get the clicked image source
        modalImage.src = imgSrc; // Display the clicked image in the modal
        imgIndex = index; // Update the current image index
    });
});

// Function to show image based on index
function showImageContent(index) {
    const imgSrc = allGalleryItem[index].querySelector('img').src; // Get the image source by index
    modalImage.src = imgSrc; // Update the modal image source
}

// Next button functionality
nextBtn.addEventListener('click', () => {
    imgIndex = (imgIndex + 1) % allGalleryItem.length; // Move to the next image, loop back to the first
    showImageContent(imgIndex);
});

// Previous button functionality
prevBtn.addEventListener('click', () => {
    imgIndex = (imgIndex - 1 + allGalleryItem.length) % allGalleryItem.length; // Move to the previous image, loop to the last
    showImageContent(imgIndex);
});

// Close modal when close button is clicked
modalCloseBtn.addEventListener('click', () => {
    imgModalDiv.style.display = "none"; // Hide the modal
});



    </script>


</body>
</html>
