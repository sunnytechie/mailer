<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();
        return view('todo.index', compact('todos'));
    }

    public function create()
    {

        return view('todo.create');
    }

    public function store(Request $request)
    {

        //validate the data
        $this->validate($request, [
            'description' => 'required',
        ]);

        //dd($request->all());

        $todo = new Todo();
        $todo->name = auth()->user()->name;
        $todo->description = $request->description;
        $todo->user_id = auth()->user()->id;
        $todo->save();

        return back()->with('success', 'Todo created successfully');
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return back();
    }
}
