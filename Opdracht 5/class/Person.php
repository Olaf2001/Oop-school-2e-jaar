<?php

namespace OOP_basis_Opdracht_5;

abstract class Person
{
    private $firstname;
    private $lastname;

    public function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getName()
    {
        return $this->firstname. ' '.$this->lastname;
    }
}