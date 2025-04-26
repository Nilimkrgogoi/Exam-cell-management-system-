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
<?php
// Default sorting order
$sort_order = "ASC";
$status_filter = "";

// Check if the sort parameter is set in the URL
if (isset($_GET['sort'])) {
    $sort_order = $_GET['sort'];
}

// Check if the status parameter is set in the URL
if (isset($_GET['status'])) {
    $status_filter = $_GET['status'];
}

// Modify the SQL query to include the sorting order and status filter
$query = "SELECT * FROM attendance_cse_semester3";
if (!empty($status_filter)) {
    $query .= " WHERE status = '$status_filter'";
}
$query .= " ORDER BY 
    CASE 
        WHEN status = 'NC' THEN 1 
        WHEN status = 'DC' THEN 2 
        WHEN status = 'Clear' THEN 3 
        ELSE 4 
    END $sort_order";

// Execute the query
$result = $conn->query($query);

// Function to output data as CSV
function outputCsv($data, $filename) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    $output = fopen("php://output", "w");
    foreach ($data as $row) {
        fputcsv($output, $row);
    }
    fclose($output);
}

// Function to output data as PDF (You'll need to include a PDF library for this)
// Example using TCPDF: https://tcpdf.org/
function outputPdf($data, $filename) {
    // Code to generate PDF from data
    // Example using TCPDF:
    // require_once('tcpdf/tcpdf.php');
    // $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    // ...
    // Output PDF
    // ...
}

?>
<body>
    <main>
        <section id="cse1">
            <h2>List</h2>
            <form action="" method="get">
                <label for="sort">Sort by Status:</label>
                <select name="status" id="status">
                <option value="">Status</option>
                    <option value="NC">NC</option>
                    <option value="DC">DC</option>
                    <option value="Clear">Clear</option>
                </select>
                <button type="submit">Sort</button>
                <button type="button" onclick="printTable()">Print</button>
            </form>
            <table id="printTable">
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Roll No</th>
                        <th>Subject</th>
                        <th>Attendance</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Display data in the table
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['roll_number']}</td>";
                        echo "<td>{$row['subject']}</td>";
                        echo "<td>{$row['attendance_percentage']}</td>";
                        echo "<td>{$row['status']}</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
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