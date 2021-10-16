<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function store( Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ]);
        $correo = new ContactanosMailable($request->all());
        Mail::to('judiespa07@gmail.com')->send($correo);
        return view('contacto');
    }
}
