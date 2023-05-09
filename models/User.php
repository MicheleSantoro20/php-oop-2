<?php

require_once __DIR__ . '/../Traits/Picturable.php';

class User {
    use Picturable;
    
    public $name;
    public $lastname;

    public function __construct(string $name, string $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

}