@extends('layouts.master')
@section('title', 'Edit Data | Vino Computer')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    

    <!-- Content Row -->
    
    <div class="row">
        <div class="col-md-12">
        <div class="panel">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
            </div>
            <div class="panel-body">
                <div class="box-body">
                    <div class="row justify-content-evenly">
                        <div class="col-4">
                            <h2 class="h4 mb-0 text-gray-800">Pelanggan</h2><br>
                            <form role="form" method="POST" action="/editdata/{{$data->id}}">
                            @csrf
                            <div class="box-body">
                                <div class="form-group {{$errors->has('nama') ? 'has-error' : ''}}">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ $data->nama }}">
                                @if($errors->has('nama'))
                                    <span class="help-block">{{ $errors->first('nama') }}</span>
                                @endif
                                </div>

                                <div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
                                <label>Alamat</label>
                                <textarea name="alamat" cols="20" rows="3" class="form-control" placeholder="Masukkan Alamat">{{ $data->alamat }}</textarea>
                                @if($errors->has('alamat'))
                                    <span class="help-block">{{ $errors->first('alamat') }}</span>
                                @endif
                                </div>

                                <div class="form-group {{$errors->has('no_telp') ? 'has-error' : ''}}">
                                <label>Nomor Telepon / WA</label>
                                <input type="text" name="no_telp" class="form-control" placeholder="Masukkan Nomor Telepon" value="{{ $data->no_telp }}">
                                @if($errors->has('no_telp'))
                                    <span class="help-block">{{ $errors->first('no_telp') }}</span>
                                @endif
                                </div>

                            </div>
                        </div>
                        <div class="col-4">
                        <h2 class="h4 mb-0 text-gray-800">Service</h2><br>
                        <div class="box-body">

                                <div class="from-group {{$errors->has('jenis') ? 'has-error' : ''}}">
                                    <label>Jenis</label>
                                    <select name="jenis" class="form-control">
                                    <option value="" holder>--pilih jenis--</option>
                                    @foreach($barang as $b)
                                    <option value="{{ $b->id }}" {{ $b->id == $data->barang_id ? "selected" : "" }}>{{ $b->nama }}</option>
                                    @endforeach
                                    </select>
                                    @if($errors->has('jenis'))
                                        <span class="help-block">{{ $errors->first('jenis') }}</span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('tipe') ? 'has-error' : ''}}">
                                    <label>Tipe</label>
                                    <textarea name="tipe" cols="20" rows="4" class="form-control" placeholder="Masukkan Tipe">{{ $data->tipe }}</textarea>
                                    @if($errors->has('tipe'))
                                        <span class="help-block">{{ $errors->first('tipe') }}</span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('serial_number') ? 'has-error' : ''}}">
                                    <label>Serial Number</label>
                                    <input type="text" name="serial_number" class="form-control" placeholder="Masukkan Serial Number" value="{{ $data->serial_number }}">
                                    @if($errors->has('serial_number'))
                                        <span class="help-block">{{ $errors->first('serial_number') }}</span>
                                    @endif
                                </div>

                                
                        </div>
                        </div>
                        <div class="col-4">
                            <div class="box-body">
                            <h2 class="h4 mb-0 text-gray-800"></h2><br><br>
                                <div class="form-group {{$errors->has('kerusakan') ? 'has-error' : ''}}">
                                    <label>Kerusakan</label>
                                    <textarea name="kerusakan" cols="20" rows="4" class="form-control" placeholder="Masukkan Kerusakan">{{ $data->kerusakan }}</textarea>
                                    @if($errors->has('kerusakan'))
                                        <span class="help-block">{{ $errors->first('kerusakan') }}</span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('kelengkapan') ? 'has-error' : ''}}">
                                    <label>Kelengkapan</label>
                                    <textarea name="kelengkapan" cols="20" rows="4" class="form-control" placeholder="Masukkan Kelengkapan">{{ $data->kelengkapan }}</textarea>
                                    @if($errors->has('kelengkapan'))
                                        <span class="help-block">{{ $errors->first('kelengkapan') }}</span>
                                    @endif
                                </div>

                                <div class="form-group {{$errors->has('keterangan') ? 'has-error' : ''}}">
                                    <label>Keterangan</label>
                                    <textarea name="keterangan" cols="20" rows="4" class="form-control" placeholder="Masukkan keterangan">{{ $data->keterangan }}</textarea>
                                    @if($errors->has('keterangan'))
                                        <span class="help-block">{{ $errors->first('keterangan') }}</span>
                                    @endif
                                </div>

                            </div>
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