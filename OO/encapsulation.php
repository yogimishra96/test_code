<?php
class Math{        
    public $a;
    public $b;    
    public function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
    }    
    public function setvalue($a,$b){
        $this->a = $a;
        $this->b = $b;
    }
    public function getvalue(){
        return $this->a .''.$this->b;                
    }
}

$obj = new Math($a = 2, $b = 3);

$obj->setvalue($a = 5,$b = 6);

echo $obj->getvalue();


?>