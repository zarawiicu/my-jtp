@extends('admin.layout')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="meetings-page" id="meetings">
            <div class="container py-5 w-full">
                <div class="row">
                    <div class="col-lg-12">

                        @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif

                        <div class="row">
                            <div class="col-12 d-flex no-block align-items-center justify-center" style="margin-left: 30%">
                                <div class="card card-primary">
                                    <h3 class="card-title text-md-center py-3">Add New User</h3>
                                    <form action="{{ route('users.store') }}" method="POST">
                                        <div class="card-body">
                                            @csrf
                                            {{ csrf_field() }}
                                            <div class="col-lg-12">
                                                <div class="form-group row">
                                                    <label for="fname"
                                                        class="col-sm-3 text-right control-label col-form-label">Name</label>
                                                    <div class="col-lg-12">
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" placeholder="Enter your name...">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lname"
                                                        class="col-sm-3 text-right control-label col-form-label">Email</label>
                                                    <div class="col-lg-12">
                                                        <input type="email" class="form-control" id="email"
                                                            name="email" placeholder="Enter your email...">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="lname"
                                                        class="col-md-3 text-right control-label col-form-label">Password</label>
                                                    <div class="col-lg-12">
                                                        <input type="password" class="form-control" id="password"
                                                            name="password" placeholder="Password Here">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-5 text-right control-label col-form-label">Is Admin</label>
                                                    <div class="col-lg-12">
                                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="is_admin" required>
                                                            <option>Select</option>
                                                                <option value="0">User</option>
                                                                <option value="1">Admin</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="border-top">
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
