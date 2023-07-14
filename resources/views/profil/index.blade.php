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
                    <div class="row">
                        <h4 class="page-title mt-2 text-center">{{$title}}</h4>
                        <div class="col-12 d-flex">
                            <div class="ms-auto text-end text-left">
                                <a href="{{route('profil.create')}}" class="btn btn-info">Tambah Profil</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Keterangan</th>
                                <th>Visi</th>
                                <th>Misi</th>
                                <th>Bio</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($profil as $prof)
                            <tr>
                                <td>{{ $prof->id }}</td>
                                <td>{{ $prof->judul }}</td>
                                <td>
                                    <img src="{{ asset('images/profil/'.$prof->gambar) }}" width="50">
                                </td>
                                <td>{{ $prof->keterangan }}</td>
                                <td>{{ $prof->visi }}</td>
                                <td>{{ $prof->misi }}</td>
                                <td>{{ $prof->bio }}</td>
                                <td class="text-center" width="12%">
                                    <form method="post" action="{{route('profil.destroy',$prof->id)}}">
                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('profil.edit',$prof->id) }}">Ubah</a>
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