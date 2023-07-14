@extends('layouts.admin')

@section('konten')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include('layouts.header')
    @include('layouts.sidebar')
    @include('sweetalert::alert')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
        </div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body wizard-content">
                    <div class="row">
                        <h4 class="page-title text-center">{{$title}}</h4>
                        <div class="col-12 d-flex">
                            <div class="ms-auto text-end">
                                <!-- <ol class="breadcrumb"> -->
                                <a href="{{route('konselor.create')}}" class="btn btn-info">Tambah Konselor</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama Lengkap</th>
                                <th>Umur</th>
                                <th>Foto</th>
                                <th>Jenis Kelamin</th>
                                <th>Pendidikan</th>
                                <th>Username</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id_users }}</td>
                                <td>{{ $user->nama}}</td>
                                <td>{{ $user->umur}}</td>
                                <td>
                                <img src="{{ asset('images/konselor/'.$user->foto) }}" width="50">
                                </td>
                                <td>{{$user->jenis_kelamin}}</td>
                                <td>{{$user->pendidikan}}</td>
                                <td>{{$user->username}}</td>
                                <td>
                                <form method="post" action="{{route('konselor.destroy',$user->id_users)}}">
                                        <a class="btn btn-info btn-sm mt-2"
                                            href="{{ route('konselor.edit',$user->id_users) }}">Ubah</a>
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