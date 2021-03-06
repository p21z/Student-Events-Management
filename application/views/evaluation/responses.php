<!--Chart.js JS CDN--> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<?php
    $event_data=get_where_custom('tbl_events', 'event_id', $url_id);

    foreach ($event_data as $key => $row)
    {
        $event_name=$row['event_name'];
        $event_name=$row['event_name'];
        $start_date=$row['start_date'];
        $end_date=$row['end_date'];
        $venue=$row['venue'];

    }

?>

<div class="w-100">  <!-- start div container -->

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
        
        <span style="font-size: 14px; margin-left: 50px;">Date:
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
            window.open("<?= base_url() ?>prints/responses/<?=$url_id?>");
            } 
          </script>
        
        <a href="<?=base_url()?>events/event_details/<?=$url_id?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
        <i class="fas fa-times fa-sm text-white-50 p-1"></i> Back </a>
    </div>
  </div>

<?php

  

  // Q1 QUERIES
    $q1_r3_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans1', 3);
    $q1_r2_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans1', 2);
    $q1_r1_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans1', 1);
    $q1_r0_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans1', 0);
    // echo $q1_r3_data. " ".$q1_r2_data. " ".$q1_r1_data. " ".$q1_r0_data. "<br>";
    
    $total1=$q1_r3_data+$q1_r2_data+$q1_r1_data+$q1_r0_data;
    // IF NO EVALUATION ARE MADE
    if($total1==0){$total1=1;}
    $mean1=(((3*$q1_r3_data)+(2*$q1_r2_data)+($q1_r1_data))/$total1);
  
  // Q2 QUERIES
    $q2_r3_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans2', 3);
    $q2_r2_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans2', 2);
    $q2_r1_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans2', 1);
    $q2_r0_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans2', 0);
    // echo $q2_r3_data. " ".$q2_r2_data. " ".$q2_r1_data. " ".$q2_r0_data. "<br>";

    $total2=$q2_r3_data+$q2_r2_data+$q2_r1_data+$q2_r0_data;
    // IF NO EVALUATION ARE MADE
    if($total2==0){$total2=1;}
    $mean2=(((3*$q2_r3_data)+(2*$q2_r2_data)+($q2_r1_data))/$total2);

  // Q3 QUERIES
    $q3_r3_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans3', 3);
    $q3_r2_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans3', 2);
    $q3_r1_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans3', 1);
    $q3_r0_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans3', 0);
    // echo $q3_r3_data. " ".$q3_r2_data. " ".$q3_r1_data. " ".$q3_r0_data. "<br>";

    $total3=$q3_r3_data+$q3_r2_data+$q3_r1_data+$q3_r0_data;
    // IF NO EVALUATION ARE MADE
    if($total3==0){$total3=1;}
    $mean3=(((3*$q3_r3_data)+(2*$q3_r2_data)+($q3_r1_data))/$total3);

  // Q4 QUERIES
    $q4_r3_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans4', 3);
    $q4_r2_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans4', 2);
    $q4_r1_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans4', 1);
    $q4_r0_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans4', 0);
    // echo $q4_r3_data. " ".$q4_r2_data. " ".$q4_r1_data. " ".$q4_r0_data. "<br>";

    $total4=$q4_r3_data+$q4_r2_data+$q4_r1_data+$q4_r0_data;
    // IF NO EVALUATION ARE MADE
    if($total4==0){$total4=1;}
    $mean4=(((3*$q4_r3_data)+(2*$q4_r2_data)+($q4_r1_data))/$total4);

  // Q5 QUERIES
    $q5_r3_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans5', 3);
    $q5_r2_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans5', 2);
    $q5_r1_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans5', 1);
    $q5_r0_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans5', 0);
    // echo $q5_r3_data. " ".$q5_r2_data. " ".$q5_r1_data. " ".$q5_r0_data. "<br>";

    $total5=$q5_r3_data+$q5_r2_data+$q5_r1_data+$q5_r0_data;
    // IF NO EVALUATION ARE MADE
    if($total5==0){$total5=1;}
    $mean5=(((3*$q5_r3_data)+(2*$q5_r2_data)+($q5_r1_data))/$total5);

  // Q6 QUERIES
    $q6_r3_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans6', 3);
    $q6_r2_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans6', 2);
    $q6_r1_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans6', 1);
    $q6_r0_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans6', 0);
    // echo $q6_r3_data. " ".$q6_r2_data. " ".$q6_r1_data. " ".$q6_r0_data. "<br>";

    $total6=$q6_r3_data+$q6_r2_data+$q6_r1_data+$q6_r0_data;
    // IF NO EVALUATION ARE MADE
    if($total6==0){$total6=1;}
    $mean6=(((3*$q6_r3_data)+(2*$q6_r2_data)+($q6_r1_data))/$total6);

  // Q7 QUERIES
    $q7_r3_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans7', 3);
    $q7_r2_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans7', 2);
    $q7_r1_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans7', 1);
    $q7_r0_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans7', 0);
    // echo $q7_r3_data. " ".$q7_r2_data. " ".$q7_r1_data. " ".$q7_r0_data. "<br>";

    $total7=$q7_r3_data+$q7_r2_data+$q7_r1_data+$q7_r0_data;
    // IF NO EVALUATION ARE MADE
    if($total7==0){$total7=1;}
    $mean7=(((3*$q7_r3_data)+(2*$q7_r2_data)+($q7_r1_data))/$total7);

  // Q8 QUERIES
    $q8_r3_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans8', 3);
    $q8_r2_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans8', 2);
    $q8_r1_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans8', 1);
    $q8_r0_data=count_where_double_and('tbl_evaluation', 'event_id', $url_id, 'ans8', 0);
    // echo $q8_r3_data. " ".$q8_r2_data. " ".$q8_r1_data. " ".$q8_r0_data. "<br>";

    $total8=$q8_r3_data+$q8_r2_data+$q8_r1_data+$q8_r0_data;
    // IF NO EVALUATION ARE MADE
    if($total8==0){$total8=1;}
    $mean8=(((3*$q8_r3_data)+(2*$q8_r2_data)+($q8_r1_data))/$total8);



?>

  <div class="row mb-2 pt-3 pb-3 px-5 card">
    <div class="col-12">
      <div>
        <canvas id="myChartmain" style="width:100%; max-height: 800px;" ></canvas>
      </div> 

      <script>
        var ctx = document.getElementById('myChartmain').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: ["Q1", 
                        "Q2", 
                        "Q3", 
                        "Q4", 
                        "Q5", 
                        "Q6", 
                        "Q7",
                        "Q8"],
              datasets: [{
                  data: [<?=$q1_r3_data?>,<?=$q2_r3_data?>,<?=$q3_r3_data?>,<?=$q4_r3_data?>,<?=$q5_r3_data?>,<?=$q6_r3_data?>,<?=$q7_r3_data?>,<?=$q8_r3_data?>,],
                //   data: [86,21,41,23,41,51,22,55],
                  label: "3 (Excellent)",
                  borderColor: "#B0D8A4",
                  backgroundColor: "#B0D8A4",
                  borderWidth:1
                }, { 
                  data: [<?=$q1_r2_data?>,<?=$q2_r2_data?>,<?=$q3_r2_data?>,<?=$q4_r2_data?>,<?=$q5_r2_data?>,<?=$q6_r2_data?>,<?=$q7_r2_data?>,<?=$q8_r2_data?>,],
                  label: "2 (Moderate)",
                  borderColor: "#FEE191",
                  backgroundColor: "#FEE191",
                  borderWidth:1
                }, { 
                  data: [<?=$q1_r1_data?>,<?=$q2_r1_data?>,<?=$q3_r1_data?>,<?=$q4_r1_data?>,<?=$q5_r1_data?>,<?=$q6_r1_data?>,<?=$q7_r1_data?>,<?=$q8_r1_data?>,],
                  label: "1 (Satisfactory)",
                  borderColor: "#FD8060",
                  backgroundColor:"#FD8060",
                  borderWidth:1
                }, { 
                  data: [<?=$q1_r0_data?>,<?=$q2_r0_data?>,<?=$q3_r0_data?>,<?=$q4_r0_data?>,<?=$q5_r0_data?>,<?=$q6_r0_data?>,<?=$q7_r0_data?>,<?=$q8_r0_data?>,],
                  label: "0 (Poor)",
                  borderColor: "#E84258",
                  backgroundColor:"#E84258",
                  borderWidth:1
                }, 
              ]
            },
          });
      </script>
    </div>
  </div><!-- end div for large bargraph -->
  <div class="row mt-3 text-dark font-weight-bold">

    <div class="col-3 card">
      <a href="#myChartQ1" style="text-decoration: none; color: inherit"><h4 class="text-center py-3">Q1 Tally Score: <?=$mean1?></h4></a>
    </div>

    <div class="col-3 card">
      <a href="#myChartQ2" style="text-decoration: none; color: inherit"><h4 class="text-center py-3">Q2 Tally Score: <?=$mean2?></h4></a>
    </div>

    <div class="col-3 card">
      <a href="#myChartQ3" style="text-decoration: none; color: inherit"><h4 class="text-center py-3">Q3 Tally Score: <?=$mean3?></h4></a>
    </div>

    <div class="col-3 card">
      <a href="#myChartQ4" style="text-decoration: none; color: inherit"><h4 class="text-center py-3">Q4 Tally Score: <?=$mean4?></h4></a>
    </div>

  </div>
  <div class="row mb-3 text-dark font-weight-bold">

    <div class="col-3 card">
      <a href="#myChartQ5" style="text-decoration: none; color: inherit"><h4 class="text-center py-3">Q5 Tally Score: <?=$mean5?></h4></a>
    </div>

    <div class="col-3 card">
      <a href="#myChartQ6" style="text-decoration: none; color: inherit"><h4 class="text-center py-3">Q6 Tally Score: <?=$mean6?></h4></a>
    </div>

    <div class="col-3 card">
      <a href="#myChartQ7" style="text-decoration: none; color: inherit"><h4 class="text-center py-3">Q7 Tally Score: <?=$mean7?></h4></a>
    </div>

    <div class="col-3 card">
      <a href="#myChartQ8" style="text-decoration: none; color: inherit"><h4 class="text-center py-3">Q8 Tally Score: <?=$mean8?></h4></a>
    </div>

  </div>

  <div class="row">
      
    <div class="p-4 pt-5 card" style="width: 49.5%; margin-right: .5%; margin-bottom: .5%;" >

      <div>
        <canvas id="myChartQ1" style="width:100%; max-height: 500px;" ></canvas>
      </div> 
      <div class="card mt-2">
        <div class="row text-center my-3">
          <h5 class="col-3">3(E): <?=$q1_r3_data?></h5>
          <h5 class="col-3">2(M): <?=$q1_r2_data?></h5>
          <h5 class="col-3">1(S): <?=$q1_r1_data?></h5>
          <h5 class="col-3">0(X): <?=$q1_r0_data?></h5>
        </div>
       
        <div class="row text-center  mb-3 text-dark font-weight-bolder">
          <span class="col-4"></span>
          <h3 class="col-4">Tally Score: <?=$mean1?></h4>
          <span class="col-4"></span>
        </div>
      </div>
      <p style="font-size: 12px; text-align: left;">
      <span class="font-weight-bold"> Q1. The objectives were </span> <br><br>      
          a) The objectives were clearly articulated to the participants.<br>
          b) The objectives of the program/activity are evident in the presentations/activties.<br>
          c) The objectives were attained by the end of the program.<br>
      </p>

      <script>
        
        var ctx = document.getElementById('myChartQ1').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              
              labels: [],
              datasets: [{ 
                  data: [<?=$q1_r3_data?>],
                  label: "3(E)",
                  borderColor: "#B0D8A4",
                  backgroundColor: "#B0D8A4",
                  borderWidth:2
                }, { 
                  data: [<?=$q1_r2_data?>],
                  label: "2(M)",
                  borderColor: "#FEE191",
                  backgroundColor: "#FEE191",
                  borderWidth:2
                }, { 
                  data: [<?=$q1_r1_data?>],
                  label: "1(S)",
                  borderColor: "#FD8060",
                  backgroundColor:"#FD8060",
                  borderWidth:2
                }, { 
                  data: [<?=$q1_r0_data?>],
                  label: "0(X)",
                  borderColor: "#E84258",
                  backgroundColor:"#E84258",
                  borderWidth:2
                }, 
              ]
            },
          });
      </script>

    </div><!-- end Q1 -->

    <div class="p-4 pt-5 card" style="width: 49.5%; margin-left: .5%; margin-bottom: .5%;">
      <div>
        <canvas id="myChartQ2" style="width:100%; max-height: 500px;" ></canvas>
      </div> 
      <div class="card mt-2">
        <div class="row text-center my-3">
          <h5 class="col-3">3(E): <?=$q2_r3_data?></h5>
          <h5 class="col-3">2(M): <?=$q2_r2_data?></h5>
          <h5 class="col-3">1(S): <?=$q2_r1_data?></h5>
          <h5 class="col-3">0(X): <?=$q2_r0_data?></h5>
        </div>
       
        <div class="row text-center  mb-3 text-dark font-weight-bolder">
          <span class="col-4"></span>
          <h3 class="col-4">Tally Score: <?=$mean2?></h4>
          <span class="col-4"></span>
        </div>
      </div>
      <p style="font-size: 12px; text-align: left;"> 
        <span class="font-weight-bold"> Q2. The venue is fit for the activity </span>
      </p>
      
      <script>
        
        var ctx = document.getElementById('myChartQ2').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              
              labels: [],
              datasets: [{ 
                data: [<?=$q2_r3_data?>],
                  label: "3(E)",
                  borderColor: "#B0D8A4",
                  backgroundColor: "#B0D8A4",
                  borderWidth:2
                }, { 
                  data: [<?=$q2_r2_data?>],
                  label: "2(M)",
                  borderColor: "#FEE191",
                  backgroundColor: "#FEE191",
                  borderWidth:2
                }, { 
                  data: [<?=$q2_r1_data?>],
                  label: "1(S)",
                  borderColor: "#FD8060",
                  backgroundColor:"#FD8060",
                  borderWidth:2
                }, { 
                  data: [<?=$q2_r0_data?>],
                  label: "0(X)",
                  borderColor: "#E84258",
                  backgroundColor:"#E84258",
                  borderWidth:2
                }, 
              ]
            },
          });
      </script>

    </div><!-- end Q2 -->
  </div><!-- end row div -->

  <div class="row">
      
    <div class="p-4 pt-5 card" style="width: 49.5%; margin-right: .5%; margin-bottom: .5%;" >
      <div>
        <canvas id="myChartQ3" style="width:100%; max-height: 500px;" ></canvas>
      </div> 
      <div class="card mt-2">
        <div class="row text-center my-3">
          <h5 class="col-3">3(E): <?=$q3_r3_data?></h5>
          <h5 class="col-3">2(M): <?=$q3_r2_data?></h5>
          <h5 class="col-3">1(S): <?=$q3_r1_data?></h5>
          <h5 class="col-3">0(X): <?=$q3_r0_data?></h5>
        </div>
       
        <div class="row text-center  mb-3 text-dark font-weight-bolder">
          <span class="col-4"></span>
          <h3 class="col-4">Tally Score: <?=$mean3?></h4>
          <span class="col-4"></span>
        </div>
      </div>
      <p style="font-size: 12px; text-align: left;">      
        <span class="font-weight-bold"> Q3. The invited participants were able to attend the activity </span>
      </p>
      
      <script>
        
        var ctx = document.getElementById('myChartQ3').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              
              labels: [],
              datasets: [{ 
                  data: [<?=$q3_r3_data?>],
                  label: "3(E)",
                  borderColor: "#B0D8A4",
                  backgroundColor: "#B0D8A4",
                  borderWidth:2
                }, { 
                  data: [<?=$q3_r2_data?>],
                  label: "2(M)",
                  borderColor: "#FEE191",
                  backgroundColor: "#FEE191",
                  borderWidth:2
                }, { 
                  data: [<?=$q3_r1_data?>],
                  label: "1(S)",
                  borderColor: "#FD8060",
                  backgroundColor:"#FD8060",
                  borderWidth:2
                }, { 
                  data: [<?=$q3_r0_data?>],
                  label: "0(X)",
                  borderColor: "#E84258",
                  backgroundColor:"#E84258",
                  borderWidth:2
                }, 
              ]
            },
          });
      </script>

    </div><!-- end Q3 -->

    <div class="p-4 pt-5 card" style="width: 49.5%; margin-left: .5%; margin-bottom: .5%;">
      <div>
        <canvas id="myChartQ4" style="width:100%; max-height: 500px;" ></canvas>
      </div> 
      <div class="card mt-2">
        <div class="row text-center my-3">
          <h5 class="col-3">3(E): <?=$q4_r3_data?></h5>
          <h5 class="col-3">2(M): <?=$q4_r2_data?></h5>
          <h5 class="col-3">1(S): <?=$q4_r1_data?></h5>
          <h5 class="col-3">0(X): <?=$q4_r0_data?></h5>
        </div>
       
        <div class="row text-center  mb-3 text-dark font-weight-bolder">
          <span class="col-4"></span>
          <h3 class="col-4">Tally Score: <?=$mean4?></h4>
          <span class="col-4"></span>
        </div>
      </div>
      <p style="font-size: 12px; text-align: left;"> 
        <span class="font-weight-bold"> Q4. The schedule of the program activity was favorable in the participants and speakers </span>
      </p>
      <script>
        
        var ctx = document.getElementById('myChartQ4').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              
              labels: [],
              datasets: [{ 
                  data: [<?=$q4_r3_data?>],
                  label: "3(E)",
                  borderColor: "#B0D8A4",
                  backgroundColor: "#B0D8A4",
                  borderWidth:2
                }, { 
                  data: [<?=$q4_r2_data?>],
                  label: "2(M)",
                  borderColor: "#FEE191",
                  backgroundColor: "#FEE191",
                  borderWidth:2
                }, { 
                  data: [<?=$q4_r1_data?>],
                  label: "1(S)",
                  borderColor: "#FD8060",
                  backgroundColor:"#FD8060",
                  borderWidth:2
                }, { 
                  data: [<?=$q4_r0_data?>],
                  label: "0(X)",
                  borderColor: "#E84258",
                  backgroundColor:"#E84258",
                  borderWidth:2
                }, 
              ]
            },
          });
      </script>

    </div><!-- end Q4 -->
  </div><!-- end row div -->          


  <div class="row">
      
    <div class="p-4 pt-5 card" style="width: 49.5%; margin-right: .5%; margin-bottom: .5%;" >
      <div>
        <canvas id="myChartQ5" style="width:100%; max-height: 500px;" ></canvas>
      </div> 
      <div class="card mt-2">
        <div class="row text-center my-3">
          <h5 class="col-3">3(E): <?=$q5_r3_data?></h5>
          <h5 class="col-3">2(M): <?=$q5_r2_data?></h5>
          <h5 class="col-3">1(S): <?=$q5_r1_data?></h5>
          <h5 class="col-3">0(X): <?=$q5_r0_data?></h5>
        </div>
       
        <div class="row text-center  mb-3 text-dark font-weight-bolder">
          <span class="col-4"></span>
          <h3 class="col-4">Tally Score: <?=$mean5?></h4>
          <span class="col-4"></span>
        </div>
      </div>
      <p style="font-size: 12px; text-align: left;"> 
        <span class="font-weight-bold"> Q5. Provision of invitatonal allowanace was evident. </span>  
      </p>
      <script>
        
        var ctx = document.getElementById('myChartQ5').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              
              labels: [],
              datasets: [{ 
                  data: [<?=$q5_r3_data?>],
                  label: "3(E)",
                  borderColor: "#B0D8A4",
                  backgroundColor: "#B0D8A4",
                  borderWidth:2
                }, { 
                  data: [<?=$q5_r2_data?>],
                  label: "2(M)",
                  borderColor: "#FEE191",
                  backgroundColor: "#FEE191",
                  borderWidth:2
                }, { 
                  data: [<?=$q5_r1_data?>],
                  label: "1(S)",
                  borderColor: "#FD8060",
                  backgroundColor:"#FD8060",
                  borderWidth:2
                }, { 
                  data: [<?=$q5_r0_data?>],
                  label: "0(X)",
                  borderColor: "#E84258",
                  backgroundColor:"#E84258",
                  borderWidth:2
                }, 
              ]
            },
          });
      </script>

    </div><!-- end Q5 -->

    <div class="p-4 pt-5 card" style="width: 49.5%; margin-left: .5%; margin-bottom: .5%;">
      <div>
        <canvas id="myChartQ6" style="width:100%; max-height: 500px;" ></canvas>
      </div> 
      <div class="card mt-2">
        <div class="row text-center my-3">
          <h5 class="col-3">3(E): <?=$q6_r3_data?></h5>
          <h5 class="col-3">2(M): <?=$q6_r2_data?></h5>
          <h5 class="col-3">1(S): <?=$q6_r1_data?></h5>
          <h5 class="col-3">0(X): <?=$q6_r0_data?></h5>
        </div>
       
        <div class="row text-center  mb-3 text-dark font-weight-bolder">
          <span class="col-4"></span>
          <h3 class="col-4">Tally Score: <?=$mean6?></h4>
          <span class="col-4"></span>
        </div>
      </div>
      <p style="font-size: 12px; text-align: left;"> 
        <span class="font-weight-bold"> Q6. Significance of the Event: </span><br><br>
          a) The activity demonstrate a sophisticated, multi-dimensional analysis of aesthetic expression<br>
          b) The activity engages students into spatial intelligence enhancement as a result of their expression of an opinion towards a certain issue<br>
          c) The objectives were attained by the end of the program
      </p>
      <script>
        
        var ctx = document.getElementById('myChartQ6').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              
              labels: [],
              datasets: [{ 
                  data: [<?=$q6_r3_data?>],
                  label: "3(E)",
                  borderColor: "#B0D8A4",
                  backgroundColor: "#B0D8A4",
                  borderWidth:2
                }, { 
                  data: [<?=$q6_r2_data?>],
                  label: "2(M)",
                  borderColor: "#FEE191",
                  backgroundColor: "#FEE191",
                  borderWidth:2
                }, { 
                  data: [<?=$q6_r1_data?>],
                  label: "1(S)",
                  borderColor: "#FD8060",
                  backgroundColor:"#FD8060",
                  borderWidth:2
                }, { 
                  data: [<?=$q6_r0_data?>],
                  label: "0(X)",
                  borderColor: "#E84258",
                  backgroundColor:"#E84258",
                  borderWidth:2
                }, 
              ]
            },
          });
      </script>

    </div><!-- end Q6 -->
  </div><!-- end row div -->
  
  <div class="row" style="margin-bottom: 50px;">
      
    <div class="p-4 pt-5 card" style="width: 49.5%; margin-right: .5%; margin-bottom: .5%;" >
      <div>
        <canvas id="myChartQ7" style="width:100%; max-height: 500px;" ></canvas>
      </div> 
      <div class="card mt-2">
        <div class="row text-center my-3">
          <h5 class="col-3">3(E): <?=$q7_r3_data?></h5>
          <h5 class="col-3">2(M): <?=$q7_r2_data?></h5>
          <h5 class="col-3">1(S): <?=$q7_r1_data?></h5>
          <h5 class="col-3">0(X): <?=$q7_r0_data?></h5>
        </div>
       
        <div class="row text-center  mb-3 text-dark font-weight-bolder">
          <span class="col-4"></span>
          <h3 class="col-4">Tally Score: <?=$mean7?></h4>
          <span class="col-4"></span>
        </div>
      </div>
      <p style="font-size: 12px; text-align: left;"> 
        <span class="font-weight-bold"> Q7. The facilitators were: </span><br><br>
          a) Accomodating<br>
          b) Well-prepared<br>
          c) Fair in treating participants<br>
          d) Punctual<br>
          e) Courteous  <br>
      </p>
      <script>
        
        var ctx = document.getElementById('myChartQ7').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              
              labels: [],
              datasets: [{ 
                  data: [<?=$q7_r3_data?>],
                  label: "3(E)",
                  borderColor: "#B0D8A4",
                  backgroundColor: "#B0D8A4",
                  borderWidth:2
                }, { 
                  data: [<?=$q7_r2_data?>],
                  label: "2(M)",
                  borderColor: "#FEE191",
                  backgroundColor: "#FEE191",
                  borderWidth:2
                }, { 
                  data: [<?=$q7_r1_data?>],
                  label: "1(S)",
                  borderColor: "#FD8060",
                  backgroundColor:"#FD8060",
                  borderWidth:2
                }, { 
                  data: [<?=$q7_r0_data?>],
                  label: "0(X)",
                  borderColor: "#E84258",
                  backgroundColor:"#E84258",
                  borderWidth:2
                }, 
              ]
            },
          });
      </script>

    </div><!-- end Q7 -->

    <div class="p-4 pt-5 card" style="width: 49.5%; margin-left: .5%; margin-bottom: .5%;">
      <div>
        <canvas id="myChartQ8" style="width:100%; max-height: 500px;" ></canvas>
      </div> 
      <div class="card mt-2">
        <div class="row text-center my-3">
          <h5 class="col-3">3(E): <?=$q8_r3_data?></h5>
          <h5 class="col-3">2(M): <?=$q8_r2_data?></h5>
          <h5 class="col-3">1(S): <?=$q8_r1_data?></h5>
          <h5 class="col-3">0(X): <?=$q8_r0_data?></h5>
        </div>
       
        <div class="row text-center  mb-3 text-dark font-weight-bolder">
          <span class="col-4"></span>
          <h3 class="col-4">Tally Score: <?=$mean8?></h4>
          <span class="col-4"></span>
        </div>
      </div>
      <p style="font-size: 12px; text-align: left;"> 
        <span class="font-weight-bold"> Q8. The participants were: </span><br><br>
          a) Punctual<br>
          b) Courteous<br>
          c) Participative<br>
          d) Obedient<br>
      </p>
      <script>
        
        var ctx = document.getElementById('myChartQ8').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              
              labels: [],
              datasets: [{ 
                  data: [<?=$q8_r3_data?>],
                  label: "3(E)",
                  borderColor: "#B0D8A4",
                  backgroundColor: "#B0D8A4",
                  borderWidth:2
                }, { 
                  data: [<?=$q8_r2_data?>],
                  label: "2(M)",
                  borderColor: "#FEE191",
                  backgroundColor: "#FEE191",
                  borderWidth:2
                }, { 
                  data: [<?=$q8_r1_data?>],
                  label: "1(S)",
                  borderColor: "#FD8060",
                  backgroundColor:"#FD8060",
                  borderWidth:2
                }, { 
                  data: [<?=$q8_r0_data?>],
                  label: "0(X)",
                  borderColor: "#E84258",
                  backgroundColor:"#E84258",
                  borderWidth:2
                }, 
              ]
            },
          });
      </script>

    </div><!-- end Q8 -->
  </div><!-- end row div -->  


</div><!-- end container  -->
  


  
