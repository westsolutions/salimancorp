<?php 

require 'vendor/autoload.php';
use Mailgun\Mailgun;

# First, instantiate the SDK with your API credentials
$mg = Mailgun::create('0299ec27ce0798d3d729ecf61f27a1e2-de7062c6-654fc694');

$mg->messages()->send('YOUR_DOMAIN_NAME', [
  'from'    => 'Excited User <mailgun@YOUR_DOMAIN_NAME>',
  'to'      => 'Baz <YOU@YOUR_DOMAIN_NAME>',
  'subject' => 'Hello',
  'text'    => 'Testing some Mailgun awesomness!'
]);