<?php
// Assuming connection to database is established here
$connection = mysqli_connect('localhost', 'root', '', 'nalpo');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Fetch form data
    $roll_no = $_POST['roll_no'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];
    $subjects = isset($_POST['subject']) ? $_POST['subject'] : [];
    $eseObtained = isset($_POST['eseObtained']) ? $_POST['eseObtained'] : [];
    $sessionalsObtained = isset($_POST['sessionalsObtained']) ? $_POST['sessionalsObtained'] : [];
    $paObtained = isset($_POST['paObtained']) ? $_POST['paObtained'] : [];
    $ptObtained = isset($_POST['ptObtained']) ? $_POST['ptObtained'] : [];
    $marks = isset($_POST['marks']) ? $_POST['marks'] : [];
    $results = isset($_POST['result']) ? $_POST['result'] : [];

    // Debugging: Output the form data
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Ensure we have arrays for each expected field
    if (is_array($subjects) && is_array($eseObtained) && is_array($sessionalsObtained) && is_array($paObtained) && is_array($ptObtained) && is_array($marks) && is_array($results)) {
        // Insert each subject's marks into the database
        for ($i = 0; $i < count($subjects); $i++) {
            $subject = $subjects[$i];
            $ese = $eseObtained[$i];
            $sessionals = $sessionalsObtained[$i];
            $pa = $paObtained[$i];
            $pt = $ptObtained[$i];
            $marksObtained = $marks[$i];
            $result = $results[$i];
            $created_at = date('Y-m-d H:i:s');
            
            $query = "INSERT INTO marks (roll_no, department, semester, subject, ese_obtained, sessionals_obtained, pa_obtained, pt_obtained, marks_obtained, result, created_at) VALUES ('$roll_no', '$department', '$semester', '$subject', '$ese', '$sessionals', '$pa', '$pt', '$marksObtained', '$result', '$created_at')";
            
            if (!mysqli_query($connection, $query)) {
                echo "Error: " . mysqli_error($connection);
            }
        }
        
        // Redirect or display a success message
        echo "Marks submitted successfully!";
    } else {
        echo "Form data is not valid.";
    }
} else {
    // Handle case where form is not submitted properly
    echo "Invalid request.";
}

// Close database connection
mysqli_close($connection);
?>
