<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://dmw9er.api.infobip.com/sms/2/text/advanced",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{"messages":[{"destinations":[{"to":"+94769824305"}],"from":"InfoSMS","text":"parkEase 1.0: This is a sample message"}]}',
    CURLOPT_HTTPHEADER => array(
        "Authorization: App 19b995fc959ea5dfe1c7328c782230c0-8230f0aa-5c5c-443e-9e4c-660d8f675cd4",
        'Content-Type: application/json',
        'Accept: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
