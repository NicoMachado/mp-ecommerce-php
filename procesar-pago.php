<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

$payment_methods = new MercadoPago\PaymentMethod();

$preference->payment_methods = ['excluded_payment_methods'] ['amex'];

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = $_POST['title'];
$item->quantity = 1;
$item->unit_price = $_POST['price'];

$preference->items = array($item);
$preference->save();


?>