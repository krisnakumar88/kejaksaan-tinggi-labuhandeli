@extends('template.AdminTemplate')

@section('judul', 'Dashboard')

@section('konten')

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Sub Halaman</h6>

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
                                    <h5 class="modal-title mb-4 text-center">Tambah Sub Halaman</h5>
                                    <div class="">
                                        <form action="{{ route('subhalaman.store') }}" method="post"
                                            enctype='multipart/form-data'>
                                            @csrf
                                            <hr>
                                            <div class="form-group">
                                                <label class="">Judul</label>
                                                <input class="form-control @error('judul') is-invalid @enderror" required
                                                    type="text" name="judul" value="{{ old('judul') }}">
                                                @error('judul')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label for="pilihhalaman">Kategori Halaman</label>
                                                <select class="form-control" id="pilihhalaman" name="id_halaman">
                                                    @foreach ($kategori_halaman as $halaman)
                                                        <option value="{{ $halaman->id }}">{{ $halaman->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <hr>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="use-link">
                                                <label class="custom-control-label" for="use-link">Pakai Link</label>
                                            </div>

                                            <hr>
                                            <div id="form-link">
                                                <div class="form-group">
                                                    <label class="">Link</label>
                                                    <input class="form-control @error('link') is-invalid @enderror" required
                                                        type="text" name="link" value="{{ old('link') }}">
                                                    @error('link')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div id="form-not-link">
                                                <hr>

                                                <div class="form-group">
                                                    <label class="">Foto</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile"
                                                            name="foto">
                                                        <label class="custom-file-label" for="customFile">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <label class="">Konten</label>
                                                    <textarea name="content" id="konten" rows="10" cols="80">

                                                    </textarea>
                                                    <br>

                                                </div>
                                            </div>
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
                                    <th>Judul</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        <td class="">{{ $item->judul }}</td>

                                        <td class="text-center">
                                            <div class="btn btn-list">

                                                <button class="btn ripple btn-primary" data-toggle="dropdown">Action
                                                    <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item"
                                                        data-target="#modal-iframe-{{ $item->slug }}"
                                                        data-toggle="modal">Live Preview</button>
                                                    {{-- <a href="" class="dropdown-item">Detail</a> --}}
                                                    <form action="{{ route('subhalaman.destroy', $item->id) }}"
                                                        method="post" class="form-delete">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="dropdown-item" data-toggle="tooltip"
                                                            id="delete-button">Delete</button>
                                                    </form>
                                                    <button class="dropdown-item editsubhalaman"
                                                        data-subhalaman="{{ $item->id }}">Edit</button>


                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        @foreach ($data as $item)
                            <div class="modal fade" id="modal-iframe-{{ $item->slug }}">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body pd-20 pd-sm-40">
                                            <iframe src="{{ route('subhalaman', $item->slug) }}" height="1000"
                                                width="1000" title="KONTEN"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        <div class="modal fade" id="modal-update">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body pd-20 pd-sm-40">
                                        <button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26"
                                            data-dismiss="modal" type="button"><span
                                                aria-hidden="true">&times;</span></button>
                                        <h5 class="modal-title mb-4 text-center">Update Sub Halaman</h5>
                                        <div class="">
                                            <form action="" method="post" id="form-update"
                                                enctype='multipart/form-data'>
                                                @csrf
                                                <input type="hidden" name="_method" value="PUT">
                                                <hr>
                                                <div class="form-group">
                                                    <label class="">Judul</label>
                                                    <input class="form-control " required type="text" name="judul"
                                                        id="judul-edit" value="">

                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <label for="pilihhalaman">Kategori Halaman</label>
                                                    <select class="form-control" id="pilihhalamanedit" name="id_halaman">
                                                        @foreach ($kategori_halaman as $halaman)
                                                            <option value="{{ $halaman->id }}">{{ $halaman->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>


                                                <div id="form-link-edit">
                                                    <hr>
                                                    <div class="form-group">
                                                        <label class="">Link</label>
                                                        <input class="form-control @error('link') is-invalid @enderror"
                                                            required type="text" name="link"
                                                            id="link-edit">
                                                    </div>
                                                </div>
                                                <div id="form-not-link-edit">
                                                    <hr>

                                                    <div class="form-group">
                                                        <label class="">Foto</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                id="customFile" name="foto">
                                                            <label class="custom-file-label" for="customFile">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group">
                                                        <label class="">Konten</label>
                                                        <textarea name="content" id="konten-edit" rows="10" cols="80">

                                                        </textarea>
                                                        <br>

                                                    </div>
                                                </div>

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
        CKEDITOR.replace('konten', {

            filebrowserUploadUrl: "{{ route('upload_foto_subhalaman', ['_token' => csrf_token()]) }}",

            filebrowserUploadMethod: 'form'

        });

        CKEDITOR.replace('konten-edit', {

            filebrowserUploadUrl: "{{ route('upload_foto_subhalaman', ['_token' => csrf_token()]) }}",

            filebrowserUploadMethod: 'form'

        });

        $(document).ready(function() {
            $('#form-link').hide();
            $('body').on('click', '.editsubhalaman', function() {

                let post_id = $(this).data('subhalaman');
                $('#judul-edit').val("");
                CKEDITOR.instances['konten-edit'].setData("");
                $('#pilihhalamanedit').val("");
                $('#link-edit').val("");


                $.ajax({
                    url: `/admin/subhalaman/${post_id}`,
                    type: "GET",
                    cache: false,
                    success: function(response) {
                        if (response.data.link != "") {
                            $('#form-link-edit').show();
                            $('#form-not-link-edit').hide();
                            $('#judul-edit').val(response.data.judul);
                            $('#pilihhalamanedit').val(response.data.id_halaman);
                            $("#form-update").attr("action", "/admin/subhalaman/" + response
                                .data
                                .id);
                            $('#link-edit').val(response.data.link);
                            $('#modal-update').modal('show');




                        } else {
                            $('#form-link-edit').hide();
                            $('#form-not-link-edit').show();
                            $('#judul-edit').val(response.data.judul);
                            CKEDITOR.instances['konten-edit'].setData(response.data.content);
                            $("#form-update").attr("action", "/admin/subhalaman/" + response
                                .data
                                .id);
                            $('#pilihhalamanedit').val(response.data.id_halaman);

                            $('#modal-update').modal('show');

                        }


                    }
                });
            });

            $('#use-link').on('change', function() {
                if (this.checked) {
                    $('#form-link').show(300);
                    $('#form-not-link').hide(200);
                } else {
                    $('#form-link').hide(200);
                    $('#form-not-link').show(300);
                };
            });

            $('#use-link-edit').on('change', function() {
                if (this.checked) {
                    $('#form-link-edit').show(300);
                    $('#form-not-link-edit').hide(200);
                } else {
                    $('#form-link-edit').hide(200);
                    $('#form-not-link-edit').show(300);
                };
            });
        });
    </script>
    <script>
        document.querySelector('.custom-file-input').addEventListener('change', function(e) {
            this.nextElementSibling.innerText = this.files[0].name;
        });
    </script>

@endsection
