<?php
$table_name = "tbl_events";
$column1 = "event_id";
$value1 = $url_id;
$column2 = "statusxx";

$orgs_data=get_where_custom($table_name, $column1, $value1);

foreach ($orgs_data as $key => $row)
{
  $event_name=$row['event_name'];
  $event_name=$row['event_name'];
  $start_date=$row['start_date'];
  $end_date=$row['end_date'];
  $venue=$row['venue'];
}

$present_student = count_where_double_and("tbl_attendee", $column1, $value1, $column2, "Present");
$late_student = count_where_double_and("tbl_attendee", $column1, $value1, $column2, "Late");
$absent_student = count_where_double_and("tbl_attendee", $column1, $value1, $column2, "Absent");

$present_visitors = count_where_double_and("tbl_visitor", $column1, $value1, $column2, "Present");
$late_visitors = count_where_double_and("tbl_visitor", $column1, $value1, $column2, "Late");
$absent_visitors = count_where_double_and("tbl_visitor", $column1, $value1, $column2, "Absent");

$present_data = $present_student + $present_visitors;
$late_data = $late_student + $late_visitors;
$absent_data = $absent_student + $absent_visitors;


// echo $present_student." ".$late_student." ".$absent_student."<br>";
// echo $present_visitors." ".$late_visitors." ".$absent_visitors."<br>";
// echo $present_data." ".$late_data." ".$absent_data."<br>";


$all_data = $present_data + $late_data + $absent_data;

// echo $present_data;
// echo $late_data;
// echo $absent_data;

?>

    <!--Chart.js JS CDN--> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h2 class="h4 mb-0 text-gray-800"><?=$event_name?><br>
      <span style="font-size: 14px;">Date:
        <?php
            if ($start_date===$end_date)
            {
                echo $end_date;
            } else {
                echo $start_date." - ".$end_date;
            }
        ?>
        
        <span style="font-size: 14px; margin-left: 50px;">Venue:
        <?php
            echo $venue;
        ?>
        </span>

    </h2>
    <div>
        <button onclick="quorum_print()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-file-invoice fa-sm text-white-50 p-1"></i> Generate document </button>
          <script>
            function quorum_print() {
            window.open("<?= base_url() ?>prints/quorum/<?=$url_id?>");
            } 
          </script>
        
        <a href="<?=base_url()?>events/event_details/<?=$url_id?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
        <i class="fas fa-times fa-sm text-white-50 p-1"></i> Back </a>
    </div>
  </div>


<div class="row"">
    <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow h-100 py-2" style="border-left-color: #316879; border-left-style: solid; border-left-width: thick;">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                          <span style="color: #316879">Present</span>
                      </div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">
                        <span style="color: #316879">
                          <?php
                            echo $present_data;
                          ?>
                        </span>
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow h-100 py-2" style="border-left-color: #f47a60; border-left-style: solid; border-left-width: thick;">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                        <span style="color: #f47a60">Late</span> 
                      </div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">
                        <span style="color: #f47a60">
                          <?php
                            echo $late_data;
                          ?>
                        </span> 
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar-minus fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow h-100 py-2" style="border-left-color: #acbfc1; border-left-style: solid; border-left-width: thick;">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                        <span style="color: #acbfc1">Absent</span> 
                      </div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">
                        <span style="color: #acbfc1">
                          <?php
                            echo $absent_data;
                          ?>
                        <span>
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar-times fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow h-100 py-2" style="border-left-color: #72b5ae; border-left-style: solid; border-left-width: thick;">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                        <span style="color: #72b5ae">Total</span>
                      </div>
                      <div class="h3 mb-0 font-weight-bold text-gray-800">
                        <span style="color: #72b5ae">
                          <?php
                            echo $all_data;
                          ?>
                        </span>
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div> <!-- end div  stats -->



<div class="row"><!-- start div row -->
  

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


  <div class="card pb-5 pt-3" style="width: 32%">
    <h4 class="font-weight-bold" style="text-align: center; color: #72b5ae;"> Visitor </h4>
    <?php
      $count_visitors=count_where('tbl_visitor', 'event_id', $url_id);
      if ($count_visitors===0){
        echo "<h1 class='text-center mt-5'>N/A<br><br><br><br><br></h1>";
      } else
      {
    ?>
    <canvas id="myChart2" style="width:100%;max-width:800px">
    </canvas>
    
    <script>
      var xValues = ["Present", "Late", "Absent"];
      var yValues = [<?= $present_visitors ?>,<?= $late_visitors ?>, <?= $absent_visitors ?>];

      var barColors = [
        "#316879",
        "#f47a60",
        "#acbfc1"
      ];

      new Chart("myChart2", {
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
            text: "Event 12"
          }
        }
      });

      const config2 = {
        type: 'doughnut',
        data: data,
      };
    </script>
    <div class="deets row text-center mt-5 mx-5">
        <div class="col-4" style="color: #316879;">Present<br><h1><?=$present_visitors?></h1></div>
        <div class="col-4" style="color: #f47a60;">Late<br><h1><?=$late_visitors?></h1></div>
        <div class="col-4" style="color: #acbfc1;">Absent<br><h1><?=$absent_visitors?></h1></div>
    </div>
    <?php
      }
    ?>
  </div>

  <div class="card pb-5 pt-3" style="width: 32%; margin-left: 2%;">
    <h4 class="font-weight-bold" style="text-align: center; color: #72b5ae;"> Total </h4>
    <canvas id="myChart3">
    </canvas>
    <script>
      var xValues = ["Present", "Late", "Absent"];
      var yValues = [<?= $present_data ?>,<?= $late_data ?>, <?= $absent_data ?>];

      var barColors = [
        "#316879",
        "#f47a60",
        "#acbfc1"
      ];

      new Chart("myChart3", {
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
            text: "Event 12"
          }
        }
      });

      const config3 = {
        type: 'doughnut',
        data: data,
      };
    </script>

      <div class="deets row text-center mt-5 mx-5">
        <div class="col-4" style="color: #316879;">Present<br><h1><?=$present_data?></h1></div>
        <div class="col-4" style="color: #f47a60;">Late<br><h1><?=$late_data?></h1></div>
        <div class="col-4" style="color: #acbfc1;">Absent<br><h1><?=$absent_data?></h1></div>
      </div>
      
  </div>


  

  


  

</div><!-- end div row -->











