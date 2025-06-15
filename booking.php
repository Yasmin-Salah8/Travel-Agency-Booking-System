<?php
// Ensure all form fields are set
if (isset($_POST['WhereTo'], $_POST['HowMany'], $_POST['Arrival'], $_POST['Leaving'], $_POST['Name'], $_POST['Email'], $_POST['Phone'])) {
    
    // Assign form data to variables
    $whereTo = $_POST['WhereTo'];
    $howMany = $_POST['HowMany'];
    $arrival = $_POST['Arrival'];
    $leaving = $_POST['Leaving'];
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];

    // Display form data for debugging purposes
    echo "Where To: $whereTo<br>";
    echo "How Many: $howMany<br>";
    echo "Arrival Date: $arrival<br>";
    echo "Leaving Date: $leaving<br>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Phone: $phone<br>";

    // Database connection parameters
    $servername = "localhost";  // typically "localhost"
    $username = "root";
    $password = "";
    $dbname = "booking";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO bookings (WhereTO, HowMany, Arrivals, Leaving, Name, Email, Phone) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $whereTo, $howMany, $arrival, $leaving, $name, $email, $phone);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
        echo "<script>alert('Message sent successfully!'); window.location.href = 'websiteFinal.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();

} else {
    echo "Please fill in all fields.";
}
?>
