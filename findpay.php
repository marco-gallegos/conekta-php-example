<?php
require_once("bin/conekta-php-master/lib/Conekta.php");
$ApiKey="";
$ApiVersion="2.0.0";
\Conekta\Conekta::setApiKey($ApiKey);
\Conekta\Conekta::setApiVersion($ApiVersion);
$order = \Conekta\Order::find("ord_2oCYzZDAbAB9rzY4t");

print_r($order);

?>