@extends('layouts.master')
@section('title', 'Laporan | Vino Computer')
@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laporan</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
    <div class="col-md-12">
            <div class="panel">
            <h1 class="text-center h3 mb-0 text-gray-800">Tabel Laporan</h1>
            <div class="divider"></div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h4 mb-1 text-gray-800">Filter Service</h1>
                </div>
                <form class="form-inline" method="get" action="/filter-laporan">

                <input type="text" name="dari" class="form-control ml-2 mb-2 mr-sm-2 datepicker" id="inlineFormInputName2" placeholder="dari" autocomplete="off">

                <div class="input-group mb-2 mr-sm-2">
                    <input type="text" name="sampai" class="form-control datepicker" id="inlineFormInputGroupUsername2" placeholder="sampai" autocomplete="off">
                </div>

                <button type="submit" class="btn btn-primary mb-2 mr-2">Print PDF</button>
                <a href="/print-excel" class="btn btn-primary float-right mb-2">Print Excel</a>    
                </form>
                
            </div>

        </div>
        </div>
    </div>

</div>


@endsection