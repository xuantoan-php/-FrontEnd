<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeController extends Controller
{
    public function XinChao(){
        echo "chào các bạn";
    }
    public function myView(){
        return view('php.trangphp');
    }
    public function Time($t){
        return view('php.trangphp', ['t'=>$t]);
    }
    public function getMaster(){
        return view('master.master');
    }
    public function getLaravel(){
        return view('laravel.laravel');
    }
    public function getPhp(){
        return view('php.php');
    }
    public function getLogin(){
        return view('validation.validate');
    }
    public function postLogin(Request $request){
        $request->validate([
            'tk'=>'required|email|min:3',
            'mk'=>'required'
        ],[
            'tk.required'=>'khong dx đẻ trống tk',
            'tk.email'=>'tài khoản này là email',
            'tk.min'=>'khong dx nho hơn 3 ký tự',
            'mk.required'=>'khong dx đẻ trống mk',
        ]);
    }
}
