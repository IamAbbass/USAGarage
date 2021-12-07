@extends('layouts.admin')

@section('content')

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        @include('layouts.includes.admin.nav')

        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Edit Investor</h1>

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
                    <h6 class="m-0 font-weight-bold text-primary">Edit Investor</h6>
                </div>
                <div class="card-body">
                    <form action="/home/investor/{{ $investor->id }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <label>Name: *</label>
                                <input required value="{{ $investor->name }}" name="name" type="name" class="form-control" />
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Email: *</label>
                                <input required value="{{ $investor->email }}" name="email" type="email" class="form-control" />
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Mobile Number: *</label>
                                <input required value="{{ $investor->phone }}" name="phone" type="phone" class="form-control" />
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Date of Birth: *</label>
                                <input required value="{{ $investor->dob }}" name="dob" type="date" class="form-control" />
                            </div>
                            <div class="col-md-4 mb-2">
                                <label>Password: *</label>
                                <input name="password" placeholder="Enter new password to change" type="password" class="form-control" />
                            </div>

                            <div class="col-md-4 mb-2">
                                <label>Allow Login: *</label><br/>
                                <label><input required {{ $investor->can_login == 1 ? 'checked' : '' }} name="can_login" value="1" type="radio" /> Active - Allow Login</label><br/>
                                <label><input required {{ $investor->can_login == 0 ? 'checked' : '' }} name="can_login" value="0" type="radio" /> Block - Can't Login</label>
                            </div>
                            <div class="col-md-12 mb-2">
                                <button type="submit" class="btn btn-primary float-right mt-2">Update</button>
                            </div>
    
                        </div>
                    </form>
                </div>
            </div>

        </div>

    @include('layouts.includes.admin.footer')

</div>

@endsection