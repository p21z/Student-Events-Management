<div class="card col-8">
    <!-- <img src="https://via.placeholder.com/720x540"> -->
  <div class="card-body">
    <img class="col-3" src="https://via.placeholder.com/700x700">
        
    <div class="col-9"style="float: right;">
    
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
    ?>
    <table class="col-12" border=0>
        <tr>
            <th colspan=3><h1><?=$firstname?> <?=$lastname?></h1></th>
        </tr>
        <tr>
            <td colspan=3><hr></td>
        </tr>
        
        <tr>
            <td>Username: <?=$username?></td>
            <td>???: <?=$year_level?>-<?=$programx?></td>
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

    <a href="<?=base_url()?>officers/position_add_options/<?=$url_id?>" class="btn btn-outline-secondary btn-icon-split add-item btn-sm mb-4">
        <span class="icon text-white-50">
            <i class="fas fa-user-plus"></i>
        </span>
        <span class="text">
            ADD POSITION
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
            <tr>
                <td>Organization</td>
                <td>Position</td>
                <td>
                    <a href="<?=base_url()?>users/users_edit" class="btn btn-warning btn-circle btn-sm" style="margin-bottom: 6px;">
                        <i class="far fa-edit"></i>
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="<?=base_url()?>users/users_delete" class="btn btn-danger btn-circle btn-sm" style="margin-bottom: 6px;">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            
            <tr>
                <td>Organization</td>
                <td>Position</td>
                <td>
                    <a href="<?=base_url()?>users/users_edit" class="btn btn-warning btn-circle btn-sm" style="margin-bottom: 6px;">
                        <i class="far fa-edit"></i>
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="<?=base_url()?>users/users_delete" class="btn btn-danger btn-circle btn-sm" style="margin-bottom: 6px;">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            
            <tr>
                <td>Organization</td>
                <td>Position</td>
                <td>
                    <a href="<?=base_url()?>users/users_edit" class="btn btn-warning btn-circle btn-sm" style="margin-bottom: 6px;">
                        <i class="far fa-edit"></i>
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="<?=base_url()?>users/users_delete" class="btn btn-danger btn-circle btn-sm" style="margin-bottom: 6px;">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            
        </tbody>
    </table>
    </div>

  </div>
</div>