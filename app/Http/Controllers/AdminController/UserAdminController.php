<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\UserClass;
use Illuminate\Support\Facades\Hash;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $user;

    public function __construct(UserClass $user)
    {
        $this->user = $user;
    }
    
    public function index()
    {
        //
        $show = $this->user->all();
        return view('admin.showUser',compact('show'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'address' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
  
        $input = $request->all();
        // print_r($input);die;
        $this->user->store($input);
        return back()->with('info', 'Add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = $this->user->show($id);
        return view('admin.UserDetail', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = $this->user->get($id);
           //   print_r($data);
           //   die;
        return view('admin.updateUser', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $data = $request->except(['_token','_method']);


        $this->user->update($id, $data);
       
        
        return redirect('/User')->with('info', 'Detail has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = $this->user->delete($id);
        return back()->with('info','Item deleted successfully!');
    }
}
