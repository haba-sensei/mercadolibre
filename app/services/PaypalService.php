<?php

namespace App\Services;

use App\Models\Order;
use Illuminate\Support\Facades\Config;
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

    public function createOrder($orderId)
    {

        $request = new OrdersCreateRequest();
        $request->headers["prefer"] = "return=representation";

        $request->body = $this->simpleCheckoutData($orderId);

        return $this->client->execute($request);
    }

    public function captureOrder($paypalOrderId)
    {
        $request = new OrdersCaptureRequest($paypalOrderId);

        return $this->client->execute($request);
    }

    private function simpleCheckoutData($orderId)
    {
        // $data = file_get_contents('https://www.datos.gov.co/resource/32sa-8pi3.json?$limit=1&$order=vigenciahasta%20DESC');
        // $tasa_data  = json_decode($data);
        // $tasa_cambio = $tasa_data[0]->valor;
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

    private function GetRequest($OrderId)
    {
        $request = new OrdersGetRequest($OrderId);

        return $this->client->execute($request);
    }

}
