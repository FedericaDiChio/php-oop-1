<?php 

class Movie {
    public $director;
    public $title;
    public $genre;
    public $plot;
    public $language; 
    public $country;

// Costruttore 

public function __construct($_title, $_genre, $_plot, $_director, $_language = 'unknown', $_country = 'unknown') {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->plot = $_plot;
    $this->director = $_director;
    $this->language = $_language;
    $this->country = $_country;
    }

// Metodo     
public function getTitle()
{
    echo "Il titolo del film della prima istanza è $this->title";
}    
};


// Istanza 1
$movie1 = new Movie ('Interstellar', 'sci-fi', 
"Earth's future has been riddled by disasters, famines, and droughts. 
There is only one way to ensure mankind's survival: Interstellar travel. 
A newly discovered wormhole in the far reaches of our solar system allows a team of astronauts 
to go where no man has gone before, a planet that may have the right environment to sustain human life.",
'Christopher Nolan');
var_dump($movie1);


// Istanza 2
$movie2 = new Movie("Joker", "drama", 
"Arthur Fleck works as a clown and is an aspiring stand-up comic. He has mental health issues, 
part of which involves uncontrollable laughter. Times are tough and, due to his issues and occupation, 
Arthur has an even worse time than most. Over time these issues bear down on him, shaping his actions, 
making him ultimately take on the persona he is more known as...Joker.", 
'Todd Phillips', 'english');
var_dump($movie2);


// Riprendiamo il metodo 
$movie1->getTitle();