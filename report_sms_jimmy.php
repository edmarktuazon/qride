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

    $sid = "ACa6940b4debde89ee8624dd4685bb1784";
    $token = "87955f9060c1ae1402811fc63c06ff4a";

    $twilio = new Client($sid, $token);

    // data from the POST request, including the concern and complainant_number and rating
    
    $concern = isset($_POST['message']) ? $_POST['message'] : '';
    $emailAddress = isset($_POST['email_address']) ? $_POST['email_address'] : '';
    $complainantNumber = isset($_POST['complainant_number']) ? $_POST['complainant_number'] : '';
    $rating = isset($_POST['rating']) ? $_POST['rating'] : '';

    // body of the message
    $messageBody = "\n\nSomeone reported a driver\n\n";
    $messageBody .= "Name: Jimmy Laxa\n";
    $messageBody .= "TODA: S.J.T.O.D.A\n";
    $messageBody .= "Plate Number: 4847 WU\n";
    $messageBody .= "Email Address: " . $emailAddress . "\n";
    $messageBody .= "Complainant Number: " . $complainantNumber . "\n";
    $messageBody .= "Concern: " . $concern . "\n";
    $messageBody .= "Rating: " . $rating . "\n";
    
   try {
    $message = $twilio->messages
        ->create("+639288314574", // to
            array(
                "from" => "+12565983429", // from
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