<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact - First Apparel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        body {
            background: #1a1a1a;
            background: url('background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }

        .contact-container {
            min-height: 100vh;
            padding: 140px 20px 40px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }

        .contact-title {
            text-align: center;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #fff;
        }

        .contact-box {
            max-width: 800px;
            padding: 40px;
            text-align: left;
            font-size: 18px;
            color: #fff;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
            width: 100%;
        }

        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .info-item i {
            font-size: 22px;
            margin-right: 15px;
            color: #fff;
        }

        .connect-title {
            margin-top: 40px;
            font-size: 20px;
            font-weight: 600;
            text-align: center;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 15px;
        }

        .social-icons a {
            color: #fff;
            font-size: 24px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #00ffff;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 100px;
            display: flex;
            align-items: center;
            z-index: 100;
            background: transparent;
        }

        header .logo {
            font-size: 30px;
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            margin-right: auto;
        }

        header nav a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            margin-left: 40px;
        }

        @media (max-width: 768px) {
            header {
                padding: 20px 40px;
            }

            .contact-title {
                font-size: 28px;
            }

            .contact-box {
                padding: 30px 20px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="logo">First Apparel</a>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="collection.html">Collection</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <section class="contact-container">
        <h1 class="contact-title">Contact Us</h1>
        <div class="contact-box">
            <div class="info-item">
                <i class="ri-map-pin-line"></i>
                <span>Jakarta, Indonesia</span>
            </div>
            <div class="info-item">
                <i class="ri-phone-line"></i>
                <span>+6289876543210</span>
            </div>
            <div class="info-item">
                <i class="ri-mail-line"></i>
                <span>firstapparel@email.com</span>
            </div>

            <div class="connect-title">Connect With Us</div>
            <div class="social-icons">
                <a href="#" title="Facebook"><i class="ri-facebook-circle-fill"></i></a>
                <a href="#" title="Instagram"><i class="ri-instagram-line"></i></a>
                <a href="#" title="X"><i class="ri-twitter-x-line"></i></a>
                <a href="#" title="TikTok"><i class="ri-tiktok-line"></i></a>
            </div>
        </div>
    </section>
</body>
</html>