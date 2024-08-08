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
            z-index: 1000;
            position: relative;
            width: 100%;
        }

        .logo img {
            width: 50px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 20px;
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

        .hero {
            text-align: center;
            padding: 150px 20px;
            background-image: url('banner.jpg');
            background-size: cover;
            background-position: center;
            font-family: Georgia;
            color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            transition: transform 0.3s ease;
            min-height: 350px;
            position: relative;
            z-index: 1;
        }
       .hero:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.2);
        }
        .hero h1 {
            font-size: 4rem;
            color: #2e8b57;
            animation: fadeIn 2s;
        }

        .hero p {
            font-size: 2rem;
            margin-bottom: 30px;
            animation: fadeIn 3s;
        }

        .hero-buttons .btn {
            background: linear-gradient(45deg, #2e8b57, #66cdaa);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
            text-decoration: none;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .hero-buttons .btn:hover {
            background: linear-gradient(45deg, #66cdaa, #2e8b57);
            transform: scale(1.05);
        }

        section {
            padding: 50px 20px;
        }

        .features {
            display: flex;
            justify-content: space-around;
            background-color: #f9f9f9;
            gap: 20px;
            flex-wrap: wrap;
        }

        .feature {
            text-align: center;
            max-width: 300px;
            transition: transform 0.3s ease;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .feature img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .feature:hover {
            transform: scale(1.05);
        }

        .text-align {
            text-align: center;
            margin: 0 auto;
            padding: 20px;
        }

        .testimonials {
            background: white;
            padding: 50px 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            color: #333;
        }

        .testimonials h2 {
            font-size: 2.5rem;
            color: #2e8b57;
            margin-bottom: 40px;
            position: relative;
        }

        .testimonials h2::after {
            content: "";
            width: 80px;
            height: 4px;
            background-color: #2e8b57;
            display: block;
            margin: 10px auto 0;
        }

        .testimonial {
            max-width: 600px;
            margin: 20px auto;
            padding: 30px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            color: #333;
        }

        .testimonial:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .testimonial p {
            font-size: 1.2rem;
            margin-bottom: 10px;
            text-align: center;
        }

        .testimonial p:last-of-type {
            font-weight: bold;
            color: #2e8b57;
            text-align: right;
        }

        .testimonial::before {
            content: '"';
            font-size: 4rem;
            color: #66cdaa;
            position: absolute;
            top: -20px;
            left: 20px;
            opacity: 0.1;
            font-family: 'Arial', sans-serif;
        }

        .testimonial::after {
            content: '"';
            font-size: 4rem;
            color: #66cdaa;
            position: absolute;
            bottom: -20px;
            right: 20px;
            opacity: 0.1;
            font-family: 'Arial', sans-serif;
        }

        
      
        .blog {
            background: linear-gradient(135deg, #f0f8ff,#2e8b57);
            padding: 50px 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            color: #333;
        }

        .blog h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 40px;
            position: relative;
        }

        .blog h2::after {
            content: "";
            width: 80px;
            height: 4px;
            background-color: #333;
            display: block;
            margin: 10px auto 0;
        }

        .blog-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .blog-post {
            width: 30%;
            margin: 20px 0;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .blog-post-img {
            height: 200px;
            width: 100%;
            background-size: cover;
            background-position: center;
            border-radius: 10px 10px 0 0;
            margin-bottom: 15px;
        }

        .blog-post h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #2e8b57;
        }

        .blog-post p {
            font-size: 1rem;
            flex-grow: 1;
            color: #666;
        }

        .read-more {
            align-self: flex-end;
            background: #2e8b57;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .read-more:hover {
            background: #66cdaa;
        }

        .blog-post:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .our-philosophy {
    background: linear-gradient(135deg, #f0f8ff, #2e8b57);
    padding: 60px 20px;
    text-align: center;
}

.our-philosophy h2 {
    font-size: 2.5em;
    margin-bottom: 40px;
    position: relative;
}

.our-philosophy h2::after {
    content: "";
    width: 80px;
    height: 4px;
    background-color: #333;
    display: block;
    margin: 10px auto 0;
}

.philosophy-container {
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
}

.philosophy-content {
    flex: 1;
    max-width: 45%;
    margin: 20px;
    text-align: left;
}

.philosophy-content p {
    font-size: 1.1em;
    color: #555;
    line-height: 1.6;
}

.philosophy-image {
    flex: 1;
    max-width: 45%;
    margin: 20px;
}

.philosophy-image img {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.health-courses {
            align-items: center;
            background: linear-gradient(135deg, #f0f8ff, #2e8b57);
            text-align: center;
            padding: 60px 20px;
        }

        .health-courses h2 {
            font-size: 2.5em;
            margin-bottom: 40px;
            position: relative;
        }

        .health-courses h2::after {
            content: "";
            width: 80px;
            height: 4px;
            background-color: #333;
            display: block;
            margin: 10px auto 0;
        }

        .courses-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .course {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 30%;
            margin: 20px 0;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .course:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .course img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .course h3 {
            margin: 15px 0;
            font-size: 1.5em;
        }

        .course p {
            font-size: 1em;
            color: #555;
        }

        .course .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background: linear-gradient(45deg, #2e8b57, #66cdaa);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s, transform 0.3s;
        }

        .course .btn:hover {
            background: #66cdaa;
            transform: scale(1.05);
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-form {
            display: flex;
            flex-direction: column;
        }

        .modal-form label {
            margin: 10px 0 5px;
        }

        .modal-form input,
        .modal-form textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .modal-form button {
            padding: 10px;
            background-color: #2e8b57;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .modal-form button:hover {
            background-color: #66cdaa;
        }

        @media screen and (max-width: 768px) {
            .course {
                width: 100%;
            }

            .modal-content {
                width: 90%;
                margin-top: 30%;
            }
        }

        @media screen and (max-width: 480px) {
            .health-courses h2 {
                font-size: 1.5em;
            }

            .course h3 {
                font-size: 1.2em;
            }}
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .contact {
    text-align: center;
    background: linear-gradient(135deg, #f0f8ff,#2e8b57);
}
        .contact-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            max-width: 500px;
            padding: 15px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .contact-form button {
            background: linear-gradient(45deg, #2e8b57, #66cdaa);
            
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
        }
        .contact-form button:hover {
            background: #239540;
            transform: scale(1.05);
        }


        footer {
            background-color: white;
            color: #2e8b57;
            padding: 20px;
            text-align: center;
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

        
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo">
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

    <section class="hero" id="home">
        <h1>Welcome to Mom Fitness</h1>
        <p>Your journey to fitness begins here!</p>
        <div class="hero-buttons">
            <a href="services.php" class="btn">Get Started</a>
            <a href="about.php" class="btn">Learn More</a>
        </div>
    </section>

  

    <section class="features">
        <div class="feature">
            <img src="tips.jpg" alt="Feature 1">
            <h3>Personalized Workouts</h3>
            <p>Customized fitness plans tailored to your goals and fitness level.</p>
        </div>
        <div class="feature">
            <img src="wellness.jpg" alt="Feature 2">
            <h3>Nutrition Guidance</h3>
            <p>Expert advice on healthy eating to complement your fitness routine.</p>
        </div>
        <div class="feature">
            <img src="community.jpeg" alt="Feature 3">
            <h3>Community Support</h3>
            <p>Join a supportive community of moms on their fitness journeys.</p>
        </div>
    </section>
    
     <section class="blog text-align">
        <h2>Latest Blog Posts</h2>
        <div class="blog-container">
            <div class="blog-post">
                <div class="blog-post-img" style="background-image: url('image22.jpg');"></div>
                <h3>5 Tips for Staying Motivated</h3>
                <p>Discover effective strategies to keep yourself motivated on your fitness journey.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div class="blog-post">
                <div class="blog-post-img" style="background-image: url('healthy.jpg');"></div>
                <h3>Healthy Meal Ideas</h3>
                <p>Explore delicious and nutritious meal ideas to fuel your workouts.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
            <div class="blog-post">
                <div class="blog-post-img" style="background-image: url('banner2.jpg.webp');"></div>
                <h3>Balancing Fitness and Motherhood</h3>
                <p>Learn how to effectively balance your fitness goals with the demands of motherhood.</p>
                <a href="#" class="read-more">Read More</a>
            </div>
        </div>
    </section>
    <section class="our-philosophy">
        <h2>Our Philosophy</h2>
        <div class="philosophy-container">
            <div class="philosophy-content">
                <p>
                    At WellnessWise, we believe that true health and wellness are achieved through a holistic approach. Our philosophy centers around the integration of nutrition, fitness, and mental well-being, creating a balanced and sustainable lifestyle.
                </p>
                <p>
                    We understand that each individual is unique, and our programs are tailored to meet the specific needs and goals of our clients. We focus on practical, easy-to-follow steps that make healthy living enjoyable and achievable.
                </p>
                <p>
                    Our commitment is to provide you with the tools, support, and motivation you need to make lasting changes. Join us in embracing a healthier, happier way of living with WellnessWise.
                </p>
            </div>
            <div class="philosophy-image">
                <img src="philosophy.jpg.webp" alt="Our Philosophy Image">
            </div>
        </div>
    </section>
    <section class="health-courses">
        <h2>Health Courses</h2>
        <div class="courses-container">
            <div class="course">
                <img src="health.jpeg" alt="Course 1">
                <h3>Nutrition Basics</h3>
                <p>Learn the fundamentals of nutrition and how to build a balanced diet that suits your lifestyle.</p>
                <a href="#" class="btn join-now">Join Now</a>
            </div>
            <div class="course">
                <img src="Fitness.jpg" alt="Course 2">
                <h3>Fitness Fundamentals</h3>
                <p>Discover effective workout routines and exercise techniques for all fitness levels.</p>
                <a href="#" class="btn join-now">Join Now</a>
            </div>
            <div class="course">
                <img src="mental.jpeg" alt="Course 3">
                <h3>Mental Wellness</h3>
                <p>Explore strategies for managing stress, improving mental health, and enhancing overall well-being.</p>
                <a href="#" class="btn join-now">Join Now</a>
            </div>
        </div> </section>
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Register for Course</h2>
                <form action="register.php" method="POST" class="modal-form">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
    
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required>
    
                    <label for="course">Course:</label>
                    <input type="text" id="course" name="course" readonly>
    
                    <button type="button" onclick="window.location.href='index.php';">Register</button>

                </form>
            </div>
        </div>
    
        <script>
            document.querySelectorAll('.join-now').forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const courseTitle = button.previousElementSibling.previousElementSibling.innerText;
                    document.getElementById('course').value = courseTitle;
                    document.getElementById('modal').style.display = 'flex';
                });
            });
    
            document.querySelector('.close').addEventListener('click', () => {
                document.getElementById('modal').style.display = 'none';
            });
    
            window.onclick = (event) => {
                if (event.target == document.getElementById('modal')) {
                    document.getElementById('modal').style.display = 'none';
                }
            };
        </script>
    
    <section class="testimonials text-align">
        <h2 class="color">What Our Members Say</h2>
        <div class="testimonial">
            <p>"Mom Fitness has completely transformed my life. I feel healthier and more energetic than ever before!"</p>
            <p>- Sarah L.</p>
        </div>
        <div class="testimonial">
            <p>"The community support is amazing. It's great to connect with other moms who understand my fitness goals."</p>
            <p>- Emily R.</p>
        </div>
      
    </section>
    <section class="contact">
        <h2>Contact Us</h2>
        <form class="contact-form" id="contact-form">
            <input type="text" id="name" placeholder="Your Name" required>
            <input type="email" id="email" placeholder="Your Email" required>
            <textarea id="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </section>

    <script src="script.js"></script>

  
        <footer>
            <p>&copy; 2024 Mom Fitness. All rights reserved.</p>
            <p>
                <a href="#">Privacy Policy</a> |
                <a href="#">Terms of Service</a>
            </p>
        </footer>
</section>
    </body>    
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $course = htmlspecialchars($_POST['course']);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mother_fitness";

    
    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $stmt = $conn->prepare("INSERT INTO registrations (name, email, phone, course) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $course);

   
    if ($stmt->execute() === TRUE) {
        
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>