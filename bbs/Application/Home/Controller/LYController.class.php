<?php
namespace Home\Controller;
use Think\Controller;
class LYController extends Controller {
    public function __construct(){
        parent::__construct();
        $data=M('wz')->order('time desc,id desc')->limit(5)->select();
        $this->assign('data',$data);

        $data=M('wz')->order('`read` desc')->limit(5)->select();
        $this->assign('dae',$data);
    }
    public function l(){

        $User = M('ly'); // 实例化User对象
        $count = $User->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数(15)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->order('ly_time desc,id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('ly',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display('LY/liuy');
    }

    public function tl(){
        $ly=I('post.fly');
        $name=I('post.fname');
        $time=date("Y-m-d h:i:s");
        if(empty($name)){
            $name='游客_'.time();
        }
        if(empty($ly)){
            return;
        }
        $data['ly_name'] = $name;
        $data['ly_time'] = $time;
        $data['ly'] = $ly;
        M('ly')->data($data)->filter('strip_tags')->add();

    }
}