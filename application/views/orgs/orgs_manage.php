<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"></h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <h5 class="m-0 font-weight-bold text-primary py-3">Organizations</h5>

            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="<?=base_url()?>organizations">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="true" href="<?=base_url()?>organizations/inactive">Inactive</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="true" href="<?=base_url()?>organizations/all">All</a>
                </li>
            </ul>
        </div>

        <div class="card-body">

            <div class="top-card mb-4 mt-2">

                <form method=post action="<?=base_url()?>organizations" autocomplete="off"
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search w-25">

                    <div class="input-group">
                        <input type="text" name="search" class="form-control bg-light border-0 small pb-2" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2" >

                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit" name="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                        
                    </div>

                </form>

                <a href="<?=base_url()?>organizations/organizations_add" class="btn btn-secondary btn-icon-split add-item" style="margin-top:-1px">
                    <span class="icon text-white-50">
                        <i class="fas fa-user-plus"></i>
                    </span>
                    <span class="text">
                        ADD ORGANIZATION
                    </span>
                </a>

            </div>

            <hr>

            

                <?php
                $table_name="tbl_orgs";

                $orgs_data=get_where_not_2_custom($table_name, 'org_category', 'dean', 'Archive', 1);

                foreach ($orgs_data as $key => $row) {
                    $org_id=$row['org_id'];
                    $org_name=$row['org_name'];
                    $org_abbr=$row['org_abbr'];
                    $org_category=$row['org_category'];
                    $org_description=$row['org_description'];
                    $org_image=$row['org_image'];
                    $cover_image=$row['cover_image'];
                    $archive=$row['Archive'];
                ?>
<!--  -->
                    <div class="table-responsive mb-4 col-12">
                        <div class="card">
                        <?php
                            if ($cover_image==="")
                            {
                            ?>
                                <img src="<?=base_url()?>assets/img/cover_img.png" class="card-img-top object-fit-cover-1" alt="...">
                            <?php
                            } else
                            {
                            ?>
                            <img src="<?=base_url()?>assets/img/<?=$cover_image?>" class="card-img-top object-fit-cover-1<?php if($archive==="1"){?> cover-inactive<?php }?>" alt="...">
                            <?php
                            }
                            ?>
                            
                            <div class="col-2">
                            <?php
                            if ($org_image==="")
                            {
                            ?>
                            <img src="<?=base_url()?>assets/img/org_img.png" class="card-img-top logo-pic" alt="...">
                            <?php
                            } else
                            {
                            ?>
                            <img src="<?=base_url()?>assets/img/<?=$org_image?>" class="card-img-top logo-pic" alt="...">
                            <?php
                            }
                            ?>
                                
                            </div>
                            <?php if($archive==="1")
                            {?>
                            <div class="card-header py-3 bg-dark">
                            <?php }else
                            {?>
                            <div class="card-header py-3 bg-white">
                            <?php }
                            ?>
                                <table class="text-black" width="100%" cellspacing="0">
                                    <tr>
                                        <td>
                                        <?php if($archive==="1")
                                        {?>
                                        <h5 class="m-0 font-weight-bold text-white">
                                        <?php }else
                                        {?>
                                        <h5 class="m-0 font-weight-bold text-black">
                                        <?php }
                                        ?>
                                                <?=$org_name?></h5>
                                        </td>
                                        <td style="float: right">
                                            <a href="<?=base_url()?>organizations/organization_change_picture/<?=$org_id?>" class="btn btn-info btn-circle btn-sm">
                                                <i class="far fa-image"></i>
                                            </a>

                                            &nbsp;

                                            <a href="<?=base_url()?>organizations/organizations_edit/<?=$org_id?>" class="btn btn-warning btn-circle btn-sm">
                                                <i class="far fa-edit"></i>
                                            </a>

                                            &nbsp;

                                            <a href="<?=base_url()?>organizations/organizations_archive/<?=$org_id?>" class="btn btn-danger btn-circle btn-sm">
                                                <i class="fas fa-archive"></i>
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
                                                <td><h5>Abbreviation/Acronym: <b><?=$org_abbr?></b></h5></td>
                                                <td><h5>Type: <b><?=$org_category?></b></h5></td>
                                                <td><h5>Category: <b>
                                                <?php if($archive==="1")
                                                {?>
                                                Inactive
                                                <?php }else
                                                {?>
                                                Active
                                                <?php }
                                                ?>
                                                </b></h5></td>
                                            </tr>
                                            <tr>
                                                <td colspan=3>
                                                    <h5 style="margin-top: 10px;">Description: </h5>
                                                    <?=$org_description?>
                                                </td>
                                            </tr>
                                            <?php
                                            if ($org_category==="Program-based")
                                            {
                                            ?>
                                                <tr>
                                                <td colspan=3>
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