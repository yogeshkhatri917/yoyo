<?php
class Autoload{
function __construct(){
    Session::init();
    $reqobj=request();
    $method=$reqobj->method;
    $controler=$reqobj->controler;
    $para=$reqobj->para;
    if(file_exists("app/controlers/$controler.php")){
        include "app/controlers/$controler.php";
        $cobj= new $controler();
        if(method_exists($cobj,$method)){
            $cobj->$method($para);
        }else{
            $cobj->{$reqobj->dmethod}();
        }
    }else{
        include "404.php";
    
    }
   }
}
?>