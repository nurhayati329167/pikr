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
                                <a href="{{route('proker.create')}}" class="btn btn-info">Tambah Program Kerja</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama Program Kerja</th>
                                <th>Keterangan Proker</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prokers as $proker)
                            <tr>
                                <td>{{$proker->id}}</td>
                                <td>{{$proker->judul_proker}}</td>
                                <td>{{$proker->keterangan}}</td>
                                <td class="text-center" width="12%">
                                    <form method="post" action="{{route('proker.destroy',$proker->id)}}">
                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('proker.edit',$proker->id) }}">Ubah</a>
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