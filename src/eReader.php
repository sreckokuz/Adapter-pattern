<?php
/**
 * Created by PhpStorm.
 * User: sreckokuzmanovic
 * Date: 29/09/2019
 * Time: 20:31
 */

namespace App;


interface eReader
{
    public function turnOn();
    public function pressNextButton();
}