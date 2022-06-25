<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Register extends Controller
{
    public function uniqueEmail(Request $request){

        $email = $request->input('email');

        $find = DB::table('users')->where('email', $email)->get();

        if($find->count() > 0){
            return 'email found';
        }
        else{
            return 'email not found';
        }
        
    }

}
