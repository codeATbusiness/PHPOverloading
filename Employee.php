<?php

require_once 'Overloading/SignatureTrait.php';

class Employee {
    use SignatureTrait;

    //Private properties
    private $_id;
    private $_firstName;
    private $_lastName;
    private $_birthDate;
    
    //Signature for Overloading the first param is the name of the method the second 
    //the array containing the full signature
    private $_signature = array(
        "addEmployee" => ["id", "firstName", "lastName", "birthDate"]
        );
    
    public function __toString() {
        return "Id: " . $this->_id . " - LastName: " . $this->_lastName . " - FirstName: " . $this->_firstName . " - BirthDate: " . $this->_birthDate;
    }
    
}
