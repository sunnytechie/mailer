<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mailer;
use App\Models\Catergory;

class MailerController extends Controller
{

    public function dashboard() {

        $category = Catergory::all();
        return view('dashboard', compact('category'));
    }

}
