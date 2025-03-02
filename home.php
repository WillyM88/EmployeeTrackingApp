<?php
include "./classes/Employee.php";

    $bobby = new Employee(01, "Bobby", 15.0, 0.0, 0.0,0 );
    //$bobby->

    $bobby->addWorkedDate("2025-01-01");
    $bobby->addWorkedDate("2025-02-15");
    $bobby->addWorkedDate("2025-03-28");

    $validationString = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Employee Tracking App</title>
</head>
<body>
 <h1>Add new employee</h1>

    <form action="formHandlers/submitNewEmployee.php" method="POST">
        <div class="container">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br>
        </div>
        <div class="container">
            <label for="nickname">Nickname:</label>
            <input type="text" id="nickname" name="nickname"><br>
        </div>
        <div class="container">
            <label for="dailyrate">Daily Rate:</label>
            <input type="text" id="dailyrate" name="dailyrate"><br>
        </div>
        <div class="container">
            <label for="date">date worked:</label>
            <input type="date" id="date" name="date"><br>
        </div>
        <div class="container">
            <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>
