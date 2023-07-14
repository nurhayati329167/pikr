@extends('layouts.admin')

@section('konten')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include('layouts.header')
    @include('layouts.sidebar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
        </div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body wizard-content">
                    <h4 class="card-title">{{$title}}</h4>
                    <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="#" class="mt-5">
                        <label for="judul">Nama Lengkap</label>
                        <input id="" name="judul" type="text" class="required form-control" />
                        <label for="gambar">Jenis Kelamin</label>
                        <select class="select2 form-select shadow-none" style="width: 100%; height: 36px">
                            <option>--Pilih--</option>
                            <option value="AK">Laki-laki</option>
                            <option value="HI">Perempuan</option>
                        </select>
                        <label for="judul">Usia</label>
                        <input id="" name="judul" type="text" class="required form-control" />
                        <label for="judul">Username</label>
                        <input id="" name="judul" type="text" class="required form-control" />
                        <label for="judul">Password</label>
                        <input id="" name="judul" type="text" class="required form-control" />
                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#summernote').summernote();
});
</script>
@endsection