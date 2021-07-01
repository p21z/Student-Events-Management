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
                $event_image=$row['event_image'];
                
            }

        if ($event_image==="")
        {
        ?>
            <img src="<?=base_url()?>assets/img/org_img.png" class="card-img-top object-fit-event" alt="...">
        <?php
        } else
        {
        ?>
            <img src="<?=base_url()?>assets/img/<?=$event_image?>" class="card-img-top object-fit-event" alt="...">
        <?php
        }
        ?>
    <div class="card-body">
        <div class="row">

            <div class="col-10">

                <h3 class="card-title"><b><?=$event_name?></b></h3>
                <?php
                    $org_data=get_where_custom("tbl_orgs", "org_id", $org_id);
                    foreach ($org_data as $key =>$row)
                    {
                        $org_name=$row['org_name'];
                    }
                ?>
                <h5 class="mb-4 font-weight-bold"><?=$org_name?></h5>
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

            <div class="col-2 text-right row" style="margin: 0 auto;">
                
                <?php
                if ($statusxxx==="Pending")
                {
                ?>
                <div class="col-2">
                    <a href="<?=base_url()?>events/change_picture/<?=$event_id?>" class="btn btn-info btn-circle btn-sm">
                        <i class="far fa-image"></i>
                    </a>
                </div>                    

                    &nbsp;
                <div class="col-2">
                    <a href="<?=base_url()?>events/edit_events/<?=$org_id?>/<?=$event_id?>" class="btn btn-warning btn-circle btn-sm">
                    <i class="far fa-edit"></i>
                </a>
                </div>   
                <?php
                }
                ?>
                
                &nbsp;
                <div class="col-2">
                    <a href="<?=base_url()?>events/delete_events/<?=$org_id?>/<?=$event_id?>" class="btn btn-danger btn-circle btn-sm">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>                    

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
                            <p class="card-text">This document is needed to use any facility or function room within the university.</p>

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

                <button onclick="reservation_print()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-3"><i class="fas fa-download fa-sm text-white-50"></i>Generate document</button>

                <script>
                function reservation_print() {
                window.open("<?= base_url() ?>prints/function_room/<?=$url_id?>");
                }
                
                </script>
                <div class="card mt-3 mb-4 w-100">
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
                            <p class="card-text">This document is needed in requesting cash or cheque in the Business Affairs Office.</p>

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
                    <button onclick="cash_print()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-3"><i class="fas fa-download fa-sm text-white-50"></i>Generate document</button>

                    <script>
                    function cash_print() {
                    window.open("<?= base_url() ?>prints/cash_req/<?=$url_id?>");
                    }
                    </script>
                    <div class="card text-center mt-3 mb-4 w-75 csh_req_card">
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
                            <p class="card-text">This document is needed to request catering from the canteen.</p>
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
                    <button onclick="cater_print()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-3"><i class="fas fa-download fa-sm text-white-50"></i>Generate document</button>

                    <script>
                    function cater_print() {
                    window.open("<?= base_url() ?>prints/catering/<?=$url_id?>");
                    }
                    </script>
                    <div class="card mt-3 mb-4 w-100">
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
                                                $order=$row['orderxx'];
                                                $menu=$row['menu'];
                                                $venue=$row['venue'];
                                                $remarks=$row['remarks'];

                                            
                                        ?>
                                            <tr>
                                                <td><?=$datexx?></td>
                                                <td><?=date('h:i a', strtotime($time_needed))?></td>
                                                <td><?=$occasion?></td>
                                                <td><?=$num_guest?></td>
                                                <td><?=$order?>-<?=$menu?></td>
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
                            <p class="card-text">This document is needed to be accredited by the Office of Student Affairs.</p>
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
                <button onclick="incamp_print()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-3"><i class="fas fa-download fa-sm text-white-50"></i>Generate document</button>

                <script>
                function incamp_print() {
                window.open("<?= base_url() ?>prints/incampus/<?=$url_id?>");
                }
                </script>
                 <div class="card text-center mt-3 mb-4 w-75">
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
                            <p class="card-text">This document is needed to file official businesses outside the university.</p>
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
                <button onclick="travel_print()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-3"><i class="fas fa-download fa-sm text-white-50"></i>Generate document</button>

                <script>
                function travel_print() {
                window.open("<?= base_url() ?>prints/travel_permit/<?=$url_id?>");
                }
                </script>
                <div class="card mt-4 mb-3 w-100">
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
                                <p class="card-text">This attached document is needed to file students' official business outside the university.</p>
                                <a href="<?=base_url()?>events/add_student_list/<?=$event_id?>" class="btn btn-primary">Add a form</a>
                            </div>

                        </div>

                    <?php
                    }   else
                    {
                    ?>
                    <div class="card text-center mt-4 mb-4">
                            
                        <div class="card-body">
                            <h5 class="card-title">Student list</h5>
                            <p class="card-text">This attached document is needed to file students' official business outside the university.</p>
                            <a href="<?=base_url()?>events/student_list_view/<?=$event_id?>" class="btn btn-primary">View student list</a>
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
                            <p class="card-text">This document is needed to request the use of university-owned vehicles.</p>
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
                <button onclick="trip_print()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-3"><i class="fas fa-download fa-sm text-white-50"></i>Generate document</button>

                <script>
                function trip_print() {
                window.open("<?= base_url() ?>prints/trip_ticket/<?=$url_id?>");
                }
                </script>
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
                                            <th>ETA</th>
                                            <th>Passengers</th>
                                            <th>Destination</th>
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
                                            <th>ETA</th>
                                            <th>Passengers</th>
                                            <th>Destination</th>
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
                                            $passengers=$row['passengers'];
                                            $destination=$row['destination'];

                                        ?>

                                        <tr>
                                            <td><?=$person?></td>
                                            <td><?=$driver?></td>
                                            <td><?=$vehicle?></td>
                                            <td><?=$activity?></td>
                                            <td><?=$date_use?></td>
                                            <td><?=date('h:i a', strtotime($dept_time))?></td>
                                            <td><?=date('h:i a', strtotime($eta))?></td>
                                            <td><?=$passengers?></td>
                                            <td><?=$destination?></td>
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
        <a href="<?=base_url()?>attendance/all/<?=$event_id?>" class="card-link">Students</a>
        <a href="<?=base_url()?>visitors/all/<?=$event_id?>" class="card-link">Visitors</a>
        <a href="<?=base_url()?>attendance/quorum/<?=$event_id?>" class="card-link">Quorum</a>
    <?php
    }
    ?>
    <?php
    if($statusxxx==="Archived")
    {

        $table_name="tbl_evaluation";
        $column1="event_id";
        $column2="user_id";
        $value1=$url_id;
        $value2=$this->session->userdata('idxx');
        $count_data=count_where_double_and($table_name, $column1, $value1, $column2, $value2);
        // echo $count_data;
        if ($count_data===1)
        {
    ?>
        <a href="<?=base_url()?>evaluation/view_evaluation/<?=$event_id?>/<?=$this->session->userdata('idxx')?>" class="card-link">View Evaluation</a>
    <?php
        } else
        {
    ?>
        <a href="<?=base_url()?>evaluation/add_evaluation/<?=$event_id?>/<?=$this->session->userdata('idxx')?>" class="card-link">Evaluation</a>
    <?php
        }
    ?>
        <a href="<?=base_url()?>evaluation/responses/<?=$event_id?>" class="card-link">Responses</a>
    <?php
    }
    ?>

</div>
</div>

</div>
