<?php
class User extends Model{
    function checkLogin($info,$is_admin='No'){
        $info['email']=addslashes($info['email']);
        $info['password']=md5($info['password']);
        echo $sql="select * from user where email='$info[email]'";
        $rs=$this->query($sql);
        $uinfo=$rs->fetch(PDO::FETCH_ASSOC);
        if(isset($uinfo['password']) && $uinfo['password']==$info['password']){
            if($uinfo['is_admin']=='Yes'){
                if($is_admin=='Yes'){
                    return $uinfo;
                }else{
                    return "block";
                }
            }else{
                return $uinfo;
            }
        }
        return false;
    }
}
?>