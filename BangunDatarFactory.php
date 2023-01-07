<?php
namespace src;

include('src/LingkaranClass.php');
include('src/helper/helper.php');

class BangunDataFactory
{
    function hitungLuasLingkaran($jariJari)
    {
        $lingkaran = new LingkaranClass($jariJari);
        echo $lingkaran->luas();
    }
}

$jariJari = input("Masukan Jari-Jari");

$bangunDatar = new BangunDataFactory();
$bangunDatar->hitungLuasLingkaran($jariJari);

