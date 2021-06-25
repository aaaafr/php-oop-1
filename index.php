<!-- - è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti 
‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie 
{
    public $title;
    public $filmDirector;
    public $year;

    public function __construct(string $title, string $filmDirector, float $year) 
    {
        $this->title = $title;
        $this->filmDirector = $filmDirector;
        $this->year = $year;
    }

    public function getYear()
    {
        # code...
        return $this->year;
    }


}

$film1 = new Movie('Le ali della libertà', 'Frank Darabont', 2009);


var_dump($film1->getYear());
var_dump($film1);


$film2 = new Movie('Fight Club', 'David Andrew Leo Fincher', 1999);


var_dump($film2->getYear());
var_dump($film2);