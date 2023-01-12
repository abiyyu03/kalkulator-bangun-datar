<?php

use src\BangunDataFactory;
require_once "./src/helper/helper.php";
require_once "./src/BangunDatarFactory.php";
use src\LingkaranClass;


echo "selamat datang di kalkulator bangun datar" . PHP_EOL;
echo "pilihan bangun datar" . PHP_EOL;
echo "1. lingkaran" . PHP_EOL;
$data = input("masukan pilihan");
if($data == "lingkaran"){
    $bangundatar1 = BangunDataFactory::create("lingkaran")->result();
}

?>