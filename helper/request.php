<?php
function request($key=''){
    $robj=(object)['controler'=>'UserControler','method'=>'index',
    'para'=>'','get'=>$_GET,'post'=>$_POST,'dmethod'=>'index'];
    //print_r($robj);
    if(isset($_GET['url']) && $_GET['url']){
        $url= explode ('/',rtrim($_GET['url'],'/'));
        $robj->controler=ucfirst(strtolower($url[0])).'Controler';
        $robj->method=(isset($url[1]))?strtolower($url[1]):$robj->method;
        $robj->para=$url[2]?? $robj->para;   
    }
    if($key){
        if(array_key_exists($key,$_POST))
            return $_POST[$key];
        if(array_key_exists($key,$_GET))
            return $_GET[$key];
        return null;
    }
    return $robj;
}
?>