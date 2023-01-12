<?php
namespace src;

require_once "helper/helper.php";
require_once 'BangunDatarInterface.php';

class BelahKetupatClass implements BangunDatarInterface 
{
    private int $atas;
    private int $bawah;
    private int $tinggi;
    private int $sisiSamping;
    public function __construct()
    {
        $this->atas = input("masukan atas ");
        $this->bawah = input("masukan bawah ");
        $this->tinggi = input("masukan tinggi ");
        $this->sisiSamping = input("masukan sisi samping ");
        
    }
    
    public function luas()
    {
        $total =  1/2 * ($this->atas + $this->bawah) * $this->tinggi;
        return "Keliling belah ketupat dengan atas $this->atas cm, bawah $this->bawah cm, dan dengan tinggi $this->tinggi  = $total";
    }
    
    public function keliling()
    {
        $total =  $this->atas + ($this->sisiSamping * 2) + $this->bawah;
        return "Lusa belah ketupat dengan atas $this->atas cm, bawah $this->bawah cm, dan dengan samping $this->sisiSamping = $total";
        
    }
    /**
    * @return mixed
    */
    public function result() 
    {
        echo "------------" . PHP_EOL;
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
    }
}