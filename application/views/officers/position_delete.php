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
?>

<div align=center>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow w-50">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DELETE POSITION</h6>
            </div>
            <div class="card-body">
                Are you sure you want to delete the record?
                <br><br>
                <form method="post" action="<?=base_url()?>officers/position_delete/<?=$off_id?>">
                    <!-- <input type="text" name="off_id" value="<?=$off_id?>" hidden> -->
                    <input type="text" name="user_id" value="<?=$user_id?>" hidden>
                    <input type="submit" value="YES" class="btn btn-success btn-circle btn-md">
                    &nbsp;&nbsp;&nbsp;
                    <a href="<?=base_url()?>officers/officer_details/<?=$user_id?>" class="btn btn-danger btn-circle btn-md">
                        NO
                    </a>
                </form>
            </div>

        </div>
    </div>
</div>
