<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit;
}
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "i9765003_gpve1";

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

// Query to retrieve survey data
$sql = "SELECT * FROM survey";
$result = $conn->query($sql);

// Close connection
$conn->close();

// Start HTML output
$html_output = "<!DOCTYPE html>\n";
$html_output .= "<html lang='en'>\n";
$html_output .= "<head>\n";
$html_output .= "<meta charset='UTF-8'>\n";
$html_output .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
$html_output .= "<title>Survey Data</title>\n";
$html_output .= "<!-- Bootstrap CSS -->\n";
$html_output .= "<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'>\n";
$html_output .= "</head>\n";
$html_output .= "<body>\n";
// Navbar
$html_output .= "<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>\n";
$html_output .= "<a class='navbar-brand' href='././display_objections.php'>Dashboard</a>\n";
$html_output .= "<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>\n";
$html_output .= "<span class='navbar-toggler-icon'></span>\n";
$html_output .= "</button>\n";
$html_output .= "<div class='collapse navbar-collapse' id='navbarSupportedContent'>\n";
$html_output .= "<ul class='navbar-nav mr-auto'>\n";
$html_output .= "<li class='nav-item'>\n";
$html_output .= "<a class='nav-link' href='./display_objections.php'>Display Objections</a>\n";
$html_output .= "</li>\n";
$html_output .= "<li class='nav-item'>\n";
$html_output .= "<a class='nav-link' href='./feedbacksview.php'>Feedbacks View</a>\n";
$html_output .= "</li>\n";
$html_output .= "<li class='nav-item'>\n";
$html_output .= "<a class='nav-link' href='./surveyview.php'>Survey View</a>\n";
$html_output .= "</li>\n";
$html_output .= "</ul>\n";
$html_output .= "</div>\n";
$html_output .= "</nav>\n";
$html_output .= "<div class=''>\n";
$html_output .= "<h1 class='mt-4'>Survey Data</h1>\n";
$html_output .= "<table class='table table-bordered mt-4'>\n";
$html_output .= "<thead class='thead-dark'>\n";
$html_output .= "<tr>";
$html_output .= "<th>ID</th><th>Age</th><th>Sex</th><th>Locality</th><th>Occupation</th>";
$html_output .= "<th>Income</th><th>KnowaboutMasterPlan</th><th>ColdStorage</th><th>LogisticHub</th>";
$html_output .= "<th>EconomySatisfaction</th><th>DailyTransport</th><th>TravelDistance</th><th>PreferredPublicTransport</th>";
$html_output .= "<th>ParkingFacilityHome</th><th>ParkingFacilitiesPublic</th><th>ElectricVehicleOption</th><th>ElectricVehicleReason</th>";
$html_output .= "<th>ChargingFacilities</th><th>DedicatedCycleTrack</th><th>NoVehiclesZone</th><th>PedestrianWalkways</th>";
$html_output .= "<th>TrafficJunctions</th><th>ParaTransitJunctions</th><th>NewSubArterialRoad</th><th>AlternativeTransportInitiatives</th>";
$html_output .= "<th>PublicTransportSatisfaction</th><th>WaterSupply</th><th>WaterSupplyFrequency</th><th>WaterStagnation</th>";
$html_output .= "<th>SewageTreatment</th><th>WasteSegregation</th><th>DecentralizationSolidWaste</th><th>SolidWasteSuggestions</th>";
$html_output .= "<th>NeighborhoodSafetyNight</th><th>EmergencyServicesSatisfaction</th><th>PoliceServicesSatisfaction</th>";
$html_output .= "<th>FireServicesSatisfaction</th><th>MedicalServicesSatisfaction</th><th>EducationalCulturalOpportunities</th>";
$html_output .= "<th>ParksSatisfaction</th><th>DistanceToPark</th><th>RecreationalFacilities</th><th>ClimateChangeConcern</th>";
$html_output .= "<th>UtilizationAbandonedQuarry</th><th>RevampingWaterBodies</th><th>DesiltingDrainChannels</th>";
$html_output .= "<th>RevitalizationWetlands</th><th>EcoPark</th><th>Others</th><th>TourismCircuit</th><th>LocalBusinessInitiatives</th>";
$html_output .= "<th>AdditionalSuggestions</th><th>SubmissionDate</th>";
$html_output .= "</tr>\n";
$html_output .= "</thead>\n";
$html_output .= "<tbody>\n";

// Fetch and display data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html_output .= "<tr>";
        foreach ($row as $value) {
            $html_output .= "<td>".$value."</td>";
        }
        $html_output .= "</tr>\n";
    }
} else {
    $html_output .= "<tr><td colspan='54'>No survey data found</td></tr>\n";
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
