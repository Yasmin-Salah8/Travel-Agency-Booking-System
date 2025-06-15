<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format'); window.location.href = 'websiteFinal.php';</script>";
        exit;
    }

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "booking";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO review (fullname, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fullname, $email, $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Message sent successfully!'); window.location.href = 'websiteFinal.php';</script>";
    } else {
        echo "<script>alert('Error sending message'); window.location.href = 'websiteFinal.php';</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
