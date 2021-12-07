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
            <h1 class="h3 mb-2 text-gray-800">Welcome to {{ env('APP_NAME') }} Admin Panel</h1>


        </div>

    </div>
    <!-- End of Main Content -->

    @include('layouts.includes.admin.footer')

</div>

@endsection