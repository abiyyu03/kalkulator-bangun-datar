<?php
namespace src;
require_once "helper/helper.php";
require_once 'BangunDatarInterface.php';

class PersegiPanjangClass implements BangunDatarInterface 
{
    private int $panjang;
    private int $lebar;

    public function __construct()
    {
        $this->panjang = (int) input("masukan panjang");
        $this->lebar = (int) input("masukan lebar");

    }

    public function luas()
    {
        $total =  $this->panjang * $this->lebar;
        return "Luas persegi panjang dengan panjang $this->panjang, dan lebar $this->lebar = $total";
    }

    public function keliling()
    {
        $total= 2 * ($this->panjang + $this->lebar);
        return "Keliling persegi panjang dengan panjang $this->panjang, dan lebar $this->lebar = $total";

    }
	/**
	 * @return mixed
	 */
	public function result() 
    {
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
	}
}