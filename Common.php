<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/7
 * Time: 10:25
 */

use Illuminate\Database\Capsule\Manager as Capsule;

class Common
{
    public function __construct()
    {
        $capsule=new Capsule();
        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'site_km',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }

}