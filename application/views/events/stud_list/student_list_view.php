<?php
        $event_data=get_where_custom("tbl_events", "event_id", $url_id);
        foreach ($event_data as $key =>$row)
        {
            $statusxx=$row['statusxx'];
        }
        ?>
                    <div class="card mt-4 mb-4 w-100">
                    <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary">Student List</h5>
                        </div>
                        <div class="card-body">
                            <?php
                            if ($statusxx==="Pending")
                            {
                            ?>
                            <a href="<?=base_url()?>events/add_student_list/<?=$url_id?>" class="btn btn-secondary btn-icon-split add-item" style="margin-top:-1px;">
                                <span class="icon text-white-50">
                                    <i class="fas fa-user-plus"></i>
                                </span>
                                <span class="text">
                                    ADD STUDENT
                                </span>
                            </a>

                            <hr>
                            <?php
                            }
                            ?>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Year</th>
                                            <th>Program</th>
                                            <th>Section</th>
                                            <?php
                                            if ($statusxx==="Pending")
                                            {
                                            ?>
                                            <th>Options</th>
                                            <?php
                                            }
                                            ?>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Year</th>
                                            <th>Program</th>
                                            <th>Section</th>
                                            <?php
                                            if ($statusxx==="Pending")
                                            {
                                            ?>
                                            <th>Options</th>
                                            <?php
                                            }
                                            ?>
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
                                            
                                            <?php
                                            if ($statusxx==="Pending")
                                            {
                                            ?>
                                            <td>
                                                <a href="<?=base_url()?>events/delete_student_list/<?=$url_id?>/<?=$url_id?>/<?=$stud_list_id?>" class="btn btn-danger btn-circle btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                            <?php
                                            }
                                            ?>
                                            
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div align=center>
                                <a href="<?=base_url()?>events/event_details/<?=$url_id?>" class="btn btn-danger btn-icon-split add-item mt-4" >
                                    <span class="icon text-white-50">
                                    <i class="fas fa-external-link-alt"></i>
                                    </span>
                                    <span class="text">
                                        BACK
                                    </span>
                                </a>
                            </div>


                        </div>
                    </div>