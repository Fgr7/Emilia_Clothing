<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class SessionsController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store(){

        if(auth()->attempt(request(['email','password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try againt',
            ]);
        }
        else{
            if(auth()->user()->role == 'admin'){
                return redirect()->route('products.index');
            }else{
                return redirect()->to('/');
            }
        }
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }


}


