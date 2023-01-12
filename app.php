<?php

use src\BangunDataFactory;
require_once "./src/helper/helper.php";
require_once "./src/BangunDatarFactory.php";
use src\{LingkaranClass, BelahKetupatClass};


echo "selamat datang di kalkulator bangun datar" . PHP_EOL;
echo "pilihan bangun datar" . PHP_EOL;
echo "1. lingkaran" . PHP_EOL;
echo "2. Belah Ketupat" . PHP_EOL;
echo "3. Persegi Panjang" . PHP_EOL;
$data = input("masukan pilihan");

if($data == "lingkaran" || $data == "1"){
    BangunDataFactory::create("lingkaran")->result();
}elseif ($data == "belah ketupat" || $data == "2"){
    BangunDataFactory::create("belah ketupat")->result();
}elseif ($data == "persegi panjang" || $data == "3"){
    BangunDataFactory::create("persegi panjang")->result();
}else{
    echo "pilihan tidak tersedia" . PHP_EOL;
}

?>