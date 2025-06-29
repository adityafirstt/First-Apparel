<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About | First Apparel</title>
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

        .about-container {
            min-height: 100vh;
            padding: 140px 20px 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .about-title {
            text-align: center;
            font-size: 36px;
            font-weight: 700;
            margin-top: 30px;
            color: #fff;
        }

        .about-box {
            max-width: 800px;
            padding: 40px;
            text-align: center;
            line-height: 1.6;
            font-size: 18px;
            color: #fff;
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
        }

        .about-box h1 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        
        .about-box p {
            margin-bottom: 25px;
        }

        .back-btn {
            display: inline-block;
            padding: 10px 25px;
            background: #fff;
            color: #111;
            text-decoration: none;
            font-weight: 600;
            border-radius: 30px;
            transition: 0.3s ease;
        }

        .back-btn:hover {
            background: #f2f2f2;
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

        .login-btn {
            margin-left: 40px;
            padding: 10px 25px;
            background: transparent;
            border: 2px solid #fff;
            border-radius: 40px;
            font-size: 16px;
            color: #fff;
            font-weight: 500;
            cursor: pointer;
            transition: .3s ease;
        }

        .login-btn:hover {
            background: #fff;
            color: #222;
        }

        @media (max-width: 768px) {
            header {
                padding: 20px 40px;
            }

            .about-box h1 {
                font-size: 26px;
            }

            .about-box {
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
        <button class="login-btn">Login</button>
    </header>

    <section class="about-container">
        <h1 class="about-title">About First Apparel</h1>
        <div class="about-box">
            <p>
                First Apparel is a clothing brand founded by a university student in 2025.
                Currently, First Apparel is developing new innovations in fashion that align with modern and future trends.
                By integrating various elements, First Apparel aims to become a leading trendsetter in the fashion industry.
            </p>
            <a href="index.php" class="back-btn">Back to Home</a>
        </div>
    </section>
</body>
</html>
