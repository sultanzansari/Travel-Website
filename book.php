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

    <div class="heading" style="background:url('images/background2.jpg') no-repeat;background-size:cover">
        <h1>Book Now</h1>
    </div>

    <!-- Booking Section Start -->

    <section class="booking">
        <h1 class="heading-title">Book Your Trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" placeholder="Enter Your Name" name="name">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="Enter Your Email" name="email">
                </div>
                <div class="inputBox">
                    <span>Number :</span>
                    <input type="number" placeholder="Enter Your Number" name="phone">
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" placeholder="Enter Your Address" name="address">
                </div>
                <div class="inputBox">
                    <span>Where To :</span>
                    <input type="text" placeholder="Place You Want To Visit" name="location">
                </div>
                <div class="inputBox">
                    <span>How Many :</span>
                    <input type="number" placeholder="Number Of Guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>Arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>Leaving :</span>
                    <input type="date" name="leaving">
                </div>
            </div>
            <input type="submit" value="Submit" class="btn" name="send">
        </form>
    </section>

    <!-- Booking Section End -->

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