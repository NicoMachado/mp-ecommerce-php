<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

    MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
    $file = fopen('log.txt','w+');
    fwrite($file, "Entre...." );
    fwrite($file, var_dump($_POST));
    fclose($file);

    if (isset($_POST["type"]) ) {
        switch($_POST["type"]) {
            case "payment":
    
                $json = file_get_contents('php://input');
                // Converts it into a PHP object
                $data = json_decode($json);
                $file = fopen('mp_payment_type.json','w');
                fwrite($file, $json);
                fclose($file);
            
    
                $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
                //Save Response to loca disc
    //            var_dump($payment);
                break;
            case "plan":
                $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
                break;
            case "subscription":
                $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
                break;
            case "invoice":
                $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
                break;
        }
    
    }

?>
