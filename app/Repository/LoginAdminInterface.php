<?php

namespace App\Repository;


interface LoginAdminInterface 
{

    public function checkadmin(Request $request);

    public function logout(Request $request);

}