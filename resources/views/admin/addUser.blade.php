@extends('admin.master')
@section('sectiondata')

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <center><h1 class="h3 mb-4 text-gray-800">ADD User</h1></center>

        @if(Session::has('info'))
            <div class="alert alert-info">

                {{ Session::get('info') }}

            </div>
        @endif

    <form class="form-horizontal" action="{{ route( 'User.store' ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Name:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="text" name="name" placeholder="Enter Name here">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Contact:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="contact" placeholder="Enter Contact Number here">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Email</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="pwd1" placeholder="Enter Email here">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Address:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="address" placeholder="Enter Address here">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Password:</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" name="password" placeholder="Enter password here">
            </div>

        </div>
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type='hidden' value='user' name="role">
                <center><button type="submit" class="btn btn-success">ADD User</button><center>
            </div>
        </div>
    </form>

    </div>
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->


@endsection