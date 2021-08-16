<?php
/**
 * Created by PhpStorm.
 * User: maxwillian
 * Date: 22/11/2018
 * Time: 16:32
 */

namespace App\Helpers;

class HttpRequest
{

    public static function post($url, $data){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => self::makePostData($data),
            CURLOPT_HTTPHEADER => self::makeHeader(isset($data['header']) ? $data['header'] : []),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {

            throw new \Exception("cURL Error #:" . $err);

            //throw new \Exception("cURL Error #:" . $err);

        } else {
            return(json_decode($response));
        }
    }

    private static function makePostData($data){
        $contentType = "application/json";

        if(isset($data['header']['Content-Type'])){
            $contentType = $data['header']['Content-Type'];
        }

        switch ($contentType) {
            case "application/json":
                return json_encode($data['post']);
                break;
            case "application/x-www-form-urlencoded":
                return http_build_query($data['post']);
                break;
            default:
                return json_encode($data['post']);
        }
    }

    private static function makeHeader($header){
        $defaultHeader = array(
            "Accept" => "*/*",
            "Content-Type" => "application/json"
        );

        $header = array_replace($defaultHeader, $header);

        $output = [];
        foreach($header as $index => $value){
            $output[] = $index.': '.$value;
        }

        return $output;
    }

    public static function put($url, $data){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => self::makePutData($data),
            CURLOPT_HTTPHEADER => self::makeHeader(isset($data['header']) ? $data['header'] : []),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {

            throw new \Exception("cURL Error #:" . $err);

            //throw new \Exception("cURL Error #:" . $err);

        } else {
            return(json_decode($response));
        }
    }

    private static function makePutData($data){
        $contentType = "application/json";

        if(isset($data['header']['Content-Type'])){
            $contentType = $data['header']['Content-Type'];
        }

        switch ($contentType) {
            case "application/json":
                return json_encode($data['put']);
                break;
            case "application/x-www-form-urlencoded":
                return http_build_query($data['post']);
                break;
            default:
                return json_encode($data['put']);
        }
    }

}