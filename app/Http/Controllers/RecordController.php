<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class RecordController extends Controller
{
    public function find()
    {
        return Book::find(1)->title;
    }

    public function where()
    {
        $result = Book::where('title', 'LIKE', '%Java%')->get();
        return view('hello.list', ['records' => $result]);
    }
}
