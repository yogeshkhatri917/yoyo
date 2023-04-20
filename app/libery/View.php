<?php
class View{
    public function load($path,$data=[],$hf=true){
        $path=str_replace('.','/',$path);
        $path="app/views/$path.php";
        if(file_exists($path)){
            extract($data);
            include "app/views/layout/top.php";
            if($hf)
                include "app/views/layout/header.php";
            include $path;
            if($hf)
                include "app/views/layout/footer.php";
            
            include "app/views/layout/bottom.php";
        }
        
    }
}
?>