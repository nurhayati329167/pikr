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
                    <form action="{{  route('remaja.update',$remaja->id_users)}}" method="post" class="mt-5"
                        nctype="multipart/form-data">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        @csrf
                        @method('patch')
                        <label>Nama Lengkap</label>
                        <input name="nama" type="text" class="required form-control" value="{{$remaja->nama}}" />
                        <label>Jenis Kelamin</label>
                        <select class="select2 form-select shadow-none" name="jenis_kelamin"
                            value="{{$remaja->jenis_kelamin}}">
                            <option>--Pilih--</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        <label>Usia</label>
                        <input name="usia" type="text" class="required form-control" value="{{$remaja->usia}}" />
                        <label>Pendidikan</label>
                        <input name="pendidikan" type="text" class="required form-control"
                            value="{{$remaja->pendidikan}}" />
                        <label>Username</label>
                        <input name="username" type="text" class="required form-control"
                            value="{{$remaja->username}}" />
                        <label>Password</label>
                        <input id="password-field" name="password" type="password" class="required form-control"
                            value="{{$remaja->password}}" />
                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                        <a class="btn btn-success text-light mt-4" href="{{ route('remaja.index') }}">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>
</div>
@endsection