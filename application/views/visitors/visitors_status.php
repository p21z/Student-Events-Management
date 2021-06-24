<?php
$table_name = "tbl_visitor";
$column = "visitor_id";

$get_userData = get_where_custom($table_name, $column, $url_id);

//fetch result and pass it  to an array
    foreach ($get_userData as $key => $row) {
        
        $event_id=$row['event_id'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $contact=$row['contact'];
        $email=$row['email'];
        $company=$row['company'];
        $statusxx=$row['statusxx'];
    
    }
    
?>

<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            EDIT USER
        </div>


        <form method="post" action="<?=base_url()?>visitors/visitors_status">
            
                <div class="" style="">
                
                <input type="text" name="url_id" class="form-control form-control-user add-input" autocomplete=off placeholder="url_id" value="<?=$url_id?>" required hidden>
                
                <input type="text" name="event_id" class="form-control form-control-user add-input" autocomplete=off placeholder="event_id" value="<?=$url_id_2?>" required hidden>

                <select type="text" name="statusxx" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">Status</option>
                <option value="Present">Present</option>
                <option value="Late">Late</option>
                <option value="Absent">Absent</option>
                </select>

            </div>

            <br>
            <br>

            <!-- BUTTONS -->
            <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:-1%; margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    EDIT VISITOR
                </span>
            </button>
            
            
            <a href="<?=base_url()?>visitors/all/<?=$url_id_2?>" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
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
