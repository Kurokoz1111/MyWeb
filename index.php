<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>

<body>
    <?php if (isset($_SESSION['show_welcome']) && $_SESSION['show_welcome']): ?>
        <div class="welcome-overlay" id="welcomeOverlay">
            <div class="welcome-box">
                <button class="close-btn">&times;</button>
                <h2>
                    Welcome back, <span id="username"><?= $_SESSION['username'] ?? 'User' ?></span>!
                    <span class="emoji">🚀</span>
                </h2>
                <p>Let's do amazing things today!</p>
                <div class="particles"></div>
            </div>
        </div>
        <audio id="welcomeSound" src="https://assets.mixkit.co/sfx/preview/mixkit-achievement-bell-600.mp3" preload="auto"></audio>
        <?php $_SESSION['show_welcome'] = false; // Set to false after showing 
        ?>
    <?php endif; ?>

    <?php require_once 'nav.php'; ?>


    <section class="hero">
        <h1>The Ultimate iPhone Experience</h1>
        <p>
            Discover the latest iPhone models with cutting-edge technology and
            premium design at unbeatable prices.
        </p>
        <a href="shop.php"><button class="cta-btn">Shop Now</button></a>
    </section>

    <a href="#" class="scrolltop"><i class="fa-solid fa-angle-up"></i></a>

    <!-- Slide End -->

    <!-- Home -->
    <div class="slideshow-3d-container" data-animate="fade-up">
        <div class="slideshow-3d">
            <div class="slide">
                <div class="productCatCard">
                    <img src="/Image/iphone.jpg" alt="Accessories" />
                    <div class="test">
                        <span>I-Phone</span>
                        <i class="fa-solid fa-angle-right hover"></i>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="productCatCard">
                    <img src="/Image/ipad2.jpg" alt="Accessories" />
                    <div class="test">
                        <span>I-Pad</span>
                        <i class="fa-solid fa-angle-right hover"></i>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="productCatCard">
                    <img src="/Image/mac.jpg" alt="Accessories" />
                    <div class="test">
                        <span>Mac</span>
                        <i class="fa-solid fa-angle-right hover"></i>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="productCatCard">
                    <img src="/Image/applewatch2.jpg" alt="Accessories" />
                    <div class="test">
                        <span>Apple Watch</span>
                        <i class="fa-solid fa-angle-right hover"></i>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="productCatCard">
                    <img src="/Image/airpod.jpg" alt="Accessories" />
                    <div class="test">
                        <span>AirPods</span>
                        <i class="fa-solid fa-angle-right hover"></i>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="productCatCard">
                    <img src="/Image/airtag.jpg" alt="Accessories" />
                    <div class="test">
                        <span>Accessories</span>
                        <i class="fa-solid fa-angle-right hover"></i>
                    </div>
                </div>
            </div>
            <button class="slideshow-button prev-button">❮</button>
            <button class="slideshow-button next-button">❯</button>
        </div>
    </div>

    <!-- About -->
    <div class="aboutMain">
        <div class="aboutPic" data-animate="fade-left">
            <img src="/Image/apple.jpg" alt="" />
        </div>
        <div class="aboutUs" data-animate="fade-right" data-animate-delay="0.3s">
            <h2>About Us</h2>
            <h1>
                Your Trusted Destination For<br /><span class="orange">Premium iPhone Solutions</span>
            </h1>

            <p>
                At iCare, we combine cutting-edge technology with exceptional service
                to revolutionize your iPhone experience. Our certified technicians
                bring Apple-approved expertise to every repair.
            </p>

            <p>
                Founded in ...., we've grown from a small repair kiosk to the city's
                most trusted iPhone service center, having restored over 10,000
                devices to perfect condition.
            </p>

            <div class="">
                <h3>Visit Our Service Center</h3>
                <p>
                    Experience the difference of genuine Apple parts and
                    manufacturer-trained specialists.
                </p>
                <a href="#"><button class="Btn">Explore Our Services</button></a>
            </div>
        </div>
    </div>

    <!-- Top Sell List -->
    <div class="container" data-animate="zoom-in">
        <div class="header"></div>
        <div class="scrollable-table-wrapper scrollable-table-wrapper-right">
            <table>
                <tr>
                    <th>Category</th>
                    <th>
                        3 Months <br />
                        (Price)
                    </th>
                    <th>
                        Year 1 <br />
                        (Price)
                    </th>
                    <th>
                        Year 2 <br />
                        (Price)
                    </th>
                </tr>
                <tr>
                    <td>Quick Replacement</td>
                    <td><i class="fa-solid fa-check"></i><span>free</span></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1 Year Official Warranty</td>
                    <td></td>
                    <td><i class="fa-solid fa-check"></i><span>free</span></td>
                </tr>
                <tr>
                    <td>One-Time Free Battery Replacement</td>
                    <td></td>
                    <td><i class="fa-solid fa-check"></i><span>free</span></td>
                    <td><i class="fa-solid fa-check"></i><span>free</span></td>
                </tr>
                <tr>
                    <td>One-Time For Accidental Damage - LCD</td>
                    <td></td>
                    <td><i class="fa-solid fa-check"></i><span>99,000 MMK</span></td>
                    <td><i class="fa-solid fa-check"></i><span>99,000 MMK</span></td>
                </tr>
                <tr>
                    <td>One-Time For Accidental Damage - Back Glass</td>
                    <td></td>
                    <td><i class="fa-solid fa-check"></i><span>99,000 MMK</span></td>
                    <td><i class="fa-solid fa-check"></i><span>99,000 MMK</span></td>
                </tr>
                <tr>
                    <td>Whole Unit Replacement</td>
                    <td></td>
                    <td><i class="fa-solid fa-check"></i><span>990,000 MMK</span></td>
                </tr>
                <tr>
                    <td>Free Rental Device</td>
                    <td></td>
                    <td><i class="fa-solid fa-check"></i><span>Free</span></td>
                    <td></td>

                </tr>
            </table>
        </div>
        <div class="scrollable-table-wrapper scrollable-table-wrapper-left">
            <table>
                <tr>
                    <th>Category</th>
                    <th>Quick Replacement</th>
                    <th>
                        Official <br />
                        Warranty 1 Year
                    </th>
                    <th>
                        One Time Free <br />
                        Battery Replacement
                    </th>
                    <th>LCD Replacement</th>
                    <th>
                        Back Glass <br />
                        Replacement
                    </th>
                    <th>
                        Whole Unit <br />
                        Replacement
                    </th>
                    <th>
                        Rental Device
                    </th>
                </tr>
                <tr>
                    <td>ဝယ်ယူပြီး (၃)လအတွင်း <br>
                        Factory Error မှန်ကန်ပါက</td>
                    <td><i class="fa-solid fa-check"></i><span>free</span></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Factory Error</td>
                    <td></td>
                    <td><i class="fa-solid fa-check"></i><span>free</span></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>၂နှစ်အတွင်း ဘတ်ထရီ <br>
                        ၈၀ ရာခိုင်နှုန်းအောက် <br>
                        ရောက်ပါက</td>
                    <td></td>
                    <td></td>
                    <td><i class="fa-solid fa-check"></i><span>free</span></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>LCD</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><i class="fa-solid fa-check"></i><span>99,000 MMK</span></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Back Glass</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><i class="fa-solid fa-check"></i><span>99,000 MMK</span></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Other Damages</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><i class="fa-solid fa-check"></i><span>990,000 MMK</span></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Xtra Device Assist</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><i class="fa-solid fa-check"></i><span>Free</span></td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Body End -->


    <!-- Featured Products -->
    <section class="featured">
        <h2 class="section-title" data-animate="fade-down">Featured iPhones</h2>
        <div class="products">
            <!-- Product 1 -->
            <div class="product-card" data-animate="fade-up" data-animate-delay="0.1s">
                <div class="product-image">
                    <span class="product-badge">New</span>
                    <img src="/Image/iphone.jpg" alt="iPhone 16 Pro" />
                </div>
                <div class="product-info">
                    <h3 class="product-title">iPhone 16 Pro</h3>
                    <p class="product-price">$999</p>
                    <p class="product-desc">
                        Titanium. So strong. So light. So Pro. A17 Pro chip. 48MP main
                        camera. Action button.
                    </p>
                    <button class="product-btn">Add to Cart</button>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card" data-animate="fade-up" data-animate-delay="0.2s">
                <div class="product-image">
                    <img src="/Image/iphone.jpg" alt="iPhone 15" />
                </div>
                <div class="product-info">
                    <h3 class="product-title">iPhone 16</h3>
                    <p class="product-price">$799</p>
                    <p class="product-desc">
                        Dynamic Island. 48MP camera. USB-C. A16 Bionic chip. All-day
                        battery life.
                    </p>
                    <button class="product-btn">Add to Cart</button>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card" data-animate="fade-up" data-animate-delay="0.3s">
                <div class="product-image">
                    <span class="product-badge">Best Seller</span>
                    <img src="/Image/iphone.jpg" alt="iPhone 16" />
                </div>
                <div class="product-info">
                    <h3 class="product-title">iPhone 16</h3>
                    <p class="product-price">$429</p>
                    <p class="product-desc">
                        Powerful A15 Bionic chip. 5G speed. All-day battery life. Classic
                        design.
                    </p>
                    <button class="product-btn">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="features-container">
            <h2 class="section-title" data-animate="fade-down">Why Choose iDeal?</h2>
            <div class="features-grid">
                <div class="feature-item" data-animate="fade-right" data-animate-delay="0.1s">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="feature-title">Authentic Products</h3>
                    <p class="feature-desc">
                        All our iPhones are 100% genuine with original Apple warranty.
                    </p>
                </div>

                <div class="feature-item" data-animate="fade-right" data-animate-delay="0.2s">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3 class="feature-title">Fast Delivery</h3>
                    <p class="feature-desc">
                        Get your iPhone delivered to your doorstep within 2 business days.
                    </p>
                </div>

                <div class="feature-item" data-animate="fade-right" data-animate-delay="0.3s">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="feature-title">24/7 Support</h3>
                    <p class="feature-desc">
                        Our customer service team is always ready to assist you.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter" data-animate="zoom-in">
        <div class="newsletter-container">
            <h2 class="section-title">Stay Updated</h2>
            <p>
                Subscribe to our newsletter to get the latest deals and product
                updates.
            </p>
            <form class="newsletter-form">
                <input
                    type="email"
                    class="newsletter-input"
                    placeholder="Your email address"
                    required />
                <button type="submit" class="newsletter-btn">Subscribe</button>
            </form>
        </div>
    </section>

    <?php
    require_once('footer.php');
    ?>

</body>
<script src="script.js"></script>

</html>