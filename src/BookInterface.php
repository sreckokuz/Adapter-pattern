<?php
/**
 * Created by PhpStorm.
 * User: sreckokuzmanovic
 * Date: 29/09/2019
 * Time: 20:28
 */

namespace App;


interface BookInterface
{
    public function open();
    public function read();
}