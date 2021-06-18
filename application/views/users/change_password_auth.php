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
    echo $pass_db." ".$this->session->userdata("new_pass_1");

    if($pass_db===_hash_string($this->session->userdata('old_pass')))
    {
        $user_editedValues = array(
            'password' => _hash_string($this->session->userdata("new_pass_1"))
        );
        echo update_from($user_editedValues, $this->session->userdata('url_id'), $table_name, $column);
        // add session for success message
        // echo "niiice";
        $_SESSION['err_msg1']="Password changed!";
        redirect('/users/users_edit/'.$this->session->userdata('url_id'));
    } else
    {
        // add session for error message
        $_SESSION['err_msg1']="Can't change password.";
        redirect('/users/users_edit/'.$this->session->userdata('url_id'));
    }


} else 
{
    // add session for error message
    $_SESSION['err_msg1']="Can't change password.";
    redirect('/users/users_edit/'.$this->session->userdata('url_id'));
}
