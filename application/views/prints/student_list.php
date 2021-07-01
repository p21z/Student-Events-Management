<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School Events Management</title>

    <!-- Custom fonts for this template-->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
                
    <link href="<?=base_url('Template/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url('Template/css/sb-admin-2.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('Template/css/main.css')?>" rel="stylesheet">
    <link href="<?=base_url('Template/css/collapse.css')?>" rel="stylesheet">

    <link href="<?=base_url('Template/vendor/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">    



</head>
<script>
    function handleOnLoad(){
        window.print();
    }
</script>

<body id="page-top" onload="handleOnLoad()">
    
<div class="container">
<?php
        $event_data=get_where_custom("tbl_events", "event_id", $url_id);
        foreach ($event_data as $key =>$row)
        {
            $statusxx=$row['statusxx'];
        }
        ?>
                    <div class="card mt-4 mb-4 w-100">
                    <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary">Student List</h5>
                        </div>
                        <div class="card-body">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Year</th>
                                            <th>Program</th>
                                            <th>Section</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Year</th>
                                            <th>Program</th>
                                            <th>Section</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $table_name="tbl_stud_list";
                                        $column="event_id";
                                        $value=$url_id;

                                        $events_data=get_where_custom($table_name, $column, $value);

                                        foreach ($events_data as $key => $row)
                                        {
                                            $stud_list_id=$row['stud_list_id'];
                                            $stud_name=$row['stud_name'];
                                            $year=$row['year'];
                                            $program=$row['program'];
                                            $section=$row['section'];
                                        ?>

                                        <tr>
                                            <td><?=$stud_name?></td>
                                            <td><?=$year?></td>
                                            <td><?=$program?></td>
                                            <td><?=$section?></td>
                                            
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>



                        </div>
                    </div>
    </div>
</body>