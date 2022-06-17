<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Mailer;
use App\Models\Catergory;
use Illuminate\Http\Request;

class MailerController extends Controller
{

    public function dashboard() {

        $category = Catergory::all();
        $todos = Todo::all();
        return view('dashboard', compact('category', 'todos'));
    }

    public function index() {
        return view('index');
    }

}
