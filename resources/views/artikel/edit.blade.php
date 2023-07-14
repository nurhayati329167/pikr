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
                    <form id="example-form" action="{{ route('artikel.update',$artikel->id_artikel)}}" method="post"
                        class="mt-5" enctype="multipart/form-data">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        @csrf
                        @method('PUT')
                        <label>Judul</label>
                        <input name="judul" type="text" placeholder="Buat judul artikel" value="{{$artikel->judul}}"
                            class="required form-control" />
                        <label for="gambar">Gambar</label>
                        <input name="gambar" type="file" class="required form-control image" id="upload_image" /><br>
                        <img src="{{ asset('images/artikel/'.$artikel->gambar) }}" width="200">
                        <br>
                        <label for="artikel">Isi Artikel</label>
                        <textarea id="summernote" name="isi" rows="50%"
                            class="required form-control">{{$artikel->isi}}</textarea>
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                        <a class="btn btn-success text-light mt-3" href="{{ route('artikel.index') }}">Batal</a>
                    </form>
                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                        aria-hidden="true">


                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Crop Image Before Upload</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="img-container">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <img src="" id="sample_image" />
                                            </div>
                                            <div class="col-md-4">
                                                <div class="preview"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="crop" class="btn btn-primary">Crop</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>

                    </div>
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
    height: 200,
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
$("#summernote").code()
    .replace(/<\/p>/gi, "\n")
    .replace(/<br\/?>/gi, "\n")
    .replace(/<\/?[^>]+(>|$)/g, "");
</script>
@endsection

@push('js-after')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</script>
@endpush