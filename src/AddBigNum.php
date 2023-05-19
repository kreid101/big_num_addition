<?php 
namespace Kreid\AdditionBigNumbers;
class AddBigNum{
    public $answer;
    public $re=1234;
    function __construct($num1,$num2)
    {
        strlen($num1) > strlen($num2) ? $this->adding($num1,$num2) : $this->adding($num2,$num1);
    }
    protected function adding($fir,$sec):void
    {
        $sec=str_pad($sec,strlen($fir),"0",STR_PAD_LEFT);
        $dec=0;
        for($i=strlen($fir)-1;$i>=0;$i--){
    
            $var3[$i]=$i!==0 ? ((int)$fir[$i] +(int)$sec[$i] + (int)$dec)%10 : ((int)$fir[$i] +(int)$sec[$i] + (int)$dec);
            $dec=((int)$fir[$i] +(int)$sec[$i] +(int)$dec)/10;
           
        }
    
        $this->answer=implode(array_reverse($var3));
    }
    function getAns():string
    {
        return (string)$this->answer;
    }
    function __toString()
    {
        return $this->answer;
    }
}
