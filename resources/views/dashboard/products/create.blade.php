@extends('layouts.admin')

@section('content')

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        @include('layouts.includes.admin.nav')

        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Add Product</h1>

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


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Product</h6>
                </div>
                <div class="card-body">
                    <form action="/home/product" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-md-4 mb-2">
                                <label>Select Category: *</label>
                                <select required name="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Product: *</label>
                                <input required name="title" type="text" class="form-control" />
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Image: *</label>
                                <input required name="image" type="file" />
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Brand: *</label>
                                <input required name="brand" type="text" class="form-control" />
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Note: *</label>
                                <textarea required name="note" type="text" class="form-control"></textarea>
                            </div>

                            <div class="col-md-4 mb-2">
                                <label>Year: *</label>
                                <input required name="years" type="text" class="form-control" />
                            </div>

                            <div class="col-md-4 mb-2">
                                <label>Price: *</label>
                                <input required name="price" type="number" class="form-control" />
                            </div>

                            <div class="col-md-4 mb-2">
                                <label>Stock: *</label><br/>
                                <label><input required checked name="in_stock" value="true" type="radio" /> In Stock</label><br/>
                                <label><input required name="in_stock" value="false" type="radio" /> Out of stock</label>
                            </div>
                            <div class="col-md-12 mb-2">
                                <button type="submit" class="btn btn-primary float-right mt-2">Add Product</button>
                            </div>
    
                        </div>
                    </form>
                </div>
            </div>

        </div>

    @include('layouts.includes.admin.footer')

</div>

@endsection