@extends('layouts.master')
@section('title', 'Input Data | Vino Computer')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    

    <!-- Content Row -->
    
    <div class="row">
        <div class="col-md-12">
        <div class="panel">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Input Data Admin</h1>
            </div>
            <div class="box box-warning">
                        <div class="box-body">
                            <form role="form" method="POST" action="/inputDataAdmin">
                            @csrf
                            <div class="form-group {{$errors->has('role') ? 'has-error' : ''}}">
                                <label>Role</label>
                                <select name="role" class="form-control">
                                    <option value="" holder>--pilih jenis--</option>
                                    <option value="1" holder>Admin</option>
                                    <option value="2" holder>User</option>
                                </select>
                                @if($errors->has('role'))
                                    <span class="help-block">{{ $errors->first('role') }}</span>
                                @endif
                            </div>

                            <div class="box-body">
                                <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                    <label>Nama</label>
                                    <input type="text" name="name" class="form-control" placeholder="Masukkan Name" value="{{ old('name') }}">
                                    @if($errors->has('name'))
                                        <span class="help-block">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Masukkan Email" value="{{ old('email') }}">
                                    @if($errors->has('email'))
                                        <span class="help-block">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control" placeholder="Masukkan password" value="{{ old('password') }}">
                                    @if($errors->has('password'))
                                        <span class="help-block">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                            </div>
                                <!-- /.box-body -->
                    
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
        </div>
        </div>
    </div>

</div>

@endsection