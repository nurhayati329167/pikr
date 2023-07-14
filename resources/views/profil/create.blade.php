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
                    <form id="example-form" action="{{ route('profil.store')}}" class="mt-5"
                        enctype="multipart/form-data" method="post">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        {{ csrf_field() }}
                        <label>Judul</label>
                        <input name="judul" type="text" class="required form-control @error('judul')
                                        is-invalid @enderror" />
                        @error('judul')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <label class="mt-3">Gambar</label>
                        <input name="gambar" type="file" class="required form-control" />
                        <label class="mt-3">Tentang PIK-R</label>
                        <textarea id="editor" name="keterangan" class="required form-control @error('keterangan')
                                        is-invalid @enderror" rows="10"></textarea>
                        @error('keterangan')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <label class="mt-3">Visi</label>
                        <input name="visi" type="text" class="required form-control @error('visi')
                                        is-invalid @enderror" />
                        @error('visi')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <label class="mt-3">Misi</label>
                        <textarea id="editor2" name="misi" class="required form-control @error('misi')
                                        is-invalid @enderror"></textarea>
                        @error('misi')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <label class="mt-3">Bio</label>
                        <input name="bio" type="text" class="required form-control @error('bio')
                                        is-invalid @enderror" />
                        @error('bio')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@include('layouts.footer')
</div>
</div>
<script>
ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
        console.error(error);
    });
ClassicEditor
    .create(document.querySelector('#editor2'))
    .catch(error => {
        console.error(error);
    });
</script>
@endsection