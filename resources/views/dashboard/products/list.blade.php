@extends('layouts.admin')

@section('content')

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        @include('layouts.includes.admin.nav')

        <div class="container-fluid">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
    
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Products 
                <a class="btn btn-primary float-right" href="/home/product/create">Add Product</a>
            </h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr> 
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Brand</th>
                                    <th>Note</th>
                                    <th>Years</th>
                                    <th>Price</th>
                                    <th>In Stock</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Brand</th>
                                    <th>Note</th>
                                    <th>Years</th>
                                    <th>Price</th>
                                    <th>In Stock</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                
                                @foreach ($products as $index => $product)
                                    <tr>
                                        <td>{{++$index}}.</td>
                                        <td>
                                            <img style="width: 100px;" src="{{ asset('/uploads/'.$product->image) }}" />
                                        </td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->brand }}</td>
                                        <td>{{ $product->note }}</td>
                                        <td>{{ $product->years }}</td>
                                        <td>{{ $product->price }}</td>
                                        <th>
                                            @if ($product->in_stock)
                                                <span class="badge badge-success">In Stock</span>
                                            @else
                                                <span class="badge badge-danger">Out Of Stock</span>
                                            @endif
                                        </th>
                                        {{-- <td>
                                            <a class="btn btn-sm btn-primary m-1" href="/home/product/{{ $product->id }}/edit">Edit</a>
                                        </td> --}}
                                    </tr>
                                    
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- End of Main Content -->

    @include('layouts.includes.admin.footer')

</div>

@endsection