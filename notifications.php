<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');


$json = file_get_contents('php://input');
// Pasamos el JSON recibido a un array asociativo para manejarlo mejor en PHP.
$param = json_decode($json, true);

$file = fopen('log.txt','w');

fwrite($file, "Entre....>" . $param["type"] .'<...');
fwrite($file, "data...>" . $param["data"] .'<...');
fwrite($file, "data.id..>" . $param["data.id"] .'<...');
fclose($file);

$file = fopen('mp_payment_type.json','w');
fwrite($file, $json);
fclose($file);


        switch($param["type"]) {
            case "payment":
                $payment = MercadoPago\Payment::find_by_id($param["data"]["id"]);
/*
                $file = fopen('mp_payment_type.json','w');
                fwrite($file, json_encode($payment));
                fclose($file);
*/
                break;
            case "plan":
                //$plan = MercadoPago\Plan.find_by_id($_POST["id"]);
                break;
            case "subscription":
                //$plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
                break;
            case "invoice":
                //$plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
                break;
        }
    

?>
