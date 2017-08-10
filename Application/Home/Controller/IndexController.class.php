<?php
namespace Home\Controller;
use Home\Common\CommonController;

class IndexController extends CommonController {

    public function index(){

        $this->assign('is_login', $this->is_login);
        $this->display('index');
    }
}