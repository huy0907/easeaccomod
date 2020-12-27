@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <h2>Province</h2>
    <div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Provice', 'count'],
          ['Hà Nội',     5],
          ['Hồ Chí Minh',      2],
          ['Hải Dương',  1]
         
        ]);

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px"></div>
  </body>
    </div>

    <h2>Category</h2>
    <head>
    <script type="text/javascript">
     	google.charts.load('current', {packages: ['corechart', 'bar']});
		google.charts.setOnLoadCallback(drawBasic);

      function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['loaiphong', 'Số Phòng',{role:'style'}],
        ['Phòng Trọ', 3,'#b87333'],
        ['Chung cư mini', 1,'#AEAB8D'],
        ['Nhà nguyên căn', 1,'gold'],
        ['Homestay', 2,' #e5e4e2']
        
      ]);
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data);
    }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 700px; height: 500px;"></div>
  </body>

     

    <h2> Top post </h2>
    <head>
    <script type="text/javascript">
     	google.charts.load('current', {packages: ['corechart', 'bar']});
		google.charts.setOnLoadCallback(drawBasic_1);

      function drawBasic_1() {

      var data = google.visualization.arrayToDataTable([
        ['tenphong', 'Lượt xem',{role:'style'}],
        ['Cho thuê căn hộ', 154,'#EDDD3E'],
        ['Cho thuê nhà 4 tầng giá hạt dẻ', 68,'#ED8A30'],
        ['Cho thuê nhà nguyên căn',57 ,'blue'],
        ['Cho thuê chung cư', 54,' #e5e4e2'], 
        ['Cho thuê phòng trọ khép kín không chung chủ tại CCMN Tân Triều-Tân Khúc',23,'red']
        
      ]);

      
      var chart = new google.visualization.BarChart(document.getElementById('chart_div_1'));
      chart.draw(data);
    }
    </script>
  </head>
  <body>
    <div id="chart_div_1" style="width: 700px; height: 500px;"></div>
  </body>
</div>
@endsection