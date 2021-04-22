<?php

$table_name = "tbl_orgs";
$column = "org_id";
$value = $this->session->userdata("org_id");

$get_orgData = get_where_custom($table_name, $column, $value);

foreach ($get_orgData as $key => $row) {
    $org_id=$row['org_id'];
    $org_name=$row['org_name'];
    $org_category=$row['org_category'];
}
echo $org_name;

$table_name = "tbl_users";
$column = "user_id";
$value = $this->session->userdata("user_id");

$get_userData = get_where_custom($table_name, $column, $value);

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
            ADD NEW POSITION
        </div>

        <form method="post" action="<?=base_url()?>users/users_edit">
            
                <div class="" style="">
                    
                    <!-- <input type="text" name="url_id" value="<?=$url_id?>" hidden> -->

                    <input type="text" name="firstname" class="form-control form-control-user add-input" autocomplete=off value="<?=$org_name?>" required>

                    <input type="text" name="lastname" class="form-control form-control-user add-input" autocomplete=off value="<?=$firstname?> <?=$lastname?>" required>

                <select type="text" name="gender" class="form-control form-control-user add-input" autocomplete=off required>
                    <?php
                        if ($org_category=="Paulinian Student Government")
                        {
                    ?>
                            <option value="Female">Governor</option>
                            <option value="Male">Vice-Governor</option>

                            <option value="Male">Secretary</option>
                            <option value="Male">Treasurer</option>
                            <option value="Male">Auditor</option>

                            <option value="Male">Press Relations Officer</option>

                            <option value="Male">Mayor</option>
                            <option value="Male">Councilor</option>

                            
                            
                    <?php
                        } else
                        {
                    ?>
                            <option value="Female">Chair</option>
                            <option value="Male">Co-chair</option>
                    <?php
                        }
                    ?>

                </select>

                <select type="text" name="user_type" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">User type</option>
                <option value="Dean">Dean</option>
                <option value="Adviser">Adviser</option>
                <option value="Officer">Officer</option>
                </select>

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
            <a href="<?=base_url()?>officers/officer_details/<?=$user_id?>" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
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
