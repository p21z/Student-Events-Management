$table_name="tbl_notif";

                                $notif_data=get($table_name);

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

                                ?>

                                <a class="dropdown-item d-flex align-items-center" href="<?=base_url().'events/event_details/'.$event_id?>">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Decemberx 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>

                                <?php

                                }