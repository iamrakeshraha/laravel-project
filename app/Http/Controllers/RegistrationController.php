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

    public function update($id){
        // dd($id);
        $registration= registration::find($id);
        $data= compact('registration');
        // dd($data);
        return view('form')->with($data);
    }

    public function delete($id){
        // print_r ($id);
        // dd($id);
        $reg_id = $id;
        $registration = registration::find($reg_id);
        // dd($registration);
        if(!is_null($registration)){
            $registration->delete();
        }
        return redirect('/dashboard');
    }
}
