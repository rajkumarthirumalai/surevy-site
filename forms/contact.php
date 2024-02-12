<?php

/**
 * Requires the "PHP Email Form" library
 * The "PHP Email Form" library is available only in the pro version of the template
 * The library should be uploaded to: vendor/php-email-form/php-email-form.php
 * For more info and help: https://bootstrapmade.com/php-email-form/
 */

// // Replace contact@example.com with your real receiving email address
// $receiving_email_address = 'contact@example.com';

// if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//   include( $php_email_form );
// } else {
//   die( 'Unable to load the "PHP Email Form" Library!');
// }

// $contact = new PHP_Email_Form;
// $contact->ajax = true;

// $contact->to = $receiving_email_address;
// $contact->from_name = $_POST['name'];
// $contact->from_email = $_POST['email'];
// $contact->subject = $_POST['subject'];

// // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
// /*
// $contact->smtp = array(
//   'host' => 'example.com',
//   'username' => 'example',
//   'password' => 'pass',
//   'port' => '587'
// );
// */

// $contact->add_message( $_POST['name'], 'From');
// $contact->add_message( $_POST['email'], 'Email');
// $contact->add_message( $_POST['message'], 'Message', 10);

// echo $contact->send();
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the form data
  $age = $_POST["age"];
  $gender = $_POST["sex"];
  $locality = $_POST["locality"];
  $occupation = $_POST["occupation"];
  $income = $_POST["income"];
  $KnowaboutMasterPlan = $_POST["KnowaboutMasterPlan"];
  $ColdStorage = $_POST["ColdStorage"];
  $LogisticHub = $_POST["LogisticHub"];
  $EconomySatisfaction = $_POST["EconomySatisfaction"];
  $DailyTransport = $_POST["DailyTransport"];
  $TravelDistance = $_POST["TravelDistance"];
  $PreferredPublicTransport = $_POST["PreferredPublicTransport"];
  $ParkingFacilityHome = $_POST["ParkingFacilityHome"];
  $ParkingFacilitiesPublic = $_POST["ParkingFacilitiesPublic"];
  $ElectricVehicleOption = isset($_POST["ElectricVehicleOption"]) ? $_POST["ElectricVehicleOption"] : "";
  $ElectricVehicleReason = isset($_POST["ElectricVehicleReason"]) ? $_POST["ElectricVehicleReason"] : "";
  $ChargingFacilities = $_POST["ChargingFacilities"];
  $DedicatedCycleTrack = $_POST["DedicatedCycleTrack"];
  $NoVehiclesZone = $_POST["NoVehiclesZone"];
  $PedestrianWalkways = $_POST["PedestrianWalkways"];
  $TrafficJunctions = $_POST["TrafficJunctions"];
  $ParaTransitJunctions = $_POST["ParaTransitJunctions"];
  $NewSubArterialRoad = $_POST["NewSubArterialRoad"];
  $AlternativeTransportInitiatives = isset($_POST["AlternativeTransportInitiatives"]) ? $_POST["AlternativeTransportInitiatives"] : "";
  $PublicTransportSatisfaction = $_POST["PublicTransportSatisfaction"];
  $WaterSupply = $_POST["WaterSupply"];
  $WaterSupplyFrequency = $_POST["WaterSupplyFrequency"];
  $WaterStagnation = $_POST["WaterStagnation"];
  $SewageTreatment = $_POST["SewageTreatment"];

  $wasteSegregation = $_POST["waste_segregation"];
  $decentralizationSolidWaste = $_POST["decentralization_solid_waste"];
  $solidWasteSuggestions = $_POST["solid_waste_suggestions"];
  $neighborhood_safety_night = $_POST['neighborhood_safety_night'];
  $emergency_services_satisfaction = $_POST['emergency_services_satisfaction'];
  $police_services_satisfaction = $_POST['police_services_satisfaction'];
  $fire_services_satisfaction = $_POST['fire_services_satisfaction'];
     $medical_services_satisfaction = $_POST['medical_services_satisfaction'];
    $educational_cultural_opportunities = $_POST['educational_cultural_opportunities'];
    $parks_satisfaction = $_POST['parks_satisfaction'];
    $distance_to_park = $_POST['distance_to_park'];
     $recreational_facilities = $_POST['recreational_facilities'];
    $climate_change_concern = $_POST['climate_change_concern'];
    $utilization_abandoned_quarry = $_POST['utilization_abandoned_quarry'];
    $revamping_water_bodies = $_POST['revamping_water_bodies'];
     $desilting_drain_channels = $_POST['desilting_drain_channels'];
    $revitalization_wetlands = $_POST['revitalization_wetlands'];
    $eco_park = $_POST['eco_park'];
    $others = $_POST['others'];
    $tourism_circuit = $_POST['tourism_circuit'];
    $local_business_initiatives = $_POST['local_business_initiatives'];
    $additional_suggestions = $_POST['additional_suggestions'];
} else {
  // If the form is not submitted, display an error message
  echo "Error: Form not submitted.";
}
