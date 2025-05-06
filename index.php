<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books4U</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="styles.css">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">
</head>
<body>

<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="#" class="logo"> <i class="fas fa-book"></i> Books4U </a>

        <form action="search.php" method="GET" class="search-form">
    <input type="search" name="query" id="search-box" placeholder="Search here...">
    <label for="search-box" class="fas fa-search"></label>
    <button type="submit">Search</button>
</form>


        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="cart.php" class="fas fa-shopping-cart"></a>
            <div id="login-btn" class="fas fa-user"></div>

        
        </div>

    </div>

    <div class="header-2">
    <nav class="navbar" id="navbar">
        <a href="./index.php" class="nav-link">Home</a>
        <a href="#trending-books" class="nav-link">Trending Books</a>
        <a href="#arrivals" class="nav-link">Category</a>
        <a href="#reviews" class="nav-link">Reviews</a>
        <a href="#blogs" class="nav-link">Feedback</a>
        <a href="#footer" class="nav-link">Contact Us</a>
        <a href="subscribe.php" class="nav-link">On Rent</a>
    </nav>
</div>


</header>

<!-- header section ends -->

<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#Trending Books" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#feedback" class="fas fa-feedback"></a>
</nav>

<!-- newsletter section starts -->

<section class="newsletter">

    <form action="">
        <h3>Login In</h3>
        
        <a href="login1.php" class="btn">login</a>

<!----<input type="submit" value="Login" class="btn">--->
    </form>

</section>

<!-- newsletter section ends -->

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3>sign in</h3>
        <span>username</span>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <span>password</span>
        <input type="password" name="" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="#">create one</a></p>
    </form>

</div>

<!-- Trending Books Section Starts -->
<section class="trending-books" id="trending-books">

    <h1 class="heading"> <span>Trending Books</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <!-- Book 1 -->
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <a href="./product.html"><img src="Images/do it today.jpg" alt=""></a>
                </div>
                <div class="content">
                    <h3>Do It Today</h3>
                    <div class="price"><strong>₹140</strong> <span class="strike">₹200</span></div>
                </div>
            </div>

            <!-- Book 2 -->
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <a href="./product.html"><img src="Images/power subconscious mind.png" alt="Power of Your Subconscious Mind"></a>
                </div>
                <div class="content">
                    <h3>Power of Your Subconscious Mind</h3>
                    <div class="price"><strong>₹129</strong> <span class="strike">₹210</span></div>
                </div>
            </div>

            <!-- Book 3 -->
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <a href="./product.html"><img src="Images/good girl guide to murder.jpg" alt="A Good Girl's Guide To Murder"></a>
                </div>
                <div class="content">
                    <h3>A Good Girl's Guide To Murder</h3>
                    <div class="price"><strong>₹317</strong> <span class="strike">₹350</span></div>
                </div>
            </div>

            <!-- Book 4 -->
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="Images/Rich dad.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Rich Dad Poor Dad</h3>
                    <div class="price"><strong>₹199</strong> <span class="strike">₹250</span></div>
                </div>
            </div>

            <!-- Book 5 -->
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="Images/samsara.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Samsara</h3>
                    <div class="price"><strong>₹146</strong> <span class="strike">₹200</span></div>
                </div>
            </div>

            <!-- Book 6 -->
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="Images/Dark verse series.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Dark Verse Series</h3>
                    <div class="price"><strong>₹855</strong> <span class="strike">₹1000</span></div>
                </div>
            </div>

            <!-- Book 7 -->
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="Images/It Ends With Us.jpg" alt="">
                </div>
                <div class="content">
                    <h3>It Ends With Us</h3>
                    <div class="price"><strong>₹220</strong> <span class="strike">₹300</span></div>
                </div>
            </div>

            <!-- Book 8 -->
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="Images/too good to be true.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Too Good To Be True</h3>
                    <div class="price"><strong>₹270</strong> <span class="strike">₹350</span></div>
                </div>
            </div>

            <!-- Book 9 -->
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="Images/grandma's bag of stories.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Grandma's Bag Of Stories</h3>
                    <div class="price"><strong>₹420</strong> <span class="strike">₹500</span></div>
                </div>
            </div>

            <!-- Book 10 -->
            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="Images/The advenchure of Sherlock.jpg" alt="">
                </div>
                <div class="content">
                    <h3>The Adventure Of Sherlock Holmes</h3>
                    <div class="price"><strong>₹189</strong> <span class="strike">₹250</span></div>
                </div>
            </div>

        </div>

        <!-- Swiper Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>
<!-- Trending Books Section Ends -->



<!----category section start---->
<section class="arrivals" id="arrivals">

    <h1 class="heading"><span>Category</span></h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <!-- Epic Books -->
            <div class="swiper-slide box">
                <div class="image">
                    <img src="category images/epic1.jpg" alt="Epic Books">
                </div>
                <div class="content">
                    <h3>Epic Books</h3>
                    <a href="epic.php" class="btn">View More</a>
                </div>
            </div>

            <!-- Story Books -->
            <div class="swiper-slide box">
                <div class="image">
                    <img src="category images/story book.jpg" alt="Story Books">
                </div>
                <div class="content">
                    <h3>Story Books</h3>
                    <a href="story.php" class="btn">View More</a>
                </div>
            </div>

            <!-- Thriller/Mystery Books -->
            <div class="swiper-slide box">
                <div class="image">
                    <img src="category images/mystery.jpg" alt="Thriller/Mystery Books">
                </div>
                <div class="content">
                    <h3>Thriller/Mystery Books</h3>
                    <a href="mystery.php" class="btn">View More</a>
                </div>
            </div>

            <!-- Fiction Books -->
            <div class="swiper-slide box">
                <div class="image">
                    <img src="category images/fictional.jpg" alt="Fiction Books">
                </div>
                <div class="content">
                    <h3>Fiction</h3>
                    <a href="fiction.php" class="btn">View More</a>
                </div>
            </div>

        </div>

    </div>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <!-- Biography Books -->
            <div class="swiper-slide box">
                <div class="image">
                    <img src="category images/biography-3.jpg" alt="Biography Books">
                </div>
                <div class="content">
                    <h3>Biography Books</h3>
                    <a href="biography.php" class="btn">View More</a>
                </div>
            </div>

            <!-- Detective Fiction -->
            <div class="swiper-slide box">
                <div class="image">
                    <img src="category images/detective.jpg" alt="Detective Fiction">
                </div>
                <div class="content">
                    <h3>Detective Fiction</h3>
                    <a href="detective.php" class="btn">View More</a>
                </div>
            </div>

            <!-- Science Fiction -->
            <div class="swiper-slide box">
                <div class="image">
                    <img src="category images/science fiction.jpg" alt="Science Fiction">
                </div>
                <div class="content">
                    <h3>Science Fiction</h3>
                    <a href="science-fiction.php" class="btn">View More</a>
                </div>
            </div>

            <!-- Fairy Tale -->
            <div class="swiper-slide box">
                <div class="image">
                    <img src="category images/fairy tail.avif" alt="Fairy Tale">
                </div>
                <div class="content">
                    <h3>Fairy Tale</h3>
                    <a href="fairy-tale.php" class="btn">View More</a>
                </div>
            </div>

        </div>
        
    </div>

</section>
<!-----category section end------->


<!-- home section starts  -->



<!-- home section ense  -->




<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <div class="content">
            <h3>free shipping</h3>
            <p>order over $100</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>secure payment</h3>
            <p>100% secure payment</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>easy returns</h3>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>24/7 support</h3>
            <p>call us anytime</p>
        </div>
    </div>

</section>

<!-- icons section ends -->




<!-- deal section starts  -->

<section class="deal">

    <div class="content">
        <h3>deal of the day</h3>
        <h1>upto 50% off</h1>
        <p>Checkout before this deal expires at midnight.</p>
    
    </div>

    <div class="image">
        <img src="https://raw.githubusercontent.com/KordePriyanka/Books4MU-Book-Store-Website-/main/image/deal-img.jpg" alt="">
    </div>

</section>

<!-- deal section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading"> <span>client's reviews</span> </h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="https://raw.githubusercontent.com/KordePriyanka/Books4MU-Book-Store-Website-/main/image/pic-1.png" alt="">
                <h3>John </h3>
                <p>First of all it customer service is excellent. We get all author book for Mumbai University. People should try here affordable.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="https://raw.githubusercontent.com/KordePriyanka/Books4MU-Book-Store-Website-/main/image/pic-2.png" alt="">
                <h3>marry </h3>
                <p>Best book store almost all books are available for prepartion of exam related or other books are available on reaonable price also.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="https://raw.githubusercontent.com/KordePriyanka/Books4MU-Book-Store-Website-/main/image/pic-3.png" alt="">
                <h3>Raghu </h3>
                <p>Customer Service is good. Greetings to customer and making the required Books available to Customers is very good.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="https://raw.githubusercontent.com/KordePriyanka/Books4MU-Book-Store-Website-/main/image/pic-4.png" alt="">
                <h3>Sadiya </h3>
                <p>This book centre have large amount of a books. The engineering study material all semester books are available.then the peacefull and nice book centre.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="https://raw.githubusercontent.com/KordePriyanka/Books4MU-Book-Store-Website-/main/image/pic-5.png" alt="">
                <h3>Abhinav </h3>
                <p>I migrated to the online platform on Just books because I was finding it difficult to go to their libraries before closing time.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="https://raw.githubusercontent.com/KordePriyanka/Books4MU-Book-Store-Website-/main/image/pic-6.png" alt="">
                <h3>Mayra </h3>
                <p>I love the product because it is very easy to find. The book are in really organized manner you can easily find the book you want.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- reviews section ends -->
<section class="blogs" id="blogs">
    

    <section class="newsletter">
        <form action="feedback.php" method="POST">
            <h3>Give your feedback here...</h3>
            <input type="text" id="feedback-book" name="book" column="4" placeholder="Enter your feedback" required>
            <br>
            <input type="submit" value="Submit Feedback" class="btn">        
    </section>
</section>


<!-- footer section starts  -->

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>our locations</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
            
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="./index.html"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Category </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="./feedback.html"> <i class="fas fa-arrow-right"></i> feedback </a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 7620201450 </a>
            <a href="#"> <i class="fas fa-phone"></i> 8999030243 </a>
            <a href="#"> <i class="fas fa-envelope"></i> neharajbharr2004@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> madhurishinde08@gmail.com </a>
            <img src="https://raw.githubusercontent.com/KordePriyanka/Books4MU-Book-Store-Website-/main/image/worldmap.png" class="map" alt="">
        </div>

    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/madhurishinde" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/neha_rajbhar1008/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/in/madhuri-shinde-6a80b82b7/" class="fab fa-linkedin"></a>
    </div>
    <div class="credit"> created by <span>Neha Rajbhar & Madhuri shinde</span>copyright ©2025 all rights reserved! </div>

</section>

<!-- footer section ends -->

<!-- loader  -->

<div class="loader-container">
    <img src="https://raw.githubusercontent.com/KordePriyanka/Books4MU-Book-Store-Website-/main/image/loader-img.gif" alt="">
</div>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>