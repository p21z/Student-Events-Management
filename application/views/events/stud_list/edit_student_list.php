<?php

$table_name="tbl_stud_list";
$column="stud_list_id";
$value=$url_id_3;

$events_data=get_where_custom($table_name, $column,  $value);

foreach ($events_data as $key => $row)
{
    $stud_list_id=$row['stud_list_id'];
    $stud_name=$row['stud_name'];
    $year=$row['year'];
    $program=$row['program'];
    $section=$row['section'];
}

?>

<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            <span class="ml-5">STUDENT LIST</span>
        </div>

        <form method="post" action="<?=base_url()?>events/edit_student_list/<?=$url_id?>/<?=$url_id_2?>">
            
            <div class="" style="">

            <input type="text" name="url_id" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 1- org id" value="<?=$url_id?>" required hidden>

            <input type="text" name="url_id_2" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 2-event id " value="<?=$url_id_2?>" required hidden>

            <input type="text" name="url_id_3" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 3-event id " value="<?=$url_id_3?>" required hidden>

            <input type="text" name="stud_name" class="form-control form-control-user add-input" autocomplete=off placeholder="Name" value="<?=$stud_name?>" required>

            <input type="number" name="year" class="form-control form-control-user add-input" autocomplete=off placeholder="Year" value="<?=$year?>" required>

            <select type="text" name="program" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">Program</option>
                <option value="BSIT">BSIT</option>
                <option value="BSCpE">BSCpE</option>
                <option value="BSCE">BSCE</option>
                <option value="BSEnSE">BSEnSE</option>
                <option value="BLIS">BLIS</option>
            </select>
            
            <input type="text" name="section" class="form-control form-control-user add-input" autocomplete=off placeholder="Section" value="<?=$section?>">
            
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

