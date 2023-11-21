@extends('template.AdminTemplate')

@section('judul', 'Data Daftar Pencarian Orang (DPO)')

@section('konten')

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">

            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Pencarian Orang (DPO)</h6>

            </div>

            <div class="card-body">
                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                @if (session()->has('error'))
                <div class="alert alert-error" role="alert">
                    {{ session('error') }}
                </div>
                @endif

                <button class="btn btn-primary btn-icon-split" data-target="#modal-tambah" data-toggle="modal"><span
                        class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span></button>
                <hr>

                <div class="modal fade" id="modal-tambah">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body pd-20 pd-sm-40">
                                <button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26"
                                    data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                <h5 class="modal-title mb-4 text-center">Tambah Daftar Pencarian Orang</h5>
                                <div class="">
                                    <form action="{{ route('daftarpencarian.store') }}" method="post"
                                        enctype='multipart/form-data'>
                                        @csrf
                                        <hr>
                                        <div class="form-group">
                                            <label class="">Foto</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile"
                                                    name="foto">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="">Nama</label>
                                            <input class="form-control @error('nama') is-invalid @enderror" required
                                                type="text" name="nama" value="{{ old('nama') }}">
                                            @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="">Kasus</label>
                                            <input class="form-control @error('kasus') is-invalid @enderror" required
                                                type="text" name="kasus" value="{{ old('kasus') }}">
                                            @error('kasus')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="">Keterangan</label>
                                            <textarea class="form-control @error('keterangan') is-invalid @enderror"
                                                type="text" name="keterangan" value="{{ old('keterangan') }}"
                                                required></textarea>
                                            @error('keterangan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <hr>
                                        <div class="form-group">
                                            <br>
                                            <button class="btn btn-primary" type="submit" id="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Kasus</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td class="">{{ $item->nama }}</td>
                                <td class="">{{ $item->kasus }}</td>

                                <td class="text-center">
                                    <div class="btn btn-list">

                                        <button class="btn ripple btn-primary" data-toggle="dropdown">Action
                                            <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" data-target="#modal-iframe-{{ $item->slug }}"
                                                data-toggle="modal">Live Preview</button>
                                            {{-- <a href="" class="dropdown-item">Detail</a> --}}
                                            <form action="{{ route('daftarpencarian.destroy', $item->id) }}"
                                                method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="dropdown-item" data-toggle="tooltip" id="delete-button"
                                                    onclick="return confirm('Yakin hapus data?')">Delete</button>
                                            </form>
                                            <button class="dropdown-item" data-target="#modal-tambah-{{ $item->slug }}"
                                                data-toggle="modal">Edit</button>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{--@foreach ($data as $item)
                    <div class="modal fade" id="modal-iframe-{{ $item->slug }}">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-body pd-20 pd-sm-40">
                                <iframe src="{{ route('daftarpencarian_detail', $item->slug) }}" height="1000"
                                    width="1000" title="KONTEN"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach--}}




            </div>

        </div>
    </div>
</div>
</div>

<script>
CKEDITOR.replace('konten');
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