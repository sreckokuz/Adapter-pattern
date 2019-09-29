<?php
/**
 * Created by PhpStorm.
 * User: sreckokuzmanovic
 * Date: 29/09/2019
 * Time: 14:06
 */

namespace App;


class Person
{
    public function read(BookInterface $book) {
        $book->open();
        $book->read();
    }

}