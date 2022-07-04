<?php

namespace App\Exports;

use App\Service;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

use Maatwebsite\Excel\Concerns\WithHeadings;

class ServiceExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Service::all();
    }

    public function map($data): array
    {
        // This example will return 3 rows.
        // First row will have 2 column, the next 2 will have 1 column
        return [
            $data->id,
            $data->t_masuk,
            $data->t_keluar,
            $data->nama,
            $data->alamat,
            $data->no_telp,
            $data->barang_r->nama,
            $data->tipe,
            $data->serial_number,
            $data->kerusakan,
            $data->kelengkapan,
            $data->keterangan,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'T_Masuk',
            'T_Keluar',
            'Nama',
            'Alamat',
            'No.Telp',
            'Barang',
            'Tipe',
            'Serial Number',
            'Kerusakan',
            'Kelengkapan',
            'Keterangan',
        ];
    }
}
