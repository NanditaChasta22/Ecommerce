@extends('admin.master')
@section('sectiondata')

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <center><h1 class="h3 mb-4 text-gray-800">ADD CATEGORY</h1></center>

        @if(Session::has('info'))
            <div class="alert alert-info">

                {{ Session::get('info') }}

            </div>
        @endif

    <form class="form-horizontal" action="{{route('Category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Category Name:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="text" name="categoryName" placeholder="Category Name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Category Description:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="categoryDescription" placeholder="Category Description">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Upload Category Image:</label>
            <div class="col-sm-10">
            <input type="file" class="form-control" name="categoryImg" id="pwd1">
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <center><button type="submit" class="btn btn-success">ADD CATEGORY</button><center>
            </div>
        </div>
    </form>

    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->


@endsection