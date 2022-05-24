<?php

class cPersoon extends cClubInfo
{
    private $firstName;
    private $lastname;
    public $age;
    public $gender;

    public function __construct(string $f, int $a, string $g, string $l)
    {
        $this->firstName = $f;
        $this->lastname = $l;
        $this->age = $a;
        $this->gender = $g;

    }


    public function getFullName() :string
    {
        return sprintf("%s %s",$this->firstName,$this->lastname);
    }

    public function doVoorZichUitStaren($time) {
        $energy = null;
        switch (true) {
            case $time <= 0:
                $energy = null;
                break;
            case $time >0 && $time <10:
                $energy = 50;
                break;
            case $time > 10:
                $energy = 100;
                break;
            default:

        }

        return $energy;

    }


}