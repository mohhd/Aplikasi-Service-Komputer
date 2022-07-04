@extends('layouts.master')
@section('title', 'Dashboard | Vino Computer')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Servis Masuk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $servisMasuk }}</div>
                        </div>
                        <!-- <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Service Selesai</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $servisSelesai }}</div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Service Proses</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $servisProses }}</div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Service Batal</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $servisBatal }}</div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection