<?php
    $orgs_count=all_event_search_count($this->session->userdata('search'), $url_id);
                                
    if ($orgs_count==0)
    {
        echo '<br><span class="ml-3"><i>No results for<b> "'.$this->session->userdata('search').'" </b></i></span>';
    } else
    {
        echo '<br><span class="ml-2"><i>Results for<b> "'.$this->session->userdata('search').'"</b></i></span>';
    }
?>

<div class="row mt-4">

<?php
    $table_name="tbl_events";
    $column1="statusxx";
    $value1="Pending";
    $column2="org_id";
    $value2=$url_id;

    $events_data=all_org_event_search($this->session->userdata('search'), $url_id);

    foreach ($events_data as $key => $row)
    {
        $event_id=$row['event_id'];
        $org_id=$row['org_id'];
        $event_name=$row['event_name'];
        $start_date=$row['start_date'];
        $end_date=$row['end_date'];
        $venue=$row['venue'];
        $statusxx=$row['statusxx'];
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
?>

</div>