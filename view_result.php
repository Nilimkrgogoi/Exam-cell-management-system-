<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $view_department = $_POST["view_department"];
    $view_semester = $_POST["view_semester"];

    // Construct the SQL query to fetch results for the selected department and semester
    $sql = "SELECT * FROM exam_results";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <style>
        main {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .search-bar {
            margin-bottom: 20px;
        }

        .btn-print {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <main>
        <section id="cse1">
            <h2>List</h2>
            <form action="" method="get">
                <label for="sort">Sort by Status:</label>
                <select name="status" id="status">
                <option value="">Status</option>
                <option value="Clear">Clear</option>
                    <option value="Retest">Retest</option>
                </select>
                <button type="submit">Sort</button>
                <label for="sort">Sort by Department:</label>
                <select id="department" name="department">
                <option value="cse">Computer Science & Engineering</option>
                <option value="el">Electrical Engineering</option>
                <option value="pt">Printing Technology</option>
                </select>
               
            <button type="submit">Sort</button>
            </form>
            <?php if(isset($result)) : ?>
            <button class="btn-print" onclick="printTable()">Print</button>
            <table id="printTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Roll Number</th>
                        <th>Department</th>
                        <th>Semester</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["roll_no"] . "</td>";
                        echo "<td>" . $row["department"] . "</td>";
                        echo "<td>" . $row["semester"] . "</td>";
                        echo "<td>" . $row["result"] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <?php endif; ?>
        </section>
    </main>

    <script>
        function printTable() {
            var table = document.getElementById("printTable").outerHTML;
            var newWin = window.open('', 'Print-Window');
            newWin.document.open();
            newWin.document.write('<html><head><title>Print</title></head><body>' + table + '</body></html>');
            newWin.document.close();
            newWin.print();
        }
    </script>
</body>

</html>
