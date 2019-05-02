<?php
namespace app\module;

class Test
{
private $my;
    public function __construct($b)
    {
        $this->my=$b;
    }

    function __destruct()
    {}
    
    public function test($a)
    {
        return  'test is ' . $this->my. $a;
    }
}

