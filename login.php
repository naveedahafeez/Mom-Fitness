<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mother Fitness - Login</title>
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
            font-size: 3em;
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
            padding: 15px;
            margin: 10px 0;
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
            margin-top: 10px;
            color: #2e8b57;
            font-weight: bold;
            width: 60%;
        }

        .gender-options,
        .checkbox-options {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 10px;
        }

        textarea {
            resize: vertical;
        }

        button {
            padding: 15px 20px;
            margin-top: 20px;
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
            padding: 40px 70px;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        .logo {
            width: 150px;
    
            margin-top: 30px;
        }


    </style>
</head>
<body>
    <section class="login">
        <img src="logo.png" alt="Mother Fitness Logo" class="logo">
        <h1>Login</h1>
        <form action="login.php" method="post" class="login-form">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        
        $servername = "localhost";
        $username = "root";
        $password_db = "";
        $dbname = "mother_fitness";

        $conn = new mysqli($servername, $username, $password_db, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        if ($stmt->num_rows == 1 && password_verify($password, $hashed_password)) {
   
            header("Location: index.php");
            exit();
        } else {
            echo "<p>Invalid email or password</p>";
        }
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
