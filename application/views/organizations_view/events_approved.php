<?php
date_default_timezone_set('Asia/Singapore');
?>

<div class="row mt-4">

<?php
    $table_name="tbl_events";
    $column1="statusxx";
    $value1="Approved";
    $column2="org_id";
    $value2=$url_id;


    $events_data=get_where_double_and($table_name, $column1, $value1, $column2, $value2);

    foreach ($events_data as $key => $row)
    {
        $event_id=$row['event_id'];
        $org_id=$row['org_id'];
        $event_name=$row['event_name'];
        $start_date=$row['start_date'];
        $end_date=$row['end_date'];
        $venue=$row['venue'];
        $statusxx=$row['statusxx'];

        // UPDATE STATUSXX WHEN END DATE PASSES
        $current_date=date('Y-m-d');
        // echo $current_date;

        if ($current_date>$end_date)
        {
            $user_editedValues = array(
                'statusxx' => "Archived"
            );
            echo update_from($user_editedValues, $event_id, $table_name, "event_id");
            ?>
            <div class="card ml-3 mt-3 border-bottom-danger mt-3" style="width: 28%">
                <h5 class="card-header text-danger"><?=$event_name?></h5>
                <div class="card-body text-danger">Event has been moved to archive</div>
            </div>
        <?php
        } else 
        {
?>
          <div class="card ml-3 mt-3
                <?php
                  if ($statusxx==="Approved")
                  {
                ?>
                        border-bottom-primary
                <?php
                  } elseif ($statusxx==="Pending")
                  {
                ?>
                        border-bottom-info
                <?php
                  } else
                  {
                ?>
                        border-bottom-secondary
                <?php
                  }
                  ?>" style="width: 28%">
            <h5 class="card-header"><?=$event_name?></h5>
            <div class="card-body">
                <div class="row">
                    <h6 class="card-title col-6 mt-3">
                        <b>Date: </b><br>
                        <?php
                            if ($start_date===$end_date)
                            {
                                echo $start_date;
                            } else
                            {
                                echo $start_date."-".$end_date;
                            }
                        ?></h6>

                    <h6 class="card-title col-6 mt-3">
                        <b>Venue: </b>
                            <br><?=$venue?></h6>
                </div>
            <a href="<?=base_url()?>events/event_details/<?=$event_id?>" class="btn mt-2 
                    <?php
                  if ($statusxx==="Approved")
                  {
                ?>
                        btn-primary
                <?php
                  } elseif ($statusxx==="Pending")
                  {
                ?>
                        btn-info
                <?php
                  } else
                  {
                ?>
                        btn-secondary
                <?php
                  }
                ?>">See details</a>
            </div>
        </div>
<?php
        }
    }
?>

</div>