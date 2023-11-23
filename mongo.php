<?php
// replace the ip and port to your mongo server address
// $manager = new MongoDB\Driver\Manager("mongodb://127.0.0.1:27017");
// try {
//     echo 'success';
// } catch (\Exception $e) {
//     echo 'fail';
// }

// require 'vendor/autoload.php';
// <?php

require_once __DIR__ . '/vendor/autoload.php';

// use Exception;
use MongoDB\Client;
use MongoDB\Driver\ServerApi;

$uri = "mongodb+srv://shavakkar:shavakkar@cluster0.in7eslz.mongodb.net/?retryWrites=true&w=majority";
// Specify Stable API version 1
// $apiVersion = new ServerApi(ServerApi::V1);
// Create a new client and connect to the server
$client = new MongoDB\Client($uri);
try {
    // Send a ping to confirm a successful connection
    $client->selectDatabase('guvi')->command(['ping' => 1]);
    echo "Pinged your deployment. You successfully connected to MongoDB!\n";
} catch (Exception $e) {
    printf($e->getMessage());
}
