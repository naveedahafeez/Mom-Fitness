<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mom Fitness - Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: white;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: white;
            flex-wrap: wrap;
        }

        .logo img {
            width: 50px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        nav ul li a:hover {
            background: #ccc;
            transform: scale(1.05);
        }

        nav ul li a.btn-signup {
            background: linear-gradient(45deg, #2e8b57, #66cdaa);
            color: white;
        }

        .contact-section {
            padding: 50px 20px;
            text-align: center;
            background-color: #f9f9f9;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin: 20px;
            border-radius: 10px;
            animation: fadeIn 1s ease-in-out;
        }

        .contact-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #2e8b57;
            animation: fadeInDown 1s ease-in-out;
        }
        .contact-section:hover {
            background: linear-gradient(45deg, #eeeeee, #a8e1c1);
            transform: translateY(-10px);
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.2);
        }
        .contact-section p {
            font-size: 1.2rem;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            color: #666;
            animation: fadeInUp 1s ease-in-out;
        }

        .contact-form {
            max-width: 600px;
            margin: 40px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: zoomIn 1s ease-in-out;
        }

        .contact-form label {
            display: block;
            margin-bottom: 10px;
            font-size: 1.2rem;
            color: #2e8b57;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            color: #333;
        }

        .contact-form button {
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            background: linear-gradient(45deg, #2e8b57, #66cdaa);
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .contact-form button:hover {
            background: linear-gradient(45deg, #66cdaa, #2e8b57);
            transform: scale(1.05);
        }

        footer {
            background-color: white;
            color: #2e8b57;
            padding: 20px;
            text-align: center;
        }

        footer p {
            margin: 0;
            font-size: 1rem;
        }

        footer a {
            color: #2e8b57;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s ease;
            text-align: center;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        footer a:hover {
            color: #66cdaa;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.5);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @media (max-width: 768px) {
            .contact-form {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Mom Fitness">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="register.php" class="btn-signup">Join Now</a></li>
            </ul>
        </nav>
    </header>
    <section class="contact-section">
        <h1>Contact Us</h1>
        <p>If you have any questions, comments, or would like to get in touch with us, please fill out the form below. We look forward to hearing from you!</p>
        <div class="contact-form">
            <form action="contact-form-handler.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="6" required></textarea>
                <button type="button" onclick="window.location.href='index.php';">Send Message</button>

            </form>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Mom Fitness. All rights reserved.</p>
        <p><a href="">Privacy Policy</a> | <a href="">Terms of Service</a></p>
    </footer>
</body>
</html>
