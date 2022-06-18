
    <div class="x_panel">
        <div class="x_title">
          <h2>Reservations</h2>
          <ul class="nav navbar-right panel_toolbox" style="padding-left:5%">
            <li>
              {{-- <a class="collapse-link"><i class="fa fa-chevron-up"></i></a> --}}
            </li>
            <li>
              <a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <canvas id="mybarChart"></canvas>
        </div>
      </div>
<input type="hidden" value="{{$datas[0]}}" id="count1">
<input type="hidden" value="{{$datas[1]}}" id="count2">
<input type="hidden" value="{{$datas[2]}}" id="count3">
<input type="hidden" value="{{$datas[3]}}" id="count4">



<script>
count1= document.getElementById('count1').value;
count2= document.getElementById('count2').value;
count3= document.getElementById('count3').value;
count4= document.getElementById('count4').value;


var ctx = document.getElementById("mybarChart").getContext("2d");

var mybarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Service'],
    datasets: [{
      label: 'Murals, # of reservations',
      backgroundColor: "#7ace4c",
      data: [count1]
    }, {
      label: 'Exterior Painting, # of reservations',
      backgroundColor: "#707cd2",
      data: [count2]
    }, {
      label: 'Interior Painting, # of reservations',
      backgroundColor: "#2cabe3",
      data: [count3]
    }, {
      label: 'Drywall Repair, # of reservations',
      backgroundColor: "#e4b6bf",
      data: [count4]
    }]
  },

  options: {
    legend: {
      display: true,
      position: 'bottom',
      labels: {
        fontColor: "#000080",
      }
    },
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});
</script>
