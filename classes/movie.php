<?php 

class Movie{
    private string $title;
    private int $duration;
    private int $release_year;
    private float $budget;
    private array $genre;
    private string $language;
    private string $country;

    public function __construct($_title,$_release_year,$_language,$_country)
    {
        $this->setTitle($_title);
        $this->setRelease_year($_release_year);
        $this->setLanguage($_language);
        $this->setCountry($_country);
    }

    public function setGenres($_genre){
        $this->genre = $_genre;
    }
    
    public function setTitle($_title){
        $this->title = $_title;
    }
    
    public function setDuration($_duration){
        $this->duration = $_duration;
    }
    
    public function setRelease_year($_release_year){
        $this->release_year = $_release_year;
    }
    
    public function setBudget($_budget){
        $this->budget = $_budget;
    }
    
    public function setLanguage($_language){
        $this->language = $_language;
    }
    
    public function setCountry($_country){
        $this->country = $_country;
    }
    

    public function getGenres(){
        return $this->genre;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDuration(){
        return $this->duration;
    }

    public function getRelease_year(){
        return $this->release_year;
    }

    public function getBudget(){
        return intval($this->budget);
    }

    public function getLanguage(){
        return $this->language;
    }

    public function getCountry(){
        return $this->country;
    }

    public function getNameYear(){
        return "{$this->title} {$this->release_year}";
    }
}





?>