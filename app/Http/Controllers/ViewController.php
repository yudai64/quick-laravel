<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function escape()
    {
        return view('view.escape', [
            'msg' => '<img src="https://wings.msn.to/image/wings.jpg" title="ロゴ"/>
            <p>WINGSへようこそ</p>'
        ]);
    }

    public function if()
    {
        return view('view.if', [
            'random' => random_int(0, 100)
        ]);
    }

    public function unless()
    {
        return view('view.unless', [
            'random' => random_int(0, 100)
        ]);
    }

    public function isset()
    {
        return view('view.isset', [
            'msg' => 'Hello World from isset'
        ]);
    }

    public function switch()
    {
        return view('view.switch', [
            'random' => random_int(1, 5)
        ]);
    }

    public function while()
    {
        return view('view.while');
    }

    public function for()
    {
        return view('view.for');
    }

    public function foreach_assoc()
    {
        return view('view.foreach_assoc', [
            'member' => [
                'name' => 'YAMADA, Yoshihiro',
                'sex' => 'man',
                'birth' => '1923-11-10'
            ]
        ]);
    }

    public function foreach_loop()
    {
        return view('view.foreach_loop', [
            'weeks' => ['月', '火', '水', '木', '金', '土', '日']
        ]);
    }

    public function master()
    {
        return view('view.master', [
            'msg' => 'Hello World from master'
        ]);
    }

    public function comp()
    {
        return view('view.comp');
    }
}
