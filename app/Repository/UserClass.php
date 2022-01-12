<?php

namespace App\Repository;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserClass implements UserInterface
{
    public function all()
    {
        return User::get()->paginate(3);
    }

    public function get($id)
    {
        return User::find($id);
    }

    public function store(array $data)
    {
           
            $user = new User;
            $user->name = $data['name'];
            $user->contact = $data['contact'];
            $user->email = $data['email'];
            $user->address = $data['address'];
            $user->password  = Hash::make('password');
            $user->role = $data['role'];
            return $user->save();
    }

    public function show($id)
    {

        return User::find($id);
    }

    public function update($id, array $data)
    {
        $user = User::findOrFail($id);
        $user->name = $data['name'];
        $user->contact = $data['contact'];
        $user->email = $data['email'];
        $user->address = $data['address'];
        $user->password = Hash::make($data['password']);
        return $user->save();   
    }

    public function delete($id)
    {
        return User::destroy($id);
    }

}