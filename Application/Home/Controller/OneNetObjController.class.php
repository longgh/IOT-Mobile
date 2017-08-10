<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 23:41
 */

namespace Home\Controller;
use Home\Common\CommonController;
use Vendor\Onenet\OneNetApi;

class OneNetObjController extends CommonController{
    private $onenet_obj = null;

    private $api_key = 'HFHKQRPsbGYCvsHVylQdPocprBc=';

    private $device_id = '9832447';

    public function _initialize() {
        parent::_initialize();
        if($this->is_login == 0) redirect('/');
        vendor('Onenet.OneNetApi');
        $this->onenet_obj = new OneNetApi($this->api_key);
    }

    public function devicesInfo() {
        dump($this->onenet_obj->device($this->device_id));
    }

    public function command() {
        $command = '{yellowled}1';
        dump($this->onenet_obj->send_data_to_edp($this->device_id, 1, 2, $command));
    }
}