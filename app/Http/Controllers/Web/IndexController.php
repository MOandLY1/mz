<?php


namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index(){
        echo "success";
    }

    public function test(){
        echo "test";
    }

    public function home(){
        return view('home');
    }
    public function mzsc(Request $request){
//        $user = Users::where('id',4)->first()->toArray();
//        $sql = "select * from user where id=4";

        $user = Users::where('id',4)->select('id','name','age')->first()->toArray();
//        $sql = "select id,name,age from user where id=4"
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
        $user = Users::where('name',$name)->first();
        if (!$user){
            return redirect('land')->with('status', '用户不存在!');
//            return  redirect("error?url=land");
        }
        $user = $user->toArray();

    }

    public function error(Request $request){

        $url = $request->input('url');
        return view('error',['url'=>$url]);
    }
    public function register(){
        return view('register');
    }
    public function mzsc1(){
        return view('mzsc1');
    }
    public function land(Request $request){
//        $name = $request->input('name');
//        $name = $_POST('name');
        return view('land');
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

}