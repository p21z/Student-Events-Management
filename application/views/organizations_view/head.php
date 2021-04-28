
<div class="card">
    <img src="https://via.placeholder.com/1080x250" class="card-img-top " alt="...">
    <div class="card-body">

        <div class="row">
            <div class="col-2">
                <img src="https://via.placeholder.com/250x250/ff0000/000000" class="card-img-top dp-pic" alt="...">
            </div>
            <div class="col-8 ml-4">
                <h2 class="card-title">Organization Name</h2>
                <p class="card-text org-desc-head">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                    
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="mt-4 ml-3">
        
        <h3>Events</h3>

        <ul class="nav nav-tabs">

            <li class="nav-item">
                <a class="nav-link <?php if($this->session->userdata('nav_active')==='Approved'){?>active<?php } ?>" aria-current="page" href="<?=base_url()?>organizations_view">Approved</a>
            </li>
            <li class="nav-item">
            <a class="nav-link <?php if($this->session->userdata('nav_active')==='Pending'){?>active<?php } ?>" aria-current="page" href="<?=base_url()?>organizations_view/pending_events">Pending</a>
            </li>
            <li class="nav-item">
            <a class="nav-link <?php if($this->session->userdata('nav_active')==='Archived'){?>active<?php } ?>" aria-current="page" href="<?=base_url()?>organizations_view/archived_events">Archived</a>
            </li>
            <li class="nav-item">
            <a class="nav-link <?php if($this->session->userdata('nav_active')==='All'){?>active<?php } ?>" aria-current="page" href="<?=base_url()?>organizations_view/all_events">All</a>
            </li>

        </ul>

        

