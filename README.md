PHPOverloading
==============

PHP Overloading Object Method with Trait

Here you can find an example of PHP Overloading Object Method using Traits

The trait contains only one _call() function to manage the params and the arguments passed to the function.

```
<?php

trait SignatureTrait {
   //Compare the signature of the object method with the arguments passed
    public function __call($name, $arguments) {
        if (array_key_exists($name, $this->_signature)) {
            foreach($arguments[0] as $key => $value){
                $property = "_$key";
                for($i = 0;$i <count($this->_signature[$name]);$i++){
                    if($key == $this->_signature[$name][$i]){
                        $this->$property = $arguments[0][$key];
                    }
                }
            }
        }
    }   
}
```

Later in the class that uses the Trait we pass a signature private property with the full signature of the method.

When you call the object overloaded method you can pass an array with the named params. If any argument is different
to the params of the signature, it will be ignored.

TODO:
Pass one callback to manage the functionality of the method with the arguments passed.

This code is only for try PHP Overloading Object Method, use under your responsibility.