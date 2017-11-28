<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/28 0028
 * Time: 17:56
 */

var_dump($_COOKIE);
var_dump($_POST);

if (empty($_COOKIE)&&!empty($_POST)){
    setcookie("username",$_POST['username'],time()+60);
    setcookie("password",$_POST['password'],time()+60);
    echo "cookies保存";
}else{
    echo "cookies还没有过期";
}