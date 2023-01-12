<?php
namespace src;

require_once('src/helper/helper.php');
require_once('BangunDatarInterface.php');
require_once('LingkaranClass.php');
class BangunDataFactory{
    static function create($type): BangunDatarInterface
    {
        if($type == "lingkaran"){
            return new LingkaranClass();
        }else if($type == "persegi"){
            return new PersegiClass();
        } else if ($type == "persegi panjang") {
            return new PersegiPanjangClass();
        } else if ($type == "segitiga") {
            return new SegitigaClass();
        } else if ($type == "trapesium") {
            return new TrapesiumClass();
        } else if ($type == "belah ketupat") {
            return new BelahKetupatClass();
        } else if ($type == "jajar genjang") {
            return new JajarGenjangClass();
        } 

    }
}

