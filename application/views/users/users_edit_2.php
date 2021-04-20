<?php
$table_name = "tbl_users";
$column = "user_id";
$url_id = $this->session->userdata('url_id');
$get_userData = get_where_custom($table_name, $column, $url_id);

//fetch result and pass it  to an array
    foreach ($get_userData as $key => $row) {
        
        $user_id=$row['user_id'];
        $username=$row['username'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $password=$row['password'];
        $email=$row['email'];
        $contact_no=$row['contact_no'];
        $gender=$row['gender'];
        $user_type=$row['user_type'];
        $time_stamp=$row['time_stamp'];
        $year_level=$row['year_level'];
        $program=$row['program'];
        $section=$row['section'];
        $archive=$row['archive'];
        $statusxx=$row['statusxx'];
        $counterxx=$row['counterxx'];
    
    }

?>

<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            EDIT USER
        </div>

        <form method="post" action="<?=base_url()?>users/users_edit_2">
            
            <div class="" style="">

                <input type="number" name="year_level" class="form-control form-control-user add-input" autocomplete=off value="<?=$year_level?>" required>

                <select type="text" name="program" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">Program</option>
                <option value="BSIT">BSIT</option>
                <option value="BSCpE">BSCpE</option>
                <option value="BSCE">BSCE</option>
                <option value="BSEnSE">BSEnSE</option>
                </select>

                <input type="text" name="section" class="form-control form-control-user add-input" autocomplete=off value="<?=$section?>" required>

            </div>

            <br>
            <br>

            <!-- BUTTONS -->
            <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    EDIT USER
                </span>
            </button>
            &nbsp;&nbsp;
            <a href="<?=base_url()?>users/users_edit" class="btn btn-dark btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-undo"></i>
                </span>
                <span class="text">
                    BACK
                </span>
            </a>
            &nbsp;&nbsp;
            <a href="<?=base_url()?>users" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
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
