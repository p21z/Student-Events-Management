<?php
    print_r($_SESSION);
    

    $table_name="tbl_programs";
    $inclusion_data=array('org_id' => $this->session->userdata("url_id"));
    $init_counter=1;
    $test_counter=count_rows($table_name);
    
    while($init_counter<=$test_counter)
    {
        $table_name="tbl_inclusion";
        if ($this->session->userdata("check".$init_counter))
        {
            $inclusion_data['prog_id']=$this->session->userdata("check".$init_counter);
            echo insert($inclusion_data, $table_name);
        }

        echo $init_counter++;
        echo "<br>";
        print_r($inclusion_data);
    }
    
