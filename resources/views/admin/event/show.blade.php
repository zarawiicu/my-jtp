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
                                <li class="breadcrumb-item active" aria-current="page">Event</li>
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
                                    <h3 class="card-title text-md-center py-3">Show Event</h1>

                                        <form action="{{ route('events.update', $events->id) }}" method="GET"
                                            enctype="multipart/form-data">
                                            <div class="card-body">
                                                @csrf
                                                @method('PUT')

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="title">Title</label>
                                                        <div class="col-lg-12">
                                                            <input type="text" name="judul" class="form-control"
                                                                value="{{ old('judul', $events->judul ?? '') }}" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <div class="col-lg-12">
                                                            <textarea name="deskripsi" class="form-control" required>{{ old('deskripsi', $events->deskripsi ?? '') }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="image"
                                                            class="col-sm-3 text-right control-label col-form-label">Image</label>
                                                        <div class="col-lg-12">
                                                            <input type="file" name="gambar" class="form-control">
                                                            <img src="{{ asset('images/' . $events->gambar) }}"
                                                                alt="Event Image" style="width: 100px;">

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
