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
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <section class="meetings-page" id="meetings">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-12 d-flex no-block align-items-center">
                                    <h1>Users</h1>
                                    <a href="{{ route('users.create') }}" class="btn btn-primary"
                                        style="margin-left:80%">Add User</a>
                                </div>
                            </div>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $u)
                                        <tr>
                                            <td>{{ $u->is }}</td>
                                            <td>{{ $u->name }}</td>
                                            <td>{{ $u->email }}</td>
                                            <td>{{ $u->password }}</td>
                                            <td>{{ $u->role }}</td>

                                            <td>
                                                <a href="{{ route('users.show', $u->id) }}">Show</a>
                                                <a href="{{ route('users.edit', $u->id) }}">Edit</a>
                                                <form action="{{ route('users.destroy', $u->id) }}" method="POST"
                                                    style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @endsection
