<?php

$table_name="tbl_cat_req";
$column="cat_req_id";
$value=$url_id_3;

$events_data=get_where_custom($table_name, $column,  $value);

foreach ($events_data as $key => $row)
{
    $event_id=$row['event_id'];
    $datexx=$row['datexx'];
    $time_needed=$row['time_needed'];
    $occasion=$row['occasion'];
    $num_guest=$row['num_guest'];
    $menu=$row['menu'];
    $venue=$row['venue'];
    $remarks=$row['remarks'];
}

?>

<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            <span class="ml-5">CATERING REQUISITION</span>
        </div>

        <form method="post" action="<?=base_url()?>events/edit_catering_requisition/<?=$url_id?>/<?=$url_id_2?>">
            
            <div class="" style="">

            <input type="text" name="url_id" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 1- org id" value="<?=$url_id?>" required hidden>

            <input type="text" name="url_id_2" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 2-event id " value="<?=$url_id_2?>" required hidden>

            <input type="text" name="url_id_3" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 2-event id " value="<?=$url_id_3?>" required hidden>

            <input type="text" name="datexx" class="form-control form-control-user add-input" autocomplete=off placeholder="Bus Fare" value="<?=$datexx?>"
            onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required>

            <input type="text" name="time_needed" class="form-control form-control-user add-input" autocomplete=off placeholder="Taxi Fare" value="<?=$time_needed?>"
            onfocus="(this.type='time')" onblur="if(this.value==''){this.type='text'}" required>

            <input type="text" name="occasion" class="form-control form-control-user add-input" autocomplete=off placeholder="Other fares" value="<?=$occasion?>">

            <input type="number" name="num_guest" class="form-control form-control-user add-input" autocomplete=off placeholder="Food allowance" value="<?=$num_guest?>">

            <select type="text" name="menu" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">Menu</option>
                <option value="Breakfast">Breakfast</option>
                <option value="Lunch">Lunch</option>
                <option value="Dinner">Dinner</option>
                <option value="Snacks">Snacks</option>
            </select>

            <input type="text" name="venue" class="form-control form-control-user add-input" autocomplete=off placeholder="Accomodation" value="<?=$venue?>">

            <textarea name="remarks" class="form-control form-control-user add-input" placeholder="Purpose" id="floatingTextarea2" style="height: 100px"><?=$remarks?></textarea>
            

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

