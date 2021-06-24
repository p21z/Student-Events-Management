<div class="row">

    <div class="card w-100 mb-5 ml-4">
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
    <img src="https://via.placeholder.com/1080x300" class="card-img-top" alt="...">
    <div class="card-body">
        <div class="row">

            <div class="col-11 ml-3">

                <h4 class="card-title"><b><?=$event_name?></b></h4>
                <p class="card-text"><?=$event_description?></p>
                <div class="row">

                    <div class="class-text col-4"><b>Date:</b>
                        <?php
                            if ($start_date===$end_date)
                            {
                                echo $start_date." (".$start_time."-".$end_time.")";
                            } else
                            {
                                echo $start_date." to ".$end_date." (".date('h:i a', strtotime($start_time))."-".date('h:i a', strtotime($end_time)).")";
                            }
                        ?>

                        <br>
                        
                        <div class="mt-3">
                            <b>Venue:</b> <?=$venue?>
                        </div>

                        <div class="mt-3">
                            <a href="<?=base_url()?>visitors/visitors_add/<?=$url_id?>"><button type="button" class="btn btn-secondary">&nbsp;Add Visitors&nbsp;</button></a>
                            <a href="<?=base_url()?>visitors/add_attendee/<?=$url_id?>"><button type="button" class="btn btn-primary">Add Attendee</button></a>
                        </div>

                    </div>
                    <div class="class-text col-5">

                    <div class="mt-4 ml-3">
        
                    

                    </div>

                </div>

            </div>

        </div>
        
        
    </div>

<ul class="nav nav-tabs mt-5">

    <li class="nav-item">
        <a class="nav-link<?php if($this->session->userdata('nav_active')==='All'){?> active<?php } ?>" aria-current="page" href="<?=base_url()?>visitors/all/<?=$url_id?>">All</a>
    </li>
    <li class="nav-item">
    <a class="nav-link <?php if($this->session->userdata('nav_active')==='Present'){?> active<?php } ?>" aria-current="page" href="<?=base_url()?>visitors/present/<?=$url_id?>">Present</a>
    </li>
    <li class="nav-item">
    <a class="nav-link <?php if($this->session->userdata('nav_active')==='Late'){?> active<?php } ?>" aria-current="page" href="<?=base_url()?>visitors/late/<?=$url_id?>">Late</a>
    </li>
    <li class="nav-item">
    <a class="nav-link <?php if($this->session->userdata('nav_active')==='Absent'){?> active<?php } ?>" aria-current="page" href="<?=base_url()?>visitors/absent/<?=$url_id?>">Absent</a>
    </li>

</ul>