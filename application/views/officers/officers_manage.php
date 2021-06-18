<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"></h1>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary">Officers</h5>
                        </div>
                        <div class="card-body">


                            <hr>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <!-- <th>Password</th> -->
                                            <th>Full Name</th>
                                            <th>Contacts</th>
                                            <th>???</th>
                                            <th>???</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <!-- <th>Password</th> -->
                                            <th>Full Name</th>
                                            <th>Contacts</th>
                                            <th>???</th>
                                            <th>???</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php
                                            $table_name="tbl_users";
                                            $column="user_type";
                                            $value="Officer";

                                            $user_data=get_where_custom($table_name, $column, $value);

                                            foreach ($user_data as $key => $row) {
                                                $user_id=$row['user_id'];
                                                $username=$row['username'];
                                                $password=$row['password'];
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
                                                <!-- <td><?=$password?></td> -->
                                                <td><?=$firstname?> <?=$lastname?></td>
                                                <td><?=$email?> - <?=$contact_no?></td>
                                                <!-- <td><?=$gender?></td> -->
                                                <!-- <td><?=$user_type?></td> -->
                                                <!-- <td><?=$time_stamp?></td> -->
                                                <td><?=$year_level?> - <?=$programx?></td>
                                                
                                                <!-- <td><?=$archive?></td> -->
                                                <!-- <td><?=$statusxx?></td> -->
                                                <!-- <td>0</td> -->
                                                <td>

                                                <a href="<?=base_url()?>officers/officer_details/<?=$user_id?>" class="btn btn-dark btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="far fa-eye"></i>
                                                    </span>
                                                    <span class="text">
                                                        View "kung saan ka officer"
                                                    </span>
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