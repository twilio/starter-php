<?php

// Load the Twilio helper library and our configuration file
include 'Services/Twilio.php';
include 'config.php';

// Create an authenticated REST client
$client = new Services_Twilio($TWILIO_ACCOUNT_SID, $TWILIO_AUTH_TOKEN);

// Make an outbounf call
$call = $client->account->calls->create(
    $TWILIO_NUMBER, 
    $_POST['to'], 
    'http://twimlets.com/message?Message%5B0%5D=http://demo.kevinwhinnery.com/audio/zelda.mp3'
);

// Send a string reply back
echo 'Call inbound!';