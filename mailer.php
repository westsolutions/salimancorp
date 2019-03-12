<?php 

require 'vendor/autoload.php';
use Mailgun\Mailgun;

$domain = 'sandbox44b8a087b0004b179900331042bf92a5.mailgun.org';
$API_KEY = '0299ec27ce0798d3d729ecf61f27a1e2-de7062c6-654fc694';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['name']) && $_POST['email'] && $_POST['message']) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $mg = Mailgun::create($API_KEY);

    $result = $mg->messages()->send($domain, [
    'from'    => 'Mr Soliman <info@'.$domain.'>',
    'to'      => $name. ' <'.$email.'>',
    'subject' => 'Hi, '. $name,
    'text'    => 'Thanks for you message. I\'ll contact with you soon!'
    ]);

    if ($result) {
        echo json_encode(array('success' => true));
        die();
    } 
}
echo json_encode(array('success' => false));
die();
