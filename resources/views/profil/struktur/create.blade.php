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
                    <form id="example-form" action="{{ route('struktur.store')}}" class="mt-5"
                        enctype="multipart/form-data" method="post">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        {{ csrf_field() }}
                        <label>Nama Lengkap</label>
                        <input name="nama" type="text" placeholder="Masukkan nama lengkap" class="required form-control @error('nama')
                                        is-invalid @enderror" />
                        @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <label class="mt-3">Foto</label>
                        <input id="" name="gambar" type="file" class="required form-control  @error('gambar')
                                        is-invalid @enderror" />
                                         @error('gambar')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        <label for="judul" class="mt-3">Jabatan</label>
                        <select class="select2 form-select shadow-none" name="jabatan">
                            <option value="Ketua">Ketua</option>
                            <option value="Wakil Ketua">Wakil Ketua</option>
                            <option value="Sekretaris">Sekretaris</option>
                            <option value="Bendahara">Bendahara</option>
                            <option value="Bid.Humas">Bidang Humas</option>
                            <option value="Bid.Dokumentasi">Bidang Dokumentasi</option>
                            <option value="Bid.Pendidikan Sebaya">Bidang Pendidikan Sebaya</option>
                            <option value="Bid.Konselor">Bidang Konselor</option>
                        </select>
                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@include('layouts.footer')
</div>
</div>
@endsection