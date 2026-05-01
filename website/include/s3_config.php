<?php
require 'vendor/autoload.php';

use Aws\S3\S3Client;

$s3 = new S3Client([
    'version' => 'latest',
    'region'  => 'us-east-2', // change to your bucket region
    'credentials' => [
        'key'    => $_SERVER['AWS_ACCESS_KEY_ID'],
        'secret' => $_SERVER['AWS_SECRET_ACCESS_KEY'],
    ]
]);

$bucket = 'bytebazaar-bucket'; // your bucket name

// Define the base URL for your S3 bucket assets
$s3_base = "https://bytebazaar-bucket.s3.us-east-2.amazonaws.com/";
?>