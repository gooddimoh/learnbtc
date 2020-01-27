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

    public function Create()
    {
    }

    public function Update()
    {
    }

    public function Delete()
    {
    }

    public function List()
    {
    }

    public function Checkout()
    {
    }
}