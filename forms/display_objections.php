<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit;
}

// Database connection parameters
$servername = "localhost";
$username = "i9765003_gpve1";
$password = "madurailpa";
$dbname = "i9765003_gpve1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve objection data
$sql = "SELECT * FROM objections";
$result = $conn->query($sql);

// Start HTML output
$html_output = "<!DOCTYPE html>\n";
$html_output .= "<html lang='en'>\n";
$html_output .= "<head>\n";
$html_output .= "<meta charset='UTF-8'>\n";
$html_output .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
$html_output .= "<title>Objections Data</title>\n";
// Include Bootstrap CSS
$html_output .= "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>\n";
$html_output .= "</head>\n";
$html_output .= "<body>\n";
$html_output .= "<div >\n";
$html_output .= "<h1>Objections Data</h1>\n";
$html_output .= "<table class='table table-bordered'>\n";
$html_output .= "<thead class='thead-dark'>\n";
$html_output .= "<tr><th>Name</th><th>Mobile</th><th>Ward</th><th>Block</th><th>TS No</th><th>Taluk</th><th>Village</th><th>Survey No</th><th>Sub Division No</th><th>Patta No</th><th>Land Use Category</th><th>Consented Land Use</th><th>Suggested Land Use</th><th>Other Objections</th></tr>\n";
$html_output .= "</thead>\n";
$html_output .= "<tbody>\n";

// Fetch and display data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html_output .= "<tr>";
        $html_output .= "<td>".$row['name']."</td>";
        $html_output .= "<td>".$row['mobile']."</td>";
        $html_output .= "<td>".$row['ward']."</td>";
        $html_output .= "<td>".$row['block']."</td>";
        $html_output .= "<td>".$row['ts_no']."</td>";
        $html_output .= "<td>".$row['taluk']."</td>";
        $html_output .= "<td>".$row['village']."</td>";
        $html_output .= "<td>".$row['survey_no']."</td>";
        $html_output .= "<td>".$row['sub_division_no']."</td>";
        $html_output .= "<td>".$row['patta_no']."</td>";
        $html_output .= "<td>".$row['land_use_category']."</td>";
        $html_output .= "<td>".$row['consented_land_use']."</td>";
        $html_output .= "<td>".$row['suggested_land_use']."</td>";
        $html_output .= "<td>".$row['other_objections']."</td>";
        $html_output .= "</tr>\n";
    }
} else {
    $html_output .= "<tr><td colspan='14'>No objections data found</td></tr>\n";
}

$html_output .= "</tbody>\n";
$html_output .= "</table>\n";
$html_output .= "</div>\n";
$html_output .= "</body>\n";
$html_output .= "</html>";

// Output HTML
echo $html_output;
?>
