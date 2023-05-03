<?php
function makeRequest($endpoint, $method, $keyIndex)
{
    $config = file_get_contents('config.json');
    $data = json_decode($config, true);

    $API_KEY = $data['API'][$keyIndex]['key'];

    $ch = curl_init($endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('api-key: ' . $API_KEY));

    $response = curl_exec($ch);
    $responseData = json_decode($response, true);

    curl_close($ch);

    return $responseData;
}
?>