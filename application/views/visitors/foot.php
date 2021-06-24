<?php
    $table_name="tbl_events";
    $column="event_id";
    $value=$url_id;

    $events_data=get_where_custom($table_name, $column, $value);

    foreach ($events_data as $key => $row)
    {
        $event_id=$row['event_id'];
        $org_id=$row['org_id'];
        $event_name=$row['event_name'];
        $start_date=$row['start_date'];
        $start_time=$row['start_time'];
        $end_date=$row['end_date'];
        $end_time=$row['end_time'];
        $venue=$row['venue'];
        $event_description=$row['event_description'];
        $statusxxx=$row['statusxx'];
        $remarks=$row['remarks'];
        $in_cmp_id=$row['in_cmp_id'];
        $rsrv_cfr_id=$row['rsrv_cfr_id'];
        $csh_req_id=$row['csh_req_id'];
        $cat_req_id=$row['cat_req_id'];
        $trip_tkt_id=$row['trip_tkt_id'];
        $trip_prmt_id=$row['trip_prmt_id'];
        
    }

?>
</div>

<div class="card-body">

    <?php
    if($statusxxx!=="Pending")
    {
    ?>
        
        <a href="<?=base_url()?>attendance/all/<?=$event_id?>" class="card-link">Students</a>
        <a href="<?=base_url()?>events/event_details/<?=$event_id?>" class="card-link">Documents</a>
        <a href="#" class="card-link">Quorum</a>
    <?php
    }
    ?>
    <?php
    if($statusxxx==="Archived")
    {
    ?>
        <a href="<?=base_url()?>evaluation/<?=$event_id?>" class="card-link">Evaluation</a>
        <a href="<?=base_url()?>responses/<?=$event_id?>" class="card-link">Responses</a>
    <?php
    }
    ?>
    
</div>

</div>
</div>

</div>
