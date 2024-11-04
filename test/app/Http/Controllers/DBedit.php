<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBedit extends Controller
{
    public function edit($id)  
    {  
        
        $records = Record::all();
        //$records = DB::select('select * from users');
        dd($records);
        return view('/update',compact('records'));

    //  $records = records::find($id);  
    //  return view('edit', compact('records'));  
    } 
}
