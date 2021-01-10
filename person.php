<?php

class Person {
    private $name;
    private $email;
    private static $ageLimit = 40;

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
        echo __CLASS__.' created<br>';
    }

    public function __destruct(){
        echo __CLASS__.' destroyed<br>';
    }

    // public function setName($name) {
    //     $this->name = $name;
    // }

    // public function setEmail($email) {
    //     $this->email = $email;
    // }

    public function getEmail() {
        return $this->email."<br>";
    }
    public function getName() {
        return $this->name."<br>";
    }

    public static function getAgeLimit() {
        return self::$ageLimit;
    }
}

// $person1 = new Person('Mncedi', 'mncedi@minitech.io');

// print_r($person1);
// $person1->setName('John Doe');

// echo $person1->getName();
// echo $person1->getEmail();

// static properties/method

// when public
// echo Person::$ageLimit."<br>";

// when private
echo Person::getAgeLimit()."<br>";

class Customers extends Person {
    private $balance;

    public function __construct($name, $email, $balance){
        parent::__construct($name, $email, $balance);

        $this->balance = $balance."<br>";
        echo 'A new '.__CLASS__.' has been created<br>';
    }

    public function setBalance($balance) {
        $this->balance = $balance."<br>";
    }

    public function getBalance() {
        return $this->balance."<br>";
    }
}

$customer1 = new Customers('Mncedi', 'Mini', 888);
echo $customer1->getBalance();