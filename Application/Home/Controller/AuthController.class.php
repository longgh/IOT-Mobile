<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/28
 * Time: 11:22
 */

namespace Home\Controller;
use Home\Common\CommonController;
use Think\Controller;

class AuthController extends CommonController {
    public function index() {
        $this->display();
    }

    public function login() {
        $username = I('username');
        $password = I('password');

        $table_users = M()->table('users');
        $is_registered = $table_users->where(['username' => $username, 'password' => $password])->find();

        if(empty($is_registered)) $this->ajaxReturn('账号密码错误');

        session('username', $username);
        $this->ajaxReturn('验证成功');
    }

    public function logout() {
        if($this->is_login == 0) die('您未登录');
        if(session('username') !== null) session('username', null);
        redirect('/Home/Index', 0);
    }
}