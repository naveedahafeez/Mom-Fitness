<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mom Fitness - Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
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

        .services-section {
            padding: 50px 20px;
            text-align: center;
        background-color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin: 20px;
            border-radius: 10px;
            animation: fadeIn 1s ease-in-out;
        }

        .services-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #2e8b57;
        }

        .services-section p {
            font-size: 1.2rem;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto 40px auto;
            color: #666;
        }

        .service-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }

        .service {
            flex: 1 1 calc(30% - 20px);
            max-width: calc(30% - 20px);
            margin: 20px 0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            transition: transform 0.3s ease;
        }

        .service:hover {
            background: linear-gradient(135deg, #f0f8ff, #2e8b57);
            transform: translateY(-10px);
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.2);
        }

        .service img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
            transition: transform 0.3s ease;
        }

        .service img:hover {
            transform: scale(1.05);
        }

        .service h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #2e8b57;
        }

        .service p {
            font-size: 1rem;
            color: #666;
        }

        .service a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            border-radius: 5px;
            background: linear-gradient(45deg, #2e8b57, #66cdaa);
            color: white;
            text-decoration: none;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .service a:hover {
            background: linear-gradient(45deg, #eeeeee, #a8e1c1);
            transform: scale(1.05);
        }

        .section {
            padding: 50px 20px;
            text-align: center;
            background-color: #fff;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }

        .section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #2e8b57;
        }

        .section p {
            font-size: 1.2rem;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto 30px auto;
            color: #666;
        }

        .section img {
            width: 80%;
            max-width: 400px;
            border-radius: 10px;
            margin-top: 20px;
            transition: transform 0.3s ease;
        }

        .section img:hover {
            transform: scale(1.05);
            background-color: white;
        }

        .success-stories-section {
            padding: 50px 20px;
            text-align: center;
            background-color: white;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }

        .success-story-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }

        .success-story {
               
            flex: 1 1 calc(30% - 20px);
            max-width: calc(30% - 20px);
            margin: 20px 0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            transition: transform 0.3s ease;
        }

        .success-story:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.2);
            background: linear-gradient(45deg, #eeeeee, #a8e1c1);
        }

        .success-story img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
            transition: transform 0.3s ease;
        }

        .success-story img:hover {
            transform: scale(1.05);
        }

        .success-story h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #2e8b57;
        }

        .success-story p {
            font-size: 1rem;
            color: #666;
        }

        footer {
            background-color: #fff;
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

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .service, .success-story {
                flex: 1 1 100%;
                max-width: 100%;
                margin: 10px 0;
            }

            .service img, .success-story img {
                height: 150px;
            }

            .section img {
                width: 100%;
                max-width: 300px;
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
                <li><a href="signup.php" class="btn-signup">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <section class="services-section">
        <h1>Our Services</h1>
        <p>At Mom Fitness, we offer a variety of services to help you achieve your fitness goals. Our dedicated team of
            professionals provides personalized training, nutrition guidance, and a supportive community to ensure your
            success.</p>
        <div class="service-container">
            <div class="service">
                <img src="images-121.jpeg" alt="Personal Training">
                <h3>Personal Training</h3>
                <p>Get one-on-one training with our certified trainers who will design a workout plan tailored to your
                    specific needs and goals.</p>
                <a href="personal_training.php">Learn More</a>
            </div>
            <div class="service">
                <img src="66.jpeg" alt="Group Classes">
                <h3>Group Classes</h3>
                <p>Join our group classes to stay motivated and have fun while working out with others who share your
                    fitness goals.</p>
                <a href="group_classes.php">Learn More</a>
            </div>
            <div class="service">
                <img src="88.jpeg" alt="Nutrition Coaching">
                <h3>Nutrition Coaching</h3>
                <p>Learn about the best foods to eat before and after your workouts to maximize your energy, performance,
                    and recovery. Our nutrition experts provide personalized advice to help you achieve your fitness
                    goals.</p>
                <a href="nutrition_coaching.php">Learn More</a>
            </div>
        </div>
    </section>

    <section class="section">
        <h2>Online Courses</h2>
        <p>Explore our range of online courses designed to fit into your busy schedule. From yoga classes to full-body
            workouts, find the perfect course to meet your fitness needs.</p>
        <img src="image22.jpg" alt="Online Course">
    </section>

    <section class="section">
        <h2>Special Programs</h2>
        <p>We offer special fitness programs tailored for moms, including prenatal and postnatal fitness sessions. Join
            our supportive community and work out with other moms on a similar journey.</p>
        <img src="images-120.jpeg" alt="Special Program">
    </section>

    <section class="success-stories-section">
        <h1>Success Stories</h1>
        <div class="success-story-container">
            <div class="success-story">
                <img src="22.jpeg" alt="Mom's Success">
                <h3>Maria's Transformation</h3>
                <p>Maria joined our group classes after having her second child and has since lost 20 pounds, gaining
                    strength and confidence along the way.personal training sessions to get back in shape after pregnancy and has achieved her
                    fitness goals .</p>
            </div>
       
        
            <div class="success-story">
                <img src="24.jpg" alt="Mom's Success">
                <h3>Emily's Achievement</h3>
                <p>Emily started our personal training sessions to get back in shape after pregnancy and has achieved her
                    fitness goals .</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Mom Fitness. All Rights Reserved.</p>
        <p><a href="privacy.php">Privacy Policy</a> | <a href="terms.php">Terms of Service</a></p>
    </footer>
</body>

</html>
