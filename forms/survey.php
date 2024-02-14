<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "madurailpa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $locality = $_POST['locality'];
    $occupation = $_POST['occupation'];
    $income = $_POST['income'];

    // You should sanitize and validate the data before using it in the SQL query

    $sql = "INSERT INTO your_table_name (age, sex, locality, occupation, income) VALUES ('$age', '$sex', '$locality', '$occupation', '$income')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
