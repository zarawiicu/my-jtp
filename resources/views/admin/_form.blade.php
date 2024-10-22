<section class="meetings-page" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <div class="card">

                            <form
                                action="{{ isset($event) ? route('events.update', $events->id) : route('events.store') }}"
                                method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    @csrf
                                    @if (isset($event))
                                        @method('PUT')
                                    @endif

                                    <div class="form-group row">
                                        <label for="title"
                                            class="col-sm-3 text-right control-label col-form-label">Title</label>
                                        <div class="col-lg-8 px-2">
                                            <input type="text" name="judul" class="col-lg-8 px-2"
                                                value="{{ old('judul', $events->judul ?? '') }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description"
                                            class="col-sm-3 text-right control-label col-form-label">Description</label>
                                        <div class="col-lg-8 px-2">
                                            <textarea name="deskripsi" class="form-control" required>{{ old('deskripsi', $events->deskripsi ?? '') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="image"
                                            class="col-sm-3 text-right control-label col-form-label">Image</label>
                                        <div class="col-lg-8 px-2">
                                            <input type="file" name="gambar" class="form-control">
                                            @if (isset($event) && $events->gambar)
                                                <img src="{{ asset('storage/' . $events->gambar) }}" alt="Event Image"
                                                    style="width: 100px;">
                                            @endif
                                        </div>
                                    </div>

                                    <button type="submit">{{ isset($event) ? 'Update' : 'Create' }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <div class="form-group row">
    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
    <div class="col-sm-9">
        <textarea class="form-control"></textarea>
    </div>
</div>
</div>
<div class="border-top">
    <div class="card-body">
        <button type="button" class="btn btn-primary">Submit</button>
    </div>
</div>
</form> --}}
