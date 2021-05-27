<div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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
                            <th>Status</th>
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
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php
                            
                            $table_name="tbl_attendee";
                            $column1="event_id";
                            $column2="statusxx";

                            
                            $attendee_data=get_where_double_and($table_name, $column1, $url_id, "statusxx", "Late");

                            foreach ($attendee_data as $key => $row)
                            {
                                $attendance_id=$row['attendance_id'];
                                $event_id=$row['event_id'];
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

                                $statusxx=$row['statusxx'];
                            

                        ?>

                        <tr>
                            <td><?=$username?></td>
                            <td><?=$firstname." ".$lastname?></td>
                            <td><?=$email?></td>
                            <td><?=$year_level."-".$program." ".$section?></td>
                            <td><?=$user_type?></td>
                            <td><?=$statusxx?></td>
                            <td>
                                <a href="<?=base_url()?>attendance/edit_attendee/<?=$attendance_id?>" class="btn btn-warning btn-circle btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="<?=base_url()?>attendance/delete_attendee/<?=$attendance_id?>/<?=$event_id?>" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
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