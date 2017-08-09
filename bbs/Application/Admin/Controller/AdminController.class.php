<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
    public function a(){
        $user=I('post.name');
        $password=md5(I('post.password'));
        //$this->success('登录成功！', U('Admin/admin'),3);
        if(empty($user) || empty($password)){
            $this->assign('m',"账号或密码不能为空！");
            $this->display(T('Log/log'));
        }else{
            $where="per_user='".$user."'";  
            // $where.="and per_password='".md5($password)."'";  
            $where.=" and per_password='".$password."'";  
            $data=M('us')->where($where)->select();  
            if(!empty($data)){
                session('per_id',$data[0]['id']);
                session('per_name',$data[0]['per_name']);
                $this->success('登录成功！', U('Admin/admin'),3);
            }else{
                $this->assign('m',"账号或密码错误！");
                $this->display(T('Log/log'));
            }
            
        }
    }

    public function admin(){
        if(empty(session('per_id'))){
            $this->success('你没登录！', U('Log/log'),3);
            return;
        }
        $User = M('us'); // 实例化User对象
        $count = $User->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(15)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('date',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        // $date=M('us')->select();
        // $this->assign('date',$date);
        $this->display();
    }

    public function ud(){
        if(empty(session('per_id'))){
            $this->success('你没登录！', U('Log/log'),3);
            return;
        }
        $this->display('useradd');
    }

    public function uadd(){
        if(empty(session('per_id'))){
            $this->success('你没登录！', U('Log/log'),3);
            return;
        }
        $user=I('post.user');
        $password=I('post.password');
        $name=I('post.name');
        $sex=I('post.sex');
        $ly=I('post.ly');

        $data['per_user']=$user;
        $data['per_password']=md5($password);
        $data['per_tup']='/img/1jpg';
        $data['per_name']=$name;
        $data['per_sex']=$sex;
        $data['per_ty']='1';
        $data['per_ly']=$ly;
        $date=M('us')->data($data)->add();
        echo $date."添加成功！";
    }

}