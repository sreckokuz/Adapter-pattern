<?php


use App\Book;
use App\Kindle;
use App\eReaderAdapter;
use App\Nook;
use App\Person;

require_once __DIR__ . '/vendor/autoload.php';

$person = new Person();
$book = new Book();
$kindle = new Kindle();
$nook = new Nook();

$person->read(new eReaderAdapter($nook));
