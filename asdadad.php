<?php
class Placowka
{
    private $adres;
    private $rok_utworzenia;
    private $dane;
    private $haslo;

    public function __construct($adres, $rok_utworzenia, $dane, $haslo)
    {
        $this->adres = $adres;
        $this->rok_utworzenia = $rok_utworzenia;
        $this->$dane = $dane;
        $this->$haslo = $haslo;
    }

    public function getHaslo($login)
    {
        if ($login === admin) {
            return $this->haslo;
        }

    }

    public function setHaslo($haslo)
    {
        $this->haslo = $haslo;
    }

    public function getHaslo()
    {
        $this->haslo = $haslo;
    }

    public function setHaslo($haslo)
    {
        $this->haslo = $haslo;
    }

    public function setHaslo($haslo)
    {
        $this->haslo = $haslo;
    }

    public function setHaslo($haslo)
    {
        $this->haslo = $haslo;
    }


}

$placowka = new Placowka("ul. Kocham Ukraine 36A/67", 2137, "Jan Paweł Dobrodziej", "KochamJanaPawłaII");
echo $placowka->adres;
echo $placowka->rok_utworzenia;
echo $placowka->dane;
echo $placowka->haslo;
