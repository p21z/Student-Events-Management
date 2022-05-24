
<?php
    $table_name="tbl_orgs";
    $column="org_id";


    $user_data=get_where_custom($table_name, $column, $url_id);

    foreach ($user_data as $key => $row) {
        $org_id=$row['org_id'];
        $org_name=$row['org_name'];
        $org_description=$row['org_description'];
        $org_image=$row['org_image'];
        $cover_image=$row['cover_image'];

    }
?>

<div class="card"  style="min-height: 960px;">
    <!-- <img src="https://via.placeholder.com/1080x250" class="card-img-top " alt="..."> -->
    <?php
        if ($cover_image==="")
        {
        ?>
            <img src="<?=base_url()?>assets/img/cover_img.png" class="card-img-top object-fit-cover-head" alt="...">
    <?php
        } else
        {
    ?>
            <img src="<?=base_url()?>assets/img/<?=$cover_image?>" class="card-img-top object-fit-cover-head" alt="...">
    <?php
        }
    ?>
    <div class="card-body">

        <div class="row">
            <div class="col-2">
                <!-- <img src="https://via.placeholder.com/250x250/ff0000/000000" class="card-img-top dp-pic" alt="..."> -->
                <?php
                if ($org_image==="")
                {
                ?>
                    <img src="<?=base_url()?>assets/img/org_img.png" class="card-img-top dp-pic" alt="...">
                <?php
                } else
                {
                ?>
                    <img src="<?=base_url()?>assets/img/<?=$org_image?>" class="card-img-top dp-pic" alt="...">
                <?php
                }
                ?>
            </div>
            <div class="col-8 ml-4">
            
                <h2 class="card-title"><?=$org_name?></h2>
                <p class="card-text org-desc-head">
                    <?=$org_description?>
                </p>
                <a href="<?=base_url()?>events/add_events/<?=$url_id?>" class="btn btn-primary">Add event</a>
            </div>
        </div>

        <div class="mt-4 ml-3">
        
        <h3>Events</h3>

        <form method=post action="<?=base_url()?>organizations_view/search_org_events_view/<?=$org_id?>" autocomplete="off"
            class="d-none d-sm-inline-block form-inline mr-auto md-3 my-2 my-md-0 mw-100 navbar-search w-25">

            <div class="input-group">
                <input type="text" name="search" class="form-control bg-light border-0 small pb-2" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2" required>

                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit" name="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
                
            </div>

        </form>


        <ul class="nav nav-tabs mt-4">

            <li class="nav-item">
                <a class="nav-link <?php if($this->session->userdata('nav_active')==='Approved'){?>active<?php } ?>" aria-current="page" href="<?=base_url()?>organizations_view/approved_events/<?=$url_id?>">Approved</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($this->session->userdata('nav_active')==='For approval'){?>active<?php } ?>" aria-current="page" href="<?=base_url()?>organizations_view/for_approval_events/<?=$url_id?>">For approval</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($this->session->userdata('nav_active')==='Denied'){?>active<?php } ?>" aria-current="page" href="<?=base_url()?>organizations_view/denied_events/<?=$url_id?>">Denied</a>
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

        

