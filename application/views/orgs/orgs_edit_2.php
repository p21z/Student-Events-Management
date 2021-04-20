<?php
$table_name="tbl_orgs";
$order_id="org_id";
$org_id_array=get_latest_0($table_name, $order_id);

foreach ($org_id_array as $key => $row)
{
    $org_id=$row['org_id'];
}
?>

<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            ADD NEW ORGANIZATION
        </div>

        <form method="post" id="sectionForm" action="<?=base_url()?>organizations/organizations_edit_2">
            
            <div class="" style="">

                <input type="text" name="org_id" class="form-control form-control-user add-input" autocomplete=off placeholder="Organization Name" value="<?=$org_id?>" hidden>
                
                <ul class="list-group add-input" style="text-align: left;">
                <li class="list-group-item bg-light">
                        <span style="margin-left:0%"><h5>Included programs for this course:</h5></span>
                    </li>
                <?php

                    $table_name="tbl_programs";

                    $user_data=get($table_name);
                    $counter=0;
                    foreach ($user_data as $key => $row) {
                        $prog_id=$row['prog_id'];
                        $prog_name=$row['prog_name'];
                        $prog_abbrv=$row['prog_abbrv'];
                        $counter++

                ?>
                    <li class="list-group-item">
                        <input name="check<?=$counter?>" class="form-check-input me-1"  style="margin-left:0%" type="checkbox" value="<?=$prog_id?>" aria-label="...">
                        <span style="margin-left:3%"><?=$prog_name?></span>
                    </li>

                <?php   }
                ?>

                </ul>


                <!-- <div class="input-group mb-3" style="width:40%; margin-left:3%; margin-top:3%;">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Organization Logo</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="org_logo" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div> -->

            </div>

            <br>
            <br>

            <!-- BUTTONS -->
            <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    NEXT
                </span>
            </button>
            &nbsp;&nbsp;
            <a href="<?=base_url()?>organizations/organizations_edit" class="btn btn-dark btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-undo"></i>
                </span>
                <span class="text">
                    BACK
                </span>
            </a>
            &nbsp;&nbsp;
            <a href="<?=base_url()?>organizations" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-ban"></i>
                </span>
                <span class="text">
                    CANCEL
                </span>
            </a>

        
        <form>

    </div>

</div>
