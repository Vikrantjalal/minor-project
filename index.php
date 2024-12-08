<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> USER ACTIVITY TRACKER  </title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="code.css">
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
    section {
      padding: 10px;
      display: none;
    }
    section.active {
      display: block;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    table, th, td {
      border: 1px solid #ddd;
    }
    th, td {
      padding: 20px;
      text-align: left;
    }
    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding:0.5 px  0.1;
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
  <a href="#" onclick="showPage('home')">Home</a>
  <a href="register.php">Register</a>
  <a href="login.php">Login</a>
  <a href="dashboard.php" >Dashboard</a>
  <a href="add-activity.php" >Add Activity</a>
  <a href="analyze-activity.php" >Analyze Activity</a>
</nav>

<section id="home" class="active">
  <div style="text-align: center;">
    <h1>Welcome to <span style="color: #4caf50;">User Activity Tracker</span></h1>
    <p>Your one-stop solution to organize, monitor, and track your daily activities effortlessly.</p>
    <img src="https://www.replaybird.com/guide-images/user-activity-tracking/user-activity-tracking.png" 
         width="300px" height="200px" 
         alt="Activity Tracker" 
         style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); max-width: 100%; height: auto;">
  </div>

  <!-- About Us -->
  <div style="margin-top: 40px; text-align: center;">
    <h2>About Us</h2>
    <p>We provide a seamless platform that allows users to organize their tasks, monitor their daily routines, and achieve their productivity goals. Whether you're a student, professional, or homemaker, **User Activity Tracker** is designed to simplify your life.</p>
  </div>

  <!-- Features Section -->
  <div style="margin-top: 40px; text-align: center;">
    <h2>Our Features</h2>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
      <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 300px; text-align: left;">
        <i class="fa fa-calendar-check" style="font-size: 24px; color: #4caf50;"></i>
        <h3>Daily Activity Tracker</h3>
        <p>Track your daily tasks and ensure you stay organized throughout the day.</p>
      </div>
      <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 300px; text-align: left;">
        <i class="fa fa-chart-line" style="font-size: 24px; color: #4caf50;"></i>
        <h3>Performance Insights</h3>
        <p>Analyze your progress over time and identify areas for improvement.</p>
      </div>
      <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 300px; text-align: left;">
        <i class="fa fa-users" style="font-size: 24px; color: #4caf50;"></i>
        <h3>Collaborative Features</h3>
        <p>Work together with family or colleagues by sharing activity plans.</p>
      </div>
      <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 300px; text-align: left;">
        <i class="fa fa-lock" style="font-size: 24px; color: #4caf50;"></i>
        <h3>Secure Platform</h3>
        <p>Your data is encrypted and stored securely, ensuring your privacy.</p>
      </div>
    </div>
  </div>
  
  

  <!-- How It Works Section -->
  <div style="margin-top: 40px; text-align: center;">
    <h2>How It Works</h2>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
      <div style="max-width: 300px; text-align: center;">
        <i class="fa fa-user-plus" style="font-size: 48px; color: #4caf50;"></i>
        <h3>Step 1: Register</h3>
        <p>Sign up for an account and gain access to the features.</p>
      </div>
      <div style="max-width: 300px; text-align: center;">
        <i class="fa fa-sign-in-alt" style="font-size: 48px; color: #4caf50;"></i>
        <h3>Step 2: Login</h3>
        <p>Login to your account to manage and track your tasks.</p>
      </div>
      <div style="max-width: 300px; text-align: center;">
        <i class="fa fa-tasks" style="font-size: 48px; color: #4caf50;"></i>
        <h3>Step 3: Add Activities</h3>
        <p>Start adding and categorizing your daily activities.</p>
      </div>
      <div style="max-width: 300px; text-align: center;">
        <i class="fa fa-chart-bar" style="font-size: 48px; color: #4caf50;"></i>
        <h3>Step 4: Analyze</h3>
        <p>View reports and graphs to understand your progress.</p>
      </div>
    </div>
  </div>

  <!-- Testimonials -->
  <div style="margin-top: 40px; text-align: center;">
    <h2>What Our Users Say</h2>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
      <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 300px; text-align: left;">
        <p>"User Activity Tracker has transformed the way I manage my tasks. I feel more productive and focused every day!"</p>
        <strong>- Alex T.</strong>
      </div>
      <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 300px; text-align: left;">
        <p>"The clean interface and insightful reports help me track my progress like never before."</p>
        <strong>- Jessica R.</strong>
      </div>
      <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 300px; text-align: left;">
        <p>"Secure and easy to use! I love how I can plan my day in just a few clicks."</p>
        <strong>- Michael S.</strong>
      </div>
    </div>
  </div>

  <!-- Call to Action -->
  <div style="margin-top: 40px; text-align: center;">
    <h2>Ready to Get Started?</h2>
    <p>Create your account today and experience the difference!</p>
    <a href="register.php" style="text-decoration: none; background-color: #4caf50; color: white; padding: 10px 20px; border-radius: 5px; font-size: 16px; margin-top:10px;">Register Now</a>
  </div>
</section>


<footer>
  <p> @ 2024 user activity tracker</p>
</footer>
</body>
</html>
