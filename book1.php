<?php
$insert = false;
if (isset($_POST['place'])) {
    // Set connection variables (*)
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection (*)
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success (*)
    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "connection successful";

    // Now you have Successfully connected to the database

    // Collect post variables (I have added just two input tags in the html so i will create just two $_POST variables, when we create a input tage in html for eg. <input type="text" id="gender" name="gender"> so in brackets of $_POST[add name of input eg. here it is:- gender] )
    // you can add as many as variables but just make sure you are adding the name attribute value into the bracets 
    $place = $_POST['place'];
    $how = $_POST['how'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];


    // this is the query which will insert record into your database so add relevant variables and same name of table and database as you have made into the myadminphp 

    $sql = "INSERT INTO `book1`.`book1` (`place`, `how`, `arrivals`, `leaving`) VALUES ('$place','$how','$arrivals','$leaving');";   //practise- database name , signup- table name you can other names to your database and table
    echo $sql;
    // Execute the query
    if ($con->query($sql) == true) {
        // echo "Successfully inserted";
        // Flag for successful insertion
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    //  // Close the database connection
    $con->close();
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The traveller</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>THE</span> traveller</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#book">book</a>
            <a href="#packages">packages</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>

    <!-- header section ends -->

    <!-- login form container  -->

    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>

        <form action="login1.php" method="POST">
            <h3>login</h3>
            <input type="email" class="box" placeholder="enter your email" name="email" required>
            <input type="password" class="box" placeholder="enter your password" name="password" required>
            <input type="submit" value="login now" class="btn">

        </form>

    </div>

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>adventure is worthwhile</h3>
            <p>dicover new places with us, adventure awaits</p>
            <a href="#gallery" class="btn">discover more</a>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
            <span class="vid-btn" data-src="images/vid-2.mp4"></span>
            <span class="vid-btn" data-src="images/vid-3.mp4"></span>
            <span class="vid-btn" data-src="images/vid-4.mp4"></span>
            <span class="vid-btn" data-src="images/vid-5.mp4"></span>
        </div>

        <div class="video-container">
            <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <!-- home section ends -->

    <!-- book section starts  -->

    <section class="book" id="book">

        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/book-img.svg" alt="">
            </div>

            <form action="book1.php" method="POST">
                <div class="inputBox">
                    <h3>where to</h3>
                    <input type="text" placeholder="place name" name="place">
                </div>
                <div class="inputBox">
                    <h3>how many</h3>
                    <input type="number" placeholder="number of guests" name="how">
                </div>
                <div class="inputBox">
                    <h3>arrivals</h3>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <h3>leaving</h3>
                    <input type="date" name="leaving">
                </div>
                <input type="submit" class="btn" value="book now">
            </form>

        </div>

    </section>

    <!-- book section ends -->

    <!-- packages section starts  -->

    <section class="packages" id="packages">

        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/p-1.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> mumbai </h3>
                    <p>Visit to Elephanta Caves | Full day excursion to Nhava Sheva Port | Enjoy local sights of Mumbai.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $192.22 <span>$250.00</span> </div>
                    <a href="https://holidayz.makemytrip.com/holidays/india/package?id=50220&listingClassId=12&pkgType=FIT&fromCity=New%20Delhi&depDateMilliSec=1629484200000&defaultPageForOnlineBookableFIT=true" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-2.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> hawaii </h3>
                    <p>The perfect example of an island paradise, Hawaii !!.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $1528.64 <span>$1700.00</span> </div>
                    <a href="https://www.yatra.com/international-tour-packages/best-of-hawaii" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-3.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> sydney </h3>
                    <p>Sydney, the capital of New South Wales in Australia, is one of the oldest and largest cities.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $992.28 <span>$1200.00</span> </div>
                    <a href="https://www.yatra.com/international-tour-packages/holidays-in-sydney" class="btn">book
                        now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-4.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> paris </h3>
                    <p>Paris, the stylish French capital, conjures up images of monument-lined boulevards, waterside
                        boutiques and bistros, museums, </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $938.65 <span>$1200.00</span> </div>
                    <a href="https://www.yatra.com/international-tour-packages/holidays-in-paris" class="btn">book
                        now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-5.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> tokyo </h3>
                    <p>There is more than a passing reference to the cherry blossom or the blooming Sakura tree in the
                        Japanese flower viewing tradition.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $2681.85 <span>$2800.00</span> </div>
                    <a href="https://holidayz.makemytrip.com/holidays/india/package?id=47604&listingClassId=10&pkgType=FIT&fromCity=New%20Delhi&depDateMilliSec=1635877800000&defaultPageForOnlineBookableFIT=true&intid=Seo_DOM_Holiday_pkg_name_click" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/p-6.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> eypt </h3>
                    <p>Egypt has one of the longest histories of any country, tracing its heritage.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price"> $1783.43<span>$2000.00</span> </div>
                    <a href="https://holidayz.makemytrip.com/holidays/india/package?id=48730&listingClassId=2&pkgType=FIT&fromCity=New%20Delhi&depDateMilliSec=1632249000000&defaultPageForOnlineBookableFIT=true&intid=Seo_DOM_Holiday_pkg_name_click" class="btn">book now</a>
                </div>
            </div>

        </div>

    </section>

    <!-- packages section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>affordable hotels and hotels linked with hospitals for quarantine and isolation needs</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p> best quality food with divine taste!! </p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p>Get vaccinated and be ready for adventures</p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
                <p>Travel around the world with us and enjoy the new experiance</p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p>Affordable flights with fastest services</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>Enjoy adventures in different parts of the world.</p>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/g-1.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Caves, mountains, beaches and much more</p>
                    <a href="https://www.tourmyindia.com/blog/top-places-visit-mumbai/" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Explore, Rejuvenate, Reconnect in The Hawaiian Islands</p>
                    <a href="https://www.gohawaii.com/" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Sydney Opera House, Sydney Harbour Bridge, The Rocks, Circular Quay, Royal Botanic Gardens.</p>
                    <a href="https://unsplash.com/s/photos/sydney" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Enjoy the culture with love and care in india</p>
                    <a href="https://unsplash.com/s/photos/india-tourism" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>The Leaning Tower of Pisa</p>
                    <a href="https://unsplash.com/s/photos/leaning-tower-of-pisa%2C-pisa%2C-italy" class="btn">see
                        more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>If you're not barefoot, then you're overdressed</p>
                    <a href="https://unsplash.com/s/photos/goa-beach" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-7.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p> hot air balloon rides </p>
                    <a href="https://www.gettyimages.in/photos/hot-air-balloon-ride" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Get to enjoy the camping in your favrouite place.</p>
                    <a href="https://unsplash.com/s/photos/camping" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-9.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>The Great Pyramid of Giza is the oldest and largest of the pyramids</p>
                    <a href="https://unsplash.com/s/photos/pyramid" class="btn">see more</a>
                </div>
            </div>

        </div>

    </section>

    <!-- gallery section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>
        </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic1.png" alt="">
                        <h3>Harshit Gupta</h3>
                        <p>The Traveller continues to provide excellent adventures. It was our 3rd time and we feel the
                            adventure same with the same level of excitement. The team is wonderful that helps with
                            proper and excellent guides for the trip. I think every travel lover must go with them to
                            experience joy and adventure. The beauty was amazing! I can’t wait for my next adventure
                            with The Traveller and team.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic2.png" alt="">
                        <h3>Shreya Lakhanpal</h3>
                        <p>This trip was brilliant. Admittedly the fantastic weather we encountered made it even more
                            beautiful. We are surely looking for many more trips with The Traveller. I must say the
                            information and guides of yours are amazing and as per the requirement. Thank you for the
                            lovely travel experience. Looking for many more…..</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic3.png" alt="">
                        <h3>Rahul Kumar</h3>
                        <p> We through the trip was incredibly well organized and perfectly seamless for us. It was
                            wonderful to travel with team and have our expectations exceeded! Loved every minute from
                            starting to finish. Someone who loves to explore the world must go with The Traveller and
                            have the best experience one can ever have. Thank you for the amazing trip…..</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic4.png" alt="">
                        <h3>Manisha Singh</h3>
                        <p>This was an excellent and well organized trip to destination. We had the most fabulous time
                            With The Traveller. They made our trip one to remember for lifetime. Whole trip run
                            smoothly. Couldn’t fault it. One must try The Traveller for lifetime experience….</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/contact-img.svg" alt="">
            </div>

            <form action="contact.php" method="POST">
                <div class="inputBox">
                    <input type="text" placeholder="name" name="name">
                    <input type="email" placeholder="email" name="email">
                </div>
                <div class="inputBox">
                    <input type="text" placeholder="number" name="number">
                    <input type="text" placeholder="subject" name="subject">
                </div>
                <textarea placeholder="message" name="massage" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="send message">
            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- brand section  -->
    <section class="brand-container">

        <div class="swiper-container brand-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
            </div>
        </div>

    </section>

    <!-- footer section  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>In this quickly evolving digital world, The Traveller Website is a travel website for travelers,
                    explores and adventures. Our website inspires travel, introducing new people and places and offering
                    fresh insight on top destinations. If travel is you passion, The Traveller is for you to explore.

                </p>
            </div>
            <div class="box">
                <h3>branch locations</h3>
                <a href="#">india</a>
                <a href="#">USA</a>
                <a href="#">japan</a>
                <a href="#">france</a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">book</a>
                <a href="#">packages</a>
                <a href="#">services</a>
                <a href="#">gallery</a>
                <a href="#">review</a>
                <a href="#">contact</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#">twitter</a>
                <a href="#">linkedin</a>
            </div>

        </div>

        <h1 class="credit"> created by <span> Group Fire </span> | all rights reserved! </h1>

</section>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>

</body>

</html>