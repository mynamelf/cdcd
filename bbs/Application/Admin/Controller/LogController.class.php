<?php
namespace Admin\Controller;
use Think\Controller;
class LogController extends Controller {
    public function g(){
        $this->display('log');
    }
    public function esc(){
        session(null);
        $this->success('成功注销！', U('Log/log'),5);
    }
}