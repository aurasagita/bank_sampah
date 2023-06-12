@extends('layouts.template')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Grafik Penjualan</div>
                <div class="card-body">
                    <div id="grafik"></div>
                </div>
            </div>
        </div>
    </div>
 <div>
    <a class="btn btn-success mt-3" href="{{ url('/laporan') }}">Kembali</a>
 </div>
</div>
   <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
    var pendapatan = <?php echo json_encode($harga) ?>;
    var bulan = <?php echo json_encode($bulan) ?>;
        Highcharts.chart('grafik', {

        title: {
            text: 'Grafik pendapatan bulanan'
        },

        xAxis: {
           
           categories: bulan
               
            
        },

        yAxis: {
           title:{
            text : 'Nominal Pendapatan Bulanan'
           }
        },

        tooltip: {
            headerFormat: '<b>{series.name}</b><br />',
            pointFormat: 'bulan = {point.x}, pendapatan = {point.y}'
        },

        series: [{
           name: 'Nominal Pendapatan',
           data:pendapatan
        }]
        });
    </script>
@endsection