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

$tra_prmt_data=get_where_custom('tbl_tra_prmt', 'event_id', $url_id);

foreach ($tra_prmt_data as $key => $row)
{
    $tra_prmt_id=$row['tra_prmt_id'];
    $name=$row['name'];
    $place=$row['place'];
    $venue=$row['venue'];
    $datexx=$row['datexx'];
    $date_return=$row['date_return'];
    $relation1=$row['relation1'];
    $relation2=$row['relation2'];
    $others=$row['others'];


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
            <td colspan="3" style="width: 467.5pt;border: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><strong><span style="font-size:19px;">TRAVEL PERMIT FOR SPUP EMPLOYEES</span></strong></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 350.6pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
            </td>
            <td style="width: 116.9pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif; text-align:center'><b><u><?=$xdate?></u></b></p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="width: 350.6pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
            </td>
            <td style="width: 116.9pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Date</p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Name: <b><u><?=$name?></u></b></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Department/Office: <strong>SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING</strong><br>&nbsp;Title of Seminar/Workshop/Conference/Meetings to be Attended/Business Transactions for and<br>&nbsp;behalf of the University: (Please &nbsp;be &nbsp;Specific):<br>&nbsp;<b><u><?=$event_name?></u></b></p><br>
            </td>
        </tr>
        <tr>
            <td style="width: 233.75pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong>Place: <b><u><?=$place?></u></b></strong></p>
            </td>
            <td colspan="2" style="width: 233.75pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong>Venue: <b><u><?=$venue?></u></b></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 233.75pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong>Date: <b><u><?=$datexx?></u></b></strong></p>
            </td>
            <td colspan="2" style="width: 233.75pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong>Date of Return for Work/Duty:<b><u><?=$date_return?></u></b></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 233.75pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong>Time Out: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong></p>
            </td>
            <td colspan="2" style="width: 233.75pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong>Time In:</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
            </td>
        </tr>
        <tr>
            <td style="width: 233.75pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong>&nbsp;</strong></p>
            </td>
            <td colspan="2" style="width: 233.75pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong>&nbsp;</strong></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Please check the appropriate box that applies to you in relation to the seminar/organizations.</p>
            </td>
        </tr>
        <tr>
            <td style="width: 233.75pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'><input type="radio" name='1' <?php
                    if($relation1==="Representative of SPUP")
                    {
                        echo "checked";
                    }
                ?> disabled>Representative of SPUP</p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                
                <input type="radio" name='2' <?php
                    if($relation2==="Member of the Organization" && $relation1==="Representative of SPUP")
                    {
                        echo "checked";
                    }
                ?> disabled> Member of the Organization<br>

                &nbsp;<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                
                <input type="radio" name='2' <?php
                    if($relation2==="Officer of the Organization" && $relation1==="Representative of SPUP")
                    {
                        echo "checked";
                    }
                ?> disabled> Officer of the Organization<br>
                
                &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Others: <b><u><?=$others?></u></b> &nbsp; &nbsp;</p>
            </td>
            <td colspan="2" style="width: 233.75pt;border-top: none;border-left: none;border-bottom: 0pt solid windowtext;border-right: 0pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="radio" name='1' <?php
                    if($relation1==="Personal/Professional Update")
                    {
                        echo "checked";
                    }
                ?>
                 disabled>Personal/Professional Update<br>
                
                &nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                
                <input type="radio" name='2' <?php
                    if($relation2==="Member of the Organization" && $relation1==="Personal/Professional Update")
                    {
                        echo "checked";
                    }
                ?> disabled>Member of the Organization<br>&nbsp;<br>
                
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                
                <input type="radio" name='2' <?php
                    if($relation2==="Officer of the Organization" && $relation1==="Personal/Professional Update")
                    {
                        echo "checked";
                    }
                ?> disabled>Officer of the Organization</p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Endorsed by: _____________________________<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Immediate Head</p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Approved by: _____________________________<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;President/VP Acad/VP Admin/VP Finance/VP Formation</p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>Employees Signature: ______________________</p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 467.5pt;border-right: 0pt solid windowtext;border-bottom: 0pt solid windowtext;border-left: 0pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Effective August 16, 2006 any faculty, staff, maintenance personal seeking to attend any<br>&nbsp;seminar, conference, and meeting or transact for and in behalf of the university must secure a<br>&nbsp;Travel permit duly approved by the University President/Vice President of his/her division to<br>&nbsp;make such official. Otherwise, the activity cannot be considered an official business and the<br>&nbsp;employee is deemed absent.<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Note: This form is to be filled up in three (3) copies.<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1. Immediate Head&rsquo;s Copy</p>
                <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;2. Vp&rsquo;s copy (VP concerned)<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 3. Employee&rsquo;s Copy (To be submitted upon liquidation of expense to BAO)<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 4. Liquidate expenses not later than three (3) days upon arrival from the event.<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 5. Submit a brief summary of the event attended to the VP concerned.</p>
            </td>
        </tr>
    </tbody>
</table>

<?php
}
?>