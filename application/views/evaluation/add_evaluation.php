
                    <?php
                    $table_name="tbl_evaluation";
                    $column1="event_id";
                    $column2="user_id";
                    $value1=$url_id;
                    $value2=$url_id_2;
                    $count_data=count_where_double_and($table_name, $column1, $value1, $column2, $value2);
                    if ($count_data===1)
                    {
                        // redirect('/evaluation/view_evaluation/'.$url_id."/".$url_id_2);
                        echo $count_data;
                    }
                    else
                    {
                    ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Evaluation</h6>
                        </div>
                        <div class="card-body">
                        
                        <?php
                        $table_name="tbl_events";
                        $column="event_id";
                        
                        $event_data=get_where_custom($table_name, $column, $url_id);
                        
                            foreach ($event_data as $key => $row) {
                                $event_name=$row['event_name'];
                                $venue=$row['venue'];
                                $start_date=$row['start_date'];
                                $end_date=$row['end_date'];
                                $start_time=$row['start_time'];
                                $end_time=$row['end_time'];
                                
                            }

                                if ($start_date!==$end_date)
                                {
                                    $timexx=$start_date." - ".$end_date;
                                } else 
                                {
                                    $timexx=$start_date;
                                }
                        ?>
                       
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title of Activity</th>
                                            <th colspan=5><?=$event_name?></th>
                                        </tr>
                                        <tr>
                                            <th>Date</th>
                                            <th colspan=2><?=$timexx?></th>
                                            <th>Venue</th>
                                            <th colspan=2><?=$venue?></th>
                                        </tr>
                                        <tr>
                                            <th>Performance Indicators</th>
                                            <th>3(E)</th>
                                            <th>2(M)</th>
                                            <th>1(S)</th>
                                            <th>0(X)</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Performance Indicators</th>
                                            <th>3(E)</th>
                                            <th>2(M)</th>
                                            <th>1(S)</th>
                                            <th>0(X)</th>
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                    <!-- 0 -->
                                        
                                    <form method="post" action="<?=base_url()?>evaluation/add_evaluation">
                                    <input type="text" name="event_id" class="form-control form-control-user add-input" autocomplete=off value="<?=$url_id?>" required hidden>
                                    <input type="text" name="user_id" class="form-control form-control-user add-input" autocomplete=off value="<?=$this->session->userdata('idxx')?>" required hidden>
                                    <input type="text" name="title" class="form-control form-control-user add-input" autocomplete=off value="<?=$event_name?>" required hidden>
                                    <input type="text" name="datexx" class="form-control form-control-user add-input" autocomplete=off value="<?=$timexx?>" required hidden>
                                    <input type="text" name="venue" class="form-control form-control-user add-input" autocomplete=off value="<?=$venue?>" required hidden>

                                    
                                    <!-- 1 -->
                                        <tr>

                                            <td>
                                                1. The objectives were:
                                                <br>
                                                <br>
                                                a.) The objectives were clearly articulated to the participants.
                                                <br>
                                                b.) The objectives of the program/activity are evident in the presentations/activties.
                                                <br>
                                                c.) The objectives were attained by the end of the program
                                            </td>

                                            <td>
                                                <br>
                                                <input type="radio" id="male" name="ans1" value="3" style="margin-left: 48%;" required>
                                                <br><br>
                                                All od the three (3) indicators are met.
                                                
                                            </td>
                                            
                                            <td>
                                                <br>
                                                <input type="radio" id="male" name="ans1" value="2" style="margin-left: 48%;">
                                                <br><br>
                                               Only indicators A and B are met.
                                            </td>

                                            <td>
                                                <br>
                                                <input type="radio" id="male" name="ans1" value="1" style="margin-left: 48%;">
                                                <br><br>
                                                Only one (1) of the given indicators are met.
                                            </td>

                                            <td>
                                                <br>
                                                <input type="radio" id="male" name="ans1" value="0" style="margin-left: 48%;">
                                                <br><br>
                                            None of the gven indicators is met.
                                            </td>
                                            
                                        </tr>
                                    <!-- 2 -->
                                        <tr>

                                            <td>
                                               2. The venue is fit for the activity
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans2" value="3" style="margin-left: 48%;" required>
                                                <br><br>
                                                The sufficient ventilation and lighting in the venue made the participants very comfortable and convenient
                                            </td>
                                            
                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans2" value="2" style="margin-left: 48%;">
                                                <br><br>
                                               There was enough ventilation and lighting in the venue which made the participants comfortable and convenient
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans2" value="1" style="margin-left: 48%;">
                                                <br><br>
                                                There was not enough amount of air and lighting in the venue which made the participants a little uneasy
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans2" value="0" style="margin-left: 48%;">
                                                <br><br>
                                            The ventilaton was very poor making the participants very uneasy and complaining
                                            </td>
                                            
                                        </tr>

                                    <!-- 3 -->
                                        <tr>

                                            <td>
                                               3. The invited participants were able to attend the activity 
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans3" value="3" style="margin-left: 48%;" required>
                                                <br><br>
                                                91%-100% of the invited participants were present 
                                            </td>
                                            
                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans3" value="2" style="margin-left: 48%;">
                                                <br><br>
                                               75%-90% of the invited participants attended the activity
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans3" value="1" style="margin-left: 48%;">
                                                <br><br>
                                                60%-74% of the nvited participants attended 
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans3" value="0" style="margin-left: 48%;">
                                                <br><br>
                                            Attendance was less than 60% of hte expected number
                                            </td>
                                            
                                        </tr>

                                    <!-- 4 -->
                                        <tr>

                                            <td>
                                               4. The schedule of the program activity was favorable in the participants and speakers
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans4" value="3" style="margin-left: 48%;" required>
                                                <br><br>
                                            The schedule of the program/activity did not disturb any other activity of the invited participants and speakers
                                            </td>
                                            
                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans4" value="2" style="margin-left: 48%;">
                                                <br><br>
                                            Some of the invited participants and speakers had other activities to attend during the schedule of the program/activity
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans4" value="1" style="margin-left: 48%;">
                                                <br><br>
                                            Most of the invited participants and speakers had other activities to attend during the schedule of the program/activity
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans4" value="0" style="margin-left: 48%;">
                                                <br><br>
                                            Almost all of the invited participants and speakers had other activities to attend during the schedule of the program/activity
                                            </td>
                                            
                                        </tr>

                                    <!-- 5 -->
                                        <tr>

                                            <td>
                                               5. Provision of invitatonal allowanace was evident.
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans5" value="3" style="margin-left: 48%;" required>
                                                <br><br>
                                            Participants were notified 5 days before the activity
                                            </td>
                                            
                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans5" value="2" style="margin-left: 48%;">
                                                <br><br>
                                            Participants were notified 3-4 days before the activity
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans5" value="1" style="margin-left: 48%;">
                                                <br><br>
                                            Participants were notified 1-2 days before the activity
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans5" value="0" style="margin-left: 48%;">
                                                <br><br>
                                            Participants were notified in less than a day before the activity
                                            </td>
                                            
                                        </tr>

                                    <!-- 6 -->
                                        <tr>

                                            <td>
                                                6. Significance of the Event:
                                                <br>
                                                a.) The activity demonstrate a sophisticated, multi-dimensional analysis of aesthetic expression.
                                                <br>
                                                b.) The activity engages students into spatial intelligence enhancement as a result of their expression of an opinion towards a certain issue
                                                <br>
                                                c.) The objectives were attained by the end of the program
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans6" value="3" style="margin-left: 48%;" required>
                                                <br><br>
                                                All od the three (3) indicators are met.
                                            </td>
                                            
                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans6" value="2" style="margin-left: 48%;">
                                                <br><br>
                                               Only indicators A and B are met.
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans6" value="1" style="margin-left: 48%;">
                                                <br><br>
                                                Only one (1) of the given indicators are met.
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans6" value="0" style="margin-left: 48%;">
                                                <br><br>
                                            None of the gven indicators is met.
                                            </td>
                                            
                                        </tr>

                                    <!-- 7 -->
                                        <tr>

                                            <td>
                                                7. The facilitators were:
                                                <br>
                                                <br>
                                                a.) accomodating
                                                <br>
                                                b.) well-prepared
                                                <br>
                                                c.) fair in treating participants
                                                <br>
                                                d.) punctual
                                                <br>
                                                e.) courteous
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans7" value="3" style="margin-left: 48%;" required>
                                                <br><br>
                                                All od the five (5) indicators are met.
                                            </td>
                                            
                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans7" value="2" style="margin-left: 48%;">
                                                <br><br>
                                                Only 3-4 of the given indicators are met.
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans7" value="1" style="margin-left: 48%;">
                                                <br><br>
                                                Only 1-2 of the given indicators are met.
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans7" value="0" style="margin-left: 48%;">
                                                <br><br>
                                            None of the gven indicators is met.
                                            </td>
                                            
                                        </tr>

                                        <!-- 7 -->
                                        <tr>

                                            <td>
                                                8. The participants were:
                                                <br>
                                                <br>
                                                a.) punctual
                                                <br>
                                                b.) courteous
                                                <br>
                                                c.) participative
                                                <br>
                                                d.) obedient
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans8" value="3" style="margin-left: 48%;" required>
                                                <br><br>
                                                All od the four (4) indicators are met.
                                            </td>
                                            
                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans8" value="2" style="margin-left: 48%;">
                                                <br><br>
                                                Only 3 of the given indicators are met.
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans8" value="1" style="margin-left: 48%;">
                                                <br><br>
                                                Only 1-2 of the given indicators are met.
                                            </td>

                                            <td>
                                            <br>
                                                <input type="radio" id="male" name="ans8" value="0" style="margin-left: 48%;">
                                                <br><br>
                                            None of the gven indicators is met.
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                        
                                            <td colspan="6">

                                                <div align=center>
                                                    <button type="submit" class="btn btn-success btn-icon-split btn-lg" style="margin-left:%; margin-top:1%; margin-bottom: 1%">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-user-plus"></i>
                                                        </span>
                                                        <span class="text">
                                                            SUBMIT
                                                        </span>
                                                    </button>

                                                    <a href="<?=base_url()?>events/event_details/<?=$url_id?>" class="btn btn-danger btn-icon-split btn-lg" style=" margin-left:1%; margin-top:1%; margin-bottom: 1%">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-ban"></i>
                                                        </span>
                                                        <span class="text">
                                                            CANCEL
                                                        </span>
                                                    </a>
                                                </div>

                                            </td>

                                        </tr>

                                        
                                    </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>

                