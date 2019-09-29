<?php
/**
 * Created by PhpStorm.
 * User: sreckokuzmanovic
 * Date: 29/09/2019
 * Time: 20:32
 */

namespace App;


class Kindle implements eReader
{

    public function turnOn()
    {
        var_dump('Turn Kindle on');
        echo "<br>";
    }

    public function pressNextButton()
    {
        var_dump('Press next button on Kindle');
        echo "<br>";
    }
}