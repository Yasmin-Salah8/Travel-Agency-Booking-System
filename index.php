<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name=" viewport" content="width=device-width, initial-scale=1.0">
  <title>Travillia</title>
  <link rel="icon" type="image/png" href="logo.png">
  <link rel="stylesheet" href="styyle.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
    <!-- book now section-->
    <section class="book">
        <div class="book-form">
            <h2>BOOK YOUR PACKAGE</h2>
            <form action="booking.php" method="post">
                <label for="WhereTo">Where To:</label>
                <input type="text" id="WhereTo" name="WhereTo" required><br>
                
                <label for="HowMany">How Many:</label>
                <input type="number" id="HowMany" name="HowMany" required><br>
                
                <label for="Arrival">Arrival Date:</label>
                <input type="date" id="Arrival" name="Arrival" required><br>
                
                <label for="Leaving">Leaving Date:</label>
                <input type="date" id="Leaving" name="Leaving" required><br>
                
                <label for="Name">Name:</label>
                <input type="text" id="Name" name="Name" required><br>
                
                <label for="Email">Email:</label>
                <input type="email" id="Email" name="Email" required><br>
                
                <label for="Phone">Phone:</label>
                <input type="tel" id="Phone" name="Phone" required><br>
                
                <input type="submit" value="Book">
            </form>

        </div>
    </section> 