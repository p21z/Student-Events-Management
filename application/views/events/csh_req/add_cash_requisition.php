<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            <span class="ml-5">CASH/CHECK REQUISITION</span>
        </div>

        <form method="post" action="<?=base_url()?>events/add_cash_requisition/<?=$url_id?>/<?=$url_id_2?>">
            
            <div class="" style="">
            <?php
                if($this->session->userdata("func_room"))
                {
            ?>

            <input type="text" name="url_id" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 1- org id" value="<?=$url_id?>" required hidden>

            <input type="text" name="url_id_2" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 2-event id " value="<?=$url_id_2?>" required hidden>

            <input type="number" name="busfare" class="form-control form-control-user add-input" autocomplete=off placeholder="Bus Fare" value="<?=$this->session->userdata("busfare")?>">

            <input type="number" name="taxifare" class="form-control form-control-user add-input" autocomplete=off placeholder="Taxi Fare" value="<?=$this->session->userdata("taxifare")?>">

            <input type="number" name="otherfare" class="form-control form-control-user add-input" autocomplete=off placeholder="Other fares" value="<?=$this->session->userdata("otherfare")?>">

            <input type="number" name="food_allowance" class="form-control form-control-user add-input" autocomplete=off placeholder="Food allowance" value="<?=$this->session->userdata("food_allowance")?>">

            <input type="number" name="reg_fee" class="form-control form-control-user add-input" autocomplete=off placeholder="Registration Fee" value="<?=$this->session->userdata("reg_fee")?>">

            <input type="number" name="accommodation" class="form-control form-control-user add-input" autocomplete=off placeholder="Accomodation" value="<?=$this->session->userdata("accommodation")?>">

            <input type="number" name="honorarium" class="form-control form-control-user add-input" autocomplete=off placeholder="Honorarium" value="<?=$this->session->userdata("honorarium")?>">

            <input type="number" name="rel_of_acco" class="form-control form-control-user add-input" autocomplete=off placeholder="Release of accomodation" value="<?=$this->session->userdata("rel_of_acco")?>">

            <input type="number" name="monthly_bills" class="form-control form-control-user add-input" autocomplete=off placeholder="Monthly bills" value="<?=$this->session->userdata("monthly_bills")?>">

            <input type="number" name="supplies" class="form-control form-control-user add-input" autocomplete=off placeholder="Supplies" value="<?=$this->session->userdata("supplies")?>">

            <textarea name="purpose" class="form-control form-control-user add-input" placeholder="Purpose" id="floatingTextarea2" style="height: 100px"><?=$this->session->userdata("purpose")?></textarea>

            <input type="text" name="pay_to" class="form-control form-control-user add-input" autocomplete=off placeholder="Pay to" value="<?=$this->session->userdata("pay_to")?>" required>

            <input type="text" name="date_need" class="form-control form-control-user add-input" autocomplete=off placeholder="Pay date" value="<?=$this->session->userdata("date_need")?>" required
            onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required>



            <?php      
                } else
                {
            ?>

            <input type="text" name="url_id" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 1- org id" value="<?=$url_id?>" required hidden>

            <input type="text" name="url_id_2" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 2-event id " value="<?=$url_id_2?>" required hidden>

            <input type="number" name="busfare" class="form-control form-control-user add-input" autocomplete=off placeholder="Bus Fare">

            <input type="number" name="taxifare" class="form-control form-control-user add-input" autocomplete=off placeholder="Taxi Fare">

            <input type="number" name="otherfare" class="form-control form-control-user add-input" autocomplete=off placeholder="Other fares">

            <input type="number" name="food_allowance" class="form-control form-control-user add-input" autocomplete=off placeholder="Food allowance">

            <input type="number" name="reg_fee" class="form-control form-control-user add-input" autocomplete=off placeholder="Registration Fee">

            <input type="number" name="accommodation" class="form-control form-control-user add-input" autocomplete=off placeholder="Accomodation">

            <input type="number" name="honorarium" class="form-control form-control-user add-input" autocomplete=off placeholder="Honorarium">

            <input type="number" name="rel_of_acco" class="form-control form-control-user add-input" autocomplete=off placeholder="Release of accomodation">

            <input type="number" name="monthly_bills" class="form-control form-control-user add-input" autocomplete=off placeholder="Monthly bills">

            <input type="number" name="supplies" class="form-control form-control-user add-input" autocomplete=off placeholder="Supplies">

            <textarea name="purpose" class="form-control form-control-user add-input" placeholder="Purpose" id="floatingTextarea2" style="height: 100px"></textarea>

            <input type="text" name="pay_to" class="form-control form-control-user add-input" autocomplete=off placeholder="Pay to" required>

            <input type="text" name="date_need" class="form-control form-control-user add-input" autocomplete=off placeholder="Pay date" required
            onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required>

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

