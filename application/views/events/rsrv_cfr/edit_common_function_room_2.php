<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            <span class="ml-5">RESERVATION FOR THE USE OF COMMON FUNCTION ROOM/FACILITIES</span>
        </div>

        <form method="post" action="<?=base_url()?>events/edit_common_function_room_2/<?=$url_id?>/">
            
            <div class="" style="">

                <input type="text" name="date_start" class="form-control form-control-user add-input" autocomplete=off placeholder="Date Start" required
                onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required>

                <input type="text" name="time_start" class="form-control form-control-user add-input" autocomplete=off placeholder="Time Start" required
                onfocus="(this.type='time')" onblur="if(this.value==''){this.type='text'}" required>

                <input type="text" name="date_end" class="form-control form-control-user add-input" autocomplete=off placeholder="Date End" required
                onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required>

                <input type="text" name="time_end" class="form-control form-control-user add-input" autocomplete=off placeholder="Time End" required
                onfocus="(this.type='time')" onblur="if(this.value==''){this.type='text'}" required>
             

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
            <a href="<?=base_url()?>events/edit_common_function_room/<?=$this->session->userdata('url_id')?>/<?=$this->session->userdata('url_id_2')?>/<?=$this->session->userdata('url_id_3')?>" class="btn btn-dark btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
                <span class="icon text-white-50">
                    <i class="fas fa-undo"></i>
                </span>
                <span class="text">
                    BACK
                </span>
            </a>
            &nbsp;&nbsp;
            <a href="<?=base_url()?>events/event_details/<?=$url_id?>" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
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



