<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/7
 * Time: 12:58
 */
echo PHP_VERSION;
if(version_compare(PHP_VERSION,'7.0.0','<')){
    echo 1;
}else{
    echo 2;
}
escapeshellcmd('php string.php');

getenv();