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
                    <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                            <h4 class="page-title text-center">{{$title}}</h4>
                            <div class="ms-auto text-end">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <!-- <a href="{{url('remaja/create')}}" class="btn btn-info">Tambah Remaja</a>
                                </ol> -->
                                </nav>
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
                                <th>Pendidikan</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id_users}}</td>
                                <td>{{$user->nama}}</td>
                                <td>{{$user->usia}}</td>
                                <td>{{$user->pendidikan}}</td>
                                <td>{{$user->username}}</td>
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