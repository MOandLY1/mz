<?php


namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Users;

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
    public function mzsc(){
        return view('mzsc');
    }
    public function user_r(){
        return view('user_r');
    }
    public function user_l(){
        return view('user_l');
    }
    public function register(){
        return view('register');
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