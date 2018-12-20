@extends('backend.index')
@section('title')
  Log Download
@endsection
@section('content')
<div >
  <canvas id="line-chart" width="800" height="450"></canvas>
</div>
<script type="text/javascript">
new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: ["","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"],
    datasets: [{
      data: [
        0,
        $dataDownloadJanuari,
        $dataDownloadFebruari,
        $dataDownloadMaret,
        $dataDownloadApril,
        $dataDownloadMei,
        $dataDownloadJuni,
        $dataDownloadJuli,
        $dataDownloadAgustus,
        $dataDownloadSeptember,
        $dataDownloadOktober,
        $dataDownloadNovember,
        $dataDownloadDesember],
        label: "Download",
        borderColor: "#3e95cd",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Log Download File'
    }
  }
});
</script>
@endsection
