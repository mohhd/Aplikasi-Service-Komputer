@extends('layouts.master')
@section('title', 'Data Admin | Vino Computer')
@section('content')

<div class="container-fluid">

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
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Admin</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
            <h1 class="text-center h3 mb-0 text-gray-800">Data Admin</h1>  

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <a href="/inputDataAdmin" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Tambah Data</a>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-hover table-striped border-primary" id="datatable">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Role</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $dt)
                        <tr>
                            <td>{{ $dt->id }}</td>
                            @if($dt->role == 1)
                            <td>
                                <p>Admin</p>
                            </td>
                            @else
                            <td>
                                <p>User</p>
                            </td>
                            @endif
                            <td>{{ $dt->name }}</td>
                            <td>{{ $dt->email }}</td>
                            <td>
                                <a href="/editdataadmin/{{$dt->id}}" class="btn btn-warning">Edit</a>
                                <a href="/hapusdataadmin/{{$dt->id}}" class="btn btn-danger" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
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