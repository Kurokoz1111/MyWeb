<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }

        body {
            /* height: 200vh; */
        }

        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --dark: #1e293b;
            --darker: #0f172a;
            --light: #f8fafc;
            --gray: #94a3b8;
            --glass: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
            --shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .cool-nav {
            position: sticky;
            top: 0;
            width: 100%;
            /* backdrop-filter: blur(20px); */
            background-color: var(--darker);
            z-index: 1000;
            box-shadow: var(--shadow);
        }

        .cool-nav.navscroll {
            /* backdrop-filter: blur(20px); */
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 70px;
            position: relative;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--light);
            letter-spacing: 0.2em;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            transition: var(--transition);
        }

        .logo:hover {
            background: linear-gradient(90deg, #8b5cf6, #3b82f6);
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .nav-link {
            position: relative;
            color: var(--light);
            font-weight: 500;
            text-decoration: none;
            padding: 0.5rem 0;
            transition: var(--transition);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: var(--transition);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: white;
        }

        /* Dropdown Styles */
        .nav-dropdown {
            position: relative;
        }

        .dropdown-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background: transparent;
            border: none;
            color: var(--light);
            font-weight: 500;
            cursor: pointer;
            padding: 0.5rem 0;
            transition: var(--transition);
        }

        .dropdown-arrow {
            transition: var(--transition);
            font-size: 0.8rem;
        }

        .dropdown-content {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            width: 220px;
            background: var(--darker);
            border-radius: 0.5rem;
            padding: 0.5rem 0;
            box-shadow: var(--shadow);
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            z-index: 100;
            border: 1px solid var(--glass-border);
        }

        .nav-dropdown:hover .dropdown-content {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(5px);
        }

        .nav-dropdown:hover .dropdown-arrow {
            transform: rotate(180deg);
        }

        .dropdown-item {
            position: relative;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            color: var(--gray);
            text-decoration: none;
            transition: var(--transition);
            overflow: hidden;
        }

        .dropdown-item:hover {
            color: white;
            background: rgba(255, 255, 255, 0.05);
        }

        .dropdown-item i {
            width: 20px;
            text-align: center;
        }

        .hover-effect {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: var(--transition);
        }

        .dropdown-item:hover .hover-effect {
            left: 100%;
        }

        /* User Actions */
        .nav-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .action-btn {
            position: relative;
            background: transparent;
            border: none;
            color: var(--light);
            font-size: 1.1rem;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 50%;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
        }

        .action-btn:hover {
            background: var(--glass);
        }

        .cart-count {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--primary);
            color: white;
            font-size: 0.7rem;
            font-weight: 700;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* User Profile */
        .user-profile {
            position: relative;
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            cursor: pointer;
            transition: var(--transition);
        }

        .user-avatar:hover {
            background: var(--primary-dark);
            transform: scale(1.05);
        }

        .user-menu {
            position: absolute;
            right: 0;
            top: 120%;
            width: 240px;
            background: var(--darker);
            border-radius: 0.5rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--glass-border);
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            transform: translateY(10px);
            z-index: 100;
            overflow: hidden;
        }

        .user-profile:hover .user-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .user-info {
            padding: 1rem;
            border-bottom: 1px solid var(--glass-border);
        }

        .welcome {
            font-size: 0.9rem;
            color: var(--gray);
        }

        .user-menu-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            color: var(--gray);
            text-decoration: none;
            transition: var(--transition);
        }

        .user-menu-item:hover {
            background: rgba(255, 255, 255, 0.05);
            color: white;
        }

        .user-menu-item button {
            background: none;
            border: none;
            color: inherit;
            font: inherit;
            cursor: pointer;
            width: 100%;
            text-align: left;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .login-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--light);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }

        .login-btn:hover {
            color: var(--primary);
        }

        /* Search Container */
        .search-container {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: var(--darker);
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-100%);
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            z-index: 99;
        }

        .search-container.active {
            transform: translateY(0);
            opacity: 1;
            visibility: visible;
        }

        .search-input {
            flex: 1;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid var(--glass-border);
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            color: white;
            font-size: 1rem;
            outline: none;
            transition: var(--transition);
        }

        .search-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.3);
        }

        .search-close {
            background: transparent;
            border: none;
            color: var(--gray);
            font-size: 1.2rem;
            margin-left: 1rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .search-close:hover {
            color: white;
        }

        /* Mobile Menu */
        .mobile-menu-toggle {
            display: none;
        }

        .hamburger {
            width: 30px;
            height: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            cursor: pointer;
        }

        .hamburger span {
            display: block;
            width: 100%;
            height: 3px;
            background: white;
            border-radius: 3px;
            transition: var(--transition);
        }

        /* Mobile Profile Styles */
        .mobile-profile {
            display: none;
            margin-left: auto;
            margin-right: 1rem;
        }

        .mobile-profile .login-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            background: var(--primary);
            border-radius: 0.5rem;
            transition: var(--transition);
        }

        .mobile-profile .login-btn:hover {
            background: var(--primary-dark);
        }

        .mobile-profile .user-avatar {
            width: 40px;
            height: 40px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            cursor: pointer;
        }

        .mobile-user-menu {
            position: fixed;
            top: 70px;
            right: 1rem;
            width: calc(100% - 2rem);
            max-width: 300px;
            background: var(--darker);
            border-radius: 0.5rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--glass-border);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-20px);
            transition: var(--transition);
            z-index: 1001;
            overflow: hidden;
        }

        .mobile-user-menu.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* Responsive Styles */
        @media (max-width: 1024px) {
            .nav-links {
                gap: 1rem;
            }
        }

        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 1001;
            }

            .mobile-profile {
                display: flex;

                align-items: center;
            }

            .desktop-profile {
                display: none;
            }

            .nav-menu {
                position: fixed;
                top: 0;
                right: -100%;
                width: 100%;
                max-width: 350px;
                min-height: 100vh;
                background: var(--darker);
                flex-direction: column;
                align-items: flex-start;
                padding: 7rem 2rem 2rem;
                transition: var(--transition);
                z-index: 1000;
                border-left: 1px solid var(--glass-border);
            }

            .nav-menu.active {
                right: 0;
            }

            .nav-links {
                flex-direction: column;
                align-items: flex-start;
                width: 100%;
                gap: 0;
            }

            .nav-link {
                width: 100%;
                padding: 1rem 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .nav-dropdown {
                width: 100%;
            }

            .dropdown-btn {
                width: 100%;
                justify-content: space-between;
                padding: 1rem 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .dropdown-content {
                position: static;
                width: 100%;
                transform: none;
                opacity: 1;
                visibility: visible;
                box-shadow: none;
                border: none;
                background: transparent;
                padding: 0;
                margin: 0.5rem 0;
                display: none;
            }

            .dropdown-content.active {
                display: inline;
            }

            .dropdown-item {
                padding-left: 2rem;
            }

            .nav-actions {
                margin-top: 2rem;
                width: 100%;
                justify-content: space-between;
            }

            .hamburger.active span:nth-child(1) {
                transform: translateY(8px) rotate(45deg);
            }

            .hamburger.active span:nth-child(2) {
                opacity: 0;
            }

            .hamburger.active span:nth-child(3) {
                transform: translateY(-8px) rotate(-45deg);
            }
        }
    </style>
</head>

<body>
    <nav class="cool-nav">
        <div class="nav-container">
            <a href="index.php" class="nav-brand">
                <h1 class="logo">L O G O</h1>
            </a>

            <!-- Mobile Profile (shown only on mobile) -->
            <div class="mobile-profile">
                <?php if (isset($_SESSION['email']) && !empty($_SESSION['email'])): ?>
                    <div class="user-avatar">
                        <?= strtoupper($_SESSION['email'][0]) ?>
                    </div>
                <?php else: ?>
                    <a href="Login.php" class="login-btn">
                        <i class="fas fa-user-circle"></i>
                        <span>Login</span>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Mobile Menu Button -->
            <div class="mobile-menu-toggle">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <!-- Main Navigation -->
            <div class="nav-menu">
                <div class="nav-links">
                    <a href="index.php" class="nav-link">Home</a>

                    <!-- Shop Dropdown -->
                    <div class="nav-dropdown">
                        <button class="dropdown-btn">
                            <span>Shop</span>
                        </button>
                        <div class="dropdown-content">
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-mobile-alt"></i>
                                <span>iPhone</span>
                                <div class="hover-effect"></div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-tablet-alt"></i>
                                <span>iPad</span>
                                <div class="hover-effect"></div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-laptop"></i>
                                <span>Mac</span>
                                <div class="hover-effect"></div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-headphones"></i>
                                <span>Airpods</span>
                                <div class="hover-effect"></div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-clock"></i>
                                <span>Apple Watch</span>
                                <div class="hover-effect"></div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-keyboard"></i>
                                <span>Accessories</span>
                                <div class="hover-effect"></div>
                            </a>
                        </div>
                    </div>

                    <!-- Services Dropdown -->
                    <div class="nav-dropdown">
                        <button class="dropdown-btn">
                            <span>Services</span>
                        </button>
                        <div class="dropdown-content">
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-search-dollar"></i>
                                <!-- <span>SEO</span> -->
                                <div class="hover-effect"></div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-paint-brush"></i>
                                <!-- <span>Graphic Design</span> -->
                                <div class="hover-effect"></div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-bullhorn"></i>
                                <!-- <span>Marketing</span> -->
                                <div class="hover-effect"></div>
                            </a>
                        </div>
                    </div>

                    <a href="#" class="nav-link">About Us</a>
                    <a href="#" class="nav-link">Contact Us</a>

                </div>

                <!-- User Actions -->
                <div class="nav-actions">
                    <button class="action-btn search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="action-btn cart-btn">
                        <i class="fa-solid fa-shopping-cart"></i>
                        <span class="cart-count">0</span>
                    </button>

                    <!-- Desktop Profile (hidden on mobile) -->
                    <div class="user-profile desktop-profile">
                        <?php if (isset($_SESSION['email']) && !empty($_SESSION['email'])): ?>
                            <div class="user-avatar">
                                <?= strtoupper($_SESSION['email'][0]) ?>
                            </div>
                            <div class="user-menu">
                                <div class="user-info">
                                    <span class="welcome">👋 <?= $_SESSION['username'] ?></span>
                                </div>
                                <a href="/Html/profile.php" class="user-menu-item">
                                    <i class="fas fa-user"></i>
                                    <span>Profile</span>
                                </a>
                                <a href="/Html/orders.php" class="user-menu-item">
                                    <i class="fas fa-shopping-bag"></i>
                                    <span>My Orders</span>
                                </a>
                                <a href="/Html/settings.php" class="user-menu-item">
                                    <i class="fas fa-cog"></i>
                                    <span>Settings</span>
                                </a>
                                <form action="Logout.php" method="post" class="user-menu-item">
                                    <button type="submit" name="logout">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>Logout</span>
                                    </button>
                                </form>
                            </div>
                        <?php else: ?>
                            <a href="Login.php" class="login-btn">
                                <i class="fas fa-user-circle"></i>
                                <span>Login</span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="search-container">
            <input type="text" placeholder="Search products..." class="search-input">
            <button class="search-close">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </nav>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Mobile menu toggle
            const mobileToggle = document.querySelector(".mobile-menu-toggle");
            const navMenu = document.querySelector(".nav-menu");
            const hamburger = document.querySelector(".hamburger");

            mobileToggle.addEventListener("click", function() {
                navMenu.classList.toggle("active");
                hamburger.classList.toggle("active");
            });

            // Dropdown toggle for mobile
            const dropdownBtns = document.querySelectorAll(".dropdown-btn");

            dropdownBtns.forEach((btn) => {
                btn.addEventListener("click", function() {
                    if (window.innerWidth <= 768) {
                        const dropdown = this.nextElementSibling;
                        dropdown.classList.toggle("active");
                    }
                });
            });

            // Search toggle
            const searchBtn = document.querySelector(".search-btn");
            const searchContainer = document.querySelector(".search-container");
            const searchClose = document.querySelector(".search-close");

            searchBtn.addEventListener("click", function() {
                searchContainer.classList.toggle("active");
            });

            searchClose.addEventListener("click", function() {
                searchContainer.classList.remove("active");
            });

            // Close when clicking outside
            document.addEventListener("click", function(e) {
                // Close search when clicking outside
                if (
                    !e.target.closest(".search-container") &&
                    !e.target.closest(".search-btn") &&
                    searchContainer.classList.contains("active")
                ) {
                    searchContainer.classList.remove("active");
                }
            });

            // Mobile user menu functionality
            const mobileUserAvatar = document.querySelector(".mobile-profile .user-avatar");
            if (mobileUserAvatar) {
                mobileUserAvatar.addEventListener("click", function(e) {
                    e.stopPropagation();

                    // Check if menu already exists
                    let mobileMenu = this.nextElementSibling;
                    if (!mobileMenu || !mobileMenu.classList.contains("mobile-user-menu")) {
                        // Create menu if it doesn't exist
                        mobileMenu = document.createElement("div");
                        mobileMenu.className = "user-menu mobile-user-menu";
                        mobileMenu.innerHTML = `
                            <div class="user-info">
                                <span class="welcome">👋 <?= $_SESSION['username'] ?? '' ?></span>
                            </div>
                            <a href="/Html/profile.php" class="user-menu-item">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>
                            <a href="/Html/orders.php" class="user-menu-item">
                                <i class="fas fa-shopping-bag"></i>
                                <span>My Orders</span>
                            </a>
                            <a href="/Html/settings.php" class="user-menu-item">
                                <i class="fas fa-cog"></i>
                                <span>Settings</span>
                            </a>
                            <form action="Logout.php" method="post" class="user-menu-item">
                                <button type="submit" name="logout">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        `;
                        this.parentNode.insertBefore(mobileMenu, this.nextSibling);
                    }

                    mobileMenu.classList.toggle("active");
                });

                // Close mobile menu when clicking outside
                document.addEventListener("click", function(e) {
                    if (!e.target.closest(".mobile-profile") && !e.target.closest(".mobile-user-menu")) {
                        const mobileMenu = document.querySelector(".mobile-user-menu");
                        if (mobileMenu) mobileMenu.classList.remove("active");
                    }
                });
            }

            // Navbar scroll effect
            // const change = document.querySelector(".cool-nav");
            // window.addEventListener("scroll", () => {
            //     if (window.scrollY >= 20) {
            //         change.classList.add("navscroll");
            //     } else {
            //         change.classList.remove("navscroll");
            //     }
            // });
            // window.addEventListener("scroll", () => {
            //     if (window.scrollY >= 640) {
            //         change.classList.remove("navscroll");
            //     }
            // });
        });
    </script>
</body>

</html>