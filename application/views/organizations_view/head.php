
<div class="card"  style="min-height: 960px;">
    <img src="https://via.placeholder.com/1080x250" class="card-img-top " alt="...">
    <div class="card-body">

        <div class="row">
            <div class="col-2">
                <img src="https://via.placeholder.com/250x250/ff0000/000000" class="card-img-top dp-pic" alt="...">
            </div>
            <div class="col-8 ml-4">
            <?php
                $table_name="tbl_orgs";
                $column="org_id";
                

                $user_data=get_where_custom($table_name, $column, $url_id);

                foreach ($user_data as $key => $row) {
                    $org_id=$row['org_id'];
                    $org_name=$row['org_name'];
                    $org_description=$row['org_description'];

                }
            ?>
                <h2 class="card-title"><?=$org_name?></h2>
                <p class="card-text org-desc-head">
                    <?=$org_description?>
                </p>
                <a href="<?=base_url()?>events/add_events/<?=$url_id?>" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="mt-4 ml-3">
        
        <h3>Events</h3>

        <ul class="nav nav-tabs">

            <li class="nav-item">
                <a class="nav-link <?php if($this->session->userdata('nav_active')==='Approved'){?>active<?php } ?>" aria-current="page" href="<?=base_url()?>organizations_view/approved_events/<?=$url_id?>">Approved</a>
            </li>
            <li class="nav-item">
            <a class="nav-link <?php if($this->session->userdata('nav_active')==='Pending'){?>active<?php } ?>" aria-current="page" href="<?=base_url()?>organizations_view/pending_events/<?=$url_id?>">Pending</a>
            </li>
            <li class="nav-item">
            <a class="nav-link <?php if($this->session->userdata('nav_active')==='Archived'){?>active<?php } ?>" aria-current="page" href="<?=base_url()?>organizations_view/archived_events/<?=$url_id?>">Archived</a>
            </li>
            <li class="nav-item">
            <a class="nav-link <?php if($this->session->userdata('nav_active')==='All'){?>active<?php } ?>" aria-current="page" href="<?=base_url()?>organizations_view/all_events/<?=$url_id?>">All</a>
            </li>

        </ul>

        

