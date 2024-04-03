<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Form;


class registerdataController extends Controller
{
    public function registerdata(){
        $users =Form::get();
        return view('registerdata',['users'=>$users]);
    }  
    
    
}
