<?php
      $count_visitors=count_where('tbl_evaluation', 'event_id', $url_id);
      if ($count_visitors===0){
        echo "<h1 class='text-center mt-5'>N/A<br><br><br><br><br></h1>". $count_visitors;
      } else
      {
    ?>