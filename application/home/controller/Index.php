<?php

namespace app\home\controller;

use think\Controller;
use think\Request;

use app\common\model\Home;

class Index extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        return "home";
    }
    

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        $home = new Home;
        $res = $home->createe($this->createname());
        echo $res;
 
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function savee(Request $request)
    {
        //
        $home = new Home;
        //$id   = $this->request->param('id');
        $res  = $home->savee();
        dump($res);
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read()
    {
        //
        $home = new Home;
        $res = $home->read();
        echo $res->uname;
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
        $home = new Home;
        $res = $home->del();
        dump($res);
    }
    
    
    public function createname()  //判断查询结果是否有数据；
    {
        //
        $a = '';
        
        for ( $i = 0 ; $i < 3 ; $i++ ){
            $b = chr(rand(97, 122));
            $a .= $b;
        }
        
        return $a;
    }  
}
