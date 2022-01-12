@extends('admin.master')
@section('sectiondata')

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Page Heading -->
    <center><h1 class="h3 mb-4 text-gray-800">ADD PRODUCT</h1></center>

        @if(Session::has('info'))
            <div class="alert alert-info">

                {{ Session::get('info') }}

            </div>
        @endif

    <form class="form-horizontal" action="{{ route ('Product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2">Product Name:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="text" name="productName" placeholder="Product Name">
            </div>
        </div>
     
        <div class="form-group">
            <label class="control-label col-sm-2">Product Category:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="productCategoryId" placeholder="Product Category">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Product Price:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="text" name="productPrice" placeholder="Product Price">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Product Description:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="text" name="productDescription" placeholder="Product Description">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2">Upload Product Image:</label>
            <div class="col-sm-10">
            <input type="file" class="form-control" name="productImg" id="pwd1">
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <center><button type="submit" class="btn btn-success">ADD PRODUCT</button><center>
            </div>
        </div>
    </form>

    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->


@endsection