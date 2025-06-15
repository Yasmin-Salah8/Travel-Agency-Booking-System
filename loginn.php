<?php
session_start();
// Establish the database connection
$db = new mysqli('localhost', 'root', '', 'booking');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // Prepare and execute the select statement to validate the user
    $selectQuery = "SELECT fname, password FROM customer WHERE fname = ? AND password = ?";
    $stmt = $db->prepare($selectQuery);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Record the login attempt
        $loginQuery = "INSERT INTO login (user, pass, date_time) VALUES (?, ?, NOW())";
        $stmt = $db->prepare($loginQuery);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();

        // Successful login
        $_SESSION['user'] = $username; 
        header("Location: websiteFinal.php");
    } else {
        // Invalid username or password
        echo "<script>alert('Invalid username or password'); window.location.href = 'loginn.php';</script>";
    }

    // Close statements
    $stmt->close();
}

// Close the database connection
$db->close();
?>
