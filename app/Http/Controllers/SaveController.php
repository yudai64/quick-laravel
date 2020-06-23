<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class SaveController extends Controller
{
    public function create()
    {
        return view('save.create');
    }

    public function store(Request $req)
    {
        $b = new Book();

        $b->fill($req->except('_token'))->save();

        return redirect('save/create');
    }
}
