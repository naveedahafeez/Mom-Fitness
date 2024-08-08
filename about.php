<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mom Fitness - About Us</title>
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

        .about-us {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin: 20px;
            border-radius: 10px;
            animation: fadeIn 1s ease-in-out;
            padding: 50px 20px;
            text-align: center;
            background: linear-gradient(45deg, #eeeeee, #a8e1c1);
            position: relative;
        }

        .about-us:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.2);
        }

        .about-us::before {
            content: "";
            background: url('team-banner.jpg') no-repeat center center/cover;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.2;
            z-index: -1;
        }

        .about-us h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #2e8b57;
            animation: fadeInDown 1s ease-in-out;
        }

        .about-us p {
            font-size: 1.2rem;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            color: #666;
            animation: fadeInUp 1s ease-in-out;
        }

        .mission-vision {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 40px 0;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .mission-vision img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .mission-vision .mission, .mission-vision .vision {
            max-width: 45%;
            text-align: center;
            margin: 20px;
        }

        .mission-vision h2 {
            color: #2e8b57;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .mission-vision p {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.6;
        }

        .team {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .team-member {
            text-align: center;
            max-width: 200px;
            margin: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: linear-gradient(45deg, #eeeeee, #a8e1c1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            animation: zoomIn 1s ease-in-out;
        }

        .team-member img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .team-member:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }

        .team-member h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #2e8b57;
        }

        .team-member p {
            font-size: 1rem;
            color: #666;
        }

        .values {
            padding: 50px 20px;
            background: linear-gradient(45deg, #eeeeee, #a8e1c1);
            text-align: center;
        }

        .values img {
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .values h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #2e8b57;
        }

        .values-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .value {
            max-width: 300px;
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .value:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.2);
        }

        .value h3 {
            color: #2e8b57;
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .value p {
            color: #666;
            font-size: 1rem;
            line-height: 1.6;
        }

        footer {
            background-color: white;
            color: #2e8b57;
            padding: 20px;
            text-align: center;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
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
            .mission-vision {
                flex-direction: column;
                align-items: center;
            }

            .team {
                flex-direction: column;
                align-items: center;
            }

            .values-container {
                flex-direction: column;
                align-items: center;
            }

            .team-member, .value {
                margin-bottom: 20px;
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
                <li><a href="register.php" class="btn-signup">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <section class="about-us">
        <h1>About Us</h1>
        <p>Welcome to Mom Fitness, your ultimate destination for maternal fitness and well-being. We are committed to providing the best resources and support to help you stay healthy and fit mother deserves the tools and resources to stay strong, confident, and healthy throughout motherhood.e envision a world where every mother has access to a supportive fitness community that helps her achieve her goals and improve her overall well-being. Our vision is to be the leading platform for maternal fitness, where every mother feels connected and motivated.</p>
    </section>

    <section class="mission-vision">
        <div class="mission">
            <img src="images-130.jpeg" alt="Our Mission">
            <h2>Our Mission</h2>
            <p>At Mom Fitness, our mission is to empower every mother to embrace a healthier lifestyle through fitness, nutrition, and community support. We believe that every mother deserves the tools and resources to stay strong, confident, and healthy throughout motherhood.</p>
        </div>
        <div class="vision">
            <img src="images-131.jpeg" alt="Our Vision">
            <h2>Our Vision</h2>
            <p>We envision a world where every mother has access to a supportive fitness community that helps her achieve her goals and improve her overall well-being. Our vision is to be the leading platform for maternal fitness, where every mother feels connected and motivated.</p>
        </div>
    </section>

    <section class="team">
        <div class="team-member">
            <img src="2.jpg" alt="Mayi Rehman">
            <h3>Mayi Rehman</h3>
            <p>Founder &amp; CEO</p>
        </div>
        <div class="team-member">
            <img src="1.jpg.webp" alt="Jasy Hussian">
            <h3>Jasy Hussian</h3>
            <p>Head of Training</p>
        </div>
        <div class="team-member">
            <img src="5.jpg.webp" alt="Maryia Saeed">
            <h3>Maryia Saeed</h3>
            <p>Nutrition Specialist</p>
        </div>
        <div class="team-member">
            <img src="images-118.jpeg" alt="Aliya Khan">
            <h3>Aliya Khan</h3>
            <p>Yoga Instructor</p>
        </div>
    </section>

    <section class="values">
        <h2>Our Core Values</h2>
        <div class="values-container">
            <div class="value">
                <h3>Integrity</h3>
                <p>We uphold the highest standards of integrity in all our actions and ensure transparency in our services.</p>
            </div>
            <div class="value">
                <h3>Community</h3>
                <p>We foster a supportive and inclusive community where every mother can connect, share, and grow together.</p>
            </div>
            <div class="value">
                <h3>Innovation</h3>
                <p>We continuously innovate to provide the best fitness solutions tailored to the needs of modern mothers.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Mom Fitness. All rights reserved.</p>
        <p><a href="">Privacy Policy</a> | <a href="">Terms of Service</a></p>
    </footer>
</body>
</html>
