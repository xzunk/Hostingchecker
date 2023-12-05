<?php
$ipAddress = $_GET['ip'];

// Make API request to get IP details
$response = file_get_contents("http://ip-api.com/json/{$ipAddress}");
$details = json_decode($response, true);

// Prepare the response data
$result = [
    'status' => $details['status'],
    'message' => $details['message'],
    'continent' => $details['continent'],
    'continentCode' => $details['continentCode'],
    'country' => $details['country'],
    'countryCode' => $details['countryCode'],
    'region' => $details['region'],
    'regionName' => $details['regionName'],
    'city' => $details['city'],
    'district' => $details['district'],
    'zip' => $details['zip'],
    'lat' => $details['lat'],
    'lon' => $details['lon'],
    'timezone' => $details['timezone'],
    'offset' => $details['offset'],
    'currency' => $details['currency'],
    'isp' => $details['isp'],
    'org' => $details['org'],
    'as' => $details['as'],
    'asname' => $details['asname'],
    'reverse' => $details['reverse'],
    'mobile' => $details['mobile'],
    'proxy' => $details['proxy'],
    'hosting' => $details['hosting'],
    'query' => $details['query']
];

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($result);
?>

