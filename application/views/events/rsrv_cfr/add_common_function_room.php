<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            <span class="ml-5">RESERVATION FOR THE USE OF COMMON FUNCTION ROOM/FACILITIES</span>
        </div>

        <form method="post" action="<?=base_url()?>events/add_common_function_room/<?=$url_id?>/<?=$url_id_2?>">
            
            <div class="" style="">
            <?php
                if($this->session->userdata("func_room"))
                {
            ?>

            <input type="text" name="url_id" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 1- org id" value="<?=$url_id?>" required hidden>

            <input type="text" name="url_id_2" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 2-event id " value="<?=$url_id_2?>" required hidden>

            <input type="text" name="func_room" class="form-control form-control-user add-input" autocomplete=off placeholder="Facility/Function Room" value="<?=$this->session->userdata("func_room")?>" required>

            <input type="number" name="num_users" class="form-control form-control-user add-input" autocomplete=off placeholder="No. of Users" value="<?=$this->session->userdata("num_users")?>" required>

            <textarea name="purpose" class="form-control form-control-user add-input" placeholder="Purpose of usage" id="floatingTextarea2" style="height: 100px"><?=$this->session->userdata("purpose")?></textarea>

            <!-- <input type="text" name="fund_source" class="form-control form-control-user add-input" autocomplete=off placeholder="Source of funds" value="<?=$this->session->userdata("fund_source")?>" required> -->

            <input type="number" name="amount" class="form-control form-control-user add-input" autocomplete=off placeholder="Amount" value="<?=$this->session->userdata("num_users")?>" required>

            <input type="text" name="person_respo" class="form-control form-control-user add-input" autocomplete=off placeholder="Person responsible" value="<?=$this->session->userdata("person_respo")?>" required>

            <textarea name="specs" class="form-control form-control-user add-input" placeholder="Specifications" id="floatingTextarea2" style="height: 100px"><?=$this->session->userdata("specs")?></textarea>

            <?php      
                } else
                {
            ?>

                <input type="text" name="url_id" class="form-control form-control-user add-input" autocomplete=off placeholder="Facility/Function Room" value="<?=$url_id?>" required hidden>

                <input type="text" name="url_id_2" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 2-event id " value="<?=$url_id_2?>" required hidden>

                <input type="text" name="func_room" class="form-control form-control-user add-input" autocomplete=off placeholder="Facility/Function Room" required>

                <input type="number" name="num_users" class="form-control form-control-user add-input" autocomplete=off placeholder="No. of Users" required>

                <textarea name="purpose" class="form-control form-control-user add-input" placeholder="Purpose of usage" id="floatingTextarea2" style="height: 100px"></textarea>

                <!-- <input type="text" name="fund_source" class="form-control form-control-user add-input" autocomplete=off placeholder="Source of funds" required> -->

                <input type="number" name="amount" class="form-control form-control-user add-input" autocomplete=off placeholder="Amount" required>

                <input type="text" name="person_respo" class="form-control form-control-user add-input" autocomplete=off placeholder="Person responsible" required>
                
                <textarea name="specs" class="form-control form-control-user add-input" placeholder="Specifications" id="floatingTextarea2" style="height: 100px"></textarea>

                             
                
            <?php
                }
            ?>
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
            <a href="<?=base_url()?>events/event_details/<?=$url_id_2?>" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
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

