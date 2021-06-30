<?php
// ORGANIZATION DETAILS
$table_name="tbl_orgs";
$column="org_id";

$org_data=get_where_custom($table_name, $column, $url_id);

    foreach ($org_data as $key => $row) {
        $org_id=$row['org_id'];
        $org_name=$row['org_name'];
    }

// EVENT DETAILS
$table_name="tbl_events";
$column="event_id";
$value=$url_id_2;

$events_data=get_where_custom($table_name, $column,  $value);

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
}

?>

<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            <span class="ml-5">EDIT EVENT</span>
        </div>

        <form method="post" action="<?=base_url()?>events/edit_events/<?=$url_id?>/<?=$url_id_2?>">
            
            <div class="" style="">

            <input type="text" name="url_id_2" class="form-control form-control-user add-input" autocomplete=off value="<?=$url_id_2?>" required hidden>
            <input type="text" name="org_id" class="form-control form-control-user add-input" autocomplete=off value="<?=$url_id?>" required hidden>
            <input type="text" name="org_name" class="form-control form-control-user add-input" autocomplete=off value="<?=$org_name?>" required readonly>

            <input type="text" name="event_name" class="form-control form-control-user add-input" autocomplete=off placeholder="Event name" value="<?=$event_name?>" required>

            <input type="text" name="start_date" class="form-control form-control-user add-input" autocomplete=off placeholder="Date Start" value="<?=$start_date?>"
            onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required>

            <input type="text" name="start_time" class="form-control form-control-user add-input" autocomplete=off placeholder="Time Start" value="<?=$start_time?>" required
            onfocus="(this.type='time')" onblur="if(this.value==''){this.type='text'}" required>

            <input type="text" name="end_date" class="form-control form-control-user add-input" autocomplete=off placeholder="Date End" value="<?=$end_date?>" required
            onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required>

            <input type="text" name="end_time" class="form-control form-control-user add-input" autocomplete=off placeholder="Time End" value="<?=$end_time?>" required
            onfocus="(this.type='time')" onblur="if(this.value==''){this.type='text'}" required>

            <input type="text" name="venue" class="form-control form-control-user add-input" autocomplete=off placeholder="Venue" value="<?=$venue?>" required>

            <textarea name="event_description" class="form-control form-control-user add-input" placeholder="Description" id="floatingTextarea2" style="height: 100px"><?=$event_description?></textarea>

            
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
            <a href="<?=base_url()?>events/event_details/<?=$url_id_2?>" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
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

