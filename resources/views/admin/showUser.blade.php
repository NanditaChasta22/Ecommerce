@extends('admin.master')
@section('sectiondata')
 <!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Show User</h1>

            @if(Session::has('info'))
                <div class="alert alert-info">

                    {{ Session::get('info') }}

                </div>
            @endif
        
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="{{url('User/create')}}"><h6 class="m-0 font-weight-bold text-primary">ADD User</h6></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" style="text-align:center" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $show as $s )
                                    <tr>
                                        <td>{{ $s->id }}</td>
                                        <td>{{ $s->name }}</td>
                                        <td>{{ $s->contact }}</td>
                                        <td>{{ $s->email }}</td>
                                        <td>{{ $s->address }}</td>
                                        <td>
                                            <a href="{{ URL::to('User/' . $s->id . '/edit') }}">
                                                <i class="fas fa-edit"></i> 
                                            </a>

                                            <a href="{{ URL::to('User/' . $s->id) }}">
                                                <i class="fa fa-eye" aria-hidden="true" style="color:green"></i>
                                            </a>

                                            <form method="post" action="{{ route('User.destroy', $s->id) }}">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-light"><i class="fas fa-trash" style="color:red"></i></button>
                                            </form>

                                        </td>
                                    </tr> 
                                @endforeach    
                            </tbody>
                        </table>
                            {{ $show->links() }}
                    </div>
                </div>
            </div>

    </div>
    <!-- /.container-fluid -->
</div>
    <!-- End of Main Content -->



@endsection