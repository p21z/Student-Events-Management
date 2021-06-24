<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            ADD NEW VISITOR
        </div>

        <form method="post" action="<?=base_url()?>visitors/visitors_add">
            
            <div class="" style="">

                <input type="text" name="event_id" class="form-control form-control-user add-input" autocomplete=off placeholder="event_id" value="<?=$url_id?>" required hidden>

                <input type="text" name="firstname" class="form-control form-control-user add-input" autocomplete=off placeholder="First name" required>

                <input type="text" name="lastname" class="form-control form-control-user add-input" autocomplete=off placeholder="Last name" required>

                <input type="number" name="contact" class="form-control form-control-user add-input" autocomplete=off placeholder="Contact" required>

                <input type="email" name="email" class="form-control form-control-user add-input" autocomplete=off placeholder="Email" required>

                <input type="text" name="company" class="form-control form-control-user add-input" autocomplete=off placeholder="Company/School">

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
            <a href="<?=base_url()?>visitors/all/<?=$url_id?>" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
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
