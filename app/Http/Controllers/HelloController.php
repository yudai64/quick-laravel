<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return 'Hello World!';
    }

    public function view()
    {
        //ビュー変数を準備
        $data = [
            'msg' => 'Hello World!'
        ];

        //テンプレートを呼び出す
        return view('hello.view', $data);
    }
}
