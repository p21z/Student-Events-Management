<!-- DEAN KA -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Notifications</h6>
                        </div>
                        <div class="card-body">

                            <!-- <a href="<?=base_url()?>users/users_add" class="btn btn-secondary btn-icon-split add-item" style="margin-top:-1px">
                                <span class="icon text-white-50">
                                    <i class="fas fa-user-plus"></i>
                                </span>
                                <span class="text">
                                    ADD USER
                                </span>
                            </a>

                            <hr> -->

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Organization</th>
                                            <th>Username</th>
                                            <th>Fullname</th>
                                            <th>User type</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Organization</th>
                                            <th>Username</th>
                                            <th>Fullname</th>
                                            <th>User type</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                            $table_name="tbl_notif";

                                            $notif_data=get_desc($table_name, "notif_id");

                                            foreach ($notif_data as $key => $row) {
                                                $notif_id=$row['notif_id'];
                                                $username=$row['username'];
                                                $fullname=$row['fullname'];
                                                $user_type=$row['user_type'];
                                                $off_type=$row['off_type'];
                                                $datexx=$row['datexx'];
                                                $timexx=$row['timexx'];
                                                $action=$row['action'];
                                                $org_id=$row['org_id'];
                                                $event_id=$row['event_id'];
                                                
                                                $event_name="";
                                                $table_name_2="tbl_events";
                                                $column="event_id";
                                                $value=$event_id;
                                                $get_eventData=get_where_custom($table_name_2, $column, $value);
            
                                                foreach ($get_eventData as $key => $row)
                                                {
                                                    $event_name=$row['event_name'];
                                                }

                                                $table_name_3="tbl_orgs";
                                                $column="org_id";
                                                $value=$org_id;
                                                $get_orgData=get_where_custom($table_name_3, $column, $value);
            
                                                foreach ($get_orgData as $key => $row)
                                                {
                                                    $org_name=$row['org_name'];
                                                }
                                        ?>

                                            <tr>
                                                <td><?=$notif_id?></td>
                                                <td><?=$org_name?></td>
                                                <td><?=$username?></td>
                                                <td><?=$fullname?></td>
                                                <td>
                                                    <?=$user_type?>
                                                    <?php if ($off_type!==""){echo "-".$off_type;} ?>
                                                </td>
                                                <td><?=$datexx?></td>
                                                <td><?=$timexx?></td>
                                                <td>
                                                    <?php
                                                    if ($event_name!=="")
                                                    {
                                                        echo $event_name." (".$event_id.") ".$action;
                                                    } else
                                                    {
                                                        echo "event id(".$event_id.") ".$action;
                                                    }
                                                    
                                                    ?>
                                                </td>
                                                <!-- <td>
                                                    <a href="<?=base_url()?>users/users_edit/<?=$user_id?>" class="btn btn-warning btn-circle btn-sm">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <a href="<?=base_url()?>users/users_delete/<?=$user_id?>" class="btn btn-danger btn-circle btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    
                                                </td> -->
                                            </tr>
                                            
                                        <?php   }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                