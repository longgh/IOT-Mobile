<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/2
 * Time: 9:02
 */

namespace Home\Common;
use Think\Controller;

class CommonController extends Controller {
    protected $is_login = 1;

    public function  _initialize() {
        if(empty(session('username'))) $this->is_login = 0;
    }
}