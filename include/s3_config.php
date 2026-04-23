<?php
require 'vendor/autoload.php';

use Aws\S3\S3Client;

$s3 = new S3Client([
    'version' => 'latest',
    'region'  => 'us-east-2', // change to your bucket region
    'credentials' => [
        'key'    => 'AKIAQUFLQC5CT7M3KX5H',
        'secret' => 'GBxF9W2sBzWzbmXfJ5zNA/3vOiHJRzsXM2ahTRCz',
    ]
]);

$bucket = 'bytebazaar-bucket'; // your bucket name
?>