@extends('layouts.master')
@section('title', 'Service Masuk | Vino Computer')
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
            <h1 class="text-center h3 mb-0 text-gray-800">Service Masuk</h1>
            <a href="/print-excel" class="btn btn-sm btn-primary shadow-sm float-right"><i class="fa fa-print fa-sm text-white-50"></i> Print Excel</a>    

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <a href="/inputData" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Tambah Data</a>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover table-striped border-primary" id="datatable">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Tanggal Masuk</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">No.Telp</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($service as $dt)
                        <tr>
                            <td>{{ $dt->id }}</td>
                            <td>{{ $dt->t_masuk }}</td>
                            <td>{{ $dt->nama }}</td>
                            <td>{{ $dt->alamat }}</td>
                            <td>{{ $dt->no_telp }}</td>
                            @if($dt->status == 1)
                                <td>
                                    <center><span class="badge badge-success">Selesai</span></center>
                                </td>
                            @elseif($dt->status == 2)
                                <td>
                                    <center><span class="badge badge-danger">Batal</span></center>
                                </td>
                            @else
                                <td>
                                    <center><span class="badge badge-warning">Diproses</span></center>
                                </td>
                            @endif
                            <td>
                                <a href="/info/{{$dt->id}}" class="btn btn-info">Info</a>
                               
                                <a href="/editdata/{{$dt->id}}" class="btn btn-warning">Edit</a>
                               
                                @if(auth()->user()->role == 1)
                                <a href="/hapusdata/{{$dt->id}}" class="btn btn-danger" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                                @else
                                @endif
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

@endsection