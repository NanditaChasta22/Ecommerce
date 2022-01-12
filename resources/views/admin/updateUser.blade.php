@extends('admin.master')
@section('sectiondata')

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <center><h1 class="h3 mb-4 text-gray-800">Update User</h1></center>

        @if(Session::has('info'))
            <div class="alert alert-info">

                {{ Session::get('info') }}

            </div>
        @endif

    <form class="form-horizontal" action="{{ route ('User.update', $data->id) }}" method="POST" enctype="multipart/form-data">
        
        @csrf
        @method('PUT')

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Name:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="text" name="name" value="{{ $data->name }}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Contact:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="contact" value="{{ $data->contact }}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Email</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="pwd1" value="{{ $data->email }}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Address:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="address" value="{{ $data->address }}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Password:</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" name="password" value="{{ $data->password }}">
            </div>

        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type='hidden' value='user' name="role">
                <center><button type="submit" class="btn btn-success">Update User</button><center>
            </div>
        </div>
    </form>

    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->


@endsection