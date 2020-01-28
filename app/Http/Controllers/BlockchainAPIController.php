<?php

namespace App\Http\Controllers;

use CoinbaseCommerce\ApiClient;

class BlockchainAPIController extends Controller
{

    private $accessToken = "";
    private $refreshToken = "";

    public function __construct()
    {
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

    public function Lists()
    {
        $params = [
            'limit' => 2,
            'order' => 'desc'
        ];

        $list = Checkout::getList($params);

        foreach ($list as $checkout) {
            var_dump($checkout);
        }

        $count = $list->count();

        $count = count($list);

        $countAll = $list->countAll();

        $pagination = $list->getPagination();

        if ($list->hasNext()) {
            $list->loadNext();

            foreach ($list as $checkout) {
                var_dump($checkout);
            }
        }
    }

    public function Checkout()
    {
    }

    public function checkfunctions()
    {
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


