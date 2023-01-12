<?php

use src\BangunDataFactory;

require_once "./src/helper/helper.php";
require_once "./src/BangunDatarFactory.php";

echo "selamat datang di kalkulator bangun datar" . PHP_EOL;
while (true) {
    echo "pilihan bangun datar" . PHP_EOL;
    echo "1. lingkaran" . PHP_EOL;
    echo "2. Belah Ketupat" . PHP_EOL;
    echo "3. Segitiga" . PHP_EOL;
    echo "4. Trapesium" . PHP_EOL;
    echo "5. Jajar genjang" . PHP_EOL;
    echo "6. Persegi" . PHP_EOL;
    echo "7. Persegi Panjang" . PHP_EOL;
    echo "0. Keluar" . PHP_EOL;
    $data = input("masukan pilihan");
    echo "------------" . PHP_EOL;

    if ($data == "0") {
        echo "terimakasih telah berkunjung" . PHP_EOL;
        break;
    }
    switch (strtolower($data)) {
        case '1':
        case 'lingkaran':
            BangunDataFactory::create("lingkaran")->result();
            break;
        case '2':
        case 'belah ketupat':
            BangunDataFactory::create("belah ketupat")->result();
            break;
        case '3':
        case 'segitiga':
            BangunDataFactory::create("segitiga")->result();
            break;
        case '4':
        case 'trapesium':
            BangunDataFactory::create("trapesium")->result();
            break;
        case '5':
        case 'jajar genjang':
            BangunDataFactory::create("jajar genjang")->result();
            break;
        case '6':
        case 'persegi':
            BangunDataFactory::create("persegi")->result();
            break;
        case '7':
        case 'persegi panjang':
            BangunDataFactory::create("persegi panjang")->result();
            break;
        default:
            echo "Masukan pilihan dengan benar !!" . PHP_EOL;
            break;
    }
}