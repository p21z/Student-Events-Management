<?php

if($this->session->userdata('new_pass_1')===$this->session->userdata('new_pass_2'))
{
    $table_name= "tbl_users";
    $column="user_id";
    
    $user_data=get_where_custom($table_name, $column, $this->session->userdata('idxx'));
    
    foreach ($user_data as $key => $row) {
            
        $user_id=$row['user_id'];
        $username=$row['username'];
        $pass_db=$row['password'];
    }
    
    if($pass_db===_hash_string($this->session->userdata('old_pass')))
    {
        $user_editedValues = array(
            'password' => _hash_string($this->session->userdata("new_pass_1"))
        );
        echo update_from($user_editedValues, $this->session->userdata('idxx'), $table_name, $column);
        // add session for success message
        redirect('/profile/change_password');
    } else
    {
        // add session for error message
        redirect('/profile/change_password');
    }


} else 
{
    // add session for error message
    redirect('/profile/change_password');
}
