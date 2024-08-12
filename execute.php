<?php

require 'vendor/autoload.php'; 
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use FireBird\FireBird;

try {
    $projectId = $_ENV['PROJECT_ID'];
    $apiUrl = $_ENV['API_URL'];
    $fireBird = new FireBird($projectId, $apiUrl);

   /* $fireBird->setFirstName('Shubam');
    $fireBird->setLastName('Sharma');

    $fireBird->setUserAttribute('address', 'mohali', 'String');*/

    $response = $fireBird->execute();
    print_r($response);
} catch (\Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
