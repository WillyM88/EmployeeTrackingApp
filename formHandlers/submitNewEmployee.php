<?php
$name = "";
$nickname = "";
$dailyRate = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    // Check that the name is a valid input
    if (empty($_POST['name'])) {
        $errors['name'] = "Name is required.";
    } else {
        $name = trim($_POST['name']);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $errors['name'] = "Only letters and white space allowed.";
        }
    }

    // Check that the nickname is either null or a valid input
    $nickname = trim($_POST['nickname']);
    if (!preg_match("/^[a-zA-Z ]*$/", $nickname)) {
        $errors['nickname'] = "Only letters and white space allowed.";
    }

    // Check we have a valid float to take as daily rate:

}



$date = $_POST["date"];
$formattedDate = DateTime::createFromFormat('Y-m-d', $date)->format('d/m/Y');

if (!empty($_POST['date_input'])) {
    $date = $_POST['date_input'];
    echo "Selected Date: " . $date;
} else {
    echo "No date selected.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="/styles/reset.css">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>Employee Tracking App</title>
</head>
<body>
<h1>The Employee was submitted successfully</h1>
<a href="../home.php">Home</a>
</body>
</html>
