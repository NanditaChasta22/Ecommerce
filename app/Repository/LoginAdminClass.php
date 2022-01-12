<?php

namespace App\Repository;
use App\Models\User;

class LoginAdminClass implements LoginAdminInterface
{

    public function checkadmin(Request $request)
    {

        
        $email = $request->email;
        $password = $request->password ;
        $role = $request->role ;


       $validatedData = $request->validate([
            'role' => 'required',
            'password' => 'required|min:5',
            'email' => 'required'
        ]);

        $data = [
        "email" => $request->email,
        "password" => $request->password,
        "role" => $request->role,
        ];

        if (Auth::attempt($data)) 
        {
        
        $request->session()->put('email', $email);  
        $admin = Auth::user();
        $token = $admin->createToken("LaravelRestApi")->accessToken;

        return view('admin.adminDashboard');
        }
        else 
        {
            echo "Unauthorised data";
        }

    }

    public function logout(Request $request)
    {

        $request->session()->forget('email');
        $request->session()->flush();
        return redirect('adminlogin');

    }

}