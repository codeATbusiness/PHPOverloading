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
