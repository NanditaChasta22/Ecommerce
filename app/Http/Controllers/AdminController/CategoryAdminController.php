<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\CategoryClass;

class CategoryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $category;

    public function __construct(CategoryClass $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        //echo "hello";die;
        
        $show = $this->category->all();
        return view('admin.showCategory',compact('show'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.addCategory');
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
            'categoryName' => 'required',
            'categoryDescription' => 'required',
            'categoryImg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('categoryImg')) {
            $destinationPath = 'img/images/';
            $profileImage = time(). $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['categoryImg'] = "$profileImage";
        }
    
        $this->category->store($input);
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
         // echo $id;
         $data = CategoryModel::where('id', $id)->get()->first();
         // echo "<pre>";
         // print_r($data);
         // die;
         return view('admin.CategoryDetail', compact('data'));
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
           //
           $data = $this->category->get($id);
           //   print_r($data);
           //   die;
           return view('admin.updateCategory', compact('data'));
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
        $updateData = [
            'categoryName' => $request->categoryName,
            'categoryDescription' => $request->categoryDescription,
            'categoryImg' => '1.png'
        ];
        // print_r($_POST);

        $this->category->update($updateData);
        // CategoryModel::whereId($id)->update($updateData);
        return redirect('/Category')->with('info', 'Detail has been updated');
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
        $data = $this->category->delete($id);
        return back()->with('info','Item deleted successfully!');
    }
}
