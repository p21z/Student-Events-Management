<?php
// getting event docs conditions
    $count_rsrv_cfr=count_where("tbl_rsrv_cfr", "event_id", $url_id);

    $count_csh_req=count_where("tbl_csh_req", "event_id", $url_id);

    $count_cat_req=count_where("tbl_cat_req", "event_id", $url_id);

    $count_in_cmp=count_where("tbl_in_cmp", "event_id", $url_id);

    $count_tra_prmt=count_where("tbl_tra_prmt", "event_id", $url_id);

    $count_stud_list=count_where("tbl_stud_list", "event_id", $url_id);

    $count_trp_tckt=count_where("tbl_trp_tckt", "event_id", $url_id);


?>

<div class="row">

    <div class="card w-100 mb-5 ml-4">
        <?php
            $table_name="tbl_events";
            $column="event_id";
            $value=$url_id;

            $events_data=get_where_custom($table_name, $column, $value);

            foreach ($events_data as $key => $row)
            {
                $event_id=$row['event_id'];
                $org_id=$row['org_id'];
                $event_name=$row['event_name'];
                $start_date=$row['start_date'];
                $start_time=$row['start_time'];
                $end_date=$row['end_date'];
                $end_time=$row['end_time'];
                $venue=$row['venue'];
                $event_description=$row['event_description'];
                $statusxxx=$row['statusxx'];
                $remarks=$row['remarks'];
                $in_cmp_id=$row['in_cmp_id'];
                $rsrv_cfr_id=$row['rsrv_cfr_id'];
                $csh_req_id=$row['csh_req_id'];
                $cat_req_id=$row['cat_req_id'];
                $trip_tkt_id=$row['trip_tkt_id'];
                $trip_prmt_id=$row['trip_prmt_id'];
                
            }

        ?>
    <img src="https://via.placeholder.com/1080x300" class="card-img-top" alt="...">
    <div class="card-body">
        <div class="row">

            <div class="col-11">

                <h4 class="card-title"><b><?=$event_name?></b></h4>
                <p class="card-text"><?=$event_description?></p>
                <div class="row">

                    <div class="class-text col-4"><b>Date:</b>
                        <?php
                            if ($start_date===$end_date)
                            {
                                echo $start_date." (".$start_time."-".$end_time.")";
                            } else
                            {
                                echo $start_date." to ".$end_date." (".date('h:i a', strtotime($start_time))."-".date('h:i a', strtotime($end_time)).")";
                            }
                        ?>

                        <br>
                        
                        <div class="mt-3">
                            <b>Venue:</b> <?=$venue?>
                        </div>

                    </div>
                    <div class="class-text col-5">

                    <form action="<?=base_url()?>events/edit_events_status/<?=$org_id?>/<?=$event_id?>" method="post">
                        <div class="input-group w-50">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Status&nbsp;&nbsp;&nbsp;&nbsp;</button>
                            </div>
                            <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="<?=$statusxxx?>" readonly style="font-weight: bold;">
                        </div>
                    </form>
                    
                    
                    
                    <br>
                    <form action="<?=base_url()?>events/edit_events_remarks/<?=$org_id?>/<?=$event_id?>" method="post">
                        <div class="input-group mb-3 w-75" style="margin-top:-5%;">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Remarks</button>
                            </div>
                            <textarea class="form-control" aria-label="With textarea" readonly><?=$remarks?></textarea>
                        </div>
                    </form>

                    </div>

                </div>

            </div>

            <div class="col-1 text-right">
                <?php
                if ($statusxxx==="Pending")
                {
                ?>
                    <a href="<?=base_url()?>events/edit_events/<?=$org_id?>/<?=$event_id?>" class="btn btn-warning btn-circle btn-sm">
                    <i class="far fa-edit"></i>
                </a>
                <?php
                }
                ?>
                
                &nbsp;
                <a href="<?=base_url()?>events/delete_events/<?=$org_id?>/<?=$event_id?>" class="btn btn-danger btn-circle btn-sm">
                    <i class="fas fa-trash"></i>
                </a>

            </div>

        </div>
        
        
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>Additional documents</b></li>
        <li class="list-group-item">
<!-- RESERVATION -->
            <button type="button" class="collapsiblex w-100">Reservation for the use of common function room/facilities</button>
            <div class="content">
                <?php
                if ($count_rsrv_cfr===0)
                {
                ?>
                    <div class="card text-center mt-4 mb-4">
                        
                        <div class="card-body">
                            <h5 class="card-title">No document is found</h5>
                            <p class="card-text">Something about the said document must be written here</p>

                            <?php
                            if($statusxxx==="Pending")
                            {
                            ?>
                                <a href="<?=base_url()?>events/add_common_function_room/<?=$org_id?>/<?=$event_id?>" class="btn btn-primary">Add a form</a>
                            <?php
                            }
                            ?>
                            
                            <!-- added event id in url, assign it as session now -->
                        </div>

                    </div>

                <?php
                }   else
                {
                ?>

                <!-- REDISGN TO TABLE -->
                <div class="card mt-4 mb-4 w-100">
                    <div class="card-body">
                        
                        <a href="<?=base_url()?>events/add_common_function_room/<?=$org_id?>/<?=$event_id?>" class="btn btn-secondary btn-icon-split add-item" style="margin-top:-1px;">
                            <span class="icon text-white-50">
                                <i class="fas fa-user-plus"></i>
                            </span>
                            <span class="text">
                                ADD FORM
                            </span>
                        </a>

                        <hr>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Facility</th>
                                        <th>No. of Users</th>
                                        <th>Person Responsible</th>
                                        <th>Purpose</th>
                                        <th>Date & Time</th>
                                        <th>Specs</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Facility</th>
                                        <th>No. of Users</th>
                                        <th>Person Responsible</th>
                                        <th>Purpose</th>
                                        <th>Date & Time</th>
                                        <th>Specs</th>
                                        <th>Options</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                
                
                
                        <!-- <div class="mt-4 mb-4" style="width: 200px;">
                            <a href="<?=base_url()?>events/add_common_function_room/<?=$org_id?>/<?=$event_id?>" class="btn btn-primary">Add a form</a>
                        </div> -->
                <?php
                        $table_name="tbl_rsrv_cfr";
                        $column="event_id";
                        $value=$url_id;

                        $events_data=get_where_custom($table_name, $column, $value);

                        foreach ($events_data as $key => $row)
                        {
                            $rsrv_cfr_id=$row['rsrv_cfr_id'];
                            $func_room=$row['func_room'];
                            $num_users=$row['num_users'];
                            $purpose=$row['purpose'];
                            $fund_source=$row['fund_source'];
                            $amount=$row['amount'];
                            $person_respo=$row['person_respo'];
                            $specs=$row['specs'];
                            $start_date=$row['start_date'];
                            $start_time=$row['start_time'];
                            $end_date=$row['end_date'];
                            $end_time=$row['end_time'];

                ?>
                                    <tr>
                                        <td><?=$func_room?></td>
                                        <td><?=$num_users?></td>
                                        <td><?=$person_respo?></td>
                                        <td><?=$purpose?></td>
                                        <td>
                                            <?php
                                            if ($start_date===$end_date)
                                            {
                                                echo $start_date."(".date('h:i:s a', strtotime($start_time))."-".date('h:i:s a', strtotime($end_time)).")";
                                            } else
                                            {
                                                echo $start_date."-".$end_date."(".date('h:i:s a', strtotime($start_time))."-".date('h:i:s a', strtotime($end_time)).")";
                                            }
                                            ?>
                                        </td>
                                        <td><?=$specs?></td>
                                        <td>
                                        <?php
                                        if ($statusxxx==="Pending")
                                        {
                                        ?>
                                            <a href="<?=base_url()?>events/edit_common_function_room/<?=$org_id?>/<?=$event_id?>/<?=$rsrv_cfr_id?>" class="btn btn-warning btn-circle btn-sm">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            &nbsp;
                                            <a href="<?=base_url()?>events/delete_common_function_room/<?=$org_id?>/<?=$event_id?>/<?=$rsrv_cfr_id?>" class="btn btn-danger btn-circle btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        <?php
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
                <!-- REDESIGN TO TABLE END -->
                <?php
                }
                ?> 
            </div>
<!-- CASH REQ -->
            <button type="button" class="collapsiblex w-100">Cash/Check requisition</button>
            <div class="content">
                <?php
                if ($count_csh_req===0)
                {
                ?>
                    <div class="card text-center mt-4 mb-4">
                        
                        <div class="card-body">
                            <h5 class="card-title">No document is found</h5>
                            <p class="card-text">Something about the said document must be written here</p>

                            <?php
                            if($statusxxx==="Pending")
                            {
                            ?>
                                <a href="<?=base_url()?>events/add_cash_requisition/<?=$org_id?>/<?=$event_id?>" class="btn btn-primary">Add a form</a>
                            <?php
                            }
                            ?>

                            
                        </div>

                    </div>

                <?php
                }   else
                {

                        $table_name="tbl_csh_req";
                        $column="event_id";
                        $value=$url_id;

                        $events_data=get_where_custom($table_name, $column, $value);

                        foreach ($events_data as $key => $row)
                        {
                            $csh_req_id=$row['csh_req_id'];
                            $event_id=$row['event_id'];
                            $busfare=$row['busfare'];
                            $taxifare=$row['taxifare'];
                            $otherfare=$row['otherfare'];
                            $food_allowance=$row['food_allowance'];
                            $reg_fee=$row['reg_fee'];
                            $accommodation=$row['accommodation'];
                            $honorarium=$row['honorarium'];
                            $rel_of_acco=$row['rel_of_acco'];
                            $monthly_bills=$row['monthly_bills'];
                            $supplies=$row['supplies'];
                            $purpose=$row['purpose'];
                            $pay_to=$row['pay_to'];
                            $date_need=$row['date_need'];
                            $datexx=$row['datexx'];

                ?>

                    <div class="card text-center mt-4 mb-4 w-75 csh_req_card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-11">&nbsp;
                                </div>
                                <div class="col-1">
                                    <?php
                                        if ($statusxxx==="Pending")
                                        {
                                        ?>
                                        <a href="<?=base_url()?>events/edit_cash_requisition/<?=$org_id?>/<?=$event_id?>/<?=$csh_req_id?>" class="btn btn-warning btn-circle btn-sm">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a href="<?=base_url()?>events/delete_cash_requisition/<?=$org_id?>/<?=$event_id?>/<?=$csh_req_id?>" class="btn btn-danger btn-circle btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row card-body rsrv_cfr_card">

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Bus fare</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$busfare?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Taxi fare</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$taxifare?>" readonly>
                            </div>
                            
                            <div class="input-group mb-3 col-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Other fare</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$food_allowance?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Food Allowance</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="4" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Registration fee</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$reg_fee?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Accomodation</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$accommodation?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Honorarium</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$honorarium?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Release of Accommodation</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$rel_of_acco?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Monthly Bills</span>
                                </div>
                                <textarea class="form-control" aria-label="Specifications" readonly><?=$monthly_bills?></textarea>
                            </div>
                            
                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Supplies</span>
                                </div>
                                <textarea class="form-control" aria-label="Specifications" readonly><?=$supplies?></textarea>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Purpose</span>
                                </div>
                                <textarea class="form-control" aria-label="Specifications" readonly><?=$purpose?></textarea>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Pay to</span>
                                </div>
                                <textarea class="form-control" aria-label="Specifications" readonly><?=$pay_to?></textarea>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Date Needed</span>
                                </div>
                                <textarea class="form-control" aria-label="Specifications" readonly><?=$date_need?></textarea>
                            </div>
                            
                        </div>
                    </div>
                <?php
                        }
                    }
                ?> 
                </div>
            <?php
            
            ?>
<!-- CATERING -->
            <button type="button" class="collapsiblex w-100">Catering requisition</button>
            <div class="content">
                <?php
                if ($count_cat_req===0)
                {
                ?>
                    <div class="card text-center mt-4 mb-4 w-100">
                        
                        <div class="card-body">
                            <h5 class="card-title">No document is found</h5>
                            <p class="card-text">Something about the said document must be written here</p>
                            <!-- CONTINUE THIS N NEXT FORMS -->
                            <?php
                            if($statusxxx==="Pending")
                            {
                            ?>
                                <a href="<?=base_url()?>events/add_catering_requisition/<?=$org_id?>/<?=$event_id?>" class="btn btn-primary">Add a form</a>
                            <?php
                            }
                            ?>
                            
                        </div>

                    </div>

                <?php
                }   else
                {    
                ?>
                    <div class="card mt-4 mb-4 w-75">
                        <div class="card-body">
                            
                            <a href="<?=base_url()?>events/add_catering_requisition/<?=$org_id?>/<?=$event_id?>" class="btn btn-secondary btn-icon-split add-item" style="margin-top:-1px;">
                                <span class="icon text-white-50">
                                    <i class="fas fa-user-plus"></i>
                                </span>
                                <span class="text">
                                    ADD ORDER
                                </span>
                            </a>

                            <hr>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="75%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Time needed</th>
                                            <th>Occasion</th>
                                            <th>No. of guest</th>
                                            <th>Menu</th>
                                            <th>Venue</th>
                                            <th>Remarks</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Date</th>
                                            <th>Time needed</th>
                                            <th>Occasion</th>
                                            <th>No. of guest</th>
                                            <th>Menu</th>
                                            <th>Venue</th>
                                            <th>Remarks</th>
                                            <th>Options</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $table_name="tbl_cat_req";
                                            $column="event_id";
                                            $value= $event_id;

                                            $events_data=get_where_custom($table_name, $column, $value);

                                            foreach ($events_data as $key => $row) {
                                                $cat_req_id=$row['cat_req_id'];
                                                $datexx=$row['datexx'];
                                                $time_needed=$row['time_needed'];
                                                $occasion=$row['occasion'];
                                                $num_guest=$row['num_guest'];
                                                $menu=$row['menu'];
                                                $venue=$row['venue'];
                                                $remarks=$row['remarks'];

                                            
                                        ?>
                                            <tr>
                                                <td><?=$datexx?></td>
                                                <td><?=date('h:i a', strtotime($time_needed))?></td>
                                                <td><?=$occasion?></td>
                                                <td><?=$num_guest?></td>
                                                <td><?=$menu?></td>
                                                <td><?=$venue?></td>
                                                <td><?=$remarks?></td>
                                                <td>
                                                <?php
                                                if ($statusxxx==="Pending")
                                                {
                                                ?>
                                                    <a href="<?=base_url()?>events/edit_catering_requisition/<?=$org_id?>/<?=$event_id?>/<?=$cat_req_id?>" class="btn btn-warning btn-circle btn-sm">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    &nbsp;
                                                    <a href="<?=base_url()?>events/delete_catering_requisition/<?=$org_id?>/<?=$event_id?>/<?=$cat_req_id?>" class="btn btn-danger btn-circle btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                <?php
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
                    
                <?php
                }
                ?> 
            </div>
<!-- IN CAMPUS -->
            <button type="button" class="collapsiblex w-100">In-campus activity</button>
            <div class="content">
                <?php
                if ($count_in_cmp===0)
                {
                ?>
                    <div class="card text-center mt-4 mb-4">
                        
                        <div class="card-body">
                            <h5 class="card-title">No document is found</h5>
                            <p class="card-text">Something about the said document must be written here</p>
                            <?php
                            if($statusxxx==="Pending")
                            {
                            ?>
                                <a href="<?=base_url()?>events/add_in_campus_activity/<?=$org_id?>/<?=$event_id?>" class="btn btn-primary">Add a form</a>
                            <?php
                            }
                            ?>
                            
                        </div>

                    </div>

                <?php
                }   else
                {
                    $table_name="tbl_in_cmp";
                    $column="event_id";
                    $value=$url_id;

                    $events_data=get_where_custom($table_name, $column, $value);

                    foreach ($events_data as $key => $row)
                    {
                        $in_cmp_id=$row['in_cmp_id'];
                        $organizer=$row['organizer'];
                        $nature=$row['nature'];
                        $objective_1=$row['objective_1'];
                        $objective_2=$row['objective_2'];
                        $objective_3=$row['objective_3'];
                        $datexx=$row['datexx'];
                        $timexx=$row['timexx'];
                        $speaker=$row['speaker'];
                        $venue=$row['venue'];
                        $num_participants=$row['num_participants'];
                        $program_budget=$row['program_budget'];
                    }
                ?>
                 <div class="card text-center mt-4 mb-4 w-75">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-11">&nbsp;
                                </div>
                                <div class="col-1">
                                <?php
                                if ($statusxxx==="Pending")
                                {
                                ?>
                                    <a href="<?=base_url()?>events/edit_in_campus_activity/<?=$org_id?>/<?=$event_id?>/<?=$in_cmp_id?>" class="btn btn-warning btn-circle btn-sm">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="<?=base_url()?>events/delete_in_campus_activity/<?=$org_id?>/<?=$event_id?>/<?=$in_cmp_id?>" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                <?php
                                }
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="row card-body in_cmp_card">

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Organizer</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$organizer?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Nature</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$nature?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Ojective 1</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$objective_1?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Ojective 2</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$objective_2?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Ojective 3</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$objective_3?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Date</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$datexx?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Time</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=date('h:i a', strtotime($timexx))?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Venue</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$venue?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">No. of Participants</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$num_participants?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Program Budget</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="Student Activity Fund" readonly>
                            </div>

                        </div>
                    </div>
                <?php
                }
                ?> 
            </div>
<!-- TRAVEL PERMIT -->
            <button type="button" class="collapsiblex w-100">Travel Permit</button>
            <div class="content">
            <?php
                if ($count_tra_prmt===0)
                {
                ?>
                    <div class="card text-center mt-4 mb-4">
                        
                        <div class="card-body">
                            <h5 class="card-title">No document is found</h5>
                            <p class="card-text">Something about the said document must be written here</p>
                            <?php
                            if($statusxxx==="Pending")
                            {
                            ?>
                                <a href="<?=base_url()?>events/add_travel_permit/<?=$org_id?>/<?=$event_id?>" class="btn btn-primary">Add a form</a>
                            <?php
                            }
                            ?>
                            
                        </div>

                    </div>

                <?php
                }   else
                {
                ?>
                <div class="card mt-4 mb-4 w-100">
                    <div class="card-body">
                        
                        <a href="<?=base_url()?>events/add_travel_permit/<?=$org_id?>/<?=$event_id?>" class="btn btn-secondary btn-icon-split add-item" style="margin-top:-1px;">
                            <span class="icon text-white-50">
                                <i class="fas fa-user-plus"></i>
                            </span>
                            <span class="text">
                                ADD TRAVEL PERMIT
                            </span>
                        </a>

                        <hr>
                        <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Place</th>
                                    <th>Venue</th>
                                    <th>Date</th>
                                    <th>Date return</th>
                                    <th>Relation to the seminar/organization</th>
                                    <th>Detailed relation to the seminar/organization</th>
                                    <th>Others</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Place</th>
                                    <th>Venue</th>
                                    <th>Date</th>
                                    <th>Date return</th>
                                    <th>Relation to the seminar/organization</th>
                                    <th>Detailed relation to the seminar/organization</th>
                                    <th>Others</th>
                                    <th>Options</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php

                                $table_name="tbl_tra_prmt";
                                $column="event_id";
                                $value=$url_id;

                                $events_data=get_where_custom($table_name, $column, $value);

                                foreach ($events_data as $key => $row)
                                {
                                    $tra_prmt_id=$row['tra_prmt_id'];
                                    $name=$row['name'];
                                    $place=$row['place'];
                                    $venue=$row['venue'];
                                    $datexx=$row['datexx'];
                                    $date_return=$row['date_return'];
                                    $relation1=$row['relation1'];
                                    $relation2=$row['relation2'];
                                    $others=$row['others'];

                                ?>

                                <tr>
                                    <td><?=$name?></td>
                                    <td><?=$place?></td>
                                    <td><?=$venue?></td>
                                    <td><?=$datexx?></td>
                                    <td><?=$date_return?></td>
                                    <td><?=$relation1?></td>
                                    <td><?=$relation2?></td>
                                    <td><?=$others?></td>
                                    <td>
                                    <?php
                                    if ($statusxxx==="Pending")
                                    {
                                    ?>
                                        <a href="<?=base_url()?>events/edit_travel_permit/<?=$org_id?>/<?=$event_id?>/<?=$tra_prmt_id?>" class="btn btn-warning btn-circle btn-sm">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        &nbsp;
                                        <a href="<?=base_url()?>events/delete_travel_permit/<?=$org_id?>/<?=$event_id?>/<?=$tra_prmt_id?>" class="btn btn-danger btn-circle btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    <?php
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

                    <?php
                    
                    if ($count_stud_list===0)
                    {
                    ?>
                        <div class="card text-center mt-4 mb-4">
                            
                            <div class="card-body">
                                <h5 class="card-title">No student list is found</h5>
                                <p class="card-text">Something about the said document must be written here</p>
                                <a href="<?=base_url()?>events/add_student_list/<?=$org_id?>/<?=$event_id?>" class="btn btn-primary">Add a form</a>
                            </div>

                        </div>

                    <?php
                    }   else
                    {
                    ?>
                    <div class="card mt-4 mb-4 w-100">
                        <div class="card-body">

                            <a href="<?=base_url()?>events/add_student_list/<?=$org_id?>/<?=$event_id?>" class="btn btn-secondary btn-icon-split add-item" style="margin-top:-1px;">
                                <span class="icon text-white-50">
                                    <i class="fas fa-user-plus"></i>
                                </span>
                                <span class="text">
                                    ADD STUDENT
                                </span>
                            </a>

                            <hr>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Year</th>
                                            <th>Program</th>
                                            <th>Section</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Year</th>
                                            <th>Program</th>
                                            <th>Section</th>
                                            <th>Options</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $table_name="tbl_stud_list";
                                        $column="event_id";
                                        $value=$url_id;

                                        $events_data=get_where_custom($table_name, $column, $value);

                                        foreach ($events_data as $key => $row)
                                        {
                                            $stud_list_id=$row['stud_list_id'];
                                            $stud_name=$row['stud_name'];
                                            $year=$row['year'];
                                            $program=$row['program'];
                                            $section=$row['section'];
                                        ?>

                                        <tr>
                                            <td><?=$stud_name?></td>
                                            <td><?=$year?></td>
                                            <td><?=$program?></td>
                                            <td><?=$section?></td>
                                            <td>
                                            <?php
                                            if ($statusxxx==="Pending")
                                            {
                                            ?>
                                                <a href="<?=base_url()?>events/edit_student_list/<?=$org_id?>/<?=$event_id?>/<?=$stud_list_id?>" class="btn btn-warning btn-circle btn-sm">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                &nbsp;
                                                <a href="<?=base_url()?>events/delete_student_list/<?=$org_id?>/<?=$event_id?>/<?=$stud_list_id?>" class="btn btn-danger btn-circle btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            <?php
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
                    <?php
                    }
                    ?>



                <?php
                }
                ?> 
            </div>
            
<!-- TRIP TICKET -->
            <button type="button" class="collapsiblex w-100">Trip Ticket</button>
            <div class="content">
                <?php
                if ($count_trp_tckt===0)
                {
                ?>
                    <div class="card text-center mt-4 mb-4">
                        
                        <div class="card-body">
                            <h5 class="card-title">No document is found</h5>
                            <p class="card-text">Something about the said document must be written here</p>
                            <?php
                            if($statusxxx==="Pending")
                            {
                            ?>
                                <a href="<?=base_url()?>events/add_trip_ticket/<?=$org_id?>/<?=$event_id?>" class="btn btn-primary">Add a form</a>
                            <?php
                            }
                            ?>
                            
                        </div>

                    </div>

                <?php
                } else
                {
                ?>
                    <div class="card mt-4 mb-4 w-100">
                        <div class="card-body">
                            
                            <a href="<?=base_url()?>events/add_trip_ticket/<?=$org_id?>/<?=$event_id?>" class="btn btn-secondary btn-icon-split add-item" style="margin-top:-1px;">
                                <span class="icon text-white-50">
                                    <i class="fas fa-user-plus"></i>
                                </span>
                                <span class="text">
                                    ADD TRIP TICKET
                                </span>
                            </a>

                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <thead>
                                        <tr>
                                            <th>Person</th>
                                            <th>Driver</th>
                                            <th>Vehicle</th>
                                            <th>Activity</th>
                                            <th>Date use</th>
                                            <th>Departure time</th>
                                            <th>Estimated time of arrival</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>Person</th>
                                            <th>Driver</th>
                                            <th>Vehicle</th>
                                            <th>Activity</th>
                                            <th>Date use</th>
                                            <th>Departure time</th>
                                            <th>Estimated time of arrival</th>
                                            <th>Options</th>
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                    <?php

                                        $table_name="tbl_trp_tckt";
                                        $column="event_id";
                                        $value=$url_id;

                                        $events_data=get_where_custom($table_name, $column, $value);

                                        foreach ($events_data as $key => $row)
                                        {
                                            $trp_tckt_id=$row['trp_tckt_id'];
                                            $request_unit=$row['request_unit'];
                                            $person=$row['person'];
                                            $driver=$row['driver'];
                                            $vehicle=$row['vehicle'];
                                            $activity=$row['activity'];
                                            $date_use=$row['date_use'];
                                            $dept_time=$row['dept_time'];
                                            $eta=$row['eta'];

                                        ?>

                                        <tr>
                                            <td><?=$person?></td>
                                            <td><?=$driver?></td>
                                            <td><?=$vehicle?></td>
                                            <td><?=$activity?></td>
                                            <td><?=$date_use?></td>
                                            <td><?=date('h:i a', strtotime($dept_time))?></td>
                                            <td><?=date('h:i a', strtotime($eta))?></td>
                                            <td>
                                            <?php
                                            if ($statusxxx==="Pending")
                                            {
                                            ?>
                                                <a href="<?=base_url()?>events/edit_trip_ticket/<?=$org_id?>/<?=$event_id?>/<?=$trp_tckt_id?>" class="btn btn-warning btn-circle btn-sm">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                &nbsp;
                                                <a href="<?=base_url()?>events/delete_trip_ticket/<?=$org_id?>/<?=$event_id?>/<?=$trp_tckt_id?>" class="btn btn-danger btn-circle btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            <?php
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
                <?php
                }
                ?>
                
            </div>

        </li>
        
    </ul>
            
<div class="card-body">
    <?php
    if($statusxxx!=="Pending")
    {
    ?>
        <a href="<?=base_url()?>attendance/all/<?=$event_id?>" class="card-link">Attendance</a>
    <?php
    }
    ?>
    <?php
    if($statusxxx==="Archived")
    {
    ?>
        <a href="<?=base_url()?>evaluation/add_evaluation/<?=$event_id?>/<?=$this->session->userdata('idxx')?>" class="card-link">Evaluation</a>
        <a href="<?=base_url()?>responses/<?=$event_id?>" class="card-link">Responses</a>
    <?php
    }
    ?>

</div>
</div>

</div>
