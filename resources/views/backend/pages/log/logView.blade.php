@extends('backend.index')
@section('title')
  Log View
@endsection
@section('content')
<div >
  <canvas id="line-chart" width="800" height="450"></canvas>
</div>
<script type="text/javascript">
new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: ["","January","February","Maret","April","May","June","July","August","September","October","November","December"],
    datasets: [{
        data: [
          0,
          $dataViewJanuari,
          $dataViewFebruari,
          $dataViewMaret,
          $dataViewApril,
          $dataViewMei,
          $dataViewJuni,
          $dataViewJuli,
          $dataViewAgustus,
          $dataViewSeptember,
          $dataViewOktober,
          $dataViewNovember,
          $dataViewDesember],
        label: "View",
        borderColor: "#3e95cd",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Log View'
    }
  }
});
</script>
@endsection
