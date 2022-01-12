@extends('admin.master')
@section('sectiondata')
 <!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Show Product</h1>

            @if(Session::has('info'))
                <div class="alert alert-info">

                    {{ Session::get('info') }}

                </div>
            @endif
        
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <a href="{{url('Product/create')}}"><h6 class="m-0 font-weight-bold text-primary">ADD Product</h6></a>
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
                                @foreach ( $show as $s )
                                    <tr>
                                        <td>{{ $s->pid }}</td>
                                        <td>{{ $s->productName }}</td>
                                        <td>{{ $s->categoryName  }}</td>
                                        <td>{{ $s->productPrice }}</td>
                                        <td>{{ $s->productDescription }}</td>
                                        
                                        @php $path = "img/images/".$s->productImg @endphp

                                        <td><img src='<?php echo $path?>' style='height:100px;width:100px'></td>
                                        <td>
                                            <a href="{{ URL::to('Product/' . $s->pid . '/edit') }}">
                                                <i class="fas fa-edit"></i> 
                                            </a>

                                            <a href="{{ URL::to('Product/' . $s->pid) }}">
                                                <i class="fa fa-eye" aria-hidden="true" style="color:green"></i>
                                            </a>

                                            <form method="post" action="{{ route('Product.destroy', $s->pid) }}">
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