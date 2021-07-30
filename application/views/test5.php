<?php

$inc_data=get_where_custom('tbl_inclusion', 'org_id', 51);

foreach ($inc_data as $key => $row)
{
    $inc_id=$row['inc_id'];
    $org_id=$row['org_id'];
    $prog_id=$row['prog_id'];

    echo $inc_id."-".$org_id."-".$prog_id."-";

    $prog_data=get_where_custom('tbl_programs', 'prog_id', $prog_id);

    foreach ($prog_data as $key => $row)
    {
        $prog_name=$row['prog_name'];
        $prog_abbrv=$row['prog_abbrv'];
        
        echo $prog_abbrv."<br>";

        $stud_data=get_where_custom('tbl_users', 'program', $prog_abbrv);

        foreach ($stud_data as $key => $row)
        {
            $username=$row['username'];

            echo $username."<br>";
        }
    }
}

?>