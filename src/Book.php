<?php
/**
 * Created by PhpStorm.
 * User: sreckokuzmanovic
 * Date: 29/09/2019
 * Time: 14:00
 */

namespace App;


class Book implements BookInterface
{
    public function open() {
        var_dump( 'Opening paper book');
        echo "<br>";
    }

    public function read() {
        var_dump( 'Reading paper book');
        echo "<br>";
    }

}