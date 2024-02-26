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

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $age = $_POST['age'];
  $sex = $_POST['sex'];
  $locality = $_POST['locality'];
  $occupation = $_POST['occupation'];
  $income = $_POST['income'];
  $KnowaboutMasterPlan = $_POST['KnowaboutMasterPlan'];
  $ColdStorage = $_POST['ColdStorage'];
  $LogisticHub = $_POST['LogisticHub'];
  $EconomySatisfaction = $_POST['EconomySatisfaction'];
  $DailyTransport = $_POST['DailyTransport'];
  $TravelDistance = $_POST['TravelDistance'];
  $PreferredPublicTransport = $_POST['PreferredPublicTransport'];
  $ParkingFacilityHome = $_POST['ParkingFacilityHome'];
  $ParkingFacilitiesPublic = $_POST['ParkingFacilitiesPublic'];
  $ElectricVehicleOption = $_POST['ElectricVehicleOption'];
  $ElectricVehicleReason = isset($_POST['ElectricVehicleReason']) ? $_POST['ElectricVehicleReason'] : "";
  $ChargingFacilities = $_POST['ChargingFacilities'];
  $DedicatedCycleTrack = $_POST['DedicatedCycleTrack'];
  $NoVehiclesZone = $_POST['NoVehiclesZone'];
  $PedestrianWalkways = $_POST['PedestrianWalkways'];
  $TrafficJunctions = $_POST['TrafficJunctions'];
  $ParaTransitJunctions = $_POST['ParaTransitJunctions'];
  $NewSubArterialRoad = $_POST['NewSubArterialRoad'];
  $AlternativeTransportInitiatives = $_POST['AlternativeTransportInitiatives'];
  $PublicTransportSatisfaction = $_POST['PublicTransportSatisfaction'];
  $WaterSupply = $_POST['WaterSupply'];
  $WaterSupplyFrequency = isset($_POST['WaterSupplyFrequency']) ? $_POST['WaterSupplyFrequency'] : "";
  $WaterStagnation = $_POST['WaterStagnation'];
  $SewageTreatment = $_POST['SewageTreatment'];
  $WasteSegregation = $_POST['waste_segregation'];
  $DecentralizationSolidWaste = $_POST['decentralization_solid_waste'];
  $SolidWasteSuggestions = $_POST['solid_waste_suggestions'];
  $neighborhoodSafetyNight = $_POST["neighborhood_safety_night"];
  $emergencyServicesSatisfaction = $_POST["emergency_services_satisfaction"];
  $policeServicesSatisfaction = $_POST["police_services_satisfaction"];
  $fireServicesSatisfaction = $_POST["fire_services_satisfaction"];
  $medicalServicesSatisfaction = $_POST["medical_services_satisfaction"];
  $educationalCulturalOpportunities = $_POST["educational_cultural_opportunities"];
  $parksSatisfaction = $_POST["parks_satisfaction"];
  $distanceToPark = $_POST["distance_to_park"];
  $recreationalFacilities = $_POST["recreational_facilities"];
  $climateChangeConcern = $_POST["climate_change_concern"];
  $utilizationAbandonedQuarry = $_POST["utilization_abandoned_quarry"];
  $revampingWaterBodies = $_POST["revamping_water_bodies"];
  $desiltingDrainChannels = $_POST["desilting_drain_channels"];
  $revitalizationWetlands = $_POST["revitalization_wetlands"];
  $ecoPark = $_POST["eco_park"];
  $others = $_POST["others"];
  $tourismCircuit = $_POST["tourism_circuit"];
  $localBusinessInitiatives = $_POST["local_business_initiatives"];
  $additionalSuggestions = $_POST["additional_suggestions"];

  $sql = "INSERT INTO survey (age, sex, locality, occupation, income,KnowaboutMasterPlan, ColdStorage, LogisticHub, EconomySatisfaction, DailyTransport, TravelDistance, PreferredPublicTransport, ParkingFacilityHome,ParkingFacilitiesPublic, ElectricVehicleOption, ElectricVehicleReason, ChargingFacilities, DedicatedCycleTrack, NoVehiclesZone, PedestrianWalkways, TrafficJunctions, ParaTransitJunctions, NewSubArterialRoad,AlternativeTransportInitiatives, PublicTransportSatisfaction, WaterSupply, WaterSupplyFrequency, WaterStagnation, SewageTreatment, WasteSegregation, DecentralizationSolidWaste, SolidWasteSuggestions,neighborhoodSafetyNight, emergencyServicesSatisfaction, policeServicesSatisfaction, fireServicesSatisfaction, medicalServicesSatisfaction, educationalCulturalOpportunities,parksSatisfaction, distanceToPark, recreationalFacilities, climateChangeConcern, utilizationAbandonedQuarry, revampingWaterBodies,DesiltingDrainChannels, RevitalizationWetlands, EcoPark, Others, TourismCircuit, 
  LocalBusinessInitiatives, AdditionalSuggestions) VALUES ('$age', '$sex', '$locality', '$occupation', '$income','$KnowaboutMasterPlan', '$ColdStorage', '$LogisticHub', '$EconomySatisfaction', '$DailyTransport', '$TravelDistance', '$PreferredPublicTransport', '$ParkingFacilityHome','$ParkingFacilitiesPublic', '$ElectricVehicleOption', '$ElectricVehicleReason', '$ChargingFacilities', '$DedicatedCycleTrack', '$NoVehiclesZone', '$PedestrianWalkways', '$TrafficJunctions', '$ParaTransitJunctions', '$NewSubArterialRoad','$AlternativeTransportInitiatives', '$PublicTransportSatisfaction', '$WaterSupply', '$WaterSupplyFrequency', '$WaterStagnation', '$SewageTreatment', '$WasteSegregation', '$DecentralizationSolidWaste', '$SolidWasteSuggestions','$neighborhoodSafetyNight', '$emergencyServicesSatisfaction', '$policeServicesSatisfaction', 
  '$fireServicesSatisfaction', '$medicalServicesSatisfaction', '$educationalCulturalOpportunities', 
  '$parksSatisfaction', '$distanceToPark', '$recreationalFacilities', '$climateChangeConcern', 
  '$utilizationAbandonedQuarry', '$revampingWaterBodies'
  ,'$desiltingDrainChannels', '$revitalizationWetlands', '$ecoPark', '$others', '$tourismCircuit', 
  '$localBusinessInitiatives', '$additionalSuggestions')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {

  }
}

$conn->close();
