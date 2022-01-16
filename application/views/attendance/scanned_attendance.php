<div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Students</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Section</th>
                            <th>User type</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Username</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Section</th>
                            <th>User type</th>
                            <th>Options</th>
                        </tr>
                    </tfoot>
                    <tbody>

                    <?php
                        
                        $table_name="tbl_users";
                        $column="user_id";

                        $user_data=get_where_custom($table_name, $column, $url_id_2);

                        foreach ($user_data as $key => $row)
                        {
                            $user_id=$row['user_id'];

                            $username=$row['username'];
                            $firstname=$row['firstname'];
                            $lastname=$row['lastname'];

                            $email=$row['email'];
                            $contact_no=$row['contact_no'];

                            $user_type=$row['user_type'];

                            $year_level=$row['year_level'];
                            $program=$row['program'];
                            $section=$row['section'];
                        
                    ?>
                        <tr>
                            <td><?=$username?></td>
                            <td><?=$firstname." ".$lastname?></td>
                            <td><?=$email?></td>
                            <td><?=$year_level."-".$program." ".$section?></td>
                            <td><?=$user_type?></td>
                            <td>
                            
                            <?php
                                $table_name="tbl_attendee";
                                $column1="event_id";
                                $column2="user_id";

                                $count_attendee_data=count_where_double_and($table_name, $column1, $url_id, $column2, $user_id);

                                if($count_attendee_data===0)
                                {
                            ?>
                                
                                    <a href="<?=base_url()?>attendance/add_attendee_details/<?=$url_id?>/<?=$user_id?>" class="btn btn-dark btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="far fa-eye"></i>
                                        </span>
                                        <span class="text">
                                            Add attendee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </span>
                                    </a>
                            <?php
                                } else {
                            ?>
                                <button class="btn btn-secondary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="far fa-eye"></i>
                                    </span>
                                    <span class="text">
                                        Attendance recorded
                                    </span>
                                </button>
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
    <div class="card-body">

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