<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\registration;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function register(Request $req)
    {
        $req->validate(
            [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            ]
            );
        // echo "<pre>";
        // print_r( $req->all());

        $registration = new registration();

        //insert query
        $registration->name = $req['name'];
        $registration->email = $req['email'];
        $registration->password = md5($req['password']);
        $registration->_token = $req['_token'];
        $registration->save();

        return redirect('/dashboard');
        //-------
    }

    public function dashboard() {
        $registrations = registration::all();
        // echo '<pre>';
        // print_r($registrations);
        $data1 = compact('registrations');
        return view('dashboard')->with($data1);
    }
}
