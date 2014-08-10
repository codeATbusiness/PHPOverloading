<?php

require_once 'Employee.php';

//First object with 2 arguments
$e = new Employee();
$e->addEmployee(["id"=>1, "firstName"=>"Jonh"]);
echo $e;

echo "</br>";

//Second object with 4 arguments in any order
$e2 = new Employee();
$e2->addEmployee(["id" => 2, "lastName" => "Smith", "birthDate" => "03/01/1975", "firstName" => "Mary"]);
echo $e2;