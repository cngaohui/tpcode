<?php

namespace app\common\model;

use think\Model;
use think\Db;
 

class Home extends Model
{
    //
    public function read()
    {
        $home = Home::get(2);
        return $home;
    } 
    
    public function createe($name)
    {
        $home = Home::create([
        'uname'  =>  $name,
        //'email' =>  'thinkphp@qq.com'
        ]);
        return $home->id;
    }

    public function savee()
    {
        
        $home = Home::get(22);
        $home->uname  =  "ab9vv";
        $home->score = ['inc',1];
        $res = $home->save();
        return $res;

    }
    
    public function del()
    {
        $user = Home::get(26);
        $res = $user->delete();
        return $res;
    }
}
