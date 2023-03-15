<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="travel1.css">
    <link rel="stylesheet" href="travel1res.css">
    <title>Document</title>
</head>
<body>
    <!-- Nav Section -->

    <section class="header">
        <a href="home.php" class="logo">Travel.</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- Nav Section Ends -->

    <!-- Home Service Section Starts -->

    <div class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url('images/home-slide-1.webp') no-repeat">
                    <div class="content">
                        <span>Explore,Discover,Travel</span>
                        <h3>Travel Around The World</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url('images/home-slide-2.jfif') no-repeat">
                    <div class="content">
                        <span>Explore,Discover,Travel</span>
                        <h3>Discover The New Places</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url('images/home-slide-3.jpg') no-repeat">
                    <div class="content">
                        <span>Explore,Discover,Travel</span>
                        <h3>Make Your Tour Worth While</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>        

    <!-- Home Service Section Ends -->

    <!-- Service Section Start -->

    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        <div class="box-container">
            <div class="box">
                <i class="fa-solid fa-mountain-sun fa-7x"></i>
                <h3>Adventure</h3>
            </div>
            <div class="box">
                <i class="fa-solid fa-map-location-dot fa-7x"></i>
                <h3>Tour Guide</h3>
            </div>
            <div class="box">
                <i class="fa-solid fa-person-hiking fa-7x"></i>
                <h3>Treking</h3>
            </div>
            <div class="box">
                <i class="fa-solid fa-fire-flame-curved fa-7x"></i>
                <h3>Camp-Fire</h3>
            </div>
            <div class="box">
                <i class="fa-solid fa-signs-post fa-7x"></i>
                <h3>Off-Road</h3>
            </div>
            <div class="box">
                <i class="fa-solid fa-tents fa-7x"></i>
                <h3>Camping</h3>
            </div>
        </div>
    </section>

    <!-- Service Section Ends -->

    <!-- Home About Section Starts -->

    <section class="home-about">
         <div class="image">
            <img src="images/home-about-1.jpg" alt="About Us">
        </div>
        <div class="content">
            <h3>About Us</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Soluta accusantium fugit quam? Consectetur modi doloremque facilis illum, illo sequi,
                adipisci cum ea omnis officia dolorum cupiditate odit qui pariatur soluta.
            </p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>

    <!-- Home Service Section Ends -->

    <!-- Home Packages Section Starts -->

    <section class="home-packages">
        <h1 class="heading-title">Our Packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/home-book-1.jpg" alt="Book">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/home-book-2.jpg" alt="Book">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/home-book-3.jpg" alt="Book">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="package.php" class="btn">Load More</a></div>
    </section>

    <!-- Home Packages Section Ends -->

    <!-- Home Offer Section -->

    <section class="home-offer">
        <div class="content">
            <h3>Upto 50% Off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </section>

    <!-- Home Offer Section -->

    <!-- Footer Section -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms Of Use</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i> +111-333-6543</a>
                <a href="#"><i class="fas fa-envelope"></i> sultan.dev@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Chicago-IL</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            </div>
        </div>
        <div class="credit">Created By <span>Sultan Ansari</span> | All Right Reserved! </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="travel.js"></script>
</body>
</html>