<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mark Sheet</title>
<link href="Nalpo.css" rel="stylesheet" type="text/css">
<style>
   * {
    margin: 0;
    padding: 0;
}
#logo {
    position: absolute;
    top: 10px;
    left: 10px;
}
h1{
    text-align: center;
    padding: 0%;
    color: red;
    font-weight: lighter;
}
h2{
    text-align: center;
    padding: 0%;
    color: #003366;
}
h5{
    text-align: center;
    padding: 0%;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    color: #333;
    line-height: 1.6;
}
#logo {
    position: absolute;
    top: 10px;
    left: 10px;
}
 
    body {
        font-family: Arial, sans-serif;
    }

    h2 {
        margin-bottom: 20px;
    }
    table {
        width: 80%; /* Reduce table width */
        border-collapse: collapse;
        margin: 20px auto; /* Center the table */
    }

    table, th, td {
        border: 1px solid black;
        padding: 4px; /* Reduce padding */
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }
    .h1{
        text-align: center;
    }
.btn-print {
    display: block;
    width: 10%;
    padding: 10px;
    background-color: black;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    margin-bottom: 20px;
}

.btn-print:hover {
    background-color: #0056b3;
}

@media print {
    .btn-print {
        display: none;
    }
}
.roll-no {
        text-align: center;
        font-size: 18px;
        margin-top: 10px;
    }
</style>
</head>
<body>
    <h1>Nalbari Polytechnic,Chandkuchi</h1>
    <h2>নলবাৰী পলিটেক্‌নিক্‌,চান্দকুছি</h2>
    <h5>(a govt. of assam institute)</h5>
    <img src="http://www.nalbaripolytechnic.in/images/logo.png" alt="College Logo" id="logo" height="100px">
    <hr>
    <br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "db.php";

    // Retrieve form data
    $department = $_POST["department"];
    $semester = $_POST["semester"];
    $roll_no = $_POST['roll_no'];

    // Construct the SQL query to fetch marks for the given roll number
    $tableName = "marks_" . strtolower(str_replace(" ", "_", $department)) . "_" . $semester;
    $sql = "SELECT * FROM $tableName WHERE roll_no = '$roll_no'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output marks in an HTML table
        echo "<div class='roll-no'><h3>Roll Number: $roll_no</h3></div>";
        echo "<table>
        <tr>
        <th>Subject</th>
        <th>Marks</th>
        </tr>";
        $total_marks = 0;
        // Output data of each row and calculate total marks
        while ($row = $result->fetch_assoc()) {
            foreach ($row as $subject => $marks) {
                if ($subject != "roll_no") {
                    echo "<tr>";
                    echo "<td>$subject</td>";
                    echo "<td>$marks</td>";
                    echo "</tr>";

                    $total_marks += $marks;
                }
            }
        }
        echo "</table>";

        echo "<p>Marks Obtained: $total_marks</p>";
    } else {
        echo "<p>No marks found for roll number: $roll_no</p>";
    }

    $conn->close();
}
?>
<button class="btn-print" onclick="window.print()">Print Mark Sheet</button>
</body>
</html>