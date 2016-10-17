<?php
class car {
    public $color;
    public function setColor($c){
        return 'Car is : '.$this->color=$c;
    }
}
$newcar=new car;
$test=$newcar->setColor('red');
echo $test;
echo '<hr>';
