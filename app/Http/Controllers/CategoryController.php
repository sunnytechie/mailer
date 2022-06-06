<?php

namespace App\Http\Controllers;

use App\Models\Catergory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//The Cateerory Method naming was a mistake, So I decided not to change it.

class CategoryController extends Controller
{
    public function create() {
        return view('category.create');
    }

    public function store(Request $request) {
        $data = request()->validate([
            'title' => 'required',
            'description' => ''
        ]);

        //dd($data);

        $currentUser = Auth::user()->id;

        $category = Catergory::create([
            'name' => $data['title'],
            'description' => $data['description'],
            'user_id' => $currentUser
            ]);

        $category->save();

        return redirect()->route('category.create')->with('success', 'Category created successfully');
    
    }
}
