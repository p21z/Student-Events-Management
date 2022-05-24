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

    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Active organizations (as of <?= $xdate ?>)</h6>
                        </div>
                        <div class="card-body">


                            <hr>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                           
                                            <th>Name</th>
                                            <th>Abbreaviation</th>
                                            <th>Category</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            
                                            <th>Name</th>
                                            <th>Abbreaviation</th>
                                            <th>Category</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php
                                        $table_name="tbl_orgs";

                                        $orgs_data=get_where_not_2_custom($table_name, 'org_category', 'dean', 'Archive', 1);

                                        foreach ($orgs_data as $key => $row) {
                                            $org_id=$row['org_id'];
                                            $org_name=$row['org_name'];
                                            $org_abbr=$row['org_abbr'];
                                            $org_category=$row['org_category'];
                                            $org_description=$row['org_description'];
                                            $org_image=$row['org_image'];
                                            $cover_image=$row['cover_image'];
                                            $archive=$row['Archive'];
                                        ?>
                                            <tr>
                                                
                                                <td><?= $org_name ?></td>
                                                <td><?= $org_abbr ?></td>
                                                <td><?= $org_category ?></td>
                                                
                                            </tr>
                                            
                                        <?php   }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>