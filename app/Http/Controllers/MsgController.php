<?php

namespace App\Http\Controllers;

use App\Models\Msg;
use App\Models\Todo;
use Illuminate\Http\Request;

class MsgController extends Controller
{
    //index
    public function index()
    {
        $todos = Todo::all();
        $msgs = Msg::all();
        return view('msg.index', compact('todos', 'msgs'));
    }
}
