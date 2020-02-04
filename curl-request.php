<?php
$apiKey = "bd96d073-c822-4490-8493-0751a51cce56";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.commerce.coinbase.com/checkouts");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

foreach ($paymentparams as $item) {
    $name = $item->name;
    $description = $item->description;
    $currency = $item->currency;
    $amount = $item->amount;
    $pricing_type = $item->pricing_type;
    $requested_info_email = $item->requested_info_email;
}

$headers = array();
$headers[] = "Content-Type: application/json";
$headers[] = "X-CC-Api-Key: {$apiKey}";
$headers[] = "X-CC-Version: 2018-03-22";

$postdata = "{
                'name': '$name',
                'description': '$description',
                'local_price': {
                'amount': '$amount',
                'currency': '$currency'
                },
                'pricing_type': '$pricing_type',
                'requested_info': ['$requested_info_email']
                }";

curl_setopt($ch, CURLOPT_POST, $postdata);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
(curl_errno($ch)) ? 'Error:' . curl_error($ch) : "";
curl_close($ch);
var_dump($result);

