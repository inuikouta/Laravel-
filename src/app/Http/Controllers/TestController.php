<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function index()
    {
        $content = [
            "まだデータベースにアクセスできていません",
        ];

        // クエリをログに出力
        DB::listen(function ($query) {
            Log::info($query->sql);
            Log::info($query->bindings);
            Log::info($query->time);
        });
        $content = Author::all();
        $item = [
            'content' => '自由に入力して下さい',
            'name' => $content,
        ];
        return view('index', $item);
    }

    public function post(Request $request)
    {
        $form = ['name' => $request->content];
        Author::create($form);

        $content = $request->test;
        return redirect('/')->with('middleTest', $content . 'と入力');
    }

    public function sub(Request $request)
    {
        $form = [
            'title' => $request->title,
            'author_id' => $request->id,
        ];
        Book::create($form);
        return redirect('/');
    }

    public function group()
    {
        $content = Author::all();
        foreach ($content as $test) {
            echo $test->name;
        }
        $contents = [
            'content' => $content,
        ];
        return view('/group', $contents);
    }
}
