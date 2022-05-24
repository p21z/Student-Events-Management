
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
                                                $user_type_1=$row['user_type'];
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
                                                $image=$row['image'];
                                        ?>

                                            <tr>
                                                <td>
                                                    <?php
                                                    if ($image==="")
                                                    {
                                                        echo '<i class="fas fa-user-circle fa-3x"></i>';
                                                    } else
                                                    {
                                                    ?> 
                                                    <img class="img-profile rounded-circle object-fit-dp-manage"
                                                    src="<?=base_url()?>assets/img/<?=$image?>">
                                                    <?php
                                                    }
                                                    ?>
                                                    
                                                </td>
                                                <td><?=$username?></td>
                                                
                                                <td><?=$firstname?></td>
                                                <td><?=$lastname?></td>
                                                <td><?=$email?></td>
                                                <td><?=$contact_no?></td>
                                                <td><?=$gender?></td>
                                                <td><?php   if ($user_type==="Dean"){echo "Admin";} elseif ($user_type==="Dean 2"){echo "Dean";}else{echo $user_type;} ?>
                                                <td>
                                                    <?php
                                                    
                                                    if($time_stamp==="")
                                                    {
                                                        echo "N/A";
                                                    } else
                                                    {
                                                        echo $time_stamp;
                                                    }

                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    
                                                    if($year_level==="")
                                                    {
                                                        echo "N/A";
                                                    } else
                                                    {
                                                        echo $year_level;
                                                    }

                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    
                                                    if($programx==="")
                                                    {
                                                        echo "N/A";
                                                    } else
                                                    {
                                                        echo $programx;
                                                    }

                                                    ?>
                                                </td>   
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
                                                    
                                                    <?php
                                                    if ($user_type!=="Dean" AND $user_type!=="Dean 2")
                                                    {?>
                                                    <a href="<?=base_url()?>users/users_delete/<?=$user_id?>" class="btn btn-danger btn-circle btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <?php
                                                    }
                                                    ?> 
                                                </td>
                                            </tr>
                                            
                                        <?php   }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                