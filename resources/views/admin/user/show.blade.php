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
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12 d-flex no-block align-items-centerjustify-center" style="margin-left: 30%">
                                <div class="card card-warning">
                                    <h3 class="card-title text-md-center py-3">Show User</h1>

                                        <form action="{{ route('users.update', $users->id) }}" method="GET"
                                            enctype="multipart/form-data">
                                            <div class="card-body">
                                                @csrf
                                                @method('PUT')

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <div class="col-lg-12">
                                                            <input type="text" name="name" class="form-control"
                                                                value="{{ old('name', $users->name ?? '') }}" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <div class="col-lg-12">
                                                            <input type="email" name="email" class="form-control"
                                                                value="{{ old('email', $users->email ?? '') }}" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <div class="col-lg-12">
                                                            <input type="password" name="password" class="form-control"
                                                                value="{{ old('password', $users->password ?? '') }}" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-5 text-right control-label col-form-label">Is Admin</label>
                                                        <div class="col-lg-12">
                                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="is_Admin" required>
                                                                <option value="0" {{ $users->is_admin == 0 ? 'selected' : '' }}>User</option>
                                                                <option value="1" {{ $users->is_admin == 1 ? 'selected' : '' }}>Admin</option>
                                                            </select>
                                                        </div>
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
