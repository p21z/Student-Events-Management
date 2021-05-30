<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            CHANGE PASSWORD
        </div>

        <form method="post" action="<?=base_url()?>profile/change_password">
            
            <div class="" style="">
                
                <input type="password" name="old_pass" class="form-control form-control-user add-input" autocomplete=off placeholder="Current password" required>

                <input type="password" name="new_pass_1" class="form-control form-control-user add-input" autocomplete=off placeholder="New password" required>

                <input type="password" name="new_pass_2" class="form-control form-control-user add-input" autocomplete=off placeholder="Confirm new password" required>

            </div>

            <br>
            <br>

            <!-- BUTTONS -->
            <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-user-plus"></i>
                </span>
                <span class="text">
                    UPDATE PASSWORD
                </span>
            </button>


            
            &nbsp;&nbsp;
            <a href="<?=base_url()?>profile" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
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
