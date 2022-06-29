<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PeopleExport;
use App\Imports\PeopleImport;
use Maatwebsite\Excel\Facades\Excel;

class PeopleController extends Controller
{
       /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request) 
    {
        Excel::import(new PeopleImport, $request->file('file')->store('temp'));
        return back()->with('success', 'Data imported successfully!');
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new PeopleExport, 'email-collection.xlsx');
    } 
}
