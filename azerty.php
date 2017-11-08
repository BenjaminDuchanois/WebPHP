<?php
class Film
{
    public $name = 'Donner un nom';
    public $description = 'Film de science fiction';
    public $duration = '1h30';
    public $release = 'Donner une année de sortie';

    function __construct($name = "", $release = "")
    {
        $this->name = $name;
        $this->release = $release;
    }
    
    function seeMovie()
    {
        print 'Nom : ' . $this->name . "\n";
        print 'Description : ' . $this->description . "\n";
        print 'Durée : ' . $this->duration . "\n";
        print 'Date de sortie : ' . $this->release . "\n";
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name = "")
    {
        $this->name = $name;
    }
    
        public function getRelease()
    {
        return $this->release;
    }
    
    public function setRelease($release = "")
    {
        $this->release = $release;
    }
}

$film = new Film("Renaissances", 2013);

echo $film->name;
echo "\n";
$film->setName("Predestination");
echo $film->name;
echo "\n---------------------- \n";
$film->seeMovie();

