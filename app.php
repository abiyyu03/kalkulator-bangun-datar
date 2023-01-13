<?php

use src\BangunDatarFactory;

require_once "./src/helper/helper.php";
require_once "./src/BangunDatarFactory.php";

$isLanjutkan = true;

while ($isLanjutkan) {

    clearScreen();

    echo " ===== Selamat Datang di Kalkulator Bangun Datar ===== " . PHP_EOL;
    echo "Pilihan Bangun Datar" . PHP_EOL;
    echo "1. lingkaran" . PHP_EOL;
    echo "2. Belah Ketupat" . PHP_EOL;
    echo "3. Segitiga" . PHP_EOL;
    echo "4. Trapesium" . PHP_EOL;
    echo "5. Jajar genjang" . PHP_EOL;
    echo "6. Persegi" . PHP_EOL;
    echo "7. Persegi Panjang" . PHP_EOL;
    $data = input("Masukan Pilihan Anda");
    echo "---------------------" . PHP_EOL;

    switch (strtolower($data)) {
        case '1':
        case 'lingkaran':
            BangunDataFactory::create("lingkaran")->result();
            break;
        case '2':
        case 'lingkaran':
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
            echo "Masukan pilihan dengan benar !!" .  PHP_EOL;
            break;
    }

    echo  PHP_EOL . "Apakah anda ingin melanjutkan menghitung (y/n) ?";
    $data = input('');
    if (strcasecmp($data, 'y') == 0) {
        $isLanjutkan = true;
    } else {
        $isLanjutkan = false;
    }
}

function clearScreen()
{
    print("\033[2J\033[;H");
}
