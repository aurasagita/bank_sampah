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
        margin-top: 7%;
        margin-bottom: 10%;
        border-collapse: collapse;
        width: 100%;
       }
       table tr td, table tr th{
        border: 1px solid black;
        padding: 8px;
        font-size: 9pt;
       }
       .tanggal{
            margin-left: 370px;
        }
        .jab{
            margin-left: 370px;
            margin-top: -20px;
        }
        .ketua{
            margin-left: 370px;
        }
    </style>
     <center>
        <h5>CETAK LAPORAN TRANSAKSI</h4><br><br>
    </center>
    <div class="container mt-2">
        <div class="row justify-content-center align-items-center">
        <div class="card">
       
        <div class="card-body">
           
            <table class="table table-bordered table-striped">
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
                    <th>Harga</th>
                    <th>Jumlah</th>
                  </tr>

                </thead>
                <tbody>
                  <?php
                  $total=0;
                  $jumlah=0;
                  ?>
                  @if ($transaksi ->count() > 0)
                    @foreach ($transaksi as $i => $k)
                      <tr>
                        <td>{{++$i}}</td>
                        <td>{{$k->id_transaksibaru}}</td>
                        <td>{{$k->id_nasabah}}</td>
                        <td>{{$k->id_sopir}}</td>
                        <td>{{$k->tanggal_pengambilan}}</td>
                        <td>{{$k->konfirmasi}}</td>
                        <td>{{$k->jenis_sampah}}</td>
                        <td>{{$k->berat}}</td>
                        <td>Rp{{$k->harga}},00</td>
                        <td>Rp{{$k->jumlah = $k->berat * $k->harga}},00</td>
                        <?php $total += $k->jumlah; ?>
                      </tr>
                    @endforeach
                    <td colspan="9"><b>Total</b></td>
                    <td><b>Rp{{$total}},00</b></td>
                  @else
                    <tr>
                      <td colspan="6" class="text-center">Data tidak ada</td>
                    </tr>
                  @endif
                </tbody>
              </table>
        </div>
        </div>
        </div> 
    </div>
</div>
<script type="text/javascript">
    window.print();
</script>
</body>
</html>
