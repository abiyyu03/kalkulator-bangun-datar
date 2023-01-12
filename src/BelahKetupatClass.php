<?php
namespace src;

include 'BangunDatarInterface.php';

class BelahKetupatClass implements BangunDatarInterface 
{
    private $atas = 3;
    private $bawah = 4;
    private $tinggi = 4;
    private $sisiSamping = 4;
     public function __construct()
    {
        $this->jariJari = input("masukan jari-jari ");
    }

    public function luas()
    {
        $total =  1/2 * ($this->atas + $this->bawah) * $this->tinggi;
        return "Keliling lingkaran dengan jari-jari $this->jariJari = $total";
    }

    public function keliling()
    {
        $total =  $this->atas + ($this->sisiSamping * 2) + $this->bawah;
    }
	/**
	 * @return mixed
	 */
	public function result() 
    {

	}
}