<?php

use Illuminate\Support\Facades\App;

$uniqueNumber = rand(1000000000, 9999999999);

$galaxId = env('APP_ENV') === 'production' ? "16435" : "5473" ;
$galaxHash = env('APP_ENV') === 'production' ? "OfGg7iE05bWlWeO0GoW1W96xI4L10i28DeAcX0Mw" : "83Mw5u8988Qj6fZqS4Z8K7LzOo1j28S706R0BeFe" ;
$galaxUrl = env('APP_ENV') === 'production' ? "https://api.galaxpay.com.br/v2/" : "https://api.sandbox.cloud.galaxpay.com.br/v2/" ;

return [
    'pay_request' => 'pay-request-' . date("d-m-Y") . '-' . $uniqueNumber,
    'pay_customer' => 'pay-customer-' . date("d-m-Y") . '-' . $uniqueNumber,
    'pay_creditcard' => 'pay-custom-creditcard-' . date("d-m-Y") . '-' . $uniqueNumber,
    'galaxId' => (string) $galaxId,
    'galaxHash' => (string) $galaxHash,
    'galaxUrl' => (string) $galaxUrl,
    'galaxPlanoBronze' => (string) "pay-602526be3d5cfkass.43389561",
    'galaxPlanoPrata' => (string) "pay-602526be3d5cfkass.43389562",
    'galaxPlanoBronzePlus' => (string) "pay-602526be3d5cfkass.43389564",
    'default_password' => '123456',
    
    'idTextoContrato' => 1,
    'idTextoConcluirCompra' => 2
]

?>