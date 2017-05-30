<?php

require 'vendor/autoload.php';
const DEFAULT_URL = 'https://eventful-c4557.firebaseio.com/';
const DEFAULT_TOKEN = 'WltlY0KBygvHgKfoS9kK8GBi8hUveXz1X5dROqWY';
const DEFAULT_PATH = '/ORGANISER';

$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
//$firebase = new FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
// --- storing an array ---
echo "test";
$test = array(
    "acra" => "valid_acra_only",
    "address" => "company_site_address",
    "business_contact_number" => "99999999",
    "business_site" => "rp.edu.sg",
    "description" => "this is a description",
    "email" => "15017523@rp.edu.sg",
    "password" => "T1234!",
    "status" => "active",
    "username" => 15017523
);

$firebase->push(DEFAULT_PATH, $test);

// --- reading the stored string ---
$name = $firebase->get(DEFAULT_PATH );
echo json_encode($name);
?>