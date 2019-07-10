<?php


namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
    public function land(){
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