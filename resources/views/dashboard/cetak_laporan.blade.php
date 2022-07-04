 <style>
 	body{
 		font-family: arial;
 	}
 </style>
 <table width="100%">
 	<tr>
 		<!-- <td>
 			<img src="{{asset('frontend/img/ailcc.ico')}}" width="100">
 		</td> -->
 		<td>
 			
 				
 				<h1 align="center">
 					TABEL LAPORAN
 				</h1><br>
                <h2 align="center">Dari Tanggal : {{ $dari }} Sampai Tanggal : {{ $sampai }}</h2>
 			
 	
 			
 		</td><br>
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
            <td rowspan="2" bgcolor="#EFEBE9" align="center">ID</td>
            <td rowspan="2" bgcolor="#EFEBE9" align="center">T.Masuk</td>
            <td rowspan="2" bgcolor="#EFEBE9" align="center">T.Keluar</td>
            <td rowspan="2" bgcolor="#EFEBE9" align="center">Nama</td>
            <td rowspan="2" bgcolor="#EFEBE9" align="center">Alamat</td>
            <td rowspan="2" bgcolor="#EFEBE9" align="center">No.Telp</td>
            <td rowspan="2" bgcolor="#EFEBE9" align="center">Jenis</td>
            <td rowspan="2" bgcolor="#EFEBE9" align="center">Kerusakan</td>
            <td rowspan="2" bgcolor="#EFEBE9" align="center">Status</td>
        </tr> 
    </thead>
    <tbody><br>
        @foreach($data as $dt)
            <tr>
                <td>{{ $dt->id }}</td>
                <td>{{ $dt->t_masuk }}</td>
                @if($dt->t_keluar == NULL)
                    <td>
                        <p>-</p>
                    </td>
                @else
                    <td>{{ $dt->t_keluar }}</td>
                @endif
                <td>{{ $dt->nama }}</td>
                <td>{{ $dt->alamat }}</td>
                <td>{{ $dt->no_telp }}</td>
                <td>{{ $dt->barang_r->nama }}</td>
                <td>{{ $dt->kerusakan }}</td>
                <td>
                    @if($dt->status == 1)
                        <p>Selesai</p>
                    @elseif($dt->status == 2)
                        <p>Batal</p>
                    @else
                        <p>Proses</p>
                    @endif
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>

    

<br><br>
<table width="100%">
	<tr>	

		<td align="left">
			
			<p>
				Surabaya, {{ date('d F Y') }}
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

<script>
	// window.print();
</script>

</div>
