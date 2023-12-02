<?php

phpinfo();
    // Update the path below to your autoload.php,
    // see https://getcomposer.org/doc/01-basic-usage.md
    require('./vendor/autoload.php');
    // use Dotenv\Dotenv;

    // $dotenv = Dotenv::createImmutable(_DIR_);
    // $dotenv->load();
    // use Twilio\Rest\Client;
    use Twilio\Rest\Client;

    $sid = "AC7b50bce8f10572028a42143070ed3b61";
$token = "a3c83f4e03c97cd2a84228e4b0c97a16";


    $twilio = new Client($sid, $token);

    // data from the POST request, including the concern and complainant_number and rating
    $concern = isset($_POST['message']) ? $_POST['message'] : '';
    $emailAddress = isset($_POST['email_address']) ? $_POST['email_address'] : '';
    $complainantNumber = isset($_POST['complainant_number']) ? $_POST['complainant_number'] : '';
    $rating = isset($_POST['rating']) ? $_POST['rating'] : '';

    // body of the message
    $messageBody = "\n\nSomeone reported a driver\n\n";
    $messageBody .= "Name: Ernesto V. Macabali\n";
    $messageBody .= "TODA: UA MAIN GATE UNISITE SUBDIVISION DEL PILAR CSFP\n";
    $messageBody .= "Plate Number: 0352-0193229\n";
    $messageBody .= "Email Address: " . $emailAddress . "\n";
    $messageBody .= "Complainant Number: " . $complainantNumber . "\n";
    $messageBody .= "Concern: " . $concern . "\n";
    $messageBody .= "Rating: " . $rating . "\n";
    
    try {
    $message = $twilio->messages
        ->create("+639357501935", // to
            array(
                "from" => "++16699001521", // from
                "body" => $messageBody
            )
        );

    print($message->sid);
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}


    print($message->sid);
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>
<!-- myla -->
<!-- +12568587605
+639610973147 -->