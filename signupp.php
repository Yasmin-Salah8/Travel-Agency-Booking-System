<?php
// Establish the database connection
$db = new mysqli('localhost', 'root', '', 'booking');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['fname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];

    // Check if username already exists
    $checkQuery = "SELECT * FROM customer WHERE fname = ?";
    $stmt = $db->prepare($checkQuery);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Username already taken
        echo "<script>alert('Username already taken'); window.location.href = 'signup.php';</script>";
    } else {
        // Insert new user
        $insertQuery = "INSERT INTO customer (fname, password, email, city, phone) VALUES (?, ?, ?, ?, ?)";
        $stmt = $db->prepare($insertQuery);
        $stmt->bind_param("sssss", $username, $password, $email, $city, $phone);

        if ($stmt->execute()) {
            // Successful registration
            header("Location: login.php");
            exit(); // Exit to prevent further execution
        } else {
            // Error during registration
            echo "<script>alert('Error during registration'); window.location.href = 'signup.php';</script>";
        }
    }

    // Close statement
    $stmt->close();
}

// Close the database connection
$db->close();
?>
