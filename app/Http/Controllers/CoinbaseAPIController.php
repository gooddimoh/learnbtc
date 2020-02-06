<?php

namespace App\Http\Controllers;

use CoinbaseCommerce\ApiClient;
use Illuminate\Http\Request;

class CoinbaseAPIController extends Controller
{

    /**
     *
     * Indicates if model should be timestamped
     * @$apiKey string
     *
     **/

    public $apiKey = "bd96d073-c822-4490-8493-0751a51cce56";

    public function __construct($apiKey){
        $this->apiKey = $apiKey;
    }

    public function Init(){
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
    }

    public function Create()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.commerce.coinbase.com/checkouts");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = array();
        $headers[] = "Content-Type: application/json";
        $headers[] = "X-CC-Api-Key: {$this->apiKey}";
        $headers[] = "X-CC-Version: 2018-03-22";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        (curl_errno($ch)) ? 'Error:' . curl_error($ch) : "";
        curl_close($ch);
        var_dump($result);
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
        curl_setopt($ch, CURLOPT_URL, "https://api.commerce.coinbase.com/checkouts");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = array();
        $headers[] = "Content-Type: application/json";
        $headers[] = "X-CC-Api-Key: {$this->apiKey}";
        $headers[] = "X-CC-Version: 2018-03-22";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        (curl_errno($ch)) ? 'Error:' . curl_error($ch) : "";
        curl_close($ch);
        var_dump($result);
    }

    public function Events()
    {

    }

    public function Printpostdata(Request $request)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.commerce.coinbase.com/checkouts");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $headers = array();
        $headers[] = "Content-Type: application/json";
        $headers[] = "X-CC-Api-Key: {$this->apiKey}";
        $headers[] = "X-CC-Version: 2018-03-22";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        (curl_errno($ch)) ? 'Error:' . curl_error($ch) : "";
        curl_close($ch);
        var_dump($result);
    }

    public function Charges()
    {
        $paymentparams = $_GET["charge"];
        var_dump($paymentparams)
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
        $headers[] = "X-CC-Api-Key: {$this->apiKey}";
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
    }

    public function __destruct()
    {
        $this->apiKey;
    }
}
