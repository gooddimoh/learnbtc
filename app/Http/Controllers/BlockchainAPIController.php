<?php

namespace App\Http\Controllers;

use CoinbaseCommerce\ApiClient;

class BlockchainAPIController
{

    private $accessToken = "";
    private $refreshToken = "";

    public function set()
    {
        $this->accessToken = "9sIUpXAW1JxHkILQ";
        $this->refreshToken = "d2vYk1WoPmL55L2VE4YG2OfyJzC0ZY31";

        $configuration = Configuration::oauth($this->accessToken, $this->refreshToken);
        $client = Client::create($configuration);
        $this->echo();
    }

    public function Create(){}

    public function Update(){}

    public function Delete(){}

    public function List(){}

    public function Checkout(){}

    public function checkfunctions(){
        $checkoutData = [
            'name' => 'The Sovereign Individual',
            'description' => 'Mastering the Transition to the Information Age',
            'pricing_type' => 'fixed_price',
            'local_price' => [
                'amount' => '100.00',
                'currency' => 'USD'
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
            'currency' => 'USD'
        ];
        $newCheckoutObj->requested_info = ['name', 'email'];
        $newCheckoutObj->save();
    }
}