<?php
require_once("vendor/autoload.php");
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

echo json_encode([
    "key"=>(empty($_ENV['CONECKTA_PUBLIC_KEY']))? "":$_ENV['CONECKTA_PUBLIC_KEY']
])

?>