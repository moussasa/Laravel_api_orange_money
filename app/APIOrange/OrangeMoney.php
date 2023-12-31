<?php

namespace App\APIOrange;

class OrangeMoney
{
    private $api;
    
    private  $token;

    public function __construct(array $config = [])
    {
       $this->api = new Api();
    }

    public function getAccesToken()
    {
        $rep = $this->api->getToken();
        $data= json_decode((string)$rep->getBody(),true);
        $this->token=$data["access_token"];

        return $data;
    }

    public function webPayment($data)
    {
        $dt= $this->getAccesToken();
        $rep = $this->api->Payment($this->token,$data);
        
        if (is_object($rep)) {
            $data = json_decode((string)$rep->getBody(), true);
            return $data;
        } elseif (is_string($rep)) {
            return $rep;
        } else {
            return $rep;
        }
    }

    public function checkTransactionStatus($orderId, $amount, $pay_token)
    {

        $data = [
            "order_id"  => $orderId,
            "amount"    => $amount,
            "pay_token" => $pay_token
        ];

        $dt = $this->getAccesToken();
        $rep = $this->api->checkTransactionStatus($this->token, $data);

        if (is_object($rep)) {
            $data = json_decode((string)$rep->getBody(), true);
            return $data;
        } elseif (is_string($rep)) {
            return $rep;
        } else {
            return $rep;
        }
    }
}
