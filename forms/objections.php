<?php
$servername = "localhost";
$username = "madurailpaadmin";
$password = "madurailpa";;
$dbname = "i9765003_gpve1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    $check_sql = "SELECT * FROM objections WHERE mobile = '$mobile'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        echo "Error: Mobile number already exists. Please use a different mobile number.";
    } else {
        $sql = "INSERT INTO objections (name, mobile, ward, block, ts_no, taluk, village, survey_no, sub_division_no, patta_no, land_use_category, consented_land_use, suggested_land_use, other_objections) VALUES ('$name', '$mobile', '$ward', '$block', '$ts_no', '$taluk', '$village', '$survey_no', '$sub_division_no', '$patta_no', '$land_use_category', '$consented_land_use', '$suggested_land_use', '$other_objections')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

$conn->close();
