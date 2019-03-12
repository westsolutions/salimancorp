<?php 

require 'vendor/autoload.php';
use Mailgun\Mailgun;

$domain = 'sandbox44b8a087b0004b179900331042bf92a5.mailgun.org';
$API_KEY = '0299ec27ce0798d3d729ecf61f27a1e2-de7062c6-654fc694';

if (isset($_POST['name']) && $_POST['email'] && $_POST['message']) {
    $name = ucfirst($_POST['name']);
    $email = strtolower($_POST['email']);
    $message = ucfirst($_POST['message']);
    $mg = Mailgun::create($API_KEY);
    $args = array(
        'from'    => 'Mr Soliman <info@'.$domain.'>',
        'to'      => $name. ' <'.$email.'>',
        'subject' => 'Hi, '. $name,
        'text'    => 'Thanks for you message. I\'ll contact with you soon!'
    );

    $result = $mg->messages()->send($domain, $args);

    if ($result) {
        echo json_encode(array('success' => true));
        die();
    } 
}
echo json_encode(array('success' => false));
die();
