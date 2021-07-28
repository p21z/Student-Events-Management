<?php

$table_name="tbl_users";
$column="username";

$user_editedValues = array(
    
    'password' => _hash_string($_SESSION['new_pass']),
    'statusxx' => 0,
    'counterxx' => 0
    
);

echo update_from($user_editedValues, $_SESSION['username'], $table_name, $column);

unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['new_pass']);

$_SESSION['login']=4;