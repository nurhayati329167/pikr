@extends('layouts.admin')

@section('konten')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include('layouts.header')
    @include('layouts.sidebar')
    @include('sweetalert::alert')
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
                    <div id="accordion">
                        <div class="card active">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link text-center" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                        style="text-decoration: none;">
                                        <h4 class="text-center">{{$title}}</h4>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <form id="example-form" action="{{ route('profil.update', $profil->id)}}"
                                        class="mt-5" enctype="multipart/form-data" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT">
                                        <label>Judul</label>
                                        <input name="judul" type="text" class="required form-control"
                                            value="{{$profil->judul}}" />
                                        <label class="mt-3">Gambar</label>
                                        <input name="gambar" type="file" class="required form-control" /><br>
                                        <img src="{{ asset('images/profil/'.$profil->gambar) }}" width="200"><br>
                                        <label class="mt-3">Tentang PIK-R</label>
                                        <textarea id="summernote" name="keterangan" class="required form-control"
                                            rows="10">{{$profil->keterangan}}</textarea>
                                        <label class="mt-3">Visi</label>
                                        <input name="visi" type="text" class="required form-control"
                                            value="{{$profil->visi}}" />
                                        <label class="mt-3">Misi</label>
                                        <textarea id="summernote2" class="required form-control"
                                            name="misi">{{$profil->misi}}</textarea>
                                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                                        <button type="button" class="btn btn-success mt-3 text-light"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">Batal</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0 text-center">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                        style="text-decoration: none;">
                                        <h4>Edit Informasi Sosial Media</h4>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <form id="example-form" action="{{ route('profil.update', $profil->id)}}"
                                        class="mt-5" enctype="multipart/form-data" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT">
                                        <label>No.Telp</label>
                                        <input name="nohp" type="text" class="required form-control"
                                            value="{{$profil->nohp}}" />
                                        <label>Email</label>
                                        <input name="email" type="text" class="required form-control"
                                            value="{{$profil->email}}" />
                                        <label>Link Facebook</label>
                                        <input name="fb" type="text" class="required form-control"
                                            value="{{$profil->fb}}" />
                                        <label>Link Instagram</label>
                                        <input name="ig" type="text" class="required form-control"
                                            value="{{$profil->ig}}" />
                                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                                        <button type="button" class="btn btn-success mt-3 text-light"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">Batal</button>
                                    </form>
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
<script>
$('#summernote').summernote({
    // fontNames: ['Arial', 'Verdana', 'CustomFontName']
    tabsize: 2,
    height: 250,
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear', 'italic', 'underline', 'fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]

    ]
});
$('#summernote2').summernote({
    tabsize: 2,
    height: 120,
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear', 'italic', 'underline', 'fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
    ]
});
</script>
@endsection