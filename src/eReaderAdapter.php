<?php
/**
 * Created by PhpStorm.
 * User: sreckokuzmanovic
 * Date: 29/09/2019
 * Time: 20:39
 */

namespace App;


class eReaderAdapter implements BookInterface
{
    /**
     * @var Kindle
     */
    private $reader;

    public function __construct(eReader $reader)
    {
        $this->reader = $reader;
    }

    public function open()
    {
        $this->reader->turnOn();
    }

    public function read()
    {
        $this->reader->pressNextButton();
    }
}