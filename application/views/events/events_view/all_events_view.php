<div class="card shadow w-100">
<div class="card-body">
<div class="mt-4 ml-3">
        
        <h3>Events</h3>

        <ul class="nav nav-tabs">

            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="<?=base_url()?>events/approved_events_view">Approved</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=base_url()?>events/pending_events_view">Pending</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=base_url()?>events/archived_events_view">Archived</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=base_url()?>events/all_events_view">All</a>
            </li>

        </ul>

        <div class="row mt-4">

        <?php
            $table_name="tbl_events";
            $column3="event_id";


            $events_data=get_desc($table_name, $column3);
            // here
            foreach ($events_data as $key => $row)
            {
                $event_id=$row['event_id'];
                $org_id=$row['org_id'];
                $event_name=$row['event_name'];
                $start_date=$row['start_date'];
                $end_date=$row['end_date'];
                $venue=$row['venue'];
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
        ?>

    </div>
</div>
</div>
</div>