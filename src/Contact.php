<?php
    class Contact {

        private $name;
        private $email;
        private $phone;

        function __construct($name, $email, $phone)
        {
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
        }

        function setName($contact_name)
        {
            $this->name = $contact_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setEmail($contact_email)
        {
            $this->email = $contact_email;
        }

        function getEmail()
        {
            return $this->email;
        }

        function setPhone($contact_phone)
        {
            $this->phone = $contact_phone;
        }

        function getPhone()
        {
            return $this->phone;
        }

        function getWholeContact()
        {
            return "<h1>EMPLOYER CONTACT INFO<br>Name: " . $this->name . "<br>Email: " . $this->email . "<br>Phone number: " . $this->phone . "</h1>";
        }
    }

?>
