<?php

########### CONFIG ###############

$recipient = 'katharina@hinnrichs.de';
$redirect = 'success.html';

########### CONFIG END ###########



########### Intruction ###########   
#
#   This script has been created to send an email to the $recipient
#   
#  1) Upload this file to your FTP Server
#  2) Send a POST rewquest to this file, including
#     [name] The name of the sender (Absender)
#     [message] Message that should be send to you
#
##################################




switch ($_SERVER['REQUEST_METHOD']) {
    case ("OPTIONS"): //Allow preflighting to take place.
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Allow-Headers: content-type");
        exit;
    case ("POST"): //Send the email;
        header("Access-Control-Allow-Origin: *");

        $subject = "Kontakt: " . $_POST['name'];
        $headers = "From: " . $_POST['email'];

        mail($recipient, $subject, "Betreff: " . $_POST['reference']  ."\n \n Nachricht: " . $_POST['message'] ."\n \n \n  Email gesendet von: " . $_POST['email'] , $headers);
        // mail($recipient, $subject, $_POST['message'] ."\n Email gesendet von: " . $_POST['email'] , $headers); falls der code probleme macht.
        header("Location: " . $redirect); 

        break;
    default: //Reject any non POST or OPTIONS requests.
        header("Allow: POST", true, 405);
        exit;
}
