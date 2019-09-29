<?php
/**
 * Created by PhpStorm.
 * User: sreckokuzmanovic
 * Date: 29/09/2019
 * Time: 21:09
 */

namespace App;


class Nook implements eReader
{

    public function turnOn()
    {
        var_dump('this is nook turn on');
    }

    public function pressNextButton()
    {
        var_dump('this is nook press next button');
    }
}