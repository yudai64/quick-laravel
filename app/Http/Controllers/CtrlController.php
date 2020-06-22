<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlController extends Controller
{
    public function form()
    {
        return view('ctrl.form', ['result' => '']);
    }

    public function result(Request $req)
    {
        $name = $req->input('name', '名無権兵衛');
        return view('ctrl.form' ,[
            'result' => 'こんにちは、' . $name . 'さん！'
        ]);
    }
}
