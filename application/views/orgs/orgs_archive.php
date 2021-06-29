<?php
$table_name = "tbl_orgs";
$column = "org_id";

$get_orgData = get_where_custom($table_name, $column, $url_id);

//fetch result and pass it  to an array
    foreach ($get_orgData as $key => $row) {
        
        $org_id=$row['org_id'];
        $org_name=$row['org_name'];
        $org_description=$row['org_description'];
        $org_category=$row['org_category'];
        
    }
    
?>

<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            ORGANIZATION STATUS
        </div>

        <form method="post" action="<?=base_url()?>organizations/organizations_archive">
            
            <div class="" style="">

                <input type="text" name="url_id" value="<?=$url_id?>" hidden>

                <select type="text" name="Archive" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">Organization Status</option>
                <option value=0>Active</option>
                <option value=1>Inactive</option>
                </select>

                <!-- <div class="input-group mb-3" style="width:40%; margin-left:3%; margin-top:3%;">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Organization Logo</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="org_logo" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div> -->

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
            <a href="<?=base_url()?>organizations" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
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
