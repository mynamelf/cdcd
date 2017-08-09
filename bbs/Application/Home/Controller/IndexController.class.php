<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $data=M('wz')->order('time desc')->limit(3)->select();
        $this->assign('data',$data);

        $dada=M('wz')->order('`read` desc')->limit(3)->select();
        $this->assign('dada',$dada);
        $this->display();
    }
}