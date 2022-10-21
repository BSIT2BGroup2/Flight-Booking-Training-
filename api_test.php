<?php

$queryString = http_build_query([
  'access_key' => 'ba2a100b516a5eeb4a93b4ce14e1ded6'
]);

$ch = curl_init(sprintf('%s?%s', 'http://api.aviationstack.com/v1/flights', $queryString));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$json = curl_exec($ch);
#print($json);
curl_close($ch);

$api_result = json_decode($json, true);

foreach ($api_result['data'] as $flight) {
    if ($flight['departure']['iata'] == 'CHC') {
        echo
            $flight['airline']['name'],
            $flight['flight']['iata'],
            $flight['departure']['airport'],
            $flight['departure']['iata'],
            $flight['arrival']['airport'],
            $flight['arrival']['iata']
            ;
    }
}