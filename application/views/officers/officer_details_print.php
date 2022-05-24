
<!-- Page Heading -->
<?php
date_default_timezone_set('Asia/Singapore');
$xdate=date('Y-m-d');
?>

<link href="<?=base_url('Template/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('Template/css/sb-admin-2.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('Template/css/main.css')?>" rel="stylesheet">
    <link href="<?=base_url('Template/css/collapse.css')?>" rel="stylesheet">

    <link href="<?=base_url('Template/vendor/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">    

<div class="card col-8">
    <!-- <img src="https://via.placeholder.com/720x540"> -->
  <div class="card-body">
    <?php

    $table_name="tbl_users";
    $column="user_id";
    $value= $this->uri->segment(3);

    $user_data=get_where_custom($table_name, $column, $value);

    foreach ($user_data as $key => $row) {
        $user_id=$row['user_id'];
        $username=$row['username'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $email=$row['email'];
        $contact_no=$row['contact_no'];
        $year_level=$row['year_level'];
        $program=$row['program'];
        $section=$row['section'];
        if ($section!=="")
        {
            $programx=$program;
        } else
        {
            $programx=$program;
        }

        $url_data = array(
            'program' => $program
        );
        $this->session->set_userdata($url_data);
        $image=$row['image'];

    if ($image==="")
    {
    ?>
    <img class="col-3" style="width: 300px; backgroun-color: red" src="<?=base_url()?>assets/img/default_2.jpg">
    <?php
    } else
    {
    ?>
    <img class="col-3 object-fit-details" src="<?=base_url()?>assets/img/<?=$image?>">
    <?php
    }
    ?>
        
    <div class="col-9"style="float: right;">
    
    
    <table class="col-12" border=0>
        <tr>
            <th colspan=3><h1><?=$firstname?> <?=$lastname?></h1></th>
        </tr>
        <tr>
            <td colspan=3><hr></td>
        </tr>
        
        <tr>
            <td>Username: <?=$username?></td>
            <td>Year level: <?=$year_level?></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Email: <?=$email?></td>
            <td>Program: <?=$programx?></td>
        </tr>
        <tr>
        <td>Contact no: <?=$contact_no?></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td colspan=3><hr></td>
        </tr>
    </table>

    <?php
        }
    ?>

    <h4 class="mb-3">POSITIONS</h4>

  
   as of (<?=   $xdate ?>)

    <table class="table table-sm table-striped">
        <thead>
            <tr>
                <th>Organization</th>
                <th>Position</th>
              
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Organization</th>
                <th>Position</th>
               
            </tr>
        </tfoot>
        <tbody>
        <?php
            $table_name = "tbl_officers";
            $column = "user_id";
            
            $get_userData = get_where_custom($table_name, $column, $user_id);

            foreach ($get_userData as $key => $row)
            {
                $off_id=$row['off_id'];
                $user_id=$row['user_id'];
                $org_id=$row['org_id'];
                $off_type=$row['off_type'];
        ?>
            <tr>
                <td>
                    <?php
                        $table_name = "tbl_orgs";
                        $column = "org_id";
                        
                        $get_orgData = get_where_custom($table_name, $column, $org_id);
            
                        foreach ($get_orgData as $key => $row)
                        {
                            $org_id=$row['org_id'];
                            $org_name=$row['org_name'];
                        }
                    ?>
                    <?=$org_name?>
                </td>
                <td><?=$off_type?></td>
                
            </tr>
            
        <?php
            }
        ?>
            
        </tbody>
    </table>
    </div>

  </div>
</div>