<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Table Booking</title>
</head>
<body>
    <h1>Table Booking System</h1>
    <form action="book_table.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="number">Number:</label>
        <input type="text" id="number" name="number" required><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date"required><br><br>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time"required><br><br>

        <label for="guests">Number of Guests:</label>
        <input type="number" id="guests" name="guests"required><br><br>

        <input type="submit" value="Book Table">
    </form>
</body>
</html>
