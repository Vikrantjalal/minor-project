
<?php
include 'db_connection.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Plain text password

    $sql = "INSERT INTO users_data (name, email, password) VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>Registration successful!</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> USER ACTIVITY TRACKER  </title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    
    /* Basic Styles */
    body {
      font-family:'Roboto' , sans-serif;
      background: linear-gradient(to right, #af4c98, #8fb491);
      margin: 0;
      padding: 0;
      display:flex;
      flex-direction: column;
      align-items: center;
      
    }
    .form-container {
        margin-top: 50px;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        width: 90%;
        max-width: 400px;
        text-align: center;
      }
      .form-container h2 {
        margin-bottom: 20px;
      }
      .form-container input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
      .form-container button {
        background-color: #4caf50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: transform 0.3s ease;
      }
      .form-container button:hover {
        transform: scale(1.05);
        background-color: #45a049;
      }
    header {
      background-color:rgba(214, 214, 218, 0.493);
      color: rgb(17, 16, 16);
      padding: 10px 20px;
      text-align: center;
    }
    nav {
      display: flex;
      justify-content: center;
      background: #070707;
    }
    nav a {
      color: white;
      padding: 10px 20px;
      text-decoration: none;
    }
    nav a:hover {
      background-color: #575757;
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding:0.5 px  0.1;
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
    }
    form label {
      display: block;
      margin-top: 10px;
    }
    form input, form textarea, form button {
      margin-top: 10px;
      padding: 10px;
      width: 100%;
      max-width: 300px;
    }
  </style>
</head>
<body>
  <script src="script.js"></script>
    <header>
  <h1>User Activity Tracker</h1>
</header>

<nav>
  <a href="index.php">Home</a>
  <a href="register.php">Register</a>
  <a href="login.php">Login</a>
  <a href="dashboard.php" >Dashboard</a>
  <a href="add-activity.php" >Add Activity</a>
  <a href="analyze-activity.php" >Analyze Activity</a>
</nav>
<div class="form-container">
        <h2>Register</h2>
        <form method="POST" action="">
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit" name="register">Register</button>
        </form>
    </div>
<footer>
  <p> @ 2024 user activity tracker</p>
</footer>
</body>
</html>





