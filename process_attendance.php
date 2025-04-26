<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Attendance</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .calculate-btn {
            display: block;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h2>Add Attendance</h2>

    <?php
    // Include database connection
    include 'db.php'; // Ensure this file contains the correct DB connection details

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Process form data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $department = $_POST['department'];
        $semester = $_POST['semester'];

        // Fetch subjects based on department and semester
        $subjects = [];
        switch ($department) {
            case 'cse':
                switch ($semester) {
                    case '1':
                        $subjects = ["English", "Physics", "Chemistry", "Mathematics", "Engineering Drawing", "Workshop"];
                        break;
                    case '2':
                        $subjects = ["English", "Physics", "Chemistry", "Mathematics", "Engineering Mechanics", "Workshop"];
                        break;
                    case '3':
                        $subjects = ["Computer Application and Programming", "Elements of Multimedia", "Computer Architecture and Organisation", "Mathematics", "Elements of Electrical Engineering"];
                        break;
                    case '4':
                        $subjects = ["Data Structure", "System Programming", "MP & Interfacing", "Advanced C & C++", "Computer Hardware and Networking", "Digital Electronics"];
                        break;
                    case '5':
                        $subjects = ["Database Management System", "Internet & Web Technology", "Computer Communication & Networking", "Java Programming", "Operating System", "Visual Programming"];
                        break;
                    case '6':
                        $subjects = ["Industrial Management & Entrepreneurship", "Cryptography and Network Security", "Mobile Computing", "Artificial Intelligence", "Software Engineering"];
                        break;
                    default:
                        break;
                }
                break;
            case 'el':
                switch ($semester) {
                    case '1':
                        $subjects = ["English", "Physics", "Chemistry", "Mathematics", "Engineering Drawing", "Workshop"];
                        break;
                    case '2':
                        $subjects = ["English", "Physics", "Chemistry", "Mathematics", "Engineering Mechanics", "Workshop"];
                        break;
                    case '3':
                        $subjects = ["Computer Application & Programming", "Engineering Economics & Accountancy", "Principles of Electrical Engineering", "Elements of Mechanical Engineering", "Elements of Electronics & Devices", "Mathematics"];
                        break;
                    case '4':
                        $subjects = ["Electrical Circuit & Network", "Electrical & Electronics Drawing & Design", "Electrical Measurement & Measuring Instrument-I", "Electrical Machines-I", "Electrical Engineering Material", "Digital Electronics"];
                        break;
                    case '5':
                        $subjects = ["Electrical Machine-II", "Electrical Measurement & Measuring Instrument-II", "Electrical Power", "Microprocessor", "Control System", "Non-Conventional Energy Sources"];
                        break;
                    case '6':
                        $subjects = ["Industrial Management & Entrepreneurship", "Installation and Maintenance", "Electrical Estimating and Contracting", "AC Distribution and Utilisation", "Switchgear and Protection"];
                        break;
                    default:
                        break;
                }
                break;
            case 'pt':
                switch ($semester) {
                    case '1':
                        $subjects = ["English", "Physics", "Chemistry", "Mathematics", "Engineering Drawing", "Workshop"];
                        break;
                    case '2':
                        $subjects = ["English", "Physics", "Chemistry", "Mathematics", "Engineering Mechanics", "Workshop"];
                        break;
                    case '3':
                        $subjects = ["Computer Application & Programming", "Engineering Economics & Accountancy", "Element of Electrical Engineering", "Printing Process", "Element of Electronics Engineering", "Prepress Repro Technique"];
                        break;
                    case '4':
                        $subjects = ["Visual Design & DTP", "Image Processing", "Printers Material Science-I", "Gravure Flexography & Screen Printing", "Typesetting & Composition", "Theory of Machines"];
                        break;
                    case '5':
                        $subjects = ["Digital Prepress", "Offset Printing Technology", "Printers Material Science-II", "Planographic Printing Technique-I", "Press Work", "Printing Machine Maintenance"];
                        break;
                    case '6':
                        $subjects = ["Industrial Management & Entrepreneurship", "Binding and Finishing", "Estimating and Costing", "Planographic Printing Technique-II", "Machine"];
                        break;
                    default:
                        break;
                }
                break;
            default:
                break;
        }

        // Fetch student data from database based on department and semester
        $sql = "SELECT roll_no, name FROM students WHERE department='$department' AND semester='$semester'";
        $result = $conn->query($sql);

        if ($result) {
            if ($result->num_rows > 0) {
                // Display the table with subjects, roll no, name, and attendance inputs
                echo "<form id='attendanceForm' action='saveAttendance.php' method='post'>";
                echo "<input type='hidden' name='department' value='$department'>";
                echo "<input type='hidden' name='semester' value='$semester'>";
                echo "<table>";
                echo "<tr>";
                echo "<th>SL No</th>";
                echo "<th>Roll No</th>";
                echo "<th>Name</th>";
                foreach ($subjects as $subject) {
                    echo "<th colspan='3'>$subject</th>";
                }
                echo "<th>Attendance %</th>";
                echo "<th>Status</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<th></th>";
                echo "<th></th>";
                echo "<th></th>";
                foreach ($subjects as $subject) {
                    echo "<th>Total Classes</th>";
                    echo "<th>Attended Classes</th>";
                    echo "<th>Calculate Percentage</th>";
                }
                echo "<th></th>";
                echo "<th></th>";
                echo "</tr>";

                $sl_no = 1;
                while ($row = $result->fetch_assoc()) {
                    $roll_no = $row['roll_no'];
                    $name = $row['name'];
                    echo "<tr>";
                    echo "<td>$sl_no</td>";
                    echo "<td>$roll_no</td>";
                    echo "<td>$name</td>";
                   //...
                   // ...

foreach ($subjects as $subject) {
    echo "<td><input type='number' name='total_classes[$roll_no][$subject]' min='0' max='100'></td>";
    echo "<td><input type='number' name='attended_classes[$roll_no][$subject]' min='0' max='100'></td>";
    echo "<td><button type='button' class='calculate-btn' data-roll-no='$roll_no' data-subject='$subject'>Calculate</button></td>";
    echo "<td><input type='text' name='attendance_percentage[$roll_no][$subject]' readonly></td>"; // Display calculated percentage
}

echo "<td><input type='text' name='attendance_percentage[$roll_no]' readonly></td>"; // Display overall percentage
echo "<td><input type='text' name='status[$roll_no]' class='attendance-status' readonly></td>"; // Display status

// ...
                    echo "</tr>";
                    $sl_no++;
                }
                echo "</table>";
                echo "<br><input type='submit' value='Save'>";
                echo "</form>";
            } else {
                echo "No students found for the selected department and semester.";
            }
        } else {
            echo "Error: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Invalid request method.";
    }
    ?>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('attendanceForm');
    if (form) {
        form.addEventListener('click', function(event) {
            if (event.target.classList.contains('calculate-btn')) {
                const button = event.target;
                const rollNo = button.dataset.rollNo;
                const subject = button.dataset.subject;
                const totalClassesInput = button.closest('tr').querySelector(`input[name='total_classes[${rollNo}][${subject}]']`);
                const attendedClassesInput = button.closest('tr').querySelector(`input[name='attended_classes[${rollNo}][${subject}]']`);
                const attendancePercentageInput = button.closest('tr').querySelector(`input[name='attendance_percentage[${rollNo}][${subject}]']`);
                const attendanceStatusInput = button.closest('tr').querySelector(`input[name='status[${rollNo}]']`);

                const totalClasses = parseInt(totalClassesInput.value) || 0;
                const attendedClasses = parseInt(attendedClassesInput.value) || 0;

                if (totalClasses > 0 && attendedClasses <= totalClasses) {
                    const percentage = ((attendedClasses / totalClasses) * 100).toFixed(2);
                    attendancePercentageInput.value = percentage;

                    let totalPercentage = 0;
                    let totalSubjects = 0;
                    const percentageInputs = button.closest('tr').querySelectorAll(`input[name^='attendance_percentage[${rollNo}]']`);
                    percentageInputs.forEach(input => {
                        if (input.value) {
                            totalPercentage += parseFloat(input.value);
                            totalSubjects++;
                        }
                    });
                    const overallPercentage = (totalPercentage / totalSubjects).toFixed(2);
                    button.closest('tr').querySelector(`input[name='attendance_percentage[${rollNo}]']`).value = overallPercentage;

                    if (overallPercentage >= 75) {
                        attendanceStatusInput.value = "Collegiate";
                    } else if (overallPercentage >= 60) {
                        attendanceStatusInput.value = "Non-Collegiate";
                    } else {
                        attendanceStatusInput.value = "Dis-Collegiate";
                    }
                } else {
                    attendancePercentageInput.value = '';
                    attendanceStatusInput.value = '';
                }
            }
        });
    }
});
</script>
</body>
</html>