<?php

class Movie 
{
    
    private $name = null;
    private $description = 'Dinosaures';
    private $duration = 120;
    private $releaseDate = null;
    
    public function __construct($name="",$description="",$duration,$releaseDate=null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->duration = $duration;
        $this->releaseDate = $releaseDate;
    }
    
    public function showData()
    {
        echo 'Name: ' . $this->name . ' Description: ' . $this->description
        . ' Duration: ' . $this->duration . ' Date release: ' . $this->releaseDate;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setName(String $name = "")
    {
        $this->name = $name;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description = "")
    {
        $this->description = $description;
    }
    
    public function getDuration()
    {
        return $this->duration;
    }
    
    public function setDuration($duration = 0)
    {
        $this->duration = $duration;
    }
    
    public function getRealeaseDate()
    {
        return $this->releaseDate;
    }
    
    public function setReleaseDate($releaseDate = "")
    {
        $this->releaseDate = $releaseDate;
    }
}   
 $Mv = new Movie("Jurassik Park", "Dinosaures",120,"10/10/1993");
 echo $Mv->showData();
 