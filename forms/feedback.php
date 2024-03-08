<?php
// Database connection parameters
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "i9765003_gpve1";

$servername = "localhost";
$username = "i9765003_gpve1";
$password = "madurailpa";
$dbname = "i9765003_gpve1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle first form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['form_type'] == "feedback") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Insert data into the feedback table
    $sql = "INSERT INTO feedback (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully";
            } else {
        echo "Error: " . $conn->error;
    }
}

// Handle second form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['form_type'] == "objections") {
    $uploads_dir = 'uploads/'; // Specify the directory where you want to save the uploaded files

if (!empty($_FILES['files']['name'][0])) {
    foreach ($_FILES['files']['name'] as $key => $val) {
        $file_name = basename($_FILES['files']['name'][$key]);
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_dest = $uploads_dir . $file_name;

        if (move_uploaded_file($file_tmp, $file_dest)) {
            // File uploaded successfully
        } else {
            // Error uploading file
            echo "Error uploading file: " . $file_name;
        }
    }
}

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $ward = $_POST['ward'];
    $block = $_POST['block'];
    $ts_no = $_POST['ts_no'];
    $taluk = $_POST['taluk'];
    $village = $_POST['village'];
    $survey_no = $_POST['survey_no'];
    $sub_division_no = $_POST['sub_division_no'];
    $patta_no = $_POST['patta_no'];
    $land_use_category = $_POST['land_use_category'];
    $consented_land_use = $_POST['consented_land_use'];
    $suggested_land_use = $_POST['suggested_land_use'];
    $other_objections = $_POST['other_objections'];
    $file_names = implode(",", $_FILES['files']['name']);

    $sql = "INSERT INTO objections (name, mobile, ward, block, ts_no, taluk, village, survey_no, sub_division_no, patta_no, land_use_category, consented_land_use, suggested_land_use, other_objections, file_names) VALUES ('$name', '$mobile', '$ward', '$block', '$ts_no', '$taluk', '$village', '$survey_no', '$sub_division_no', '$patta_no', '$land_use_category', '$consented_land_use', '$suggested_land_use', '$other_objections', '$file_names')";

    if ($conn->query($sql) === TRUE) {
        echo "Objections submitted successfully";
            } else {
        echo "Error: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
