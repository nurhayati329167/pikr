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
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <div class="inner font-light text-white">
                                <h3>150</h3>
                                <p>Konseling</p>
                            </div>
                            <a href="{{ url('laporan')}}" class="small-box-footer inner font-light text-white">Info lainnya <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <div class="inner font-light text-white">
                                
                                <h3>{{$jumlah_remaja}}</h3>
                                <p>Remaja</p>
                                
                            </div>
                            <a href="{{ url('remaja')}}" class="small-box-footer inner font-light text-white">Info lainnya <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <div class="inner font-light text-white">
                                <h3>{{$jumlah_konselor}}</h3>
                                <p>Konselor</p>
                            </div>
                            <a href="{{ url('konselor')}}" class="small-box-footer inner font-light text-white">Info lainnya <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
</div>
@endsection