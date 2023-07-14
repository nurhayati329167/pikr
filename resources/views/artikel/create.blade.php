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
                    <h4 class="card-title text-center">{{$title}}</h4>
                    <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{ route('artikel.store')}}" method="post" class="mt-5"
                        enctype="multipart/form-data">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        {{ csrf_field() }}
                        <label>Judul</label>
                        <input name="judul" type="text" placeholder="Buat judul artikel" class="required form-control @error('judul')
                                        is-invalid @enderror" />
                        @error('judul')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <label class="mt-3">Gambar</label>
                        <input id="" name="gambar" type="file" class="required form-control" />

                        <label class="mt-3">Isi Artikel</label>
                        <textarea id="summernote" name="isi" class="required form-control"></textarea>

                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>
</div>
<script type="text/javascript">

$('#summernote').summernote({
    tabsize: 2,
    height: 120,
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
    ]
});
</script>
<script>

</script>
@endsection
@push('js-after')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endpush