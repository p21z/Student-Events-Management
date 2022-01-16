<?php
$table_name = "tbl_users";
$column = "user_id";

$get_userData = get_where_custom($table_name, $column, $this->session->userdata('idxx'));



//fetch result and pass it  to an array
    foreach ($get_userData as $key => $row) {
        
        $user_id=$row['user_id'];
        $username=$row['username'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $password=$row['password'];
        $email=$row['email'];
        $contact_no=$row['contact_no'];
        $gender=$row['gender'];
        $user_type=$row['user_type'];
        $time_stamp=$row['time_stamp'];
        $year_level=$row['year_level'];
        $program=$row['program'];
        $section=$row['section'];
        $archive=$row['archive'];
        $statusxx=$row['statusxx'];
        $counterxx=$row['counterxx'];

        $image=$row['image'];
    
    }

    $qr="https://chart.googleapis.com/chart?cht=qr&chs=250x250&chl={$user_id}";
    
?>

<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            EDIT PROFILE
        </div>
        <?php
    if (isset($_SESSION['error_msg1']))
    {
        echo "<div class='alert alert-success mt-4 ml-4 mr-4'>";
        echo $_SESSION['error_msg1'];
        echo "</div>";
        unset($_SESSION['error_msg1']);
    }
    ?>
        <div class="flex-container" style="display: flex">
            <div class="col-4">
                <a href="<?=$qr?>" target="_blank">
                    <img src="<?=$qr?>" alt="" style="text-align:left; width: 100%;" class="mt-4">
                </a>
            </div>
            <div class="col-8">
                <form method="post" action="<?=base_url()?>profile">
                    
                        <div class="" style="">
                            
                            <input type="text" name="url_id" value="<?=$this->session->userdata('idxx')?>" hidden>

                            <input type="text" name="username" class="form-control form-control-user add-input-profile" autocomplete=off value="<?=$username?>" required readonly>

                            <input type="text" name="firstname" class="form-control form-control-user add-input-profile" autocomplete=off value="<?=$firstname?>" placeholder="Firstname" required>

                            <input type="text" name="lastname" class="form-control form-control-user add-input-profile" autocomplete=off value="<?=$lastname?>" placeholder="Lastname" required>

                            <input type="email" name="email" class="form-control form-control-user add-input-profile" autocomplete=off value="<?=$email?>" placeholder="Email" required>

                            <input type="number" name="contact_no" class="form-control form-control-user add-input-profile" autocomplete=off value="<?=$contact_no?>" placeholder="Contact no" required>           

                        <select type="text" name="gender" class="form-control form-control-user add-input-profile" autocomplete=off required>
                        <option value="">Gender</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        </select>

                        <?php
                            if($user_type==="Student" or $user_type==="Officer")
                            {
                        ?>
                            <input type="number" name="year_level" class="form-control form-control-user add-input-profile" autocomplete=off value="<?=$year_level?>" placeholder="Year Level" required>

                            <select type="text" name="program" class="form-control form-control-user add-input-profile" autocomplete=off required>
                            <option value="">Program</option>
                            <option value="BSIT">BSIT</option>
                            <option value="BSCpE">BSCpE</option>
                            <option value="BSCE">BSCE</option>
                            <option value="BSEnSE">BSEnSE</option>
                            </select>

                            <input type="text" name="section" class="form-control form-control-user add-input-profile" autocomplete=off value="<?=$section?>" placeholder="Section">
                        <?php
                            }
                        ?>


                    </div>

                    <br>

                    <!-- BUTTONS -->
                    
                    <a href="<?=base_url()?>profile/change_password" class="btn btn-secondary btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
                        <span class="icon text-white-50">
                            <i class="fas fa-ban"></i>
                        </span>
                        <span class="text">
                            CHANGE PASSWORD
                        </span>
                    </a>

                    <a href="<?=base_url()?>profile/change_picture" class="btn btn-secondary btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
                        <span class="icon text-white-50">
                            <i class="far fa-images"></i>
                        </span>
                        <span class="text">
                        &nbsp;&nbsp;CHANGE PICTURE&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                    </a>
                    <br>
                    <br>

                    <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:3%; margin-bottom: 5%">
                        <span class="icon text-white-50">
                            <i class="fas fa-user-plus"></i>
                        </span>
                        <span class="text">
                            EDIT PROFILE
                        </span>
                    </button>
                    &nbsp;&nbsp;
                    <a href="<?=base_url()?>home" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
                        <span class="icon text-white-50">
                            <i class="fas fa-ban"></i>
                        </span>
                        <span class="text">
                            CANCEL
                        </span>
                    </a>

                
                <form>

            </div>
        </div>
    </div>

</div>
