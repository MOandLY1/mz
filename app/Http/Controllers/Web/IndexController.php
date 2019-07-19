<?php


namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Navigation;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{

    public function Commodity_details(){
        return view('Commodity_details');
    }

    public function index(){
        echo "success";
    }

    public function test(){
        echo "test";
    }

    public function home(){
        return view('home');
    }
    public function search(){
        return view('search');
    }
    public function Navigation_mzsc(){
        $Navigation_mzsc = Navigation::where('name','魅族商城')->first()->toArray(); //查询
//       var_dump($Navigation_mzsc);exit;
        return view('layouts.web',['Navigation_mzsc'=>$Navigation_mzsc]);

//        return view('mzsc',['is_login'=>$is_login,'user_info'=>$user_info,'shop'=>$shop]);
    }
    public function mzsc(Request $request){
//        $user = Users::where('id',4)->first()->toArray();
//        $sql = "select * from user where id=4" limit 1;

        $user = Users::where('id',4)->select('id','name','age')->first()->toArray();
//        $sql = "select id,name,age from user where id=4 limit 1"
//        $array = ['usre'=>$user];
//        session($array);
        $is_login = 0;
        session(['user'=>$user]);           //设置session


        $user_info = [];
        $user = session('user');        //取出session
        if ($user){
            $is_login = 1;
            $user_info = $user;
        }
        $a = 1;
        echo $is_login;
        $shop = [
            'img'=>'233'
        ];
        return view('mzsc',['is_login'=>$is_login,'user_info'=>$user_info,'a'=>$a,'shop'=>$shop]);
    }
    public function user_r(){
        return view('user_r');
    }
    public function user_l(Request $request){
        $name = $request->input('name');
        $password = $request->input('password');
        $password = md5($password);
        $user = Users::where('name',$name)->first();

        if (!$user){
            $array = [
                'code'=>0,
                'info'=>'不存在该用户'
            ];
            return response()->json($array);
        }
//      对象转数组
        $user = $user->toArray();
        if ($user['password']!=$password){
            $array = ['code'=>0,
                'info'=>'密码错误'
            ];
            return response()->json($array);
        }
        session(['user'=>$user]);       //设置session

        $array = [
            'code'=>1,
            'info'=>'登录成功'
        ];
        return response()->json($array);

    }

    public function error(Request $request){

        $url = $request->input('url');
        return view('error',['url'=>$url]);
    }
    public function register(){
        return view('register');
    }
    public function ceshi(){
        return view('ceshi');
    }
    public function mzsc1(Request $request){
        $user_info = [];
        $user = session('user');        //取出session
        if ($user){
            $is_login = 1;
            $user_info = $user;
        }
        $a = 1;
        $shop = [
            'img'=>'233'
        ];
        return view('mzsc1',['user_info'=>$user_info,'a'=>$a,]);


    }
    public function land(Request $request){
//        $name = $request->input('name');
//        $name = $_POST('name');
        return view('land');
    }
    public function Personal_Center(Request $request){
        $user_info = [];
        $user = session('user');        //取出session
        if ($user){
            $is_login = 1;
            $user_info = $user;
        }
        $a = 1;
        $shop = [
            'img'=>'233'
        ];
        return view('Personal_Center',['is_login'=>$is_login,'user_info'=>$user_info,'a'=>$a,]);
    }
    public function my_two(){
        $user = Users::where('id',1)->get()->toArray();

        $array = [
            'name'=>'test',
            'age'=>12
        ];
        $name = 'aaaa';

        return view('my_two',['user_aa'=>$user,'name'=>$name]);
    }
    public function Modify_personal_information(Request $request){     //处理来自个人主页的修改内容
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



        if (!$user){
            $array = [
                'code'=>0,
                'info'=>'不存在该用户'
            ];
            return response()->json($array);
        }
//      对象转数组
        $user = $user->toArray();
        if ($user['password']!=$password){
            $array = ['code'=>0, 'info'=>'密码错误'];
            return response()->json($array);
        }


    }

}