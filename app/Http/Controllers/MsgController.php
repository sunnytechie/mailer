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

    //delete
    public function delete($id)
    {
        $msg = Msg::find($id);
        $msg->delete();
        return back()->with('success', 'Message Deleted Successfully');
    }
}
