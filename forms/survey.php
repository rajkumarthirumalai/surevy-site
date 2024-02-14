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
  $KnowaboutMasterPlan = $_POST['KnowaboutMasterPlan'];
  $ColdStorage = $_POST['ColdStorage'];
  $LogisticHub = $_POST['LogisticHub'];
  $EconomySatisfaction = $_POST['EconomySatisfaction'];
  $DailyTransport = $_POST['DailyTransport'];
  $TravelDistance = $_POST['TravelDistance'];
  $PreferredPublicTransport = $_POST['PreferredPublicTransport'];
  $ParkingFacilityHome = $_POST['ParkingFacilityHome'];
  $ParkingFacilitiesPublic = $_POST['ParkingFacilitiesPublic'];
  $ElectricVehicleOption = isset($_POST['ElectricVehicleOption']) ? $_POST['ElectricVehicleOption'] : "";
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
  $WaterSupplyFrequency = $_POST['WaterSupplyFrequency'];
  $WaterStagnation = $_POST['WaterStagnation'];
  $SewageTreatment = $_POST['SewageTreatment'];
  $WasteSegregation = $_POST['waste_segregation'];
  $DecentralizationSolidWaste = $_POST['decentralization_solid_waste'];
  $SolidWasteSuggestions = $_POST['solid_waste_suggestions'];
  $NeighborhoodSafetyNight = $_POST['neighborhood_safety_night'];
  $EmergencyServicesSatisfaction = $_POST['emergency_services_satisfaction'];
  $PoliceServicesSatisfaction = $_POST['police_services_satisfaction'];
  $FireServicesSatisfaction = $_POST['fire_services_satisfaction'];
  $MedicalServicesSatisfaction = $_POST['medical_services_satisfaction'];
  $EducationalCulturalOpportunities = $_POST['educational_cultural_opportunities'];
  $ParksSatisfaction = $_POST['parks_satisfaction'];
  $DistanceToPark = $_POST['distance_to_park'];
  $RecreationalFacilities = $_POST['recreational_facilities'];
  $ClimateChangeConcern = $_POST['climate_change_concern'];
  $UtilizationAbandonedQuarry = $_POST['utilization_abandoned_quarry'];
  $RevampingWaterBodies = $_POST['revamping_water_bodies'];
  $DesiltingDrainChannels = $_POST['desilting_drain_channels'];
  $RevitalizationWetlands = $_POST['revitalization_wetlands'];
  $EcoPark = $_POST['eco_park'];
  $Others = $_POST['others'];
  $TourismCircuit = $_POST['tourism_circuit'];
  $LocalBusinessInitiatives = $_POST['local_business_initiatives'];
  $AdditionalSuggestions = $_POST['additional_suggestions'];

  // Prepare the SQL query
  $sql = "INSERT INTO survey 
          (age, sex, locality, occupation, income, KnowaboutMasterPlan, ColdStorage, LogisticHub, EconomySatisfaction, DailyTransport, TravelDistance, PreferredPublicTransport, ParkingFacilityHome, ParkingFacilitiesPublic, ElectricVehicleOption, ElectricVehicleReason, ChargingFacilities, DedicatedCycleTrack, NoVehiclesZone, PedestrianWalkways, TrafficJunctions, ParaTransitJunctions, NewSubArterialRoad, AlternativeTransportInitiatives, PublicTransportSatisfaction, WaterSupply, WaterSupplyFrequency, WaterStagnation, SewageTreatment, WasteSegregation, DecentralizationSolidWaste, SolidWasteSuggestions, NeighborhoodSafetyNight, EmergencyServicesSatisfaction, PoliceServicesSatisfaction, FireServicesSatisfaction, MedicalServicesSatisfaction, EducationalCulturalOpportunities, ParksSatisfaction, DistanceToPark, RecreationalFacilities, ClimateChangeConcern, UtilizationAbandonedQuarry, RevampingWaterBodies, DesiltingDrainChannels, RevitalizationWetlands, EcoPark, Others, TourismCircuit, LocalBusinessInitiatives, AdditionalSuggestions) 
          VALUES ( '$age', '$sex', '$locality', '$occupation', '$income', '$KnowaboutMasterPlan', '$ColdStorage', '$LogisticHub', '$EconomySatisfaction', '$DailyTransport', '$TravelDistance', '$PreferredPublicTransport', '$ParkingFacilityHome', '$ParkingFacilitiesPublic', '$ElectricVehicleOption', '$ElectricVehicleReason', '$ChargingFacilities', '$DedicatedCycleTrack', '$NoVehiclesZone', '$PedestrianWalkways', '$TrafficJunctions', '$ParaTransitJunctions', '$NewSubArterialRoad', '$AlternativeTransportInitiatives', '$PublicTransportSatisfaction', '$WaterSupply', '$WaterSupplyFrequency', '$WaterStagnation', '$SewageTreatment', '$WasteSegregation', '$DecentralizationSolidWaste', '$SolidWasteSuggestions', '$NeighborhoodSafetyNight', '$EmergencyServicesSatisfaction', '$PoliceServicesSatisfaction', '$FireServicesSatisfaction', '$MedicalServicesSatisfaction', '$EducationalCulturalOpportunities', '$ParksSatisfaction', '$DistanceToPark', '$RecreationalFacilities', '$ClimateChangeConcern', '$UtilizationAbandonedQuarry', '$RevampingWaterBodies', '$DesiltingDrainChannels', '$RevitalizationWetlands', '$EcoPark', '$Others', '$TourismCircuit', '$LocalBusinessInitiatives', '$AdditionalSuggestions')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $conn->error;
  }
}
$conn->close();
