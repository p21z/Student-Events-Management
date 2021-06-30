<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            ADD NEW USER
        </div>

        <form method="post" action="<?=base_url()?>users/users_add">
            <?php
                if($this->session->userdata("username_1"))
                {
            ?>
                <div class="" style="">

                    <input type="text" name="username" class="form-control form-control-user add-input" autocomplete=off value=<?=$this->session->userdata("username_1")?> required>

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

                <input type="text" name="username" class="form-control form-control-user add-input" autocomplete=off placeholder="Username" required>

                <input type="text" name="firstname" class="form-control form-control-user add-input" autocomplete=off placeholder="First name" required>

                <input type="text" name="lastname" class="form-control form-control-user add-input" autocomplete=off placeholder="Last name" required>

                <input type="password" name="password" class="form-control form-control-user add-input" autocomplete=off placeholder="Password" required>

                <input type="email" name="email" class="form-control form-control-user add-input" autocomplete=off placeholder="Email" required>

                <input type="number" name="contact_no" class="form-control form-control-user add-input" autocomplete=off placeholder="Contact" required>

            <?php
                }
            ?>

                <select type="text" name="gender" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">Gender</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
                </select>

                <select type="text" name="user_type" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">User type</option>
                <option value="Dean">Dean</option>
                <option value="Adviser">Adviser</option>
                <option value="Officer">Officer</option>
                <option value="Student">Student</option>
                </select>

            </div>

            <br>
            <br>

            <!-- BUTTONS -->
            <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    NEXT
                </span>
            </button>
            
            &nbsp;&nbsp;
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
