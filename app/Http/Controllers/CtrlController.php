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

    public function upload()
    {
        return view('ctrl.upload', ['result' => '']);
    }

    public function uploadfile(Request $req)
    {
        if(!$req->hasFile('upfile')) {
            return 'ファイルを指定してください。';
        }

        $file = $req->upfile;

        if(!$file->isValid()) {
            return 'アップロードに失敗しました。';
        }

        $name = $file->getClientOriginalName();

        $file->storeAs('files', $name);

        return view('ctrl.upload', [
            'result' => $name . 'をアップロードしました。'
        ]);
    }

    public function middle()
    {
        return 'log is recorded!!';
    }
}
