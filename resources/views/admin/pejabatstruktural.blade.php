@extends('template.AdminTemplate')

@section('judul', 'Data Pejabat Struktural')

@section('konten')

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">

            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Pejabat Struktural</h6>

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
                                <h5 class="modal-title mb-4 text-center">Tambah Pejabat Struktural</h5>
                                <div class="">
                                    <form action="{{ route('pejabatstruktural.store') }}" method="post"
                                        enctype="multipart/form-data">
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
                                            <label class="">Nama Pejabat Struktural</label>
                                            <input class="form-control @error('nama') is-invalid @enderror" required
                                                type="text" name="nama" value="{{ old('nama') }}">
                                            @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="">Jabatan</label>
                                            <input class="form-control @error('jabatan') is-invalid @enderror" required
                                                type="text" name="jabatan" value="{{ old('jabatan') }}">
                                            @error('jabatan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="">Tentang</label>
                                            <textarea class="form-control" name="tentang_pejabat"
                                                id="tentang_pejabat"></textarea>
                                        </div>
                                        <hr>
                                        <button class="btn btn-primary" type="submit" id="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pejabat</th>
                                <th>Jabatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="">{{ $item->nama }}</td>
                                <td class="">{{ $item->jabatan }}</td>
                                <td class="text-center">
                                    <div class="btn btn-list">
                                        <button class="btn ripple btn-primary" data-toggle="dropdown">Action
                                            <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                                        <div class="dropdown-menu">
                                            <button class="dropdown-item" data-target="#modal-detail-{{ $item->id }}"
                                                data-toggle="modal">Detail</button>
                                            <form action="{{ route('pejabatstruktural.destroy', $item->id) }}"
                                                method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="dropdown-item" data-toggle="tooltip" id="delete-button"
                                                    onclick="return confirm('Yakin hapus data?')">Delete</button>
                                            </form>
                                            <button class="dropdown-item editpejabat"
                                                data-pejabat="{{ $item->id }}">Edit</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @foreach ($data as $item)
                <div class="modal fade" id="modal-detail-{{ $item->id }}">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body pd-20 pd-sm-40">
                                <button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26"
                                    data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                <h5 class="modal-title mb-4 text-center">Detail Data</h5>
                                <hr>

                                <div class="row">
                                    <div class="col-4">
                                        <img width="240" src="{{ asset('file') }}/{{ $item->getFile->name }}" alt="">
                                    </div>
                                    <div class="col-8">
                                        <table class="table table-bordered" id="dataTable">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Nama Pejabat Struktural</td>
                                                    <td>{{ $item->nama }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jabatan</td>
                                                    <td>{{ $item->jabatan }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tentang</td>
                                                    <td>{{ $item->tentang_pejabat }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <hr>
                                <button aria-label="Close" class="btn btn-primary" data-dismiss="modal"
                                    type="button">Kembali</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="modal fade" id="modal-update">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body pd-20 pd-sm-40">
                                <button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26"
                                    data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                <h5 class="modal-title mb-4 text-center">Update Data Pejabat Struktural</h5>
                                <div class="">
                                    <form action="" method="post" id="form-update" enctype='multipart/form-data'>
                                        @csrf
                                        <input type="hidden" name="_method" value="PUT">
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
                                            <label class="">Nama Pejabat Struktural</label>
                                            <input class="form-control" required type="text" name="nama" id="edit-nama"
                                                value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="">Jabatan</label>
                                            <input class="form-control" required type="text" name="jabatan"
                                                id="edit-jabatan" value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="">Tentang</label>
                                            <textarea class="form-control" name="tentang_pejabat"
                                                id="edit-tentang_pejabat"></textarea>
                                        </div>
                                        <hr>
                                        <button class="btn btn-primary" type="submit" id="submit">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script>
$(document).ready(function() {
    $('body').on('click', '.editpejabat', function() {
        let post_id = $(this).data('pejabat');
        $('#judul-edit').val("");

        $.ajax({
            url: `/admin/pejabatstruktural/${post_id}`,
            type: "GET",
            cache: false,
            success: function(response) {
                // alert(response);
                $('#edit-nama').val(response.data.nama);
                $('#edit-jabatan').val(response.data.jabatan);
                $('#edit-tentang_pejabat').val(response.data.tentang_pejabat);
                $("#form-update").attr("action", "/admin/pejabatstruktural/" + response.data
                    .id);

                $('#modal-update').modal('show');
            }
        });
    });
});
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