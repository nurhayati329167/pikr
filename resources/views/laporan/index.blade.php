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
                        <h4 class="page-title text-center">{{$title}}</h4>
                    </div>
                </div>

                <form action="index.php" method="get" class="ml-2">
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label class="col-form-label">Periode</label>
                        </div>
                        <div class="col-auto">
                            <input type="date" class="form-control" name="dari" required>
                        </div>
                        <div class="col-auto">
                            -
                        </div>
                        <div class="col-auto">
                            <input type="date" class="form-control" name="ke" required>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered ml-2">
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