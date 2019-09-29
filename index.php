<?php


use App\Book;
use App\Kindle;
use App\eReaderAdapter;
use App\Nook;
use App\Person;

require_once __DIR__ . '/vendor/autoload.php';

// Imamo klasu Person koja ima implementirane dvije funkcije kojima se omogucava citanje knjige: open(), read().
// Medjutim, postoje i elektronske knjige, koje takodje zelimo citati, ali mi zelimo takodje da zadrzimo iste funkcije open() i read().


$person = new Person();
$book = new Book();
$kindle = new Kindle();
$nook = new Nook();

$person->read(new eReaderAdapter($nook));
