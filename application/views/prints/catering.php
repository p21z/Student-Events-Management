<?php
date_default_timezone_set('Asia/Singapore');
$xdate=date('Y-m-d');

$event_data=get_where_custom('tbl_events', 'event_id', $url_id);

foreach ($event_data as $key => $row)
{
    $org_id=$row['org_id'];
    $event_name=$row['event_name'];

    $org_data=get_where_custom('tbl_orgs', 'org_id', $org_id);

    foreach ($org_data as $key => $row)
    {
        $org_name=$row['org_name'];
    }
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


<table style="width: 5.0e+2pt;margin-left:-.25pt;border-collapse:collapse;border:none;margin: 0 auto;">
    <tbody>
        <tr>
            <td colspan="5" style="width: 44.42%; border: 0pt solid windowtext; padding: 0cm 5.4pt; vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Sub unit:</p>
            </td>
            <td colspan="4" style="width: 55.2797%; border-top: 0pt solid windowtext; border-right: 0pt solid windowtext; border-bottom: 0pt solid windowtext; border-image: initial; border-left: none; padding: 0cm 5.4pt; vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><h3><b><u>SITE</u></h3></b></p>
            </td>
        </tr>
        <tr>
            <td colspan="9" style="width: 503.35pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 20.95pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><u><span style="font-size:19px;">Catering Requisition Form</span></u></strong></p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 78pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 27.65pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>Requested By:</p>
            </td>
            <td colspan="3" style="width: 27.0026%; border-top: none; border-left: none; border-bottom: 0pt solid windowtext; border-right: 0pt solid windowtext; padding: 0cm 5.4pt; height: 27.65pt; vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><b><u><?=$org_name?></u></b></p>
            </td>
            <td style="width: 5.8934%; border-top: none; border-left: none; border-bottom: 0pt solid windowtext; border-right: 0pt solid windowtext; padding: 0cm 5.4pt; height: 27.65pt; vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>Released by:</p>
            </td>
            <td colspan="3" style="width: 45.3078%; border-top: none; border-left: none; border-bottom: 0pt solid windowtext; border-right: 0pt solid windowtext; padding: 0cm 5.4pt; height: 27.65pt; vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>______________________________</p>
            </td>
        </tr>
        <tr>
            <td colspan="9" style="width: 503.35pt;border-right: 0pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
            </td>
        </tr>
        <tr>
            <td style="width: 71pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 35.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>Date</p>
            </td>
            <td colspan="2" style="width: 2cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 35.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>Time needed</p>
            </td>
            <td style="width: 70.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 35.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>Occasion</p>
            </td>
            <td style="width: 5.2309%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 35.55pt; vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><br></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>No. of Guest</p>
            </td>
            <td colspan="2" style="width: 20.2946%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; height: 35.55pt; vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><br></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>Menu</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>(Breakfast, Lunch, Dinner, Snacks)</p>
            </td>
            <td style="width: 83.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 35.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>Venue</p>
            </td>
            <td style="width: 65.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;height: 35.55pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>Remarks</p>
            </td>
        </tr>

<?php
    $cat_req_data=get_where_custom('tbl_cat_req', 'event_id', $url_id);
    foreach ($cat_req_data as $key => $row)
    {
        $cat_req_id=$row['cat_req_id'];
        $event_id=$row['event_id'];
        $datexx=$row['datexx'];
        $time_needed=$row['time_needed'];
        $occasion=$row['occasion'];
        $num_guest=$row['num_guest'];
        $order=$row['orderxx'];
        $menu=$row['menu'];
        $venue=$row['venue'];
        $remarks=$row['remarks'];
?>
        <tr>
            <td style="width: 71pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><b><?=$datexx?></b></p>
            </td>
            <td colspan="2" style="width: 2cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><b><?=$time_needed ?></b></p>
            </td>
            <td style="width: 70.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><b><?=$occasion ?></b></p>
            </td>
            <td style="width: 5.2309%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><b><?=$num_guest ?></b></p>
            </td>
            <td colspan="2" style="width: 20.2946%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><b><?=$order."-".$menu ?></b></p>
            </td>
            <td style="width: 83.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><b><?=$venue ?></b></p>
            </td>
            <td style="width: 65.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><b><?=$remarks ?></b></p>
            </td>
        </tr>
<?php
    }

    $cat_req_count=count_where('tbl_cat_req', 'event_id', $url_id);
    if ($cat_req_count<12)
    {
        $test_counter=12-$cat_req_count;

        for ($i=1; $i <= $test_counter; $i++)
        {
            ?>
            <tr>
                <td style="width: 71pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</b></p>
                </td>
                <td colspan="2" style="width: 2cm;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                </td>
                <td style="width: 70.85pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                </td>
                <td style="width: 5.2309%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                </td>
                <td colspan="2" style="width: 20.2946%; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0cm 5.4pt; vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                </td>
                <td style="width: 83.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                </td>
                <td style="width: 65.45pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                    <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                </td>
            </tr>
            <?php
        }
    }
?>


        
        <tr>
            <td style="border:none;"><br></td>
            <td style="border:none;"><br></td>
            <td style="border:none;"><br></td>
            <td style="border:none;"><br></td>
            <td style="border: none; width: 5.2309%;"><br></td>
            <td style="border: none; width: 5.8934%;"><br></td>
            <td style="border: none; width: 13.7763%;"><br></td>
            <td style="border:none;"><br></td>
            <td style="border:none;"><br></td>
        </tr>
    </tbody>
</table>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
<table style="width:503.25pt;margin-left:-.25pt;border-collapse:collapse;border:none;margin: 0 auto;">
    <tbody>
        <tr>
            <td style="width: 85.1pt;border: 0pt solid windowtext;padding: 0cm 5.4pt;height: 24.2pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><br></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>Endorsed By:</p>
            </td>
            <td style="width: 184.3pt;border-top: 0pt solid windowtext;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 24.2pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>_______________________________</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>(Unit Head)</p>
            </td>
            <td style="width: 99.2pt;border-top: 0pt solid windowtext;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 24.2pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>Date Released:</p>
            </td>
            <td style="width: 134.65pt;border-top: 0pt solid windowtext;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-image: initial;border-left: none;padding: 0cm 5.4pt;height: 24.2pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>_________________________</p>
            </td>
        </tr>
        <tr>
            <td style="width: 85.1pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 39.8pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
            </td>
            <td style="width: 184.3pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 39.8pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>_______________________________</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>(VPs/ President)</p>
            </td>
            <td style="width: 99.2pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 39.8pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>Released by:</p>
            </td>
            <td style="width: 134.65pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 39.8pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>_________________________</p>
            </td>
        </tr>
        <tr>
            <td style="width: 85.1pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;height: 26.9pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
            </td>
            <td style="width: 184.3pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 26.9pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
            </td>
            <td style="width: 99.2pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 26.9pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>Date Received:</p>
            </td>
            <td style="width: 134.65pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0cm 5.4pt;height: 26.9pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>__________________________</p>
            </td>
        </tr>
    </tbody>
</table>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:107%;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>&nbsp;</p>