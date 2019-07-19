<?php


namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Navigation;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{



    public function New_username(Request $request){
        $modify_name = $request->input('modify_name');
        if(empty($modify_name)){
            $array = [
                'code'=>0,
                'info'=>'请输入您的新用户名'
            ];
            return response()->json($array);
        }
        $id = session('user')['id'];

        $arr = [
            'name' =>$modify_name
        ];
        $user = Users::where('id',$id)->update($arr);    //修改

        $user = Users::where('id',$id)->first()->toArray(); //查询
        session(['user'=>$user]);           //设置session
        if($user){
            $array = [
                'code'=>1,
                'info'=>'提交成功'
            ];
            return response()->json($array);
        }

    }

    public function Modify_personal_information(Request $request){     //处理来自个人主页的修改密码
        $password = $request->input('password');
        $confirm_password = $request->input('confirm_password');
        if(!$password || !$confirm_password){
            $array = [
                'code'=>0,
                'info'=>'请输入密码'
            ];
            return response()->json($array);
        }
        if($password!=$confirm_password){
            $array = [
                'code'=>0,
                'info'=>'两次输入的密码不一致'
            ];
            return response()->json($array);
        }
        $password = md5($password);

        $id = session('user')['id'];
        $arr = [
            'password'=>$password
        ];
//        $user = Users::where('id',$id)->update(['password'=>$password]);,,和下面的是一样的，下面的是预先写在了数组里
        $user = Users::where('id',$id)->update($arr);
        if($user){
            $array = [
                'code'=>1,
                'info'=>'修改成功'
            ];
            return response()->json($array);
        }
    }   //密码

    public function Binding_Mailbox(Request $request){
        $mailbox = $request->input('mailbox');
        if(empty($mailbox)){
            $array = [
                'code'=>0,
                'info'=>'请输入您的邮箱'
            ];
            return response()->json($array);
        }
        $id = session('user')['id'];
        $arr = [
            'mailbox' =>$mailbox
        ];
        $user = Users::where('id',$id)->update($arr);    //修改
        $user = Users::where('id',$id)->first()->toArray(); //查询
        session(['user'=>$user]);           //设置session
        if($user){
            $array = [
                'code'=>1,
                'info'=>'提交成功'
            ];
            return response()->json($array);
        }

    }     //邮箱
    public function binding_phone(Request $request){
        $phone = $request->input('phone');
        if(empty($phone)){
            $array = [
                'code'=>0,
                'info'=>'请输入您的手机号码'
            ];
            return response()->json($array);
        }
        $id =session('user')['id'];
        $arr = [
            'phone'=>$phone
        ];
        $user = Users::where('id',$id)->update($arr);
        $user = Users::where('id',$id)->first()->toArray(); //查询
        session(['user'=>$user]);           //设置session
        if($user){
            $array = [
                'code'=>1,
                'info'=>'提交成功'
            ];
            return response()->json($array);
        }
    }     //手机

    public function Submission_Password_protection(Request $request){    //设置密保问题与答案
        $Password_Protection = $request->input('Password_Protection');
        $Password_Protection_Answers = $request->input('Password_Protection_Answers');
        if(!$Password_Protection || !$Password_Protection_Answers){
            $array = [
                'code'=>0,
                'info'=>'请输入正确的问题与答案'
            ];
            return response()->json($array);
        }
        $id =session('user')['id'];
        $arr = [
            'Password_insurance'=>$Password_Protection,
            'Password_Protection_Answers'=>$Password_Protection_Answers
        ];
        $user = Users::where('id',$id)->update($arr);
        $user = Users::where('id',$id)->first()->toArray(); //查询
        session(['user'=>$user]);           //设置session
        if($user){
            $array = [
                'code'=>1,
                'info'=>'提交成功'
            ];

            return response()->json($array);
        }
    }     //密保和答案

}