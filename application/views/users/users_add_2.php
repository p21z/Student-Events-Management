<div align=center>
    <div class="card mb-4 w-75 full-div">
        <div class="card-header">
            ADD NEW USER
        </div>

        <form method="post" action="<?=base_url()?>users/users_add_2">

            <div class="" style="">

            <input type="number" name="year_level" class="form-control form-control-user add-input" autocomplete=off placeholder="Year Level" required>

            <select type="text" name="program" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">Program</option>
                <option value="BSIT">BSIT</option>
                <option value="BSCpE">BSCpE</option>
                <option value="BSCE">BSCE</option>
                <option value="BSEnSE">BSEnSE</option>
            </select>

            <input type="text" name="section" class="form-control form-control-user add-input" autocomplete=off placeholder="Section">

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
            <a href="<?=base_url()?>users/users_add" class="btn btn-dark btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-undo"></i>
                </span>
                <span class="text">
                    BACK
                </span>
            </a>
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
