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

<!--dashboard section-->
<section id="dashboard" style="padding: 40px; background: #f9f9f9;">
  <div style="text-align: center; margin-bottom: 40px;">
      <h2>Dashboard</h2>
      <p>Monitor your activities and track real-time data insights.</p>
  </div>

  <!-- Dashboard Cards -->
  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-bottom: 40px; ">
      <div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 250px; text-align: center;">
          <h3>Total Users</h3>
          <p style="font-size: 24px; font-weight: bold;">1,204</p>
      </div>
      <div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 250px; text-align: center;">
          <h3>Active Users</h3>
          <p style="font-size: 24px; font-weight: bold;">245</p>
      </div>
      <div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 250px; text-align: center;">
          <h3>Completed Tasks</h3>
          <p style="font-size: 24px; font-weight: bold;">372</p>
      </div>
      <div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 250px; text-align: center;">
          <h3>Pending Tasks</h3>
          <p style="font-size: 24px; font-weight: bold;">53</p>
      </div>
  </div>

  <!-- Charts Section -->
  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 40px;">
      <!-- Real-Time Activity Chart -->
      <div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 90%; max-width: 600px;">
          <h3 style="text-align: center;">Real-Time Activity Monitoring</h3>
          <canvas id="realTimeChart" style="max-width: 100%;"></canvas>
      </div>
      <!-- User Engagement Chart -->
      <div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 90%; max-width: 600px;">
          <h3 style="text-align: center;">User Engagement</h3>
          <canvas id="engagementChart" style="max-width: 100%;"></canvas>
      </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Real-Time Chart
  const realTimeCtx = document.getElementById('realTimeChart').getContext('2d');
  const realTimeChart = new Chart(realTimeCtx, {
      type: 'doughnut',
      data: {
          labels: ['Work', 'Exercise', 'Leisure', 'Other'],
          datasets: [{
              data: [40, 30, 20, 10],
              backgroundColor: ['#4caf50', '#ff9800', '#2196f3', '#f44336']
          }]
      },
      options: {
          plugins: {
              tooltip: {
                  callbacks: {
                      label: function(context) {
                          const total = context.dataset.data.reduce((sum, val) => sum + val, 0);
                          const value = context.raw;
                          return `${context.label}: ${value} (${((value / total) * 100).toFixed(1)}%)`;
                      }
                  }
              }
          }
      }
  });

  // User Engagement Chart
  const engagementCtx = document.getElementById('engagementChart').getContext('2d');
  const engagementChart = new Chart(engagementCtx, {
      type: 'bar',
      data: {
          labels: ['Emails', 'Meetings', 'Coding', 'Presentations'],
          datasets: [{
              label: 'Hours Spent',
              data: [12, 15, 20, 8],
              backgroundColor: ['#2196f3', '#ff9800', '#4caf50', '#f44336']
          }]
      },
      options: {
          responsive: true,
          plugins: {
              legend: { display: false }
          }
      }
  });

  // Simulate real-time updates every 5 seconds
  setInterval(() => {
      const newData = [Math.random() * 50, Math.random() * 50, Math.random() * 50, Math.random() * 50];
      realTimeChart.data.datasets[0].data = newData;
      realTimeChart.update();
  }, 5000);
</script>



<footer>
  <p> @ 2024 user activity tracker</p>
</footer>
</body>
</html>


