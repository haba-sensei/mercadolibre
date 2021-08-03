<?php

namespace App\Services;

use App\Models\Order;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use PayPalCheckoutSdk\Orders\OrdersGetRequest;

class PaypalService
{
    private $client;

    function __construct()
    {
        $paypalConfig = Config::get('paypal');

        $environment = new SandboxEnvironment($paypalConfig['client_id'], $paypalConfig['secret']);
        $this->client = new PayPalHttpClient($environment);
    }

    public function createOrder($orderId, $tipo)
    {

        $request = new OrdersCreateRequest();
        $request->headers["prefer"] = "return=representation";

        if($tipo == 'normal'){
            $request->body = $this->simpleCheckoutData($orderId);
        }elseif($tipo == 'membresia') {
            $request->body = $this->simpleMembresiaData($orderId);
        }


        return $this->client->execute($request);
    }

    public function captureOrder($paypalOrderId)
    {
        $request = new OrdersCaptureRequest($paypalOrderId);

        return $this->client->execute($request);
    }

    private function simpleCheckoutData($orderId)
    {

        $order = Order::find($orderId);
        $subtotal = str_replace(',', '', $order->subtotal);

        return [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "reference_id" => $order->reference_id,
                "amount" => [
                    "value" => $subtotal,
                    "currency_code" => "USD"
                ]
            ]],
            "application_context" => [
                "cancel_url" => route('paypal.cancel'),
                "return_url" => route('paypal.success', $orderId)
            ]
            ];
    }

    private function simpleMembresiaData($orderId)
    {
        $order =  DB::table('membresias_pagos')->where('id', $orderId)->get();



        $subtotal = str_replace(',', '', $order[0]->price_membresia);

        return [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "reference_id" => $order[0]->reference_id,
                "amount" => [
                    "value" => $subtotal,
                    "currency_code" => "USD"
                ]
            ]],
            "application_context" => [
                "cancel_url" => route('paypal.membresia.cancel'),
                "return_url" => route('paypal.membresia.success', $orderId)
            ]
            ];
    }

    private function GetRequest($OrderId)
    {
        $request = new OrdersGetRequest($OrderId);

        return $this->client->execute($request);
    }

}
