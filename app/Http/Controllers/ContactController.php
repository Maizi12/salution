<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store(Request $request){
        DB::table('contact')->insert([
            'Nama'=>$request->Nama,
            'Email'=>$request->Email,
            'Phone'=>$request->Phone,
            'Pesan'=>$request->Pesan,
        ]);

        return redirect('/');
    }
}
