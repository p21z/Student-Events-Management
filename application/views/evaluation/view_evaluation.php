
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
                                        
                                    <form method="post" action="<?=base_url()?>evaluation/add_evaluation_proc">
                                    <input type="text" name="event_id" class="form-control form-control-user add-input" autocomplete=off value="<?=$url_id?>" required hidden>
                                    <input type="text" name="user_id" class="form-control form-control-user add-input" autocomplete=off value="<?=$this->session->userdata('idxx')?>" required hidden>
                                    <input type="text" name="title" class="form-control form-control-user add-input" autocomplete=off value="<?=$event_name?>" required hidden>
                                    <input type="text" name="datexx" class="form-control form-control-user add-input" autocomplete=off value="<?=$timexx?>" required hidden>
                                    <input type="text" name="venue" class="form-control form-control-user add-input" autocomplete=off value="<?=$venue?>" required hidden>
                                    <?php
                                        $table_name="tbl_evaluation";
                                        $column1="event_id";
                                        $value1=$url_id;
                                        $column2="user_id";
                                        $value2=$url_id_2;

                                        $event_data=get_where_double_and($table_name, $column1, $value1, $column2, $value2);

                                            foreach ($event_data as $key => $row) {
                                                $ans1=$row['ans1'];
                                                $ans2=$row['ans2'];
                                                $ans3=$row['ans3'];
                                                $ans4=$row['ans4'];
                                                $ans5=$row['ans5'];
                                                $ans6=$row['ans6'];
                                                $ans7=$row['ans7'];
                                                $ans8=$row['ans8'];
                                            }
                                                
                                    ?>
                                    
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

                                            <td <?php if($ans1==3){echo 'class=bg-primary w-100';}?>>
                                                    <br>
                                                    <!-- <input type="radio" id="male" name="ans1" value="3" style="margin-left: 48%;" required> -->
                                                    <br><br>
                                                    <span <?php if($ans1==3){echo 'class=text-white';}?>>All od the three (3) indicators are met.</span>
                                                
                                            </td>
                                            
                                            <td <?php if($ans1==2){echo 'class=bg-primary w-100';}?>>
                                                <br>
                                                
                                                <br><br>
                                                <span <?php if($ans1==2){echo 'class=text-white';}?>>Only indicators A and B are met.</span>
                                            </td>

                                            <td <?php if($ans1==1){echo 'class=bg-primary w-100';}?>>
                                                <br>
                                                
                                                <br><br>
                                                <span <?php if($ans1==1){echo 'class=text-white';}?>>Only one (1) of the given indicators are met.</span>
                                            </td>

                                            <td <?php if($ans1==0){echo 'class=bg-primary w-100';}?>>
                                                <br>
                                                
                                                <br><br>
                                                <span <?php if($ans1==1){echo 'class=text-white';}?>>None of the gven indicators is met.</span>
                                            </td>
                                            
                                        </tr>
                                    <!-- 2 -->
                                        <tr>

                                            <td>
                                               2. The venue is fit for the activity
                                            </td>

                                            <td <?php if($ans2==3){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                            <br><br>
                                            <span <?php if($ans2==3){echo 'class=text-white';}?>>
                                            The sufficient ventilation and lighting in the venue made the participants very comfortable and convenient
                                            </span>
                                            </td>
                                            
                                            <td <?php if($ans2==2){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans2==2){echo 'class=text-white';}?>>
                                               There was enough ventilation and lighting in the venue which made the participants comfortable and convenient
                                               </span>
                                            </td>

                                            <td <?php if($ans2==1){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans2==1){echo 'class=text-white';}?>>
                                                There was not enough amount of air and lighting in the venue which made the participants a little uneasy
                                                </span>
                                            </td>

                                            <td <?php if($ans2==0){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans2==0){echo 'class=text-white';}?>>
                                            The ventilaton was very poor making the participants very uneasy and complaining
                                                </span>
                                            </td>
                                            
                                        </tr>

                                    <!-- 3 -->
                                        <tr>

                                            <td>
                                               3. The invited participants were able to attend the activity 
                                            </td>

                                            <td <?php if($ans3==3){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans3==3){echo 'class=text-white';}?>>
                                                91%-100% of the invited participants were present 
                                                </span>
                                            </td>
                                            
                                            <td <?php if($ans3==2){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans3==2){echo 'class=text-white';}?>>
                                               75%-90% of the invited participants attended the activity
                                               </span>
                                            </td>

                                            <td <?php if($ans3==1){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans3==1){echo 'class=text-white';}?>>
                                                60%-74% of the invited participants attended
                                                </span>
                                            </td>

                                            <td <?php if($ans3==0){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans3==0){echo 'class=text-white';}?>>
                                            Attendance was less than 60% of hte expected number
                                            </span>
                                            </td>
                                            
                                        </tr>

                                    <!-- 4 -->
                                        <tr>

                                            <td>
                                               4. The schedule of the program activity was favorable in the participants and speakers
                                            </td>

                                            <td <?php if($ans4==3){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans4==3){echo 'class=text-white';}?>>
                                            The schedule of the program/activity did not disturb any other activity of the invited participants and speakers
                                            </span>
                                            </td>
                                            
                                            <td <?php if($ans4==2){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans4==2){echo 'class=text-white';}?>>
                                            Some of the invited participants and speakers had other activities to attend during the schedule of the program/activity
                                            </span>
                                            </td>

                                            <td <?php if($ans4==1){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans4==1){echo 'class=text-white';}?>>
                                            Most of the invited participants and speakers had other activities to attend during the schedule of the program/activity
                                            </span>
                                            </td>

                                            <td <?php if($ans4==0){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans4==0){echo 'class=text-white';}?>>
                                            Almost all of the invited participants and speakers had other activities to attend during the schedule of the program/activity
                                            </span>
                                            </td>
                                            
                                        </tr>

                                    <!-- 5 -->
                                        <tr>

                                            <td>
                                               5. Provision of invitatonal allowanace was evident.
                                            </td>

                                            <td <?php if($ans5==3){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans5==3){echo 'class=text-white';}?>>
                                            Participants were notified 5 days before the activity
                                            </span>
                                            </td>
                                            
                                            <td <?php if($ans5==2){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans5==2){echo 'class=text-white';}?>>
                                            Participants were notified 3-4 days before the activity
                                            </span>
                                            </td>

                                            <td <?php if($ans5==1){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans5==1){echo 'class=text-white';}?>>
                                            Participants were notified 1-2 days before the activity
                                            </span>
                                            </td>

                                            <td <?php if($ans5==0){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans5==0){echo 'class=text-white';}?>>
                                            Participants were notified in less than a day before the activity
                                            </span>
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

                                            <td <?php if($ans6==3){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans6==3){echo 'class=text-white';}?>>
                                                All od the three (3) indicators are met.
                                                </span>
                                            </td>
                                            
                                            <td <?php if($ans6==2){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans6==2){echo 'class=text-white';}?>>
                                               Only indicators A and B are met.
                                               </span>
                                            </td>

                                            <td <?php if($ans6==1){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans6==1){echo 'class=text-white';}?>>
                                                Only one (1) of the given indicators are met.
                                                </span>
                                            </td>

                                            <td <?php if($ans6==0){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans6==0){echo 'class=text-white';}?>>
                                            None of the gven indicators is met.
                                            </span>
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

                                            <td <?php if($ans7==3){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans7==3){echo 'class=text-white';}?>>
                                                All od the five (5) indicators are met.
                                                </span>
                                            </td>
                                            
                                            <td <?php if($ans7==2){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans7==2){echo 'class=text-white';}?>>
                                                Only 3-4 of the given indicators are met.
                                                </span>
                                            </td>

                                            <td <?php if($ans7==1){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans7==1){echo 'class=text-white';}?>>
                                                Only 1-2 of the given indicators are met.
                                                </span>
                                            </td>

                                            <td <?php if($ans7==0){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans7==0){echo 'class=text-white';}?>>
                                            None of the gven indicators is met.
                                            </span>
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

                                            <td <?php if($ans8==3){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans8==3){echo 'class=text-white';}?>>
                                                All od the four (4) indicators are met.
                                                </span>
                                            </td>
                                            
                                            <td <?php if($ans8==2){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans8==2){echo 'class=text-white';}?>>
                                                Only 3 of the given indicators are met.
                                                </span>
                                            </td>

                                            <td <?php if($ans8==1){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans8==1){echo 'class=text-white';}?>>
                                                Only 1-2 of the given indicators are met.
                                                </span>
                                            </td>

                                            <td <?php if($ans8==0){echo 'class=bg-primary w-100';}?>>
                                            <br>
                                                
                                                <br><br>
                                                <span <?php if($ans8==0){echo 'class=text-white';}?>>
                                            None of the gven indicators is met.
                                            </span>
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                        
                                            <td colspan="6">

                                                <div align=center>

                                                    <?php
                                                    if($this->session->userdata('access')==="Student")
                                                    {
                                                    ?>
                                                        <a href="<?=base_url()?>evaluation" class="btn btn-danger btn-icon-split btn-lg" style=" margin-left:1%; margin-top:1%; margin-bottom: 1%">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-ban"></i>
                                                            </span>
                                                            <span class="text">
                                                                BACK
                                                            </span>
                                                        </a>
                                                    <?php
                                                    } else
                                                    {
                                                    ?>
                                                        <a href="<?=base_url()?>events/event_details/<?=$url_id?>" class="btn btn-danger btn-icon-split btn-lg" style=" margin-left:1%; margin-top:1%; margin-bottom: 1%">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-ban"></i>
                                                            </span>
                                                            <span class="text">
                                                                BACK
                                                            </span>
                                                        </a>
                                                    <?php
                                                    }
                                                    ?>
                                                    
                                                </div>

                                            </td>

                                        </tr>

                                        
                                    </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                