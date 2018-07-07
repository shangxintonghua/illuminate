<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/7
 * Time: 10:27
 */
use Illuminate\Database\Capsule\Manager as Capsule;
class Test extends Common
{
    public function __construct()
    {
        parent::__construct();
    }
    public function select(){
       $result=Capsule::table('km_per_score')
           ->select(['id','ccname'])
           ->limit(50)
           ->get();
         $result=json_decode($result,true);
         if($result!=null){
             array_map(function ($item){
                 echo $item['ccname'];
             },$result);
             Capsule::table('km_score_statis')
                 ->insert($result);
         }

    }

}