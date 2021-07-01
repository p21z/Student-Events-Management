<?php
date_default_timezone_set('Asia/Singapore');
$xdate=date('Y-m-d');

$trp_tckt_data=get_where_custom('tbl_trp_tckt', 'event_id', $url_id);

foreach ($trp_tckt_data as $key => $row)
{
    $trp_tckt_id=$row['trp_tckt_id'];
    $request_unit=$row['request_unit'];
    $person=$row['person'];
    $driver=$row['driver'];
    $vehicle=$row['vehicle'];
    $activity=$row['activity'];
    $date_use=$row['date_use'];
    $dept_time=$row['dept_time'];
    $eta=$row['eta'];
    $passengers=$row['passengers'];
    $destination=$row['destination'];


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
                <td colspan="2" style="width: 4.25in;border: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style="font-size:16px;">TRIP TICKET</span></strong></p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style="font-size:16px;">(Please accomplish in duplicate)</span></strong></p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td style="width: 2in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 2.25in;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif; text-align: center'><b><u><?=$xdate?></u></b></p>
                </td>
            </tr>
            <tr>
                <td style="width: 2in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
                <td style="width: 2.25in;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif; text-align: center'> Date</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>1. &nbsp; Requesting Unit: <b><u>SITE</u></b></p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp; &nbsp; &nbsp; Person: <b><u><?=$person?></u></b></p>
                </td>
            </tr>
            <tr>
                <td style="width: 2in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>2. &nbsp; Driver: <b><u><?=$driver?></u></b></p>
                </td>
                <td style="width: 2.25in;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Vehicle: <b><u><?=$vehicle?></u></b></p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>3. &nbsp; Activity: <b><u><?=$activity?></u></b></p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp; &nbsp; &nbsp; Date of use: <b><u><?=$date_use?></u></b></p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>4. &nbsp; No. of Passengers: <b><u><?=$passengers?></u></b> </p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>5. &nbsp; Destination: <b><u><?=$destination?></u></b></p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>6. &nbsp; Departure Time: <b><u><?=$dept_time?></u></b></p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp;Expected/ Time of Arrival: <b><u><?=$eta?></u></b></p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Noted by:__________________________________________</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Unit Head &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Approved by: _______________________________________</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;VP ADMINISTRATION</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="width: 4.25in;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                    <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Driver&rsquo;s Signature:___________________________________</p>
                </td>
            </tr>
        </tbody>
    </table>
    <p style="page-break-after: always;"></p>

<?php
}
?>