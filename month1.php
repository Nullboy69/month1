<?php

// Retrieve the input number from the URL
$number = isset($_GET['number']) ? $_GET['number'] : '01984487952'; // If 'number' parameter is not provided in the URL, default to '01984487952'

$url = 'https://eshop-api.banglalink.net/api/v1/customer/send-otp';
$data = array(
    'type' => 'phone',
    'phone' => $number
);

$headers = array(
    'Content-Type: application/json'
);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
