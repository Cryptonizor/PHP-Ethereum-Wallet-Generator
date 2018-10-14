# PHP-Ethereum-Wallet-Generator

The following code can be used to generate Ethereum wallets quickly and easily.

```
<?php
$json = file_get_contents('https://cryptonizor.com/api/');
$decoded = json_decode($json, true);

$public_address = $decoded['public_address'];
$private_key = $decoded['private_key'];

echo "Public Address: $public_address";
echo "Private Key: $private_key";
?>
```

There are no limits on how many Ethereum wallets can be created with the Cryptonizor API.
