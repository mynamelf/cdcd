<?php
namespace Home\Controller;
use Think\Controller;
class BloController extends Controller {
    public function __construct(){
        parent::__construct();
        $data=M('wz')->order('time desc,id desc')->limit(5)->select();
        $this->assign('data',$data);

        $dada=M('wz')->order('`read` desc')->limit(5)->select();
        $this->assign('dae',$dada);
    }

    public function b(){
        // $data=M('wz')->order('time desc,id desc')->limit(10)->select();
        // $this->assign('data',$data);

        $User = M('wz'); // 实例化User对象
        // 查询满足要求的总记录数
        $count = $User->count();

        $Page = new \Think\Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数(15)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->order('time desc,id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        //->select();
        //dump($list);
        $this->assign('date',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display('Blog/wenz');
    }

    public function d(){
        $id=I('get.i');
        if(!empty($id))
        {
            // $data=M('wz')->order('time desc,id desc')->limit(10)->select();
            // $this->assign('data',$data);

            $where='id='.$id;
            $rwz=M('wz')->where($where)->select();
            $this->assign('rwz',$rwz);

            $read = M('wz')->where('id='.$id)->getField('read');
            $data['read'] = $read+1;
            M('wz')->where('id='.$id)->save($data);

            $this->display('Blog/read');
        }else{
            // $data=M('wz')->order('time desc,id desc')->limit(10)->select();
            // $this->assign('data',$data);
            
            $User = M('wz'); // 实例化User对象
            // 查询满足要求的总记录数
            $count = $User->count();

            $Page = new \Think\Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数(15)
            $show = $Page->show();// 分页显示输出
            // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $User->order('time desc,id desc')->limit($Page->firstRow.','.$Page->listRows)->select();

            //->select();
            //dump($list);
            $this->assign('date',$list);// 赋值数据集
            $this->assign('page',$show);// 赋值分页输出

            $this->display('Blog/wenz');
        }
        
    }
}