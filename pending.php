<!DOCTYPE html>

<html class="supports-animation supports-columns svg no-touch no-ie no-oldie no-ios supports-backdrop-filter as-mouseuser" lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   
    <meta name="viewport" content="width=1024">
    <title>Tienda e-commerce</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">

    <script src="https://www.mercadopago.com/v2/security.js" view="item"></script>

<!--
collection_id=[PAYMENT_ID]&collection_status=approved&external_reference=[EXTERNAL_REFERENCE]
&payment_type=credit_card&preference_id=[PREFERENCE_ID]
&site_id=[SITE_ID]&processing_mode=aggregator&merchant_account_id=null
-->


<br/>
<?php echo "Collection ID " . $_GET['collection_id'] ?>
<br/>
<?php echo "collection_status " . $_GET['collection_status'] ?>
<br/>
<?php echo "external_reference :" . $_GET['external_reference'] ?>
<br/>
<?php echo "payment_type :" . $_GET['payment_type'] ?>
<br/>
<?php echo "preference_id :" . $_GET['preference_id'] ?>
<?php
$url = $_SERVER['QUERY_STRING'];
parse_str( parse_url( $url, PHP_URL_QUERY), $array );
print_r( $array );
?>
</html>