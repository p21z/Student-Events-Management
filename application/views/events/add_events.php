<?php

    $table_name="tbl_orgs";
    $column="org_id";

    $org_data=get_where_custom($table_name, $column, $url_id);

        foreach ($org_data as $key => $row) {
            $org_id=$row['org_id'];
            $org_name=$row['org_name'];
        }

?>

<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            ADD NEW EVENT
        </div>

            <div class="" style="">
            <form method="post" action="<?=base_url()?>events/add_events">

                <input type="text" name="org_id" class="form-control form-control-user add-input" autocomplete=off value="<?=$url_id?>" required hidden>
                <input type="text" name="org_name" class="form-control form-control-user add-input" autocomplete=off value="<?=$org_name?>" required readonly>

                <input type="text" name="event_name" class="form-control form-control-user add-input" autocomplete=off placeholder="Event name" required>

                <input type="text" name="start_date" class="form-control form-control-user add-input" autocomplete=off placeholder="Date Start"
                onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required>

                <input type="text" name="start_time" class="form-control form-control-user add-input" autocomplete=off placeholder="Time Start" required
                onfocus="(this.type='time')" onblur="if(this.value==''){this.type='text'}" required>

                <input type="text" name="end_date" class="form-control form-control-user add-input" autocomplete=off placeholder="Date End" required
                onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required>

                <input type="text" name="end_time" class="form-control form-control-user add-input" autocomplete=off placeholder="Time End" required
                onfocus="(this.type='time')" onblur="if(this.value==''){this.type='text'}" required>

                <input type="text" name="venue" class="form-control form-control-user add-input" autocomplete=off placeholder="Venue" required>

                <textarea name="event_description" class="form-control form-control-user add-input" placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea>

            <br>
            <br>

            <!-- BUTTONS -->
            <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    SUBMIT
                </span>
            </button>
            
            &nbsp;&nbsp;
            <a href="<?=base_url()?>organizations_view/approved_events/<?=$url_id?>" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-ban"></i>
                </span>
                <span class="text">
                    CANCEL
                </span>
            </a>

        
        </form>


    
        </div>
    </div>

</div>
