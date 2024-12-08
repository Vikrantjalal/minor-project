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

<!-- analyze section -->
<section id="analyze">
  <div style="text-align: center; margin-top: 40px;">
    <h2>Activity Analysis</h2>
    <p>Track your progress with real-time graphs and detailed insights across multiple activity categories.</p>
  </div>

  <!-- Real-Time Graph Section -->
  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-top: 10px;">
    <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 90%; max-width: 700px; text-align: center;">
      <h3>Real-Time Activity Monitoring</h3>
      <canvas id="realTimeChart" width="100" height="100"></canvas>
      <div id="realTimeStats" style="margin-top: 20px; font-weight: bold; font-size: 16px;"></div>
    </div>
  </div>

  <!-- Detailed Charts for Activities -->
  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-top: 20px;">
    <!-- Chart for Work -->
    <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 300px; text-align: center;">
      <h3>Work</h3>
      <canvas id="workChart" width="100" height="100"></canvas>
    </div>
    <!-- Chart for Exercise -->
    <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 300px; text-align: center;">
      <h3>Exercise</h3>
      <canvas id="exerciseChart" width="100" height="100"></canvas>
    </div>
    <!-- Chart for Leisure -->
    <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 300px; text-align: center;">
      <h3>Leisure</h3>
      <canvas id="leisureChart" width="100" height="100"></canvas>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Real-Time Graph Data
  const realTimeData = {
    labels: ['Work', 'Exercise', 'Leisure', 'Other'],
    datasets: [{
      label: 'Activity Distribution',
      data: [40, 30, 20, 10], // Initial values
      backgroundColor: ['#4caf50', '#ff9800', '#2196f3', '#f44336'],
      hoverOffset: 4
    }]
  };

  const realTimeConfig = {
    type: 'doughnut',
    data: realTimeData,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              const total = context.dataset.data.reduce((sum, val) => sum + val, 0);
              const value = context.raw;
              const percentage = ((value / total) * 100).toFixed(1);
              return `${context.label}: ${value} (${percentage}%)`;
            }
          }
        }
      }
    },
  };

  // Initialize the real-time chart
  const ctx = document.getElementById('realTimeChart').getContext('2d');
  const RealTimeChart = new Chart(ctx, realTimeConfig);

  // Function to update real-time data
  function updateRealTimeData() {
    const newData = realTimeData.datasets[0].data.map(() => Math.floor(Math.random() * 50) + 10);
    realTimeData.datasets[0].data = newData;
    realTimeChart.update();

    const total = newData.reduce((sum, val) => sum + val, 0);
    const percentages = newData.map(value => ((value / total) * 100).toFixed(1));
    document.getElementById('realTimeStats').innerHTML = `
      <p>Real-Time Percentages:</p>
      <ul>
        ${realTimeData.labels.map((label, index) => `<li>${label}: ${percentages[index]}%</li>`).join('')}
      </ul>
    `;
  }
  setInterval(updateRealTimeData, 5000);

  // Detailed Activity Data
  const activityData = {
    work: {
      labels: ['Emails', 'Meetings', 'Coding', 'Presentations', 'Documentation'],
      data: [12, 15, 20, 8, 5]
    },
    exercise: {
      labels: ['Jogging', 'Yoga', 'Gym', 'Cycling', 'Swimming'],
      data: [5, 3, 4, 2, 1]
    },
    leisure: {
      labels: ['Movies', 'Reading', 'Gaming', 'Traveling', 'Socializing'],
      data: [4, 6, 5, 3, 7]
    }
  };

  const activityConfig = (label, data) => ({
    type: 'bar',
    data: {
      labels: label,
      datasets: [{
        label: 'Activities',
        data: data,
        backgroundColor: ['#4caf50', '#ff9800', '#f44336', '#2196f3', '#9c27b0'],
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: true,
          position: 'top',
        },
      },
    }
  });

  // Initialize detailed charts
  new Chart(document.getElementById('workChart'), activityConfig(activityData.work.labels, activityData.work.data));
  new Chart(document.getElementById('exerciseChart'), activityConfig(activityData.exercise.labels, activityData.exercise.data));
  new Chart(document.getElementById('leisureChart'), activityConfig(activityData.leisure.labels, activityData.leisure.data));
</script>

<footer>
  <p> @ 2024 user activity tracker</p>
</footer>
</body>
</html>





