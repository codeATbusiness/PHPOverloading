PHPOverloading
==============

PHP Overloading Object Method with Trait

Here you can find an example of PHP Overloading Object Method using Traits

The trait contains only one _call() function to manage the params and the arguments passed to the function.

```php
<?php

trait SignatureTrait {
   //Compare the signature of the object method with the arguments passed
    public function __call($name, $arguments) {
        if (array_key_exists($name, $this->_signature)) {
            foreach($arguments[0] as $key => $value){
                $property = "_$key";
                for($i = 0;$i <count($this->_signature[$name]);$i++){
                    if($key == $this->_signature[$name][$i]){
                        //Here only change the object property
                        $this->$property = $arguments[0][$key];
                    }
                }
            }
        }
    }   
}
```

Later in the class that uses the Trait we pass a signature private property with the full signature of the method.

```php
    private $_signature = array(
        "addEmployee" => ["id", "firstName", "lastName", "birthDate"]
    );
```

When you call the object overloaded method you can pass an array with the named params. If any argument is different
to the params of the signature, it will be ignored.

```php
//First object with 2 arguments
$e = new Employee();
$e->addEmployee([
    "id"=>1, 
    "firstName"=>"Jonh"
    ]);
echo $e;

echo "</br>";

//Second object with 4 arguments in any order
$e2 = new Employee();
$e2->addEmployee([
    "id" => 2,
    "lastName" => "Smith",
    "birthDate" => "03/01/1975",
    "firstName" => "Mary"]);
echo $e2;
```
The result:


 - **Id**: 1 - **LastName**: - **FirstName**: Jonh - **BirthDate**: 
 - **Id**: 2 - **LastName**: Smith - **FirstName**: Mary - **BirthDate**: 03/01/1975


TODO:
Pass one callback to manage the functionality of the method with the arguments passed.

This code is only for try PHP Overloading Object Method, use under your responsibility.
