@extends('layouts.master')
@section('title', 'Service Keluar | Vino Computer')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
            <h1 class="text-center h3 mb-0 text-gray-800">Service Keluar</h1>
            
            <div class="panel-body">
                <table class="table table-bordered table-hover table-striped border-primary" id="datatable">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Tanggal Keluar</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">No.Telp</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($service as $dt)
                        <tr>
                            <td>{{ $dt->id }}</td>
                            <td>{{ $dt->t_keluar }}</td>
                            <td>{{ $dt->nama }}</td>
                            <td>{{ $dt->alamat }}</td>
                            <td>{{ $dt->no_telp }}</td>
                            @if($dt->status == 1)
                                <td>
                                    <span class="badge badge-success">Selesai</span>
                                </td>
                            @else
                                <td>
                                    <span class="badge badge-danger">Batal</span>
                                </td>
                            @endif
                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>

</div>

@endsection