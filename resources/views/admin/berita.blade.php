@extends('template.AdminTemplate')

@section('judul', 'Dashboard')

@section('konten')

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">

                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Berita</h6>

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
                                    <h5 class="modal-title mb-4 text-center">Tambah Berita</h5>
                                    <div class="">
                                        <form action="{{ route('berita.store') }}" method="post"
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
                                            {{-- <div class="form-group">
                                                <label class="">Foto</label>
                                                <input type="file" class="dropify" name="foto" data-default-file=""
                                                    data-height="200" />
                                                @error('prestasi')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div> --}}
                                            <div class="form-group">
                                                <label class="">Foto</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile"
                                                        name="foto">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label class="">Konten</label>
                                                {{-- <textarea class="form-control @error('konten') is-invalid @enderror" name="konten" id="konten" cols="5" rows="5">{{ old('konten') }}</textarea>
                                                @error('konten')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror --}}
                                                <textarea name="content" id="konten" rows="10" cols="80">

                                                </textarea>
                                                <br>
                                                <button class="btn btn-primary" type="submit"
                                                    id="submit">Submit</button>
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
                                                    <form action="{{ route('berita.destroy', $item->id) }}" method="post" class="form-delete">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="dropdown-item" data-toggle="tooltip"
                                                            id="delete-button">Delete</button>
                                                    </form>
                                                    <button class="dropdown-item"
                                                        data-target="#modal-update-{{ $item->id }}"
                                                        data-toggle="modal">Edit</button>


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
                                            <iframe src="{{ route('berita_detail', $item->slug) }}" height="1000" width="1000"  title="KONTEN"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach



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
