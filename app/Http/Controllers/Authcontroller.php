<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class Authcontroller extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // if ($credentials->fails()) {
        //     return redirect()->back()->withErrors($credentials)->withInput();
        // }
        $user = Form::where([
            'email' => $request->email,
            'password' => md5($request->password)
        ])->first();
        
        if ($user) {
            
            return redirect()->route('registerdata');
        }else{
            return redirect()->back()->withErrors([ 'approve' => 'Wrong password']);
        }
    }
}
