<div class="card shadow w-100">
<div class="card-body">
<div class="mt-4 ml-3">
        
        <h3>Events</h3>

        <br>
        <form method=post action="<?=base_url()?>events/search_events_view" autocomplete="off"
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


        <ul class="nav nav-tabs mt-5">

            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="<?=base_url()?>events/approved_events_view">Approved</a>
            </li>
            <?php if ($this->session->userdata('access')!=="Dean 2"){?>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=base_url()?>events/pending_events_view">Pending</a>
            </li>
            <?php   } ?>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=base_url()?>events/for_approval_events_view">For approval</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=base_url()?>events/denied_events_view">Denied</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=base_url()?>events/archived_events_view">Archived</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?=base_url()?>events/all_events_view">All</a>
            </li>

        </ul>

        <?php
            $orgs_count=all_event_search_count($this->session->userdata('search'));
                                        
            if ($orgs_count==0)
            {
                echo '<br><span class="ml-3"><i>No results for<b> "'.$this->session->userdata('search').'" </b></i></span>';
            } else
            {
                echo '<br><span class="ml-2"><i>Results for<b> "'.$this->session->userdata('search').'"</b></i></span>';
            }
        ?>
        <div class="row mt-4">
        <?php
            
            $table_name="tbl_events";
            $column3="event_id";


            $events_data=all_event_search($this->session->userdata('search'));
            
            foreach ($events_data as $key => $row)
            {
                $event_id=$row['event_id'];
                $org_id=$row['org_id'];
                $event_name=$row['event_name'];
                $start_date=$row['start_date'];
                $end_date=$row['end_date'];
                $venue=$row['venue'];
                $statusxx=$row['statusxx'];
        ?>
            <div class="card ml-3 mt-3
                <?php
                  if ($statusxx==="Approved")
                  {
                ?>
                        border-bottom-primary
                <?php
                  } elseif ($statusxx==="Pending")
                  {
                ?>
                        border-bottom-info
                <?php
                  } else
                  {
                ?>
                        border-bottom-secondary
                <?php
                  }
                ?>" style="width: 28%">
                <h5 class="card-header"><?=$event_name?></h5>
                <div class="card-body">
                    <div class="row">
                        <h6 class="card-title col-6 mt-3">
                            <b>Date: </b><br>
                            <?php
                                if ($start_date===$end_date)
                                {
                                    echo $start_date;
                                } else
                                {
                                    echo $start_date."-".$end_date;
                                }
                            ?></h6>

                        <h6 class="card-title col-6 mt-3">
                            <b>Venue: </b>
                                <br><?=$venue?></h6>
                    </div>
                <a href="<?=base_url()?>events/event_details/<?=$event_id?>" class="btn mt-2 
                    <?php
                  if ($statusxx==="Approved")
                  {
                ?>
                        btn-primary
                <?php
                  } elseif ($statusxx==="Pending")
                  {
                ?>
                        btn-info
                <?php
                  } else
                  {
                ?>
                        btn-secondary
                <?php
                  }
                ?>">See details</a>
                </div>
            </div>
        <?php
            }
        ?>

    </div>
</div>
</div>
</div>