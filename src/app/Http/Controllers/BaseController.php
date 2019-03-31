<?php
namespace App\Http\Controllers;
class BaseController extends Controller

// ここら辺は全然仮
{
    public function index()
    {
        // ただの変数定義ですが、ここでModelにデータの処理を行わせたりします（後述）。
        $name = 'yamada taro';

        // ここでbaseビュー「base.blade.php」を呼び出し、データ「name」を渡している。
        return view('base', ['name' => $name]);
    }
}