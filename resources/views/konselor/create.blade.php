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
                    <h4 class="card-title text-center">{{$title}}</h4>
                    <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{ route('konselor.store')}}" method="post" class="mt-5"
                        enctype="multipart/form-data">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <label for="judul">Nama Lengkap Konselor</label>
                                <input id="" name="nama" type="text" placeholder="Nama" class="required form-control @error('nama')
                                        is-invalid @enderror" />
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="">Jenis Kelamin</label>
                                <select class="select2 form-select shadow-none" name="jenis_kelamin">
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="mt-3">Usia</label>
                                <input name="usia" type="text" placeholder="Usia"
                                    class="required form-control @error('usia') is-invalid @enderror" />
                                @error('usia')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="mt-3">Pendidikan</label>
                                <input name="pendidikan" type="text" placeholder="Pendidikan"
                                    class="required form-control @error ('pendidikan') is-invalid @enderror" />
                                @error('pendidikan')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="mt-3">Foto</label>
                                <input name="foto" type="file" class="required form-control" />
                            </div>
                            <div class="col-md-6">
                                <label class="mt-3">Level</label>
                                <input name="level" type="text" value="konselor" readOnly
                                    class="required form-control" />
                            </div>
                            <div class="col-md-6">
                                <label class="mt-3">Username</label>
                                <input name="username" type="text" placeholder="Buat username"
                                    class="required form-control @error ('username') is-invalid @enderror" />
                                @error('username')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="mt-3">Password</label>
                                <input name="password" type="password" placeholder="Buat password"
                                    class="required form-control @error ('password') is-invalid @enderror" />
                                @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
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

<script type="text/javascript">

</script>
@endsection