<?php

namespace App\Http\Controllers;

use App\Models\Msg;
use App\Models\Todo;
use App\Models\Mailer;
use App\Models\Catergory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MailerController extends Controller
{

    public function dashboard() {

        $category = Catergory::all();
        $todos = Todo::all();
        return view('dashboard', compact('category', 'todos'));
    }

    public function index() {
        $categories = Catergory::all();
        $todos = Todo::where('user_id', '=', Auth::user()->id)->get();
        $msgs = Msg::orderBy('id', 'DESC')->paginate(4);

        return view('index', compact('categories', 'todos', 'msgs'));
    }

}
