<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni List</title>
</head>
<style>
    main {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #list {
        margin-bottom: 20px;
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
        text-align: left;
    }

    th {
        background-color: #333;
        color: #fff;
    }
</style>

<body>
    <main>
        <section id="cse1">
            <h2>Exam Schedule</h2>
            <table>
                <thead>
                    <tr>
                        <th>Exam No</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <?php
               $sql = "SELECT id, title FROM exams";
               $result = $conn->query($sql);

               $serial = 1;
               
               // Display data in the table
               while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$serial}</td>";
                echo "<td>{$row['title']}</td>";
                echo "</tr>";
                $serial++;
            }
               ?>
            </table>
        </section>

    </main>
</body>

</html>