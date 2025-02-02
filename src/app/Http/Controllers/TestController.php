<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testModel;

class TestController extends Controller
{
    public function index()
    {
        $content = [
            "まだデータベースにアクセスできていません",
        ];
        $content = testModel::all();
        $item = [
            'content' => '自由に入力して下さい',
            'name' => $content,
        ];
        return view('index', $item);
    }

    public function post(Request $request)
    {
        $form = ['name' => $request->content];
        testModel::create($form);

        $content = $request->test;
        return redirect('/')->with('middleTest', $content . 'と入力');
    }

    
}
