<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            <span class="ml-5">IN/OUT CAMPUS ACTIVITY</span>
        </div>

        <form method="post" action="<?=base_url()?>events/add_in_campus_activity/<?=$url_id?>/<?=$url_id_2?>">
            
            <div class="" style="">
            <?php
                if($this->session->userdata("func_room"))
                {
            ?>

            <?php      
                }
            ?>

            <input type="text" name="url_id" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 1- org id" value="<?=$url_id?>" required hidden>

            <input type="text" name="url_id_2" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 2-event id " value="<?=$url_id_2?>" required hidden>

            <input type="text" name="organizer" class="form-control form-control-user add-input" autocomplete=off placeholder="Organizer" required>

            <select type="text" name="nature" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">Nature</option>
                <option value="Seminar">Seminar</option>
                <option value="Workshop">Workshop</option>
                <option value="Training">Training</option>
                <option value="Competition">Competition</option>
            </select>

            <input type="text" name="datexx" class="form-control form-control-user add-input" autocomplete=off placeholder="Date" required
            onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required>

            <input type="text" name="timexx" class="form-control form-control-user add-input" autocomplete=off placeholder="Time" required
            onfocus="(this.type='time')" onblur="if(this.value==''){this.type='text'}" required>

            <input type="text" name="speaker" class="form-control form-control-user add-input" autocomplete=off placeholder="Speakers">

            <input type="text" name="venue" class="form-control form-control-user add-input" autocomplete=off placeholder="Venue" required>

            <input type="number" name="num_participants" class="form-control form-control-user add-input" autocomplete=off placeholder="No. of Participants" required>

            <!-- <input type="number" name="program_budget" class="form-control form-control-user add-input" autocomplete=off placeholder="Program Budget"> -->

            <textarea name="objective_1" class="form-control form-control-user add-input" placeholder="Objective 1" id="floatingTextarea2" style="height: 100px"></textarea>

            <textarea name="objective_2" class="form-control form-control-user add-input" placeholder="Objective 2" id="floatingTextarea2" style="height: 100px"></textarea>

            <textarea name="objective_3" class="form-control form-control-user add-input" placeholder="Objective 3" id="floatingTextarea2" style="height: 100px"></textarea>

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

