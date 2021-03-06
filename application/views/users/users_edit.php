<?php
$table_name = "tbl_users";
$column = "user_id";

$get_userData = get_where_custom($table_name, $column, $url_id);

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
    
    }
    
?>

<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            EDIT USER
        </div>

        <?php

        if ($this->session->userdata('err_msg1'))
        {
            echo "<div class='alert alert-success mt-4 ml-4 mr-4'>";
            echo $_SESSION['err_msg1'];
            echo "</div>";
            unset($_SESSION['err_msg1']);
        }

        ?>

        <form method="post" action="<?=base_url()?>users/users_edit">
            <?php
                if($this->session->userdata("username_1"))
                {
            ?>
            
                <div class="" style="">

                <input type="text" name="url_id" value='<?=$this->session->userdata("url_id")?>' hidden>

                    <input type="text" name="username" class="form-control form-control-user add-input" autocomplete=off value=<?=$this->session->userdata("username_1")?> required readonly>

                    <input type="text" name="firstname" class="form-control form-control-user add-input" autocomplete=off value=<?=$this->session->userdata("firstname")?> required>

                    <input type="text" name="lastname" class="form-control form-control-user add-input" autocomplete=off value=<?=$this->session->userdata("lastname")?> required>

                    <input type="password" name="password" class="form-control form-control-user add-input" autocomplete=off value=<?=$this->session->userdata("password")?> required>

                    <input type="email" name="email" class="form-control form-control-user add-input" autocomplete=off value=<?=$this->session->userdata("email")?> required>

                    <input type="number" name="contact_no" class="form-control form-control-user add-input" autocomplete=off value=<?=$this->session->userdata("contact_no")?> required>

            <?php      
                } else
                {
            ?>
            
                <div class="" style="">
                    
                    <input type="text" name="url_id" value="<?=$url_id?>" hidden>

                    <input type="text" name="username" class="form-control form-control-user add-input" autocomplete=off value="<?=$username?>" required readonly>

                    <input type="text" name="firstname" class="form-control form-control-user add-input" autocomplete=off value="<?=$firstname?>" required>

                    <input type="text" name="lastname" class="form-control form-control-user add-input" autocomplete=off value="<?=$lastname?>" required>

                    

                    <input type="email" name="email" class="form-control form-control-user add-input" autocomplete=off value="<?=$email?>" required>

                    <input type="number" name="contact_no" class="form-control form-control-user add-input" autocomplete=off value="<?=$contact_no?>" required>

            <?php
                }
            ?>
            
                <select type="text" name="statusxx" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">Status</option>
                <option value="0">Active</option>
                <option value="1">Inactive</option>
                </select>  

                <select type="text" name="gender" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">Gender</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                </select>

                <select type="text" name="user_type" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">User type</option>
                <option value="Dean">Admin</option>
                <option value="Dean 2">Dean</option>
                <option value="Adviser">Adviser</option>
                <option value="Officer">Officer</option>
                <option value="Student">Student</option>
                </select>

            </div>

            <br>

            <!-- BUTTONS -->

            <a href="<?=base_url()?>users/change_password/<?=$url_id?>" class="btn btn-secondary btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-ban"></i>
                </span>
                <span class="text">
                    CHANGE PASSWORD
                </span>
            </a>

            <a href="<?=base_url()?>users/change_picture/<?=$url_id?>" class="btn btn-secondary btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="far fa-images"></i>
                </span>
                <span class="text">
                &nbsp;&nbsp;CHANGE PICTURE&nbsp;&nbsp;&nbsp;&nbsp;
                </span>
            </a>
            <br>
            <br>

            <!-- BUTTONS -->
            <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:-1%; margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    EDIT USER
                </span>
            </button>
            
            
            <a href="<?=base_url()?>users" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
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
