<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contact@example.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $educational = $_POST['educational'];
    $occupation = $_POST['occupation'];
    $phyChall = $_POST['phyChall'];
    $knowAboutMasterPlan = $_POST['KnowaboutMasterPlan'];
    $travelMode = $_POST['travel-mode'];
    $dailyTravelDistance = $_POST['dailyTravelDistance'];
    $ownedVehicles = $_POST['ownedVehicles'];
    $preferredCommuteMode = $_POST['preferredCommuteMode'];
    $parkingFacility = $_POST['parkingFacility'];
    $parkingFacilityPublic = $_POST['ParkingFacilityPublic'];
    $electricVehicle = $_POST['ElectricVehicle'];
    $EVUsageReason = $_POST['EVUsageReason'];
    $chargingFacilityPublic = $_POST['ChargingFacilityPublic'];
    // Display the submitted data
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Sex: " . $sex . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Phone: " . $phone . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Educational: " . $educational . "<br>";
    echo "Occupation: " . $occupation . "<br>";
    echo "Physically Challenged: " . $phyChall;
    
} else {
    // If the form is not submitted, display an error message
    echo "Error: Form not submitted.";
}
?>
