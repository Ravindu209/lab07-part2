<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
</head>

<body>

<h1>Rohirrim Tour Booking Confirmation</h1>

<?php

if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
}

if (isset($_POST['lastname'])) {
    $lastname = $_POST['lastname'];
}

if (isset($_POST['age'])) {
    $age = $_POST['age'];
}

if (isset($_POST['species'])) {
    $species = $_POST['species'];
}

if (isset($_POST['food'])) {
    $food = $_POST['food'];
}

if (isset($_POST['partysize'])) {
    $partysize = $_POST['partysize'];
}

echo "<p>Welcome $firstname $lastname !</p>";

if (isset($_POST['4day'])) {
    echo "<p>You are now booked on the Four-day tour</p>";
}

if (isset($_POST['10day'])) {
    echo "<p>You are now booked on the Ten-day tour</p>";
}

if (isset($_POST['accom'])) {
    echo "<p>Accommodation is included</p>";
}

if ($species == "M") {
    echo "<p>Species: Human</p>";
}
elseif ($species == "D") {
    echo "<p>Species: Dwarf</p>";
}
elseif ($species == "E") {
    echo "<p>Species: Elf</p>";
}
elseif ($species == "H") {
    echo "<p>Species: Hobbit</p>";
}

echo "<p>Age: $age</p>";

echo "<p>Meal Preference: $food</p>";

echo "<p>Number of travellers: $partysize</p>";

?>

</body>
</html>