<?php
require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;


function adminApi($base_uri, $api, $params = [], $headers = [], $method = 'get', $timeout = 60)
{
    $res = ['code' => 1, 'message' => ''];

    try {
        $headers['User-Agent'] = $_SERVER['HTTP_USER_AGENT'];

        $client = new Client([
            'base_uri' => $base_uri,
            'headers' => $headers,
            'timeout' => $timeout,
            'verify' => false,
        ]);

        if ( $method == 'get' )
        {
            $response = $client->get($api, ['query' => $params]);
        }
        else
        {
            $response = $client->post($api, ['json' => $params]);
        }

        $json = $response->getBody()->getContents();

        if ( ! is_null(json_decode($json)) )
        {
            $res = json_decode($json, true);
        }
        else
        {
            $res['message'] = 'JSON format error: ' . $json;
        }
    }
    catch (Exception $e) {

        $res['code'] = 1;
        // $res['exception'] = $e;
        $res['message'] = $e->getMessage();
    }

    return $res;
}