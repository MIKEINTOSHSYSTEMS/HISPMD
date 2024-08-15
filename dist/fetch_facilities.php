<?php

function fetchData($pageNumber, $showPerPage) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://mfr-be.k8s.sandboxaddis.com/api/Facility/GetFacilities',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode(array(
            "pageNumber" => $pageNumber,
            "showPerPage" => $showPerPage
        )),
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json, text/plain, */*',
            'Accept-Language: en-US,en;q=0.9',
            'sec-ch-ua-platform: "Windows"',
            'Cache-Control: no-cache',
            'Content-Length: 33',
            'Content-Type: application/json',
            'Origin: https://mfrv2.moh.gov.et',
            'Pragma: no-cache',
            'Referer: https://mfrv2.moh.gov.et/',
            'sec-ch-ua: "Not/A)Brand";v="8", "Chromium";v="126", "Microsoft Edge";v="126"',
            'sec-ch-ua-mobile: ?0'
        ),
    ));

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        echo 'Error:' . curl_error($curl);
        return null;
    }

    curl_close($curl);
    return json_decode($response, true);
}
