<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Transaksi Bank Sampah Malang</title>
    </head>
<body>
    <style type="text/css">
       table{
        margin-top: 0%;
        margin-bottom: 10%;
        border-collapse: collapse;
        width: 100%;
       }
       table tr td, table tr th{
        border: 1px solid black;
        padding: 8px;
        font-size: 9pt;
       }
       .title {
        margin-top : 50px;
       }
    </style>
     <center>
        <h5 class="title">CETAK LAPORAN TRANSAKSI</h4><br><br>
    </center>
    <div class="container mt-2">
        <div class="row justify-content-center align-items-center">
        <div class="card">
       
        <div class="card-body">
           
            <table class="table table-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Id Jadwal</th>
                    <th>Id Nasabah</th>
                    <th>Id Sopir</th>
                    <th>Tanggal Pengambilan</th>
                    <th>Konfirmasi</th>
                    <th>Jenis Sampah</th>
                    <th>Berat</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $total=0;
                  $jumlah=0;
                  ?>
                  @if ($transaksi ->count() > 0)
                    @foreach ($transaksi as $i => $k)
                    @if ($k->konfirmasi=='Selesai')
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$k->id_transaksibaru}}</td>
                      <td>{{$k->nasabah->nama}}</td>
                      <td>{{$k->sopir->nama}}</td>
                      <td>{{$k->tanggal_pengambilan}}</td>
                      <td>{{$k->konfirmasi}}</td>
                      <td>{{$k->jenis_sampah}}</td>
                      <td>{{$k->berat}}</td>
                      <td>Rp{{$k->harga}},00</td>
                      <?php $total += $k->harga; ?>
                    </tr>
                    @else
                    @endif
                    @endforeach
                    <tr>
                      <td colspan="8"><b>Total Pemasukan</b></td>
                      <td><b>Rp{{$total}},00</b></td>
                    </tr>
                  @else
                    <tr>
                      <td colspan="9" class="text-center">Data tidak ada</td>
                    </tr>
                  @endif
                </tbody>
              </table>
        </div>
        </div>
        </div> 
    </div>
</div>
</body>
</html>
