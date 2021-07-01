<?php
date_default_timezone_set('Asia/Singapore');
$xdate=date('Y-m-d');

$rsrv_cfr_data=get_where_custom('tbl_rsrv_cfr', 'event_id', $url_id);

foreach ($rsrv_cfr_data as $key => $row)
{
    $rsrv_cfr_id=$row['rsrv_cfr_id'];
    $func_room=$row['func_room'];
    $num_users=$row['num_users'];
    $purpose=$row['purpose'];
    $fund_source=$row['fund_source'];
    $amount=$row['amount'];
    $person_respo=$row['person_respo'];
    $specs=$row['specs'];
    $start_date=$row['start_date'];
    $start_time=$row['start_time'];
    $end_date=$row['end_date'];
    $end_time=$row['end_time'];
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

<table style="border-collapse:collapse;border:none; margin-left: auto;
margin-right: auto;">
    <tbody>
        <tr>
            <td colspan="4" style="width: 467.5pt;border: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style="font-size:19px;">OFFICE OF THE VICE PRESIDENT FOR ADMINISTRATION<br>&nbsp;</span></strong></p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style="font-size:19px;">RESERVATION FOR THE USER OF COMMON FUNCTION ROOM/FACILITIES</span></strong></p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 354.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
            </td>
            <td style="width: 113pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align: center;'><b><u><?=$xdate?></u></b></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 354.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
            </td>
            <td style="width: 113pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Date</p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Facility/Function Room: <b><u><?=$func_room ?></u></b></p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 351.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Unit/Department:<b><u>SITE</u></b></p>
            </td>
            <td colspan="2" style="width: 116pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>No. Of Users:<b><u><?=$num_users ?></u></b></p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Person Responsible:
                    <b><u><?=$person_respo?></u></b>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Purpose:<b><u><?=$purpose  ?></u></b></p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Source of Fund:<b><u>Student Activity Fund</u></b></p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Amount:Student Activity Fund</p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Date/Time Needed:<b><u>
                    <?php
                        if($start_date===$end_date)
                        {
                            echo $end_date;
                            if ($start_time===$end_time){
                                echo " (".$end_time.")";
                            } else
                            {
                                echo " (". $start_time . " - " . $end_time .")";
                            }
                        } else
                        {
                            echo $start_date." - ".$end_date;
                            if ($start_time===$end_time){
                                echo " (".$end_time.")";
                            } else
                            {
                                echo " (". $start_time . " - " . $end_time .")";
                            }
                        }
                    ?>
                </u></b></p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Specifications (Arrangement/ things needed):<b><u><?=$specs?></u></b></p></br>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Noted by:___________________________________________________________________________</p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Department/Unit Head</p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 354.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Approved by:_____________________________</p>
            </td>
            <td style="width: 113pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>______________________</p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 354.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; VP ADMINISTRATION</p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
            </td>
            <td style="width: 113pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; VP FINANCE</p>
            </td>
        </tr>
        <tr>
            <td colspan="4" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
            </td>
        </tr>
        <tr>
            <td style="width: 343.15pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Received by:______________________________</p>
            </td>
            <td colspan="3" style="width: 124.35pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
            </td>
        </tr>
        <tr>
            <td style="width: 343.15pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;In-charge, Facility</p>
            </td>
            <td colspan="3" style="width: 124.35pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
            </td>
        </tr>
        <tr>
            <td style="width: 343.15pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Note: To be filled up three days prior to the activity</p>
            </td>
            <td colspan="3" style="width: 124.35pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
            </td>
        </tr>
    </tbody>
</table>
<p style="page-break-after: always"></p>
<?php
}
?>