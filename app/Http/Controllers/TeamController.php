<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    //
    public function index(){
        $auth=DB::table('team_profile')->get();
        
        return view('author',['team_profile'=>$auth]);
    }
}