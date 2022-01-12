<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\ProductClass;

class ProductAdminController extends Controller
{

    protected $product;

    public function __construct(ProductClass $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $show = $this->product->all();
        return view('admin.showProduct',compact('show'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.addProduct');
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
            'productName' => 'required',
            'productCategoryId' => 'required',
            'productPrice' => 'required',
            'productDescription' => 'required',
            'productImg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('productImg')) {
            $destinationPath = 'img/images/';
            $profileImage = time(). $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['productImg'] = "$profileImage";
        }
    
        $this->product->store($input);
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
        // $data = CategoryModel::where('id', $id)->get()->first();
        // echo "<pre>";
        // print_r($data);
        // die;
        $data = $this->product->show($id);
        return view('admin.ProductDetail', compact('data'));
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
       // echo "hello";
        $data = $this->product->get($id);
        //   print_r($data);
        //   die;
        return view('admin.updateProduct', compact('data'));
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
        $data = $request->all(['productName', 'productCategoryId', 'productPrice', 'productDescription', 'productImg']);
        
      
        if ($image = $request->file('productImg')) {
            $destinationPath = 'img/images/';
            $profileImage = time(). $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['productImg'] = "$profileImage";
        }

        $this->product->update($id, $data);

        return redirect('/Product')->with('info', 'Detail has been updated');
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
        $data = $this->product->delete($id);
        return back()->with('info','Item deleted successfully!');
    }
}
