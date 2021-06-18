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
                $programx=$program."-".$section;
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
    
    
    <table class="col-12 " border=0>
        <tr>
            <th colspan=3><h1><?=$firstname?> <?=$lastname?></h1></th>
        </tr>
        <tr>
            <td colspan=3><hr></td>
        </tr>
        
        <tr>
            <td>Username: <?=$username?></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Email: <?=$email?></td>
        </tr>
        <tr>
        <td>Contact no: <?=$contact_no?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan=3><hr></td>
        </tr>
    </table>

    <?php
        }
    ?>

    <h4 class="mb-3">POSITIONS</h4>

    <a href="<?=base_url()?>advisers/position_add_options/<?=$url_id?>" class="btn btn-outline-secondary btn-icon-split add-item btn-sm mb-4">
        <span class="icon text-white-50">
            <i class="fas fa-user-plus"></i>
        </span>
        <span class="text">
            ADD POSITION
        </span>
    </a>

    <a href="<?=base_url()?>advisers/" class="btn btn-outline-danger btn-icon-split add-item btn-sm mb-4">
        <span class="icon text-red-50">
            <i class="fas fa-user-plus"></i>
        </span>
        <span class="text">
            GO BACK
        </span>
    </a>

    <table class="table table-sm table-striped">
        <thead>
            <tr>
                <th>Organization</th>
                <th>Position</th>
                <th>Options</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Organization</th>
                <th>Position</th>
                <th>Options</th>
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
                <td>
                    <a href="<?=base_url()?>advisers/position_delete/<?=$off_id?>" class="btn btn-danger btn-circle btn-sm" style="margin-bottom: 6px;">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            
        <?php
            }
        ?>
            
        </tbody>
    </table>
    </div>

  </div>
</div>