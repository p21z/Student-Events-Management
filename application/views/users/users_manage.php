
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Users</h6>
                        </div>
                        <div class="card-body">

                            <a href="<?=base_url()?>users/users_add" class="btn btn-secondary btn-icon-split add-item" style="margin-top:-1px">
                                <span class="icon text-white-50">
                                    <i class="fas fa-user-plus"></i>
                                </span>
                                <span class="text">
                                    ADD USER
                                </span>
                            </a>

                            <hr>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Gender</th>
                                            <th>User type</th>
                                            <th>Date Created</th>
                                            <th>Year</th>
                                            <th>Program</th>
                                            <th>Status</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Gender</th>
                                            <th>User type</th>
                                            <th>Date Created</th>
                                            <th>Year</th>
                                            <th>Program</th>
                                            <th>Status</th>
                                            <th>Options</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                            $table_name="tbl_users";

                                            $user_data=get($table_name);

                                            foreach ($user_data as $key => $row) {
                                                $user_id=$row['user_id'];
                                                $username=$row['username'];
                                                
                                                $firstname=$row['firstname'];
                                                $lastname=$row['lastname'];
                                                $email=$row['email'];
                                                $contact_no=$row['contact_no'];
                                                $gender=$row['gender'];
                                                $user_type=$row['user_type'];
                                                $time_stamp=$row['time_stamp'];
                                                $year_level=$row['year_level'];
                                                $program=$row['program'];
                                                $section=$row['section'];
                                                if ($section!=="")
                                                {
                                                    $programx=$program."-".$section;
                                                } else
                                                {
                                                    $programx=$program;
                                                }
                                                $archive=$row['archive'];
                                                $statusxx=$row['statusxx'];
                                                $counterxx=$row['counterxx'];
                                        ?>

                                            <tr>
                                                <td><?=$user_id?></td>
                                                <td><?=$username?></td>
                                                
                                                <td><?=$firstname?></td>
                                                <td><?=$lastname?></td>
                                                <td><?=$email?></td>
                                                <td><?=$contact_no?></td>
                                                <td><?=$gender?></td>
                                                <td><?=$user_type?></td>
                                                <td><?=$time_stamp?></td>
                                                <td><?=$year_level?></td>
                                                <td><?=$programx?></td>
                                                <!-- <td><?=$archive?></td> -->
                                                <td>
                                                    <?php
                                                        if ($statusxx==="0")
                                                        {
                                                            echo "ACTIVE";
                                                        } elseif ($statusxx==="1"){
                                                            echo "INACTIVE";
                                                        }
                                                    ?>
                                                </td>
                                                
                                                
                                                <td>
                                                    <a href="<?=base_url()?>users/users_edit/<?=$user_id?>" class="btn btn-warning btn-circle btn-sm">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <a href="<?=base_url()?>users/users_delete/<?=$user_id?>" class="btn btn-danger btn-circle btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            
                                        <?php   }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                