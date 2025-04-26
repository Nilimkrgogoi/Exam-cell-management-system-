    // Function to calculate attendance percentage and status
    function calculateAttendance() {
        var attendedClasses = parseInt(document.getElementById('attended_classes').value);
        var totalClasses = parseInt(document.getElementById('total_classes').value);

        if (totalClasses <= 0) {
            alert('Total classes must be greater than 0.');
            return;
        }

        var attendancePercentage = (attendedClasses / totalClasses) * 100;
        document.getElementById('attendance_percentage').value = attendancePercentage.toFixed(2) + '%';

        var status;
        if (attendancePercentage >= 75) {
            status = 'Clear';
        } else if (attendancePercentage >= 60) {
            status = 'NC';
        } else {
            status = 'DC';
        }
        document.getElementById('status').value = status;
    }

    // Function to submit attendance
    function submitAttendance() {
        // Validate form fields
        var department = document.getElementById('department').value;
        var semester = document.getElementById('semester').value;
        var rollNumber = document.getElementById('roll_number').value;
        var attendedClasses = document.getElementById('attended_classes').value;
        var totalClasses = document.getElementById('total_classes').value;
        var status = document.getElementById('status').value;

        if (department === '' || semester === '' || rollNumber === '' || attendedClasses === '' || totalClasses === '' || status === '') {
            alert('Please fill out all fields.');
            return;
        }

        // Submit the form
        document.getElementById('attendanceForm').submit();
    }
  