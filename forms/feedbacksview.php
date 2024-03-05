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

// Query to retrieve feedback data
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

// Close connection
$conn->close();

// Start HTML output
$html_output = "<!DOCTYPE html>\n";
$html_output .= "<html lang='en'>\n";
$html_output .= "<head>\n";
$html_output .= "<meta charset='UTF-8'>\n";
$html_output .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
$html_output .= "<title>Feedback Data</title>\n";
$html_output .= "<!-- Bootstrap CSS -->\n";
$html_output .= "<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'>\n";
$html_output .= "</head>\n";
$html_output .= "<body>\n";
$html_output .= "<div class='container'>\n";
$html_output .= "<h1 class='mt-4'>Feedback Data</h1>\n";
$html_output .= "<table class='table table-bordered mt-4'>\n";
$html_output .= "<thead class='thead-dark'>\n";
$html_output .= "<tr><th>Name</th><th>Email</th><th>Subject</th>><th>Feedback</th></tr>\n";
$html_output .= "</thead>\n";
$html_output .= "<tbody>\n";

// Fetch and display data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html_output .= "<tr>";
        $html_output .= "<td>".$row['name']."</td>";
        $html_output .= "<td>".$row['email']."</td>";
        $html_output .= "<td>".$row['subject']."</td>";
        $html_output .= "<td>".$row['message']."</td>";
        $html_output .= "</tr>\n";
    }
} else {
    $html_output .= "<tr><td colspan='3'>No feedback data found</td></tr>\n";
}

$html_output .= "</tbody>\n";
$html_output .= "</table>\n";
$html_output .= "</div>\n";
$html_output .= "<!-- Bootstrap JS (optional) -->\n";
$html_output .= "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>\n";
$html_output .= "<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>\n";
$html_output .= "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>\n";
$html_output .= "</body>\n";
$html_output .= "</html>";

// Output HTML
echo $html_output;
?>
