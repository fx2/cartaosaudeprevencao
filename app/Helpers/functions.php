<?php

use Illuminate\Support\Facades\Log;

function curl($url, $authorizatinArray = null, $arrayPost = null)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    if ($arrayPost != null)
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrayPost));

    if ($authorizatinArray) {
        $username = $authorizatinArray['username'] ?? null;
        $password = $authorizatinArray['password'] ?? null;
        $token = $authorizatinArray['token'] ?? null;

        if (!is_null($username) AND !is_null($password))
            curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

        if (!is_null($token))
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $token ));
    }
    
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    $output = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);

    return $output;
}

function jwt_request($url, $token, $post = null) {

    header('Content-Type: application/json'); // Specify the type of data
    $ch = curl_init($url); // Initialise cURL
    $authorization = "Authorization: Bearer ".$token; // Prepare the authorisation token
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); // Inject the token into the header
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    if (!is_null($post)) {
        $post = json_encode($post); // Encode the data array into a JSON string
        curl_setopt($ch, CURLOPT_POST, 1); // Specify the request method as POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post); // Set the posted fields
    }

    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects
    $result = curl_exec($ch); // Execute the cURL statement
    curl_close($ch); // Close the cURL connection
    return $result; // Return the received data

}

function removeSymbols($text, $simbols = []) {
    $formatedText = '';
    foreach ($simbols as $key => $value) {
        $text = str_replace($value,'', $text);
        $formatedText = $text;
    }
    
    return $formatedText;
}