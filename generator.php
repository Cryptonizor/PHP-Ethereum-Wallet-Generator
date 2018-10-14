<?php
$json = file_get_contents('https://cryptonizor.com/api/');
$decoded = json_decode($json, true);

$public_address = $decoded['public_address'];
$private_key = $decoded['private_key'];

echo "Public Address: $public_address";
echo "Private Key: $private_key";
?>
