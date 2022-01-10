@extends('admin.master')
@section('sectiondata')

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <center><h1 class="h3 mb-4 text-gray-800">UPDATE CATEGORY</h1></center>

        @if(Session::has('info'))
            <div class="alert alert-info">

                {{ Session::get('info') }}

            </div>
        @endif

    <form class="form-horizontal" action={{route('Category.update', $data->id) }}>
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Category Name:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="text" name="categoryName" value="{{ $data->categoryName }}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Category Description:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" name="categoryDescription" value="{{ $data->categoryDescription }}" >
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Upload Category Image:</label>
            <div class="col-sm-10">
                
            <input type="file" class="form-control" id="pwd1" name="categoryImg" value="{{ $data->categoryImg }}">
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>

    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->


@endsection