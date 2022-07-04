
 <style>
	/* table {
	max-width: 100%;
	max-height: 100%;
	}
	body {
		position: relative;
		width: 100%;
		height: 100%;
	} */
	/* table th,
	table td {
		padding: 0.625em;
		text-align: center;
	} */
	table .kop:before {
		content: ": ";
	}
	.left {
		text-align: left;
	}
	/* table #caption {
		font-size: 1.5em;
		margin: 0.5em 0 0.75em;
	}
	table.border {
		width: 100%;
		border-collapse: collapse;
	}

	table.border tbody th,
	table.border tbody td {
		border: thin solid #000;
		padding: 2px;
	}
	.ttd td,
	.ttd th {
		padding-bottom: 4em;
	} */

 </style>
<div id="printable" class="container">
	<table border="0" cellpadding="0" cellspacing="0" width="485" class="border" style="overflow-x:auto;">
		<thead>
			<tr class="mr-4">
			<td>
				<img src="{{asset('frontend/img/vino.ico')}}" width="100px">
			</td>
				<td colspan="6" width="485" id="caption">
					<h2>
						VINO COMPUTER
					</h2>
					
					<h5>
						<em>
							Jl. Indragiri Blok FI-01 <br> Tropodo, Waru - Sidoarjo<br>
						<b>Telp. & WA 0811-3274-448 / 0838-5757-4448</b> 
						</em>
					</h5>
				</td>
			</tr><br>
			<tr>
				<td colspan="2">Nama </td>
				<td class="left kop">{{ $data->nama }}</td>
				<td></td>
				<td>Tanggal</td>
				<td class="left kop">{{ date('d F Y', strtotime($data->t_masuk)) }}</td>
			</tr>
			<tr>
				<td colspan="2">Alamat</td>
				<td class="left kop">{{ $data->alamat }}</td>
				<td></td>
				<td>ID</td>
				<td class="left kop">{{ $data->id }}</td>
			</tr>
			<tr>
				<td colspan="2">No.Telp</td>
				<td class="left kop">{{ $data->no_telp }}</td>
				<td></td>
			</tr>
		</thead>
		
	</table>
</div>

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

<p></p>
<hr style="height: 3px;border: 1px solid;">
			<p>Estimasi Biaya : {{ $data->keterangan }}</p>
			<sup><em>"Harga tidak mengikat, bila ada perubahan harga akan dikonfirmasi ulang"</em></sup>
			<hr style="height: 3px;border: 1px solid;">
			<sup>* Barang yang sudah selesai diperbaiki tidak diambil jangka <br> 1(satu) bulan jika terjadi rusak/hilang bukan tanggung jawab kami.</sup><br>
			<sup>* Garansi tidak berlaku jika segel rusak dan jenis kerusakan yang berbeda</sup><br>
			<sup>* Software tidak masuk garansi</sup>
<table width="100%">
	<p></p>
	<p></p>
	<tr>
			

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
			<td align="left">&nbsp;</td>


			
			

		<td align="left">		
			<p>
				Admin
				<br>
				<br>
				<br>
				------------------------------- <br>
				{{ auth()->user()->name }}
				
			</p>
		</td>
	</tr>
</table>

<script>
	window.print();
</script>