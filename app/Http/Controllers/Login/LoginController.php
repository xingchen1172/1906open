<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelLogin;

class LoginController extends Controller
{
    //登录页面
    public function index(){
        return view('login.index');
    }
    //登录方法
    public function login(){
        $data=request()->except('_token');
        $res = ModelLogin::where('login_name',$data['login_name'])->first();
        if(empty($res)){
            echo "账号不存在";
        }else if($data['login_pwd']==$res['login_pwd']){
            echo "<script>alert('登录成功');location='/'</script>";
            // echo "登陆成功";
        }else{
            echo "<script>alert('登录失败');location='index'</script>";            
        }
    }


}
