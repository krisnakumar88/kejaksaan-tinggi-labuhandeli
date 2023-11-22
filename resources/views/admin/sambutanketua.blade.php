@extends('template.AdminTemplate')

@section('judul', 'Data Sambutan Ketua')

@section('konten')

<div class="row">
    <div class="col-md-6">
        <div class="card shadow mb-4">

            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Sambutan Ketua</h6>
            </div>

            <div class="card-body">
                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                @if (session()->has('failed'))
                <div class="alert alert-error" role="alert">
                    {{ session('error') }}
                </div>
                @endif

                <form action="{{ route('sambutanketua.update', $sambutanketua->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label class="">Foto</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="foto">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="">Title</label>
                        <input class="form-control @error('title') is-invalid @enderror" required type="text"
                            name="title" value="{{ $sambutanketua->title }}">
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="">Sub Title</label>
                        <input class="form-control @error('nama') is-invalid @enderror" required type="text"
                            name="subtitle" value="{{ $sambutanketua->subtitle }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="">Kata Sambutan</label>
                        <textarea class="form-control @error('tentang') is-invalid @enderror" type="text" name="tentang"
                            value="{{ $sambutanketua->tentang }}" required>{{ $sambutanketua->tentang }}</textarea>
                        @error('tentang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                        <button type="button" class="btn btn-success" data-target="#modal-iframe"
                            data-toggle="modal">Live
                            Preview</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-iframe">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body pd-20 pd-sm-40">
                    <iframe src="{{ route('sambutan') }}" height="1000" width="1000" title="KONTEN"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow mb-4">
            <img src="{{ asset('file') }}/{{ $sambutanketua->file->name }}" alt="">
        </div>
    </div>
</div>

<script>
CKEDITOR.replace('tentang');
</script>
<script>
document.querySelector('.custom-file-input').addEventListener('change', function(e) {
    this.nextElementSibling.innerText = this.files[0].name;
});
</script>
@if (session()->has('success'))
<script>
$(document).ready(function() {
    setTimeout(() => {
        swal("Sukses", "{{ session('success') }}", "success");
    }, 1000);
});
</script>
@endif

@if ($errors->any())
<script>
$(document).ready(function() {
    setTimeout(() => {
        swal("Failed", 'Mohon Form Terisi Dengan Benar', "warning");
    }, 1000);

});
</script>
@endif



@endsection