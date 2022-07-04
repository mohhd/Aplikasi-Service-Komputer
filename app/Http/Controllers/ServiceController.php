<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use App\Barang;
use App\Service;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Exports\ServiceExport;
use Maatwebsite\Excel\Facades\Excel;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function masuk()
    {
        $service = Service::all();
        return view('dashboard.serviceMasuk', compact('service'));
    }

    public function keluar()
    {
        $service = Service::where('status', 1)->orWhere('status', 2)->get();
        return view('dashboard.serviceKeluar', compact('service'));
    }

    public function input()
    {
        $barang = Barang::all();
        return view('dashboard.serviceInput', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'no_telp'  => 'required',
            'jenis' => 'required',
            'tipe' => 'required',
            'kerusakan' => 'required',
            'kelengkapan' => 'required',
        ]);

        $id = IdGenerator::generate([
            'table' => 'service',
            'length' => 10,
            'prefix' => date('Ym')
        ]);

        $data['id'] = $id;
        $data['t_masuk'] = date('Y-m-d');
        $data['nama'] = $request->nama;
        $data['alamat'] = $request->alamat;
        $data['no_telp'] = $request->no_telp;

        $data['barang_id'] = $request->jenis;
        $data['tipe'] = $request->tipe;
        $data['serial_number'] = $request->serial_number;
        $data['kerusakan'] = $request->kerusakan;
        $data['kelengkapan'] = $request->kelengkapan;
        $data['keterangan'] = $request->keterangan;
        $data['status'] = 0;

        Service::insert($data);

        return redirect('/servicemasuk')->with('success', 'Data Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function info($id)
    {
        $data = Service::find($id);
        return view('dashboard.serviceInfo', compact('data'));
    }

    public function edit($id)
    {
        $data = Service::find($id);
        $barang = Barang::all();
        return view('dashboard.edit_service', compact('data', 'barang'));
    }

    public function update(Request $request, $id)
    {
        $data = Service::find($id);

        $this->validate($request, [
            'nama' => 'required',
            'no_telp'  => 'required',
            'jenis' => 'required',
            'tipe' => 'required',
            'kerusakan' => 'required',
            'kelengkapan' => 'required',
        ]);

        $data->nama = $request->nama;
        $data->no_telp = $request->no_telp;
        $data->barang_id = $request->jenis;
        $data->tipe = $request->tipe;
        $data->kerusakan = $request->kerusakan;
        $data->kelengkapan = $request->kelengkapan;
        $data->keterangan = $request->keterangan;

        $data->save();
        return redirect('/servicemasuk')->with('success', 'Data Service Berhasil Diupdate');
    }

    public function hapus($id)
    {
        $data = Service::find($id);
        $data->delete();

        return redirect('/servicemasuk')->with('success', 'Data Service Berhasil Dihapus');
    }

    public function restore($id)
    {
        $data = Service::onlyTrashed()->find($id);
        $data->restore();

        return redirect('/servicemasuk')->with('success', 'Data Service Berhasil Diupdate');
    }

    public function hapuspermanen($id)
    {
        $data = Service::onlyTrashed()->find($id);
        $data->forceDelete();

        return redirect('/servicemasuk')->with('success', 'Data Service Berhasil Diupdate');
    }

    public function selesai($id)
    {
        $data = Service::find($id);
        Service::where('id', $id)->update([
            'status' => 1,
            't_keluar' => date('Y-m-d')
        ]);

        return redirect('/servicemasuk')->with('success', 'Data Service Berhasil Diupdate');
    }

    public function batalselesai($id)
    {
        $data = Service::find($id);
        Service::where('id', $id)->update([
            'status' => 0
        ]);

        return redirect('/servicemasuk');
    }

    public function pembatalan($id)
    {
        $data = Service::find($id);
        Service::where('id', $id)->update([
            'status' => 2,
            't_keluar' => date('Y-m-d')
        ]);

        return redirect('/servicemasuk');
    }

    public function lanjutkan($id)
    {
        $data = Service::find($id);
        Service::where('id', $id)->update([
            'status' => 0
        ]);

        return redirect('/servicemasuk');
    }

    public function printPDF($id)
    {
        $data = Service::find($id);

        return view('dashboard.cetakPDF', compact('data'));
    }

    public function laporan()
    {
        $data = Service::all();
        return view('dashboard.laporan', compact('data'));
    }

    public function filter_laporan(Request $request)
    {
        if ($request->dari != null && $request->sampai != null) {

            $dari = $request->dari;
            $sampai = $request->sampai;

            $data = Service::whereDate('t_masuk', '>=', $dari)->whereDate('t_masuk', '<=', $sampai)->orderBy('t_masuk', 'desc')->get();

            $pdf = \PDF::loadView('dashboard.cetak_laporan', compact('data', 'dari', 'sampai'))->setPaper([0, 0, 595.27, 850.39], 'landscape');
            return $pdf->download('cetak-laporan.pdf');
        } else {

            // $data = Service::all();
            return view('dashboard.laporan');
        }
    }

    public function print_laporan(Request $request)
    {
        $dari = $request->dari;
        $sampai = $request->sampai;

        $data = Service::whereDate('t_masuk', '>=', $dari)->whereDate('t_masuk', '<=', $sampai)->orderBy('t_masuk', 'desc')->get();

        // $data = Service::all();
        $pdf = \PDF::loadView('dashboard.cetak_laporan', compact('data', 'dari', 'sampai'))->setPaper([0, 0, 595.27, 850.39], 'landscape');
        return $pdf->download('cetak-laporan.pdf');
    }

    public function export()
    {
        return Excel::download(new ServiceExport, 'services.xlsx');
    }
}
