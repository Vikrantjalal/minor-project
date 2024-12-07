// JavaScript to handle page switching
function showPage(pageId) {
  // Hide all sections
  document.querySelectorAll('section').forEach(section => section.classList.remove('active'));
  // Show the selected section
  document.getElementById(pageId).classList.add('active');
}

// Add Activity Form Handler
document.querySelector('#add-activity form').addEventListener('submit', function (e) {
  e.preventDefault(); // Prevent page reload

  // Get form values
  const activityName = document.getElementById('activity-name').value;
  const date = document.getElementById('date').value;
  const description = document.getElementById('description').value;

  // Select the dashboard table body
  const tableBody = document.querySelector('#dashboard tbody');

  // Insert a new row
  const newRow = tableBody.insertRow();
  newRow.innerHTML = `
    <td>${tableBody.rows.length + 1}</td>
    <td>${activityName}</td>
    <td>${date}</td>
    <td>${description}</td>
  `;

  // Clear form inputs
  document.getElementById('activity-name').value = '';
  document.getElementById('date').value = '';
  document.getElementById('description').value = '';
});
