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
                    <a href="{{ url('User/create') }}"><h6 class="m-0 font-weight-bold text-primary">ADD Product</h6></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" style="text-align:center" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product Name</th>
                                    <th>Product Category</th>
                                    <th>Product Price</th>
                                    <th>Product Description</th>
                                    <th>Product Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <td>@php print_r ($data['id']) @endphp</td>
                                        <td>@php print_r ($data['productName']) @endphp</td>
                                        <td>@php print_r ($data['productCategoryId']) @endphp</td>
                                        <td>@php print_r ($data['productPrice']) @endphp</td>
                                        <td>@php print_r ($data['productDescription']) @endphp</td>
                                        
                                        @php $path = $data->productImg @endphp

                                        <td><img src="{{asset('./img/images/'. $path )}}"  style='height:100px;width:100px'></td>
                                        <td>
                                            <a href="/Product">
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