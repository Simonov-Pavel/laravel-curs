<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message(Request $request){
        
        if($request->isMethod('post')){
            $request->validate([
                'email' => 'required|email',
                'message' => 'required|max:5'
            ]);
        }

        return view('message');
    }
}
