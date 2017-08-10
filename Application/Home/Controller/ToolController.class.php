<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 11:30
 */

namespace Home\Controller;
use Think\Controller;

class ToolController extends Controller {
    public function Redirect($url = '/Home/Index', $time = 2, $msg = '欢迎') {
        $this->assign('url', $url);
        $this->assign('time', $time);
        $this->assign('msg', $msg);
        $this->display();
    }
}