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
        $current_date= $currentDateTime = date('Y-m-d');
        // echo $current_date;

        if ($current_date>$end_date)
        {
            $user_editedValues = array(
                'statusxx' => "Archived"
            );
            echo update_from($user_editedValues, $event_id, $table_name, "event_id");
            echo $event_id;
        } else 
        {
?>
        <div class="card ml-3 mt-3 w-25 ">
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
            <a href="<?=base_url()?>events/event_details/<?=$event_id?>" class="btn btn-primary mt-2">See details</a>
            </div>
        </div>
<?php
        }
    }
?>

</div>