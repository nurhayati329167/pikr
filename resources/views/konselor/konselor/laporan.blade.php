@extends('layouts.konselor')

@section('konten')
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include('layouts.headerkonselor')
    @include('layouts.sidebarkonselor')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
        </div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body wizard-content">
                    <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                            <h4 class="page-title">{{$title}}</h4>
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
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Topik</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Abdullah</td>
                            <td>abdullah@gmail.com</td>
                            <td>lorem ipsum</td>
                            <td>1/1/1</td>
                            <td></td>
                        </tr>
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