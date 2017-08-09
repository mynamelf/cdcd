<?php
namespace Admin\Controller;
use Think\Controller;
class LYController extends Controller {
    /*
    留言模块
     */
    public function y(){//加载留言
        if(empty(session('per_id'))){
            $this->success('你没登录！', U("Log/log"),3);
            return;
        }
        $User = M('ly'); // 实例化User对象
        $count = $User->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(15)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->order('ly_time desc,id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('date',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        // $date=M('ly')->order('ly_time desc,id desc')->select();
        // $this->assign('date',$date);
        $this->display('ly');
    }

    public function dodelely(){
        if(empty(session('per_id'))){
            $this->success('你没登录！', U('Log/log'),3);
            return;
        }
        $id=I('post.id');
        $Form = M('ly');
        $Form->delete($id);
    }

}