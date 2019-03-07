<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admins;


class AdminController extends Controller
{




    public function welcomeadmin(){

        $products = \App\products::all(); 
        return view('welcomeadmin')->with('products',$products);
    }




    

    


}
