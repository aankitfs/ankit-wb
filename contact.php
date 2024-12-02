<?php
// Database connection settings
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "cadworld_db";

// Establish connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$successMessage = "";  // Variable to store success or error message

// Process form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Validate inputs
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Insert into the database
        $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";
        if ($conn->query($sql) === TRUE) {
            $successMessage = "Message sent successfully!"; // Success message
        } else {
            $successMessage = "Error: " . $sql . "<br>" . $conn->error; // Error message
        }
    } else {
        $successMessage = "All fields are required!"; // Error message
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - CADWorld</title>
    <meta name="description" content="Get in touch with CADWorld to discuss your 3D design needs.">
    
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
                  <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                  <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
                  <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                  <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                  <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
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
                <h1>Contact</h1>
                <p>Why choose us?</p>
                <p> We combine innovation with precision to deliver results tailored to your needs. From realistic 3D renderings to efficient prototypes, CADWorld ensures your projects stand out and succeed.</p>
            </div>
        </div>
    </header>
    <!-- End of Header -->

    <!-- Contact Section -->
    <section id="contact" class="py-4">
        <div class="container">
          <div class="title-wrap">
            <span class="sm-title">Get in touch with us</span>
            <h2 class="lg-title">Contact Us</h2>
          </div>
          
          <div class="contact-row">
            <!-- Left Section: Contact Form -->
            <div class="contact-left">
              <div class="contact-form">
                <form action="contact.php" method="POST">
                  <input type="text" name="name" class="form-control" placeholder="Your name" required>
                  <input type="email" name="email" class="form-control" placeholder="Your email" required>
                  <textarea rows="4" name="message" class="form-control" placeholder="Your message" style="resize: none;" required></textarea>
                  <input type="submit" class="btn" value="Send Message">
                </form>

                <?php
                    // Display success or error message
                    if (!empty($successMessage)) {
                        echo "<p style='color: yellow; font-weight: bold;'>$successMessage</p>";
                    }
                ?>
              </div>
            </div>
            
            <!-- Right Section: Contact Details -->
            <div class="contact-right my-2">
              <div class="contact-item">
                <span class="contact-icon flex">
                  <i class="fa fa-phone-alt"></i>
                </span>
                <div>
                  <span>Phone</span>
                  <p class="text">123-456-7890</p>
                </div>
              </div>
              <div class="contact-item">
                <span class="contact-icon flex">
                  <i class="fa fa-map-marked-alt"></i>
                </span>
                <div>
                  <span>Address</span>
                  <p class="text">Vadodara, Gujarat</p>
                </div>
              </div>
              <div class="contact-item">
                <span class="contact-icon flex">
                  <i class="fa fa-envelope"></i>
                </span>
                <div>
                  <span>Email</span>
                  <p class="text">cadworld@mail.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- End of Contact Section -->

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
