<?php

class User {
    public $username;
    public $email;
    public $firstName;
    public $lastName;
    public $dateOfBirth;
    public $level;
    public $userId = NULL;


    public function __construct($username, $email, $firstName, $lastName, $dateOfBirth, $level) {
        $this->username = $username;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->level = $level;
    }

    public function userDiscount($level,$userId){
        if($level == 'ospite' && $userId === NULL){
            echo 'Cliente non ha acceso allo Sconto';
        }
        elseif($level == 'utente' && $userId === 'IDUSER'){
            echo ' Cliente ha acceso a 20% Sconto';
        }
    }

}