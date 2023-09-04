<?php
    require_once __DIR__.'/User.php';

    class Cart extends User{
        public $cardNumber;
        public $cvvNumber;
        public $expirationDate;

        public function __construct
        (
            $username,
            $email,
            $firstName,
            $lastName,
            $dateOfBirth,
            $level,
            $cardNumber,
            $cvvNumber,
            $expirationDate
        )
        {
            parent::__construct($username, $email, $firstName, $lastName, $dateOfBirth, $level);

            $this->cardNumber = $cardNumber;
            $this->cvvNumber = $cvvNumber;
            $this->expirationDate = $expirationDate;
        }

        public function isCardValid($expirationDate) {
            $currentTimestamp = time(); 
            $expirationTimestamp = strtotime($expirationDate); 
    
            if ($expirationTimestamp > $currentTimestamp) {
                return true;
            } else {
                return false; 
            }
        }
    }