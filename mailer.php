<?php 

require 'vendor/autoload.php';
use Mailgun\Mailgun;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
# First, instantiate the SDK with your API credentials
$mg = Mailgun::create('0299ec27ce0798d3d729ecf61f27a1e2-de7062c6-654fc694');

$domain = 'sandbox44b8a087b0004b179900331042bf92a5.mailgun.org';

$mg->messages()->send($domain, [
  'from'    => 'Mr Soliman <info@'.$domain.'>',
  'to'      => 'Baz <'.$email.'>',
  'subject' => 'Hi, '. $name,
  'text'    => 'Thanks for you message. I\'ll contact with you soon!'
]);