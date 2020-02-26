<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelLogin;

class RayController extends Controller
{
    //注册页面
    public function index(){
        return view('ray.index');
    }
    //注册方法
    public function ray(){
        $post=request()->except('_token');
        $res=ModelLogin::create($post);
        // dd($res);
        if($res){
            return view('login/index');
        }else{
            return view('ray/index');
        }  
    }
}
