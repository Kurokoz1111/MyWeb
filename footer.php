<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --accent: #807ef3;
            --color-white: #fff;
            --color-black: #000;
            --primary: #0071e3;
            --secondary: #1d1d1f;
            --light: #f5f5f7;
            --dark: #000;
            --gray: #86868b;
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

        /* Footer */
        footer {
            background-color: var(--secondary);
            color: var(--light);
            padding: 50px 20px 20px;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
        }

        .footer-logo {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .footer-logo span {
            color: var(--primary);
        }

        .footer-about p {
            color: var(--gray);
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            color: var(--light);
            font-size: 20px;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: var(--primary);
        }

        .footer-links h3 {
            font-size: 18px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-links h3::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background-color: var(--primary);
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: var(--gray);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        .copyright {
            text-align: center;
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--gray);
            font-size: 14px;
        }
    </style>
</head>

<body>
    <!-- Footer -->
    <footer>

        <div class="footer-container">
            <div class="footer-about">
                <div class="footer-logo">i<span>Deal</span></div>
                <p>
                    Your trusted destination for premium iPhones and accessories at
                    competitive prices.
                </p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Deals</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h3>Products</h3>
                <ul>
                    <li><a href="#">iPhone 15 Series</a></li>
                    <li><a href="#">iPhone 14 Series</a></li>
                    <li><a href="#">iPhone SE</a></li>
                    <li><a href="#">Refurbished</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h3>Support</h3>
                <ul>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Shipping Policy</a></li>
                    <li><a href="#">Return Policy</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            <p>&copy; 2025 iDeal. All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>