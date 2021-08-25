<?php

$str = '(a)';

$check = new Brackets();
$check->set_string($str);
echo $check->validate_string();

class Brackets{
    public $string = '';
    protected $open_bracets = array('(', '{', '[');
    protected $close_bracets = array(')', '}', ']');
    
    //set string to class variable
    public function set_string($str){
        $this->$string = $str;
    }

    public function validate_string(){
        if( preg_match('/^(\()(\))(\{)(\})(\[)(\])/') > 0){
            return false;
        }else{
            return true;
        }
    }

}
?>