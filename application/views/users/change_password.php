<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            CHANGE PASSWORD
        </div>

        <form method="post" action="<?=base_url()?>users/change_password">
            
            <div class="" style="">
                
                <input type="text" name="url_id" class="form-control form-control-user add-input" autocomplete=off value='<?=$url_id?>' required hidden>

                <input type="password" name="old_pass" class="form-control form-control-user add-input" autocomplete=off placeholder="Your current password" required>

                <input type="password" name="new_pass_1" class="form-control form-control-user add-input" autocomplete=off placeholder="User's new password" required>

                <input type="password" name="new_pass_2" class="form-control form-control-user add-input" autocomplete=off placeholder="Confirm user's new password" required>

            </div>

            <br>
            <br>

            <!-- BUTTONS -->
            <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    UPDATE USER'S PASSWORD
                </span>
            </button>


            
            &nbsp;&nbsp;
            <a href="<?=base_url()?>users/users_edit/<?=$url_id?>" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-ban"></i>
                </span>
                <span class="text">
                    BACK
                </span>
            </a>

        
        <form>

    </div>

</div>
