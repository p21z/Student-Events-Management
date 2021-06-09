<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            <span class="ml-5">TRIP TICKET</span>
        </div>

        <form method="post" action="<?=base_url()?>events/add_trip_ticket/<?=$url_id?>/<?=$url_id_2?>">
            
            <div class="" style="">

            <input type="text" name="url_id" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 1- org id" value="<?=$url_id?>" required hidden>

            <input type="text" name="url_id_2" class="form-control form-control-user add-input" autocomplete=off placeholder="URL ID 2-event id " value="<?=$url_id_2?>" required hidden>

            <input type="text" name="request_unit" class="form-control form-control-user add-input" autocomplete=off placeholder="Request Unit" value="SITE" readonly required>

            <input type="text" name="person" class="form-control form-control-user add-input" autocomplete=off placeholder="Person" required>
            
            <input type="text" name="driver" class="form-control form-control-user add-input" autocomplete=off placeholder="Driver" required>

            <!-- <input type="text" name="vehicle" class="form-control form-control-user add-input" autocomplete=off placeholder="Vehicle" required> -->
            <select type="text" name="vehicle" class="form-control form-control-user add-input" autocomplete=off required>
                <option value="">Vehicle</option>

                <?php
                $table_name="tbl_vehicles";
                $column="avail";
                $value= 1;

                $vehicle_data=get_where_custom($table_name, $column, $value);

                foreach ($vehicle_data as $key => $row) {
                    $car_id=$row['car_id'];
                    $car_name=$row['car_name'];
                    $car_plate=$row['car_plate'];
                    $avail=$row['avail'];
                
                ?>

                <!-- CONTINUE HERE -->
                <option value="<?=$car_name?> <?=$car_plate?>"><?=$car_name?> <?=$car_plate?></option>

                <?php
                }
                ?>
            </select>


            <input type="text" name="activity" class="form-control form-control-user add-input" autocomplete=off placeholder="Activity" required>

            <input type="text" name="date_use" class="form-control form-control-user add-input" autocomplete=off placeholder="Date" required
            onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}">

            <input type="text" name="dept_time" class="form-control form-control-user add-input" autocomplete=off placeholder="Departure Time" required
            onfocus="(this.type='time')" onblur="if(this.value==''){this.type='text'}">

            <input type="text" name="eta" class="form-control form-control-user add-input" autocomplete=off placeholder="Date of return" required
            onfocus="(this.type='time')" onblur="if(this.value==''){this.type='text'}">

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

