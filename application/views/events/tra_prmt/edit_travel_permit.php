<?php

$table_name="tbl_tra_prmt";
$column="tra_prmt_id";
$value=$url_id_3;

$events_data=get_where_custom($table_name, $column,  $value);

foreach ($events_data as $key => $row)
{
    $tra_prmt_id=$row['tra_prmt_id'];
    $name=$row['name'];
    $place=$row['place'];
    $venue=$row['venue'];
    $datexx=$row['datexx'];
    $date_return=$row['date_return'];
    $relation1=$row['relation1'];
    $relation2=$row['relation2'];
    $others=$row['others'];
}

?>

<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            <span class="ml-5">CASH/CHECK REQUISITION</span>
        </div>

        <form method="post" action="<?=base_url()?>events/edit_travel_permit/<?=$url_id?>/<?=$url_id_2?>">
            
            <div class="" style="">

            <input type="text" name="url_id" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 1- org id" value="<?=$url_id?>" required hidden>

            <input type="text" name="url_id_2" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 2-event id " value="<?=$url_id_2?>" required hidden>

            <input type="text" name="url_id_3" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 3-event id " value="<?=$url_id_3?>" required hidden>

            <input type="text" name="name" class="form-control form-control-user add-input" autocomplete=off placeholder="Name" value="<?=$name?>" required>

            <input type="text" name="place" class="form-control form-control-user add-input" autocomplete=off placeholder="Place" value="<?=$place?>" required>
            
            <input type="text" name="venue" class="form-control form-control-user add-input" autocomplete=off placeholder="Venue" value="<?=$venue?>" required>

            <input type="text" name="datexx" class="form-control form-control-user add-input" autocomplete=off placeholder="Date" value="<?=$datexx?>" required
            onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}">

            <input type="text" name="date_return" class="form-control form-control-user add-input" autocomplete=off placeholder="Date of return" value="<?=$date_return?>" required
            onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}">

            <select type="text" name="relation1" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">Relation to the seminar/organization</option>
                <option value="Representative of SPUP">Representative of SPUP</option>
                <option value="Personal/Professional Update">Personal/Professional Update</option>
            </select>

            <select type="text" name="relation2" class="form-control form-control-user add-input" autocomplete=off>
                <option value="">Detailed relation to the seminar/organization</option>
                <option value="Member of the Organization">Member of the Organization</option>
                <option value="Officer of the Organization">Officer of the Organization</option>
            </select>

            <input type="text" name="others" class="form-control form-control-user add-input" autocomplete=off placeholder="Other relation to the seminar/organization" value="<?=$others?>">
            
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

