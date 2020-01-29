<?php

namespace App\Http\Controllers;

use CoinbaseCommerce\ApiClient;

class BlockchainAPIController extends Controller
{

    /**
     * Indicates if model should be timestampped
     * @$apiKey string
     */
    private $apiKey = "bd96d073-c822-4490-8493-0751a51cce56";

    public function Init()
    {
        $apiClientObj = ApiClient::init($this->apikey);
        $apiClientObj->setTimeout(3);
    }

    public function Create()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.commerce.coinbase.com/checkouts");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = array();

    }

    public function Update()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.commerce.coinbase.com/checkouts");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = array();

    }

    public function Delete()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.commerce.coinbase.com/checkouts");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = array();

    }

    public function Lists()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.commerce.coinbase.com/checkouts");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = array();
        $headers[] = "Content-Type: application/json";
        $headers[] = "X-CC-Api-Key: {$this->apiKey}";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        var_dump($result);
    }

    public function Checkout()
    {
        $ch = curl_init();


        curl_close($ch);
    }

    public function Events()
    {
    }

    public function Charges()
    {
        $apiKey = "bd96d073-c822-4490-8493-0751a51cce56";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.commerce.coinbase.com/charges");
        curl_setopt($ch, "");
        $headers = array();

        $headers[] = "Content-Type: application/json";
        $headers[] = "X-CC-Api-Key: {$this->apiKey}";
        $headers[] = "X-CC-Version: 2018-03-22";

        $payload = '{
               "name": "The Sovereign Individual",
               "description": "Mastering the Transition to the Information Age",
               "local_price": {
                 "amount": "100.00",
                 "currency": "USD"
               },
               "pricing_type": "fixed_price",
               "metadata": {
                 "customer_id": "id_1005",
                 "customer_name": "Satoshi Nakamoto"
               },
               "redirect_url": "https://charge/completed/page",
               "cancel_url": "https://charge/canceled/page",
                    }';


    }

    public function Checkfunctions()
    {

        $ch = curl_init();


        curl_close($ch);

        $checkoutData = [
            'name' => 'The Sovereign Individual',
            'description' => 'Mastering the Transition to the Information Age',
            'pricing_type' => 'fixed_price',
            'local_price' => [
                'amount' => '100.00',
                'currency' => 'Bitcoin'
            ],
            'requested_info' => ['name', 'email']
        ];
        $newCheckoutObj = Checkout::create($checkoutData);
        $newCheckoutObj = new Checkout();
        $newCheckoutObj->name = 'The Sovereign Individual';
        $newCheckoutObj->description = 'Mastering the Transition to the Information Age';
        $newCheckoutObj->pricing_type = 'fixed_price';
        $newCheckoutObj->local_price = [
            'amount' => '100.00',
            'currency' => 'Bitcoin'
        ];
        $newCheckoutObj->requested_info = ['name', 'email'];
        $newCheckoutObj->save();
    }
}


