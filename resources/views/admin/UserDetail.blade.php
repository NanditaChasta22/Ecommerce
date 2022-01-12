@extends('admin.master')
@section('sectiondata')
 <!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Show Category</h1>

            @if(Session::has('info'))
                <div class="alert alert-info">

                    {{ Session::get('info') }}

                </div>
            @endif
        
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href=""><h6 class="m-0 font-weight-bold text-primary">ADD Category</h6></a>
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
                                
                                    <tr>
                                        <td>@php print_r ($data['id']) @endphp</td>
                                        <td>@php print_r ($data['name']) @endphp</td>
                                        <td>@php print_r ($data['contact']) @endphp</td>
                                        <td>@php print_r ($data['email']) @endphp</td>
                                        <td>@php print_r ($data['address']) @endphp</td>
                                        <td>
                                            <a href="/User">
                                                <button class='btn btn-success'>
                                                    Back
                                                </button>
                                            </a>
                                        </td>
                                    </tr>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    </div>
    <!-- /.container-fluid -->
</div>
    <!-- End of Main Content -->



@endsection