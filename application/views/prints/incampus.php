<?php
date_default_timezone_set('Asia/Singapore');
$xdate=date('Y-m-d');

$in_cmp_data=get_where_custom('tbl_in_cmp', 'event_id', $url_id);

foreach ($in_cmp_data as $key => $row)
{
    $in_cmp_id=$row['in_cmp_id'];
    $organizer=$row['organizer'];
    $nature=$row['nature'];
    $objective_1=$row['objective_1'];
    $objective_2=$row['objective_2'];
    $objective_3=$row['objective_3'];
    $datexx=$row['datexx'];
    $timexx=$row['timexx'];
    $speaker=$row['speaker'];
    $venue=$row['venue'];
    $num_participants=$row['num_participants'];
    $program_budget=$row['program_budget'];
}

?>

<div align="center" style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:-65px;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'>
    <table style="border-collapse:collapse;border:none;" border=0>
        <tbody>
            <tr>
                <td style="width: 56.95pt;border: none solid windowtext;padding: 0cm 5.4pt;height: 42.05pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:right;'><span style='font-size:24px;font-family:"Old English";'><img width="44" src="<?=base_url()?>assets/img/logo.png" alt="Main Spup Logo"></span></p>
                </td>
                <td style="width: 205.05pt;border-top: none solid windowtext;border-right: none solid windowtext;border-bottom: none solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 42.05pt;vertical-align: top;">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:24px;font-family:"Canterbury";'>S</span><span style="font-size:21px;font-family:Canterbury;">t. Paul University Philippines</span></p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style='font-size:16px;font-family:"Times New Roman",serif;'>Tuguegarao City, Cagayan 3500</span></p>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<table style="width:562.55pt;border-collapse:collapse;border:none;margin-left:6.75pt;margin-right:6.75pt; margin: 0 auto;">
    <tbody>
        <tr>
            <td colspan="10" style="width: 562.55pt;border: 0pt solid windowtext;padding: 0cm 5.4pt;height: 10.25pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">OSA FORM 002&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="10" style="width: 562.55pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 21.8pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style="font-size:13px;">OFFICE OF STUDENT AFFAIRS</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><span style="font-size:13px;">IN &ndash; CAMPUS ACTIVITY</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 41.2pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 14.45pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">School:</span></p>
            </td>
            <td colspan="7" style="width: 521.35pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 14.45pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;"><b><u>SITE</u></b></span></p>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="width: 153.65pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 14.75pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">Leaders/Organizers of activity:</span></p>
            </td>
            <td colspan="5" style="width: 408.9pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 14.75pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">
                
                <?php

                $event_data=get_where_custom('tbl_events', 'event_id', $url_id);

                foreach ($event_data as $key => $row)
                {
                    $org_id=$row['org_id'];
                    $event_name=$row['event_name'];
                    // echo $org_id." org_id "; 
                    $officer_data=get_where_proj_spec_2($org_id);

                    foreach ($officer_data as $key => $row)
                    {
                        $user_id=$row['user_id'];
                        // echo $user_id." user_id "; 
                        $user_data=get_where_custom('tbl_users', 'user_id', $user_id);
                        $user_count=count_where('tbl_users', 'user_id', $user_id);
                        foreach ($user_data as $key => $row)
                        {
                            $firstname=$row['firstname'];
                            $lastname=$row['lastname'];

                            echo '<b><u>'.$firstname.' '.$lastname.'</u></b> ';

                        }
                    }
                }

                ?>
                
                </span></p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 13.48%; border-right: 0pt solid windowtext; border-bottom: 0pt solid windowtext; border-left: 0pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 16.0pt; vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">Nature of the activity:</span></p>
            </td>
            <td colspan="6" style="width: 86.3824%; border-top: none; border-left: none; border-bottom: 0pt solid windowtext; border-right: 0pt solid windowtext; padding: 0cm 5.4pt; height: 16.0pt; vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;"><b><u><?=$nature?></u></b></span></p>
            </td>
        </tr>
        <tr>
            <td colspan="6" style="width: 172pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 16.3pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">Objective(s) purpose(s) of the activity:</span></p>
            </td>
            <td colspan="4" style="width: 390.55pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 16.3pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;"></span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 21.3pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 20.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">1.</span></p>
            </td>
            <td colspan="9" style="width: 541.25pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 20.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;"><b><u><?=$objective_1?></u></b></span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 21.3pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 18pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">2.</span></p>
            </td>
            <td colspan="9" style="width: 541.25pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 18pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;"><b><u><?=$objective_2?></u></b></span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 21.3pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 20.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">3.</span></p>
            </td>
            <td colspan="9" style="width: 541.25pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 20.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;"><b><u><?=$objective_3?></u></b></span></p>
            </td>
        </tr>
        <tr>
            <td colspan="10" style="width: 562.55pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 16.35pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 40.05pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 20.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">Date</span></p>
            </td>
            <td colspan="5" style="width: 250.05pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 20.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;"><b><u><?=$datexx?></u></b></span></p>
            </td>
            <td style="width: 42.05pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 20.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">Venue:</span></p>
            </td>
            <td colspan="2" style="width: 230.4pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 20.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;"><b><u><?=$venue?></u></b></span></p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 40.05pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 20pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">Time:&nbsp;</span></p>
            </td>
            <td colspan="5" style="width: 250.05pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 20pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;"><b><u><?=$timexx?></u></b></span></p>
            </td>
            <td colspan="2" style="width: 117.8pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 20pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">Number of participants:&nbsp;</span></p>
            </td>
            <td style="width: 154.65pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 20pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;"><b><u><?=$num_participants?></u></b></span></p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 13.48%; border-right: 0pt solid windowtext; border-bottom: 0pt solid windowtext; border-left: 0pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 20.55pt; vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">Speaker/s (if any):</span></p>
            </td>
            <td colspan="3" style="width: 35.3508%; border-top: none; border-left: none; border-bottom: 0pt solid windowtext; border-right: 0pt solid windowtext; padding: 0cm 5.4pt; height: 20.55pt; vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;"><b><u><?=$speaker?></u></b></span></p>
            </td>
            <td colspan="2" style="width: 117.8pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 20.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">Program budget (if any):</span></p>
            </td>
            <td style="width: 154.65pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 20.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;"><b><u>Student Activity Fund</u></b></span></p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 13.48%; border-right: 0pt solid windowtext; border-bottom: 0pt solid windowtext; border-left: 0pt solid windowtext; border-image: initial; border-top: none; padding: 0cm 5.4pt; height: 20pt; vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">Date Submitted:</span></p>
            </td>
            <td colspan="3" style="width: 35.3508%; border-top: none; border-left: none; border-bottom: 0pt solid windowtext; border-right: 0pt solid windowtext; padding: 0cm 5.4pt; height: 20pt; vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">___________________________________</span></p>
            </td>
            <td colspan="3" style="width: 272.45pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 20pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="7" rowspan="3" style="width: 290.0pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 10.45pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
            </td>
            <td colspan="3" style="width: 272.45pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 10.45pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 272.45pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 10.7pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">Submitted by:</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 272.45pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 21.65pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">____________________________</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">Signature over printed name</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="7" style="width: 290.0pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 21.65pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">Endorsed:</span></p>
            </td>
            <td colspan="3" style="width: 272.45pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 21.65pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="7" style="width: 290.0pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 21.65pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">____________________________</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Adviser</span></p>
            </td>
            <td colspan="3" style="width: 272.45pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 21.65pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="7" style="width: 290.0pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 21.65pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">____________________________</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Dean</span></p>
            </td>
            <td colspan="3" style="width: 272.45pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 21.65pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="7" style="width: 290.0pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 21.65pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">Approved by:</span></p>
            </td>
            <td colspan="3" style="width: 272.45pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 21.65pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="7" style="width: 290.0pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 21.65pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">____________________________</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">Director, Student Affairs</span></p>
            </td>
            <td colspan="3" style="width: 272.45pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 21.65pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">____________________________</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">Vice-President, Academics</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="10" style="width: 562.55pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 21.65pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">&nbsp;</span></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;">N.B.</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="10" style="width: 562.55pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 21.65pt;vertical-align: top;">
                <div style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'>
                    <ol style="margin-bottom:0cm;list-style-type: decimal;margin-left:32.6px;">
                        <li style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:10.0pt;">This form must be submitted at least one (1) week prior to the holding of the proposed activity.</span></li>
                        <li style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:10.0pt;">Fill-up three (3) copies of this form and submit to the following after duly signed Vice-President for Academics, Director of Student Affairs</span></li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td style="border:none;"><br></td>
            <td style="border:none;"><br></td>
            <td style="border:none;"><br></td>
            <td style="border: none; width: 3.5763%;"><br></td>
            <td style="border: none; width: 4.1266%;"><br></td>
            <td style="border:none;"><br></td>
            <td style="border:none;"><br></td>
            <td style="border:none;"><br></td>
            <td style="border:none;"><br></td>
            <td style="border:none;"><br></td>
        </tr>
    </tbody>
</table>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:13px;line-height:107%;">&nbsp;</span></p>