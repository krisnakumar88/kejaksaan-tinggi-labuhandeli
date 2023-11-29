@extends('template.AdminTemplate')

@section('judul', 'Dashboard')

@section('konten')

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Kategori Berita</h6>

                </div>

                <div class="card-body">
                    @if (session()->has('failed'))
                        {{ session('failed') }}
                    @endif


                    <button class="btn btn-primary btn-icon-split" data-target="#modal-tambah" data-toggle="modal"><span
                            class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">Tambah Data</span></button>

                    <hr>

                    <div class="modal fade" id="modal-tambah">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-body pd-20 pd-sm-40">
                                    <button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26"
                                        data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                    <h5 class="modal-title mb-4 text-center">Tambah Kategori Berita</h5>
                                    <div class="">
                                        <form action="{{ route('kategori-berita.store') }}" method="post">
                                            @csrf
                                            <hr>
                                            <div class="form-group">
                                                <label class="">Kategori Berita</label>
                                                <input class="form-control @error('nama') is-invalid @enderror" required
                                                    type="text" name="nama" value="{{ old('nama') }}">
                                                @error('nama')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <br>
                                            <button class="btn btn-primary" type="submit" id="submit">Submit</button>
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
                                    <th>Nama Kategori Berita</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        <td class="">{{ $item->nama }}</td>

                                        <td class="text-center">
                                            <div class="btn btn-list">

                                                <button class="btn ripple btn-primary" data-toggle="dropdown">Action
                                                    <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                                                <div class="dropdown-menu">
                                                    {{-- <a href="" class="dropdown-item">Detail</a> --}}
                                                    <form action="{{ route('kategori-berita.destroy', $item->id) }}" method="post"
                                                        class="form-delete">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="dropdown-item" data-toggle="tooltip"
                                                            id="delete-button">Delete</button>
                                                    </form>
                                                    <button class="dropdown-item edit-kategori-berita"
                                                        data-kategori="{{ $item->id }}">Edit</button>
                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>



                        <div class="modal fade" id="modal-update">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body pd-20 pd-sm-40">
                                        <button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26"
                                            data-dismiss="modal" type="button"><span
                                                aria-hidden="true">&times;</span></button>
                                        <h5 class="modal-title mb-4 text-center">Update Kategori Berita</h5>
                                        <div class="">
                                            <form action="" method="post" id="form-update"
                                                enctype='multipart/form-data'>
                                                @csrf
                                                <input type="hidden" name="_method" value="PUT">
                                                <hr>
                                                <div class="form-group">
                                                    <label class="">Kategori Berita</label>
                                                    <input class="form-control @error('nama') is-invalid @enderror" required
                                                        type="text" name="nama" id="editnama">
                                                </div>
                                                <hr>
                                                <br>
                                                <button class="btn btn-primary" type="submit"
                                                    id="submit">Submit</button>
                                        </div>
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
            $('body').on('click', '.edit-kategori-berita', function() {

                let post_id = $(this).data('kategori');
                $('#judul-edit').val("");


                $.ajax({
                    url: `/admin/kategori-berita/${post_id}`,
                    type: "GET",
                    cache: false,
                    success: function(response) {

                        $('#editnama').val(response.data.nama);
                        $("#form-update").attr("action", "/admin/kategori-berita/" + response.data.id);

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

@endsection
