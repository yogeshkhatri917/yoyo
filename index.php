<?php
//require_once "helper/request.php";
$files=glob("helper/*.php");
array_map(fn($filname)=>include "$filname",$files);
require_once "app/libery/Session.php";
spl_autoload_register(function($clsname){
    //echo $clsname;

    if(file_exists("app/libery/$clsname.php"))
     require_once "app/libery/$clsname.php";    
});
$obj=new Autoload();

?>