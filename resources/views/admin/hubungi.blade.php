@extends('template.AdminTemplate')

@section('judul', 'Data Hubungi Kami')

@section('konten')

<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">

            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Hubungi Kami</h6>
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
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nomor Handphone</th>
                                <th width="40%">Pesan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->created_at }}</td>
                                <td class="">{{ $item->nama }}</td>
                                <td class="">{{ $item->email }}</td>
                                <td class="">{{ $item->nomortelp }}</td>
                                <td class="">{{ $item->pesan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @foreach ($data as $item)
                    <div class="modal fade" id="modal-detail-{{ $item->id }}">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body pd-20 pd-sm-40">
                                    <button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26"
                                        data-dismiss="modal" type="button"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h5 class="modal-title mb-4 text-center">Detail Data</h5>
                                    <hr>

                                    <div class="row">
                                        <div class="col-4">

                                        </div>
                                        <div class="col-8">
                                            <table class="table table-bordered" id="dataTable">
                                                <thead>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Nama Lengkap</td>
                                                        <td>{{ $item->nama }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kasus</td>
                                                        <td>{{ $item->kasus }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Keterangan</td>
                                                        <td>{{ $item->keterangan }}</td>
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