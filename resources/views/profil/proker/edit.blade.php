@extends('layouts.admin')

@section('konten')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include('layouts.header')
    @include('layouts.sidebar')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">

                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body wizard-content">
                    <h3 class="card-title text-center">{{$title}}</h3>
                    <h6 class="card-subtitle"></h6>
                    <form action="{{  route('proker.update',$proker->id)}}" method="post" class="mt-5" nctype="multipart/form-data">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        @csrf
                        @method('patch')
                        <label>Nama Program Kerja</label>
                        <input name="judul_proker" type="text" class="required form-control" value="{{$proker->judul_proker}}"/>
                        <label>Keterangan</label>
                        <input name="keterangan" type="text" class="required form-control" value="{{$proker->keterangan}}" />
                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                        <a class="btn btn-success text-light mt-4" href="{{ route('proker.index') }}">Batal</a>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>
</div>
<script>
$(document).ready(function() {
    $('#summernote').summernote({
        height: 300, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: true // set focus to editable area after initializing summernote
    });
});
</script>
@endsection