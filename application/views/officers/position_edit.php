<?php
$table_name = "tbl_officers";
$column = "off_id";


$get_offData = get_where_custom($table_name, $column, $url_id);

foreach ($get_offData as $key => $row) {
    $off_id=$row['off_id'];
    $user_id=$row['user_id'];
    $org_id=$row['org_id'];
    // $org_name=$row['org_name'];
    // $org_category=$row['org_category'];
}
echo $off_id. $org_id. $user_id;

$table_name = "tbl_users";
$column = "user_id";


$get_userData = get_where_custom($table_name, $column, $user_id);

//fetch result and pass it  to an array
    foreach ($get_userData as $key => $row) {
        
        $user_id=$row['user_id'];
        $username=$row['username'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];

    }

$table_name = "tbl_orgs";
$column = "org_id";
    
    
$get_orgData = get_where_custom($table_name, $column, $org_id);

//fetch result and pass it  to an array
    foreach ($get_orgData as $key => $row) {
        
        $org_id=$row['org_id'];
        $org_name=$row['org_name'];
        $org_category=$row['org_category'];
    }
    
?>

<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            EDIT POSITION
        </div>

        <form method="post" action="<?=base_url()?>officers/position_edit/<?=$off_id?>">
            
            <div class="" style="">
                    
                    <input type="text" name="user_id" value="<?=$user_id?>" hidden>
                    <input type="text" name="org_id" value="<?=$org_id?>" hidden>

                    <input type="text" name="firstname" class="form-control form-control-user add-input" autocomplete=off value="<?=$org_name?>" required readonly>

                    <input type="text" name="lastname" class="form-control form-control-user add-input" autocomplete=off value="<?=$firstname?> <?=$lastname?>" required readonly>

                <select type="text" name="off_type" class="form-control form-control-user add-input" autocomplete=off required>
                            <option value="">Position</option>
                    <?php
                        if ($org_category=="Paulinian Student Government")
                        {
                    ?>
                            <option value="Governor">Governor</option>
                            <option value="Vice-Governor">Vice-Governor</option>

                            <option value="Secretary">Secretary</option>
                            <option value="Treasurer">Treasurer</option>
                            <option value="Auditor">Auditor</option>

                            <option value="Press Relations Officer">Press Relations Officer</option>

                            <option value="Mayor">Mayor</option>
                            <option value="Councilor">Councilor</option>

                            
                            
                    <?php
                        } else
                        {
                    ?>
                            <option value="Chair">Chair</option>
                            <option value="Co-chair">Co-chair</option>
                    <?php
                        }
                    ?>
                </select>

            <!-- BUTTONS -->
            <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    ADD POSITION
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

        
        </form>
        </div>
    </div>

</div>
