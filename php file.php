<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $studentId = $_POST['studentId'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $dob = $_POST['dob'];
    $contact = $_POST['contact'];

    // Database connection (update with your database details)
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO students (student_id, name, email, course, dob, contact) VALUES ('$studentId', '$name', '$email', '$course', '$dob', '$contact')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
