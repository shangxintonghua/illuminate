<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/7
 * Time: 10:33
 */
require 'vendor/autoload.php';
spl_autoload_register(function ($class){
    if(file_exists($class.'.php')){
        require_once $class.'.php';
    }
});
$start_time=microtime(true);
/*$test=new Test();
$callback=$test->select();*/
$test="test,:";
echo  str_replace([",",":"],"",$test);
echo (microtime(true)-$start_time);