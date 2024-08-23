<?php
require '../../vendor/autoload.php';

use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;

// Metabase parameters
$metabaseSiteUrl = 'https://viz.hispmd.merqconsultancy.org';
$metabaseSecretKey = '25893c16e94ac3c193ad2bfa3b2dbdba5ea0e663de266dc7649ffc9216e09865'; // Replace with your Metabase secret key
$dashboardId = 2; // Replace with your dashboard ID

// Create JWT configuration with HMAC SHA-256 signer
$config = Configuration::forSymmetricSigner(
    new Sha256(),
    InMemory::plainText($metabaseSecretKey)
);

// Create the token
$now = new DateTimeImmutable();
$exp = $now->add(new DateInterval('PT10M')); // Token expires in 10 minutes

// You can add parameters if needed for filtering or other purposes
$params = (object)[
    // Add any parameters required by your dashboard or charts here
    // For example: 'region' => 'North', 'date' => '2024-01-01'
    // Leave this as an empty object if there are no params
];

$token = $config->builder()
    ->issuedBy($metabaseSiteUrl) // Configures the issuer (iss claim)
    ->issuedAt($now) // Configures the time that the token was issued (iat claim)
    ->expiresAt($exp) // Configures the expiration time of the token (exp claim)
    ->withClaim('resource', ['dashboard' => $dashboardId]) // Add resource claim
    ->withClaim('params', $params) // Add params claim as an object
    ->getToken($config->signer(), $config->signingKey()); // Retrieves the generated token

// Generate iframe URL
$iframeUrl = $metabaseSiteUrl . "/embed/dashboard/" . $token->toString() . "#theme=transparent&bordered=false&titled=true";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embedded Metabase Dashboard</title>
    <style>
        /* Make sure the body and html elements take up full height */
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }
        /* Style the iframe to cover the entire viewport */
        iframe {
            border: none;
            width: 100%;
            height: 100vh; /* Full viewport height */
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
</head>
<body>
    <iframe
        src="<?= htmlspecialchars($iframeUrl, ENT_QUOTES, 'UTF-8') ?>"
        allowtransparency></iframe>
</body>
</html>
