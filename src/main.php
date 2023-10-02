<?php 

include_once __DIR__ . "/../vendor/autoload.php";



use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


// create a log channel
$logger = new Logger ('MEUAPP');
$logger->pushHandler(new StreamHandler('meuslogs.log', level::debug));

$logger->debug("Arquivo main.php rodando...");