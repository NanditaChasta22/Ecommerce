<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\LoginAdminClass;
use Auth;
use Validator;

class LoginAdminController extends Controller
{
    //

    protected $admin;

    public function __construct(LoginAdminClass $admin)
    {
        $this->admin = $admin;
    }

    public function adminLogin()
    {
        //echo "hello";die;
        return view('admin.loginAdmin');
    }

    public function checkadmin(Request $request)
    {

        

    }

    public function logout(Request $request)
    {

    }


}
