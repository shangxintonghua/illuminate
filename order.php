<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/7
 * Time: 22:32
 * php 观察者模式
 */

class OrderSubject implements SplSubject {
    private $tenant;
    private $observer=array();
    public function __construct()
    {

    }
    public function setTenant($tenant){
        $this->tenant=$tenant;
    }
    public function attach(SplObserver $observer)
    {
        $this->observer[]=$observer;
    }
    public function detach(SplObserver $observer)
    {
        $key=array_search($observer,$this->observer,true);
        if($key){
            unset($key,$this->observer);
        }
    }
    public function getTenant(){
        return $this->tenant."($this->tenant)";
    }
    public function notify()
    {
        foreach ($this->observer as $value){
            $value->update($this);
        }
    }
}

class Custom implements SplObserver{

    public function update(SplSubject $subject)
    {
        $tenant=$subject->getTenant();
        echo $tenant;
    }
}
$orsubject=new OrderSubject();
$orsubject->setTenant('test');
$custom=new Custom();
$orsubject->attach($custom);
$orsubject->notify();