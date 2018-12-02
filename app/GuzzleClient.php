<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\BadResponseException;

use App\Http\Requests;

class GuzzleClient extends Client
{
    protected $apilink ="http://localhost:8012/ENEZER/public/api/";

    /*************GETTING TOKEN AUTHENTICATION FROM PAYMENT PLATFORM************/

    public function AUTHENTICATION_TOKEN($endpoint,$body)
    {
        $header = [
            'Authorization​' => 'Basic Z3JleTpwYXJyb3Q=',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'debug' => true,
            'apikey' => '345gghtr65yghy7ng56y'];
        $bod = [
            "email" => "ntowsamuel93@gmail.com",
            "password" => "123456789"

        ];
        $client = new \GuzzleHttp\Client(['headers' => $header]);
        try {

            $response = $client->post('localhost:8012/ENEZER/public/api/Authentication', [
                'body' => json_encode([
                    'email' => 'ntowsamuel93@gmail.com',
                    'password' => '123456789',

                ]),

            ]);

            $datatoke = $response->getBody()->getContents();
            $response->getBody()->close();
            $geting = json_decode($datatoke);
            $datatoken = $geting->token;
            return $datatoken;
        } catch (RequestException $e) {


            var_dump($e->getResponse()->getBody()->getContents());

        }

    }
    /*************GETTING USER CLIENT DATA************/

    public function GET_DATA_USER_CLIENT($endpoint,$token){

        try {

            $response = $this->get($endpoint, [
                'header' => [
                    'accept'=> 'application/json',
                    'authorization'=> 'Bearer'.$token,
                    'content-type'=> 'application/json'
                ]

            ]);

            $datatoke=$response ->getBody()->getContents();
            $response ->getBody()->close();
            $geting=json_decode($datatoke);
            $datatoken = $geting->token;
            return $datatoken;
        } catch (RequestException $e) {


            return [
                'errors'    => json_decode($e->getResponse()->getBody()->getContents(), true)
            ];
        }
    }


    /*************GETTING USER CLIENT DATA************/

    public function GET_DATA_CLIENT($endpoint)
    {
        try {


            $response = $this->get($this->apilink .$endpoint, [
                'header' => [
                    'accept' => 'application/json',
                    'content-type' => 'application/json'
                ]
            ]);

            $datatoke = $response->getBody()->getContents();
            $response->getBody()->close();
            $data = json_decode($datatoke);

            return $data;

        } catch (RequestException $e) {


            return false;

        }
    }

    /*************POSTING TRANSACTION TO GATEWAY USING GUZZLECLIENT************/

    public function POSTING_TRANSACTION_TO_GATEWAYS_GUZZLE($endpoint,$body,$token){


        try {

            $response = $this->post($endpoint, [
                'body' => $body,
                'header' => [
                    'accept'=> 'application/json',
                    'authorization'=> 'Bearer'.$token,
                    'content-type'=> 'application/json'
                ]

            ]);
            /*$code = $response->getStatusCode();
                $datatoke=$response ->getBody()->getContents();
            $response ->getBody()->close();
            $geting=json_decode($datatoke);*/
            return [
                'success'    => json_decode($response->getResponse()->getBody()->getContents(), true)
            ];

        } catch (RequestException $e) {


            return [
                'errors'    => json_decode($e->getResponse()->getBody()->getContents(), true)
            ];
        }
    }


    /*************POSTING TRANSACTION TO GATEWAY USING CURLCLIENT************/

    public function AUTHENTICATING($endpoint,$body){
        $bod='{
                "email":"ntowsamuel93@gmail.com",
                "password":"123456789"

                }';
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'localhost:8012/ENEZER/public/api/Authentication',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $bod,
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "Authorization​:Basic Z3JleTpwYXJyb3Q=",
                "content-type: application/json"

            ),
        ));


        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);


        $data  = json_decode($response);
//
        if($err){
            return [
                'error'=> $err
            ];
        }


        else{

            return $data;



        }




    }

}
