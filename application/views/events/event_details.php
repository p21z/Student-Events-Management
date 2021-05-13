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
        <h4 class="card-title"><b><?=$event_name?></b></h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
            </div>
            <div class="class-text col-4"><b>Venue:</b> <?=$venue?></div>

        </div>
        
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>Additional documents</b></li>
        <li class="list-group-item">
<!-- RESERVATION -->
            <button type="button" class="collapsiblex w-100">Reservation for the use of common function room/facilities</button>
            <div class="content">
                <?php
                if ($rsrv_cfr_id==="")
                {
                ?>
                    <div class="card text-center mt-4 mb-4">
                        
                        <div class="card-body">
                            <h5 class="card-title">No document is found</h5>
                            <p class="card-text">Something about the said document must be written here</p>
                            <a href="<?=base_url()?>events/add_common_function_room/<?=$org_id?>/<?=$event_id?>" class="btn btn-primary">Add a form</a>
                            <!-- added event id in url, assign it as session now -->
                        </div>

                    </div>

                <?php
                }   else
                {
                ?>
                        <div class="mt-4 mb-4" style="width: 200px;">
                            <a href="<?=base_url()?>events/add_common_function_room/<?=$org_id?>/<?=$event_id?>" class="btn btn-primary">Add a form</a>
                        </div>
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

                    <div class="card text-center mt-4 mb-4 w-75">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-11">&nbsp;
                                </div>
                                <div class="col-1">
                                    <a href="<?=base_url()?>events/edit_common_function_room/<?=$org_id?>/<?=$event_id?>/<?=$rsrv_cfr_id?>" class="btn btn-warning btn-circle btn-sm">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="<?=base_url()?>events/delete_common_function_room/<?=$org_id?>/<?=$event_id?>/<?=$rsrv_cfr_id?>" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row card-body rsrv_cfr_card">

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Facility/Function Room</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$func_room?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Unit/Department</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="SITE" readonly>
                            </div>
                            
                            <div class="input-group mb-3 col-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">No. of Users</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$num_users?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Person Responsible</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$person_respo?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Purpose</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$purpose?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Source of Fund</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$fund_source?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Amount</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="<?=$amount?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">Date/Time Needed</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="
                                <?php 
                                if ($start_date===$end_date)
                                {
                                    echo $start_date."(".date('h:i:s a', strtotime($start_time))."-".date('h:i:s a', strtotime($end_time)).")";
                                } else
                                {
                                    echo $start_date."-".$end_date."(".date('h:i:s a m/d/Y', strtotime($start_time))."-".date('h:i:s a', strtotime($end_time)).")";
                                }
                                ?>" readonly>
                            </div>

                            <div class="input-group mb-3 col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Specifications</span>
                                </div>
                                <textarea class="form-control" aria-label="Specifications" readonly><?=$specs?></textarea>
                            </div>
                            
                        </div>
                    </div>
                    <hr>
                    <?php
                        }
                    ?>
                <?php
                }
                ?> 
            </div>
<!-- CASH REQ -->
            <button type="button" class="collapsiblex w-100">Cash/Check requisition</button>
            <div class="content">
                <?php
                if ($csh_req_id==="")
                {
                ?>
                    <div class="card text-center mt-4 mb-4">
                        
                        <div class="card-body">
                            <h5 class="card-title">No document is found</h5>
                            <p class="card-text">Something about the said document must be written here</p>
                            <a href="<?=base_url()?>events/add_cash_requisition/<?=$org_id?>/<?=$event_id?>" class="btn btn-primary">Add a form</a>
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

                    <div class="card text-center mt-4 mb-4 w-75">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-11">&nbsp;
                                </div>
                                <div class="col-1">
                                    <a href="<?=base_url()?>events/edit_cash_requisition/<?=$org_id?>/<?=$event_id?>/<?=$csh_req_id?>" class="btn btn-warning btn-circle btn-sm">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="<?=base_url()?>events/delete_cash_requisition/<?=$org_id?>/<?=$event_id?>/<?=$csh_req_id?>" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
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
                if ($cat_req_id==="")
                {
                ?>
                    <div class="card text-center mt-4 mb-4">
                        
                        <div class="card-body">
                            <h5 class="card-title">No document is found</h5>
                            <p class="card-text">Something about the said document must be written here</p>
                            <a href="<?=base_url()?>events/add_catering_requisition/<?=$org_id?>" class="btn btn-primary">Add a form</a>
                        </div>

                    </div>

                <?php
                }   else
                {
                    echo "yo";
                }
                ?> 
            </div>
<!-- IN CAMPUS -->
            <button type="button" class="collapsiblex w-100">In-campus activity</button>
            <div class="content">
                <?php
                if ($in_cmp_id==="")
                {
                ?>
                    <div class="card text-center mt-4 mb-4">
                        
                        <div class="card-body">
                            <h5 class="card-title">No document is found</h5>
                            <p class="card-text">Something about the said document must be written here</p>
                            <a href="<?=base_url()?>events/add_in_campus_activity/<?=$org_id?>" class="btn btn-primary">Add a form</a>
                        </div>

                    </div>

                <?php
                }   else
                {
                    echo "yo";
                }
                ?> 
            </div>
<!-- TRAVEL PERMIT -->
            <button type="button" class="collapsiblex w-100">Travel Permit</button>
            <div class="content">
            <?php
                if ($trip_prmt_id==="")
                {
                ?>
                    <div class="card text-center mt-4 mb-4">
                        
                        <div class="card-body">
                            <h5 class="card-title">No document is found</h5>
                            <p class="card-text">Something about the said document must be written here</p>
                            <a href="<?=base_url()?>events/add_travel_permit/<?=$org_id?>" class="btn btn-primary">Add a form</a>
                        </div>

                    </div>

                <?php
                }   else
                {
                    echo "yo";
                }
                ?> 
            </div>
<!-- TRIP TICKET -->
            <button type="button" class="collapsiblex w-100">Trip Ticket</button>
            <div class="content">
            <?php
                if ($trip_tkt_id==="")
                {
                ?>
                    <div class="card text-center mt-4 mb-4">
                        
                        <div class="card-body">
                            <h5 class="card-title">No document is found</h5>
                            <p class="card-text">Something about the said document must be written here</p>
                            <a href="<?=base_url()?>events/add_trip_ticket/<?=$org_id?>" class="btn btn-primary">Add a form</a>
                        </div>

                    </div>

                <?php
                }   else
                {
                    echo "yo";
                }
                ?> 
            </div>

            
            
            

        </li>
        
    </ul>
            
    <div class="card-body">
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
    </div>

</div>
