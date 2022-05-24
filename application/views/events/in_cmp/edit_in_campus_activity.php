<?php

$table_name="tbl_in_cmp";
$column="in_cmp_id";
$value=$url_id_3;

$events_data=get_where_custom($table_name, $column,  $value);

foreach ($events_data as $key => $row)
{
    $organizer=$row['organizer'];
    $nature=$row['nature'];
    $objective_1=$row['objective_1'];
    $objective_2=$row['objective_2'];
    $objective_3=$row['objective_3'];
    $datexx=$row['datexx'];
    $timexx=$row['timexx'];
    $speaker=$row['speaker'];
    $venue=$row['venue'];
    $num_participants=$row['num_participants'];
    $program_budget=$row['program_budget'];

}

?>

<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            <span class="ml-5">IN/OUT CAMPUS ACTIVITY</span>
        </div>

        <form method="post" action="<?=base_url()?>events/edit_in_campus_activity/<?=$url_id?>/<?=$url_id_2?>">
            
            <div class="" style="">

            <input type="text" name="url_id" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 1- org id" value="<?=$url_id?>" required hidden>

            <input type="text" name="url_id_2" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 2-event id " value="<?=$url_id_2?>" required hidden>

            <input type="text" name="url_id_3" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 2-event id " value="<?=$url_id_3?>" required hidden>

            <input type="text" name="organizer" class="form-control form-control-user add-input" autocomplete=off placeholder="Organizer" value="<?=$organizer?>" required>

            <select type="text" name="nature" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">Nature</option>
                <option value="Seminar">Seminar</option>
                <option value="Workshop">Workshop</option>
                <option value="Training">Training</option>
                <option value="Competition">Competition</option>
            </select>

            <input type="text" name="datexx" class="form-control form-control-user add-input" autocomplete=off placeholder="Date" value="<?=$datexx?>" required
            onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required>

            <input type="text" name="timexx" class="form-control form-control-user add-input" autocomplete=off placeholder="Time" value="<?=$timexx?>" required
            onfocus="(this.type='time')" onblur="if(this.value==''){this.type='text'}" required>

            <input type="text" name="speaker" class="form-control form-control-user add-input" autocomplete=off placeholder="Speakers" value="<?=$speaker?>">

            <input type="text" name="venue" class="form-control form-control-user add-input" autocomplete=off placeholder="Venue" value="<?=$venue?>" required>

            <input type="number" name="num_participants" class="form-control form-control-user add-input" autocomplete=off placeholder="No. of Participants" value="<?=$num_participants?>" required>

            <!-- <input type="number" name="program_budget" class="form-control form-control-user add-input" autocomplete=off placeholder="Program Budget" value="<?=$program_budget?>"> -->

            <textarea name="objective_1" class="form-control form-control-user add-input" placeholder="Objective 1" id="floatingTextarea2" style="height: 100px"><?=$objective_1?></textarea>

            <textarea name="objective_2" class="form-control form-control-user add-input" placeholder="Objective 2" id="floatingTextarea2" style="height: 100px"><?=$objective_2?></textarea>

            <textarea name="objective_3" class="form-control form-control-user add-input" placeholder="Objective 3" id="floatingTextarea2" style="height: 100px"><?=$objective_3?></textarea>

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
