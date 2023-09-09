<?php

namespace App\APIOrange;


use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class Api
{
    /**
     * Url Orange Money 
     */
    const BASE_URL = "https://api.orange.com/";
  
    private $client ;
   
    private  $auth_header;
   
    private  $credentials;
   
    private  $merchant_key;

    
    private  $return_url;
    
    private  $cancel_url;
   
    private  $notif_url;
   
    public function __construct()
    {
      
        $this->client = new Client([
            'base_uri' => self::BASE_URL
        ]);

        $this->auth_header  =  env('OM_AUTH_HEADER');
        $this->merchant_key =  env('OM_MERCHANT_KEY');
        $this->return_url   =  env('OM_RETURN_URL');
        $this->cancel_url   =  env('OM_CANCEL_URL');
        $this->notif_url    =  env('OM_NOTIf_URL');

    }

   
    private function apiCall($httpMethod, $endpoint, $options)
    {
        // methode POST  et GET
        try{
            if(strtolower($httpMethod) === "post") {

                /** @var Response $response */
                $response = $this->client->request('post',$endpoint,$options);

            } else {
                $response = $this->client->get($endpoint);

            }
          

            return  $response;
        }catch (Exception $exception){
            return  $exception->getMessage();
        };

    }
  
    private function get($endpoint, $options = null) {
        return $this->apiCall("get", $endpoint, $options);
    }
    
    private function post($endpoint, $options = null)
    {
        return $this->apiCall("post", $endpoint, $options);
    }
    
    public function getToken()
    {

        $options = [
            'headers'=> [
              // veillez entre votre autorization hearder ex:Basic g67ujb==
                'Authorization' => 'Basic *********==',
                'Accept'        =>'application/json'
            ],
            'form_params' => [
                 'grant_type'=>'client_credentials',
            ]
        ];

        return $this->post('oauth/v3/token',$options);
    }


    public function Payment($token,$body)
    {

        $id = "OM_0".rand(100000,900000)."_00".rand(10000,90000);
        $b = [
            "merchant_key"  => $this->merchant_key,
            "currency"      => "OUV",
            "order_id"      => $id,
            "amount"        => 0,
            "return_url"    => $this->return_url,
            "cancel_url"    => $this->cancel_url,
            "notif_url"     => $this->notif_url,
            "lang"          => "fr"
        ];
        $b = array_merge($b,$body);
        $b = json_encode($b);

       /* var_dump($b);
        die();*/
        $options = [
            'headers'=> [
                'Authorization' => 'Bearer '.$token,
                'Accept'        =>'application/json',
                'Content-Type'  =>'application/json'
            ],
            'body' => $b
        ];

        return $this->post('orange-money-webpay/dev/v1/webpayment',$options);
    }

    public function checkTransactionStatus($token, $data)
    {

        $b = [
            "order_id"  => $data["order_id"],
            "amount"    => $data["amount"],
            "pay_token" => $data["pay_token"]
        ];

        $b = json_encode($b);

      
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Accept'        => 'application/json',
                'Content-Type'  => 'application/json'
            ],
            'body' => $b
        ];

        return $this->post('orange-money-webpay/dev/v1/transactionstatus', $options);
    }
}
