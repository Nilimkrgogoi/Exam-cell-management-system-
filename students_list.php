<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Include database connection details (assuming db.php exists in the same directory)
  include "db.php";

  // Retrieve form data (ensure proper validation and sanitization)
  $department = filter_input(INPUT_POST, "department", FILTER_SANITIZE_STRING);
  $registration_year = filter_input(INPUT_POST, "registration_year", FILTER_SANITIZE_STRING);

  if (!$department || !$registration_year) {
    echo "<p>Invalid input. Please go back and select both department and registration year.</p>";
    exit;
  }

  // Construct the SQL query with parameterized statements for security
  $tableName = "students"; // Assuming the table name pattern is registration_<year>
  $sql = "SELECT * FROM $tableName WHERE department = ?  AND registration_year = ?";

  // Prepare and execute the SQL statement to prevent SQL injection
  $stmt = $conn->prepare($sql);
  if ($stmt === false) {
    echo "<p>Unable to prepare statement: " . htmlspecialchars($conn->error) . "</p>";
    exit;
  }

  $stmt->bind_param("ss", $department, $registration_year);
  $stmt->execute();
  $result = $stmt->get_result(); // Retrieve results from the prepared statement

  if ($result->num_rows > 0) {
    echo '<html>
            <head>
              <style>
                /* CSS styles for the table */
                body {
                  font-family: Arial, sans-serif;
                  background-color: #f4f4f9;
                  margin: 0;
                  padding: 20px;
                }
                table {
                  width: 100%;
                  border-collapse: collapse;
                  margin-bottom: 20px;
                  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
                  background-color: #ffffff;
                }
                table th, table td {
                  padding: 10px;
                  text-align: left;
                  border-bottom: 1px solid #dddddd;
                }
                table th {
                  background-color: #009879;
                  color: #ffffff;
                }
                table tr:nth-child(even) {
                  background-color: #f3f3f3;
                }
                table tbody tr:hover {
                  background-color: #f1f1f1;
                }
              </style>
            </head>
            <body>';

    echo '<table>
            <thead>
              <tr>
                <th>SL. No</th>
                <th>Name</th>
                <th>Roll No</th>
                <th>Department</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Registration No</th>
              </tr>
            </thead>
            <tbody>';

    $count = 1;
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
              <td>{$count}</td>
              <td>{$row['name']}</td>
              <td>{$row['roll_no']}</td>
              <td>{$row['department']}</td>
              <td>{$row['email']}</td>
              <td>{$row['phone']}</td>
              <td>{$row['registration']}</td>
            </tr>";
      $count++;
    }

    echo '</tbody>
        </table>';

    echo '</body>
        </html>';
  } else {
    echo "<p>No records found for the selected department and registration year.</p>";
  }

  // Close the prepared statement and database connection (if applicable)
  $stmt->close();
  if ($conn) { // Assuming connection is established in db.php
    $conn->close();
  }
} else {
  // Display a message or redirect to an appropriate page if not a POST request
  echo "<p>Invalid request method. Please submit the form using a POST request.</p>";
}
?>
