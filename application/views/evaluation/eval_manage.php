<?php

$user_data=get_where_proj_spec($this->session->userdata('idxx'));

foreach ($user_data as $key =>$row)
{
    $attendance_id=$row['attendance_id'];
    $event_id=$row['event_id'];

    // echo $attendance_id. " ".$event_id. "<br>";

    $event_data=get_where_double_and('tbl_events', 'event_id', $event_id, 'statusxx', 'Archived');

    foreach ($event_data as $key => $row)
    {
        $event_id=$row['event_id'];
        $org_id=$row['org_id'];
        $event_name=$row['event_name'];
        $start_date=$row['start_date'];
        $end_date=$row['end_date'];
        $venue=$row['venue'];
        $event_description=$row['event_description'];
        $event_image=$row['event_image'];
        $statusxx=$row['statusxx'];

?>

        <div class="card" class="w-100 mb-4 mt-4" style="margin-bottom: 30px;">
            <?php
            if ($event_image!=="")
            {?>
                <img src="<?=base_url()?>assets/img/<?=$event_image?>" class="card-img-top home-event-pic" alt="...">
            <?php } else
            { ?>
                <img src="<?=base_url()?>assets/img/org_img.png" class="card-img-top home-event-pic" alt="...">
            <?php
            }
            ?>
            <div class="card-body">
                <h4 class="card-title"><?=$event_name?></h4>

                <?php
                $table_name="tbl_orgs";
                $column="org_id";


                $org_data=get_where_custom($table_name, $column, $org_id);
                
                foreach ($org_data as $key => $row)
                {
                    $org_id=$row['org_id'];
                    $org_name=$row['org_name'];
                }
                ?>
                    <h6><b><?=$org_name?></b></h6>
                <div class="ml-3">
                    <p class="card-text w-75"><?=$event_description?></p>

                    <?php

                        $eval_data=count_where_double_and('tbl_evaluation', 'event_id', $event_id, 'user_id', $this->session->userdata('idxx'));
                        if ($eval_data===0)
                        {
                    ?>
                            <a href="<?=base_url()?>evaluation/add_evaluation/<?=$event_id?>" class="btn btn-primary">Evaluate</a>
                    <?php
                        } else
                        {
                    ?>
                        <a href="<?=base_url()?>evaluation/view_evaluation/<?=$event_id?>/<?=$this->session->userdata('idxx')?>" class="btn btn-primary">View evaluation</a>
                    <?php
                        }
                    ?>

                    

                </div>
            </div>
        </div>
        
<?php
    }
}

// echo $user_data;

?>