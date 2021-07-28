<?php

$table_name="tbl_users";
// echo $email.'<br>';

$count_data=count_where($table_name, "username", $username);
if ($count_data===1)
{
    $user_data = get_where_custom($table_name, "username", $username);

    foreach ($user_data as $key => $row) 
        {
            $idxx = $row['user_id'];

            $password1 = $row['password'];
            $user_type = $row['user_type'];
            
            $email=$row['email'];

            $firstname=$row['firstname'];
            $lastname=$row['lastname'];

            $statusxx=$row['statusxx'];
            $counter=$row['counterxx'];

            echo $email."<br>";
            // NEW PASSWORD
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = array(); //remember to declare $pass as an array
            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
            for ($i = 0; $i < 8; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            $new_pass=implode($pass);
            echo $new_pass;
            $_SESSION['username']=$username;
            $_SESSION['email']=$email;
            $_SESSION['new_pass']=$new_pass;

        }

} else 
{
    $_SESSION['login']=3;
    redirect(base_url().'login/forgot_pass');
}


    

?>