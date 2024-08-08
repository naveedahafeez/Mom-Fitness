<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mother Fitness - Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f8f8;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            font-size: 2.5em; /* Slightly reduced size */
            margin-top: 0px;
            margin-bottom: 10px;
            color: #2e8b57;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"],
        textarea,
        input[type="date"] {
            width: 94%;
            padding: 12px; /* Slightly reduced padding */
            margin: 8px 0; /* Slightly reduced margin */
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border 0.3s;
        }

        input[type="text"]::placeholder,
        input[type="email"]::placeholder,
        input[type="tel"]::placeholder,
        input[type="password"]::placeholder,
        textarea::placeholder,
        input[type="date"]::placeholder {
            font-size: 14px;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        input[type="password"]:focus,
        textarea:focus,
        input[type="date"]:focus {
            border: 1px solid #2e8b57;
        }

        label {
            margin-top: 8px; /* Slightly reduced margin */
            color: #2e8b57;
            font-weight: bold;
            width: 60%;
        }

        .gender-options,
        .checkbox-options {
            display: flex;
            flex-wrap: wrap;
            gap: 8px; /* Slightly reduced gap */
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 8px; /* Slightly reduced margin */
        }

        textarea {
            resize: vertical;
        }

        button {
            padding: 12px 18px; /* Slightly reduced padding */
            margin-top: 16px; /* Slightly reduced margin */
            background-color: #2e8b57;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            background-color: #66cdaa;
            transform: scale(1.05);
        }

        p {
            margin-top: 10px;
            color: #333;
        }

        a {
            color: #2e8b57;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        section {
            background-color: white;
            padding: 30px 25px; /* Slightly reduced padding */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 550px; /* Slightly reduced max-width */
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        .logo {
            width: 120px; /* Slightly reduced size */
            margin-top: 25px; /* Slightly reduced margin */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 600px) {
            section {
                width: 95%;
                padding: 20px 15px; /* Slightly reduced padding */
            }

            h1 {
                font-size: 2em; /* Slightly reduced size */
            }

            button {
                padding: 10px 15px;
            }
        }
    </style>
</head>
<body>
    <section class="register">
        <img src="logo.png" alt="Mother Fitness Logo" class="logo">
        <h1>Welcome</h1>
        <form action="register.php" method="post" class="register-form">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="phone" placeholder="Phone Number" required>
            <div class="gender-options">
                <input type="radio" id="male" name="gender" value="Male" required> Male
                <input type="radio" id="female" name="gender" value="Female" required> Female
            </div>
            <input type="date" name="dob" placeholder="Date of Birth" required>
            <input type="password" name="password" placeholder="Password" required>
            <textarea name="additional_info" rows="2" placeholder="Additional Information (if any)"></textarea>
            <button type="submit">Submit</button>
        </form>
        <p>Already joined? <a href="login.php">Login here</a></p>
    </section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capture form data
        $first_name = htmlspecialchars($_POST['first_name']);
        $last_name = htmlspecialchars($_POST['last_name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $gender = htmlspecialchars($_POST['gender']);
        $dob = htmlspecialchars($_POST['dob']);
        $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT); // Hash the password
        $additional_info = htmlspecialchars($_POST['additional_info']);

        // Database connection
        $servername = "localhost";
        $username = "root";
        $password_db = "";
        $dbname = "mother_fitness";

        // Create connection
        $conn = new mysqli($servername, $username, $password_db, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, phone, gender, dob, password, additional_info) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $first_name, $last_name, $email, $phone, $gender, $dob, $password, $additional_info);

        // Execute the prepared statement
        if ($stmt->execute() === TRUE) {
            // Redirect to the login page after successful registration
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
