<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){ 
        
        $validatedData= array(
            'name' => 'namamasuk',
             'username' => 'usernamamasuk',
             'email' => 'admin@gmail.com',
             'password' => 'masuk' 
 
         );
         User::created($validatedData);
        
        $flight = new User();

        $flight->name = 'namamasuk';
        $flight->username = 'usernamamasuk';
        $flight->email = 'admin@gmail.com';
        $flight->password = 'masuk';

        $flight->save();

        return view('register.index', [
            'title' => 'Register',
            'active' => 'Login' 
        ]);
    }

    public function store(Request $request){
        // return request()->all();    
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3','max:255'],
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:255',
        ]);
        print_r($validatedData);exit;
        $validatedData= array(
           'name' => 'namamasuk',
            'username' => 'usernamamasuk',
            'email' => 'admin@gmail.com',
            'password' => 'masuk' 

        );
        User::created($validatedData);
        // dd('berhasil');
        // $validatedData['password']= bcrypt($validatedData['password']);
        // $validatedData['password']= Hash::make($validatedData['password']);
        // print_r($validatedData);exit;
        // return redirect('/login');
        
    }
}
