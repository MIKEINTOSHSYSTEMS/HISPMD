<?php
require '../../vendor/autoload.php';

use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;

// Metabase parameters
$metabaseSiteUrl = 'https://viz.hispmd.merqconsultancy.org'; //replace with the right metabase url
$metabaseSecretKey = '25893c16e94ac3c193ad2bfa3b2dbdba5ea0e663de266dc7649ffc9216e09865'; // Replace with your Metabase secret key

// Get the dashboard ID from the query parameter
$dashboardId = isset($_GET['dashboardId']) ? (int)$_GET['dashboardId'] : 0;

if ($dashboardId <= 0) {
    die('Invalid dashboard ID.');
}

// Create JWT configuration with HMAC SHA-256 signer
$config = Configuration::forSymmetricSigner(
    new Sha256(),
    InMemory::plainText($metabaseSecretKey)
);

// Create the token
$now = new DateTimeImmutable();
$exp = $now->add(new DateInterval('PT10M')); // Token expires in 10 minutes

// You can add parameters if needed for filtering or other purposes
$params = (object)[];

$token = $config->builder()
    ->issuedBy($metabaseSiteUrl) // Configures the issuer (iss claim)
    ->issuedAt($now) // Configures the time that the token was issued (iat claim)
    ->expiresAt($exp) // Configures the expiration time of the token (exp claim)
    ->withClaim('resource', ['dashboard' => $dashboardId]) // Add resource claim
    ->withClaim('params', $params) // Add params claim as an object
    ->getToken($config->signer(), $config->signingKey()); // Retrieves the generated token

// Generate iframe URL
$iframeUrl = $metabaseSiteUrl . "/embed/dashboard/" . $token->toString() . "#theme=transparent&bordered=false&titled=true";

// Return the iframe URL
echo htmlspecialchars($iframeUrl, ENT_QUOTES, 'UTF-8');
// If any Questions Please Contact https://github.com/MIKEINTOSHSYSTEMS 
?>
