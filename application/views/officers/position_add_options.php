<div align=center>
    <div class="card mb-4 w-75">
        <div class="card-header">
            ADD NEW POSITION
        </div>

        <form method="post" action="<?=base_url()?>officers/position_add">
            
            <div class="ml-4 mt-4 mr-4" style="text-align: left;">

                <h4>Paulinian Student Government</h4>
                <hr class="mr-5">

                <?php
                    $table_name="tbl_orgs";
                    $column="org_category";
                    $value="Paulinian Student Government";

                    $user_data=get_where_custom($table_name, $column, $value);

                    foreach ($user_data as $key => $row) {
                        $org_id=$row['org_id'];
                        $org_name=$row['org_name'];

                        // CHECKS IF USER IS ALREADY AN ADVISER
                        $table_name="tbl_officers";
                        $column1="org_id";
                        $value1=$org_id;
                        $column2="user_id";
                        $value2=$this->session->userdata('user_id');

                        $counter_hide=count_where_double_and($table_name, $column1, $value1, $column2, $value2);
                        // echo $counter_hide;

                ?>

                        <a href="<?=base_url()?>officers/position_add/<?=$this->session->userdata('user_id')?>/<?=$org_id?>"><button type="button" class="btn btn-primary btn-md mb-3"
                        <?php
                        if ($counter_hide===1)
                        {
                          echo "disabled";
                        }
                        ?>><?=$org_name?></button></a>

                <?php
                    }
                ?>

            </div>

            <div class="ml-4 mt-4 mr-4" style="text-align: left;">

                <h4>Department-based</h4>
                <hr class="mr-5">
                <?php

                    $table_name="tbl_orgs";
                    $column="org_category";
                    $value="Department-based";

                    $user_data=get_where_custom($table_name, $column, $value);

                    foreach ($user_data as $key => $row) {
                        $org_id=$row['org_id'];
                        $org_name=$row['org_name'];

                        // CHECKS IF USER IS ALREADY AN ADVISER
                        $table_name="tbl_officers";
                        $column1="org_id";
                        $value1=$org_id;
                        $column2="user_id";
                        $value2=$this->session->userdata('user_id');

                        $counter_hide=count_where_double_and($table_name, $column1, $value1, $column2, $value2);
                        // echo $counter_hide;

                ?>

                        <a href="<?=base_url()?>officers/position_add/<?=$this->session->userdata('user_id')?>/<?=$org_id?>"><button type="button" class="btn btn-primary btn-md mb-3"
                        <?php
                        if ($counter_hide===1)
                        {
                          echo "disabled";
                        }
                        ?>><?=$org_name?></button></a>

                <?php
                    }
                ?>
            </div>

            <div class="ml-4 mt-4 mr-4" style="text-align: left;">

                <h4>Program-based</h4>
                <hr class="mr-5">
                <?php
                
                    $table_name="tbl_programs";
                    $column="prog_abbrv";
                    $value=$this->session->userdata("program");
                    

                    $prog_data=get_where_custom($table_name, $column, $value);

                    foreach ($prog_data as $key => $row) {
                        $prog_id=$row['prog_id'];
                    }
                    // echo $prog_id."<br><br>";

                    $table_name="tbl_inclusion";
                    $column="prog_id";
                    $value=$prog_id;

                    $inclusion_data=get_where_custom($table_name, $column, $value);

                    foreach ($inclusion_data as $key => $row) {
                        $org_id = $row['org_id'];
                        // $org_name = $row['org_name'];
                        // echo $org_id;

                        $table_name="tbl_orgs";
                        $column="org_id";
                        $value=$org_id;

                        $org_data=get_where_custom($table_name, $column, $value);
                        foreach ($org_data as $key => $row) {
                            $org_id = $row['org_id'];
                            $org_name = $row['org_name'];

                            // CHECKS IF USER IS ALREADY AN ADVISER
                            $table_name="tbl_officers";
                            $column1="org_id";
                            $value1=$org_id;
                            $column2="user_id";
                            $value2=$this->session->userdata('user_id');

                            $counter_hide=count_where_double_and($table_name, $column1, $value1, $column2, $value2);
                            // echo $counter_hide;

                            
                        ?>
                            <a href="<?=base_url()?>officers/position_add/<?=$this->session->userdata('user_id')?>/<?=$org_id?>"><button type="button" class="btn btn-primary btn-md mb-3"
                            <?php
                            if ($counter_hide===1)
                            {
                            echo "disabled";
                            }
                            ?>><?=$org_name?></button></a>
                <?php
                        }
                    }
                ?>
            </div>

            <br>
            <br>

            <!-- BUTTONS -->
            
            &nbsp;&nbsp;
            <a href="<?=base_url()?>officers/officer_details/<?=$this->session->userdata('user_id')?>" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
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
