<div class="card pb-5 pt-3" style="width: 32%; margin-right: 2%;">
    <h4 class="font-weight-bold" style="text-align: center; color: #72b5ae;"> Student </h4>
    <canvas id="myChart1">
    </canvas>
    <script>
      var xValues = ["Present", "Late", "Absent"];
      var yValues = [<?= $present_student ?>,<?= $late_student ?>, <?= $absent_student ?>];

      var barColors = [
        "#316879",
        "#f47a60",
        "#acbfc1"
      ];

      new Chart("myChart1", {
        type: "doughnut",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
        options: {
          title: {
            display: false,
            text: "Event 13"
          }
        }
      });

      const config1 = {
        type: 'doughnut',
        data: data,
      };
    </script>
    <div class="deets row text-center mt-5 mx-5">
        <div class="col-4" style="color: #316879;">Present<br><h1><?=$present_student?></h1></div>
        <div class="col-4" style="color: #f47a60;">Late<br><h1><?=$late_student?></h1></div>
        <div class="col-4" style="color: #acbfc1;">Absent<br><h1><?=$absent_student?></h1></div>
    </div>
  </div>