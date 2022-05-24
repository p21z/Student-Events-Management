<!-- Page Heading -->
<?php
date_default_timezone_set('Asia/Singapore');
$xdate=date('Y-m-d');
?>

<link href="<?=base_url('Template/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('Template/css/sb-admin-2.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('Template/css/main.css')?>" rel="stylesheet">
    <link href="<?=base_url('Template/css/collapse.css')?>" rel="stylesheet">

    <link href="<?=base_url('Template/vendor/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">    

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Officers (as of <?= $xdate ?>)</h6>
                        </div>
                        <div class="card-body">


                            <hr>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                           
                                            <th>Username</th>
                                            <!-- <th>Password</th> -->
                                            <th>Full Name</th>
                                            <th>Contacts</th>
                                            <th>Email</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            
                                            <th>Username</th>
                                            <!-- <th>Password</th> -->
                                            <th>Full Name</th>
                                            <th>Contacts</th>
                                            <th>Email</th>
                                            
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
                                                
                                                <td><?=$username?></td>
                                                <!-- <td><?=$password?></td> -->
                                                <td><?=$firstname?> <?=$lastname?></td>
                                                <td><?=$contact_no?></td>
                                                <td><?=$email?></td>
                                                <!-- <td><?=$user_type?></td> -->
                                                <!-- <td><?=$time_stamp?></td> -->
                                                <!-- <td><?=$year_level?> - <?=$programx?></td> -->
                                                
                                                <!-- <td><?=$archive?></td> -->
                                                <!-- <td><?=$statusxx?></td> -->
                                                <!-- <td>0</td> -->
                                                
                                            </tr>
                                            
                                        <?php   }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>