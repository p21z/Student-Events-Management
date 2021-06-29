<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Welcome!</h1>
    <p class="mb-4">SEMS is a consectetur adipiscing elit. Duis convallis fermentum fringilla. Pellentesque tristique nisi eget sodales congue. Sed congue molestie lorem, nec pretium libero sodales eget.</p>

    <!-- FETCH ALL EVENTS -->
    <?php
            $table_name="tbl_events";
            $column="statusxx";
            $value="Approved";
            $column2="event_id";


            $events_data=get_where_desc($table_name, $column, $value, $column2);
            // here
            foreach ($events_data as $key => $row)
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

                            <br>

                        </div>
                    </div>
                </div>
        <?php
            }
        ?>
                    