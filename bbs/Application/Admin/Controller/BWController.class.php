<?php
namespace Admin\Controller;
use Think\Controller;
class BWController extends Controller {
    public function w(){
        if(empty(session('per_id'))){
            $this->success('你没登录！', U('Log/log'),3);
            return;
        }
        $User = M('wz'); // 实例化User对象
        $count = $User->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(15)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->order('time desc,id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('date',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        // $date=M('wz')->select();
        // $this->assign('date',$date);
        $this->display('bowen');
    }

    public function add(){
        if(empty(session('per_id'))){
            $this->success('你没登录！', U('Log/log'),3);
            return;
        }
        $this->display('addbw');
    }
    
    public function doadd(){
        if(empty(session('per_id'))){
            $this->success('你没登录！', U('Log/log'),3);
            return;
        }
        $data['w_title']=$_GET['title'];
        $data['w_name']=$_GET['uname'];
        $data['time']=date('Y-m-d H:i:s');
        $data['jjie']=$_GET['jjie'];
        $data['text']=$_GET['text'];
        $date=M('wz')->data($data)->add();
        echo $date."添加成功！";
    }

    public function dodele(){
        if(empty(session('per_id'))){
            $this->success('你没登录！', U('Log/log'),3);
            return;
        }
        $id=I('post.id');
        $Form = M('wz');
        $Form->delete($id);
    }
}