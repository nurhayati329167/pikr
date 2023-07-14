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
                            <!-- <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Artikel
                                </li>
                            </ol> -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body wizard-content">
                    <div class="row">
                        <h4 class="page-title text-center">{{$title}}</h4>
                        <div class="col-12 d-flex no-block align-items-center">
                            <div class="ms-auto text-end">
                                <a href="{{ route('struktur.create')}}" class="btn btn-info">Tambah Anggota</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($anggotas as $anggota)
                            <tr>
                                <td>{{ $anggota->id }}</td>
                                <td>{{ $anggota->nama }}</td>
                                <td><img src="{{ asset('images/struktur/'.$anggota->gambar) }}" width="50"></td>
                                <td>{{ $anggota->jabatan }}</td>
                                <td class="text-center" width="12%">
                                    <form method="post" action="{{route('struktur.destroy',$anggota->id)}}">
                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('struktur.edit',$anggota->id) }}">Ubah</a>
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@include('layouts.footer')
</div>
</div>
@endsection