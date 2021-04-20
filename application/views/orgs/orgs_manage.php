Hello<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"></h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Organizations</h5>
        </div>
        <div class="card-body">

            <a href="<?=base_url()?>organizations/organizations_add" class="btn btn-secondary btn-icon-split add-item" style="margin-top:-1px">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    ADD ORGANIZATION
                </span>
            </a>

            <hr>

            

                <?php
                $table_name="tbl_orgs";

                $orgs_data=get($table_name);

                foreach ($orgs_data as $key => $row) {
                    $org_id=$row['org_id'];
                    $org_name=$row['org_name'];
                    $org_category=$row['org_category'];
                    $org_description=$row['org_description'];
                ?>
<!--  -->
                    <div class="table-responsive mb-4 col-9">
                        <div class="card">
                            <div class="card-header py-3 bg-white">
                                <table class="text-black"" width="100%" cellspacing="0">
                                    <tr>
                                        <td>
                                            <h5 class="m-0 font-weight-bold text-black"><?=$org_name?></h5>
                                        </td>
                                        <td style="float: right">
                                            <a href="<?=base_url()?>organizations/organizations_edit/<?=$org_id?>" class="btn btn-warning btn-circle btn-sm">
                                                <i class="far fa-edit"></i>
                                            </a>

                                            &nbsp;&nbsp;&nbsp;

                                            <a href="<?=base_url()?>organizations/organizations_delete/<?=$org_id?>" class="btn btn-danger btn-circle btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        
                            <div class="card-body bg-light pb-4">
                                <div class="table-responsive">
                                    <table class="text-black"" id="dataTable" width="100%" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td><h5>Category: <b><?=$org_category?></b></h5></td>
                                                <td><h5>Category: <b>SITE</b></h5></td>
                                            </tr>
                                            <tr>
                                                <td colspan=2>
                                                    <h5 style="margin-top: 10px;">Description: </h5>
                                                    <?=$org_description?>
                                                </td>
                                            </tr>
                                            <?php
                                            if ($org_category==="Program-based")
                                            {
                                            ?>
                                                <tr>
                                                <td colspan=2>
                                                    <h5 style="margin-top: 10px;">Included: </h5>
                                                    <?php

                                                    $table_name="tbl_inclusion";
                                                    $column="org_id";

                                                    $inc_data=get_where_custom($table_name, $column, $org_id);

                                                    foreach ($inc_data as $key => $row) {
                                                        $inc_id=$row['inc_id'];
                                                        $prog_id=$row['prog_id'];

                                                        $table_name="tbl_programs";
                                                        $column="prog_id";

                                                        $prog_data=get_where_custom($table_name, $column, $prog_id);

                                                        foreach ($prog_data as $key => $row) {
                                                            $prog_id=$row['prog_id'];
                                                            $prog_name=$row['prog_name'];
                                                            $prog_abbrv=$row['prog_abbrv'];                                                        

                                                    ?>
                                                        <button type="button" class="btn btn-secondary btn-sm"><?=$prog_abbrv?></button>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
<!--  -->
    <?php   } 
?>

                
        </div>
    </div>