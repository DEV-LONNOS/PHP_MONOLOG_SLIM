<?php 

include_once __DIR__ . "/../vendor/autoload.php";


use App\SystemServices\MonologFactory;




$logger = MonologFactory::getInstance();

$logger->info("apenas uma informacao que eu programado julgo relevante loggar");
$logger->debug("Arquivo main.php rodando...");
$logger->error("Isso seria se meu app desse um erro.....");
?>