<?php
class Technician {
    private $firstName, $lastName;
    static $fullName;
    
    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $fullName = $firstName . ' ' . $lastName;
    }
    
    public static function getFullName() {
        return self::$fullName;
    }
}