<!DOCTYPE html>
<!--
collection_id=[PAYMENT_ID]&collection_status=approved&external_ref
erence=[EXTERNAL_REFERENCE]&payment_type=credit_card&preference_id=[PREFERENCE_ID]&site_id
=[SITE_ID]&processing_mode=aggregator&merchant_account_id=null

-->

<br/>
<?php echo "Collection ID " . $_GET['collection_id'] ?>
<br/>
<?php echo "collection_status " . $_GET['collection_status'] ?>
<br/>
<?php echo "external_reference " . $_GET['external_reference'] ?>
<br/>
<?php echo "payment_type " . $_GET['payment_type'] ?>
<?php
//$url = $_SERVER['QUERY_STRING'];
//parse_str( parse_url( $url, PHP_URL_QUERY), $array );
//print_r( $array );
?>
