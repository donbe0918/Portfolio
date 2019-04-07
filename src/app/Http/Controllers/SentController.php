<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SentController extends Controller
{
    public function index(Request $request)
    {
        // sent.blada.phpに入った名前などの情報をセッションから保存しておく
        $request->session()->put('name',$request->name);
        $request->session()->put('age',$request->age);
        $request->session()->put('category',$request->category);
        $request->session()->put('body',$request->body);

        return view('/sent');

    }
}