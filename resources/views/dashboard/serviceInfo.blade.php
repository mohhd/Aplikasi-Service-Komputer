@extends('layouts.master')
@section('title', 'Service Info | Vino Computer')
@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    
    <!-- Content Row -->
	<a href="/printPDF/{{$data->id}}" class="btn btn-sm btn-primary shadow-sm float-right"><i class="fa fa-print fa-sm text-white-50"></i> Print PDF</a>    
 <style>
 	body{
 		font-family: arial;
 	}
 </style>
 <table width="100%">
 	<tr>
 		<td>
 			<img src="{{asset('frontend/img/vino.ico')}}" width="130">
 		</td>
 		<td>
 			
 				
 				<h1>
 					VINO COMPUTER
 				</h1>
 				<hr>
 				<em>
				 	Jl. Indragiri Blok FI-01 <br> Tropodo, Waru - Sidoarjo<br>
 				<b>Telp. & WA 0811-3274-448 / 0838-5757-4448</b> 
 				</em>
 	
 			
 		</td>
 		<td>

 			<table width="100%">
  <tr>

  </td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
</table>
 		</td>
 	</tr>
 </table>

<hr style="height: 3px;border: 1px solid;">


<table width="100%" border="1" cellpadding="2" style="border-collapse: collapse;">
    <thead>
        <tr>
            <td rowspan="2" bgcolor="#EFEBE9" align="center">Barang</td>
            <td rowspan="2" bgcolor="#EFEBE9" align="center">Tipe</td>
            <td rowspan="2" bgcolor="#EFEBE9" align="center">Serial Number</td>
            <td rowspan="2" bgcolor="#EFEBE9" align="center">Kerusakan</td>
            <td rowspan="2" bgcolor="#EFEBE9" align="center">Kelengkapan</td>
        </tr> 
    </thead>
    <tbody>
        <tr>
            <td>{{ $data->barang_r->nama }}</td>
            <td>{{ $data->tipe }}</td>
            <td>{{ $data->serial_number }}</td>
            <td>{{ $data->kerusakan }}</td>
            <td>{{ $data->kelengkapan }}</td>
        </tr>
    </tbody>
</table>

    

<br><br>
<table width="100%">
	<tr>

	
	
			<hr style="height: 3px;border: 1px solid;">
			<p>Estimasi Biaya : {{ $data->keterangan }}</p>
			<sup><em>"Harga tidak mengikat, bila ada perubahan harga akan dikonfirmasi ulang"</em></sup>
			<hr style="height: 3px;border: 1px solid;">
			<sup>* Barang yang sudah selesai diperbaiki tidak diambil jangka <br> 1(satu) bulan jika terjadi rusak/hilang bukan tanggung jawab kami.</sup><br>
			<sup>* Garansi tidak berlaku jika segel rusak dan jenis kerusakan yang berbeda</sup><br>
			<sup>* Software tidak masuk garansi</sup>
		<td align="left">

	 		
	
			<p>
				Pelanggan,
				<br>
				<br>
				<br>
				------------------------------- <br>
					{{ $data->nama }}
				
			</p>
		</td>
		
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			<td align="left">&nbsp;</td>
			

		<td align="left">
			
			<p>
				Surabaya, {{ date('d F Y', strtotime($data->t_masuk)) }}
			</p>
			<p>
				Hormat Kami,
				<br>
				<br>
				<br>
				------------------------------- <br>
					{{ auth()->user()->name }}
				
			</p>
		</td>
		
	</tr>
</table>


	<a href="/servicemasuk" class="btn btn-primary">Kembali</a>
    @if($data->status == 1)
        
    @else
        <a href="/status/{{$data->id}}" class="btn btn-success" onclick="return confirm('Yakin ingin Selesai?')">Selesai</a>
    @endif

	@if($data->status == 2)
		
	@else
		<a href="/status/{{$data->id}}/pembatalan" class="btn btn-danger" onclick="return confirm('Yakin ingin Melakukan Pembatalan?')">Batal</a>
	 @endif

<script>
	// window.print();
</script>

</div>

@endsection