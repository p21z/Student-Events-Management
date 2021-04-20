<?php
session_start();

$table_name="tbl_users";

$user_data = get_where_custom($table_name, "username", $username);

	foreach ($user_data as $key => $row) 
    {
        $idxx = $row['user_id'];

        $password1 = $row['password'];
        $user_type = $row['user_type'];

        $firstname=$row['firstname'];
        $lastname=$row['lastname'];

        $statusxx=$row['statusxx'];
        $counter=$row['counterxx'];
    }

$count_user_data = count_where($table_name, "username", $username);
echo $count_user_data;

    if ($count_user_data===0)
    {
        header("Location:".base_url()."login");
        $_SESSION['login']=1;
    } else
    {
        if ($statusxx==1)
        {
            $_SESSION['login']=2;
            header("Location:".base_url()."login");
        } else
        {
            if ($password1==$password)
            {

                $_SESSION['idxx'] = $idxx;
                $_SESSION['access'] = $user_type;
                $_SESSION['username']=$username;
                $_SESSION['firstnamexx']=$firstname;
                $_SESSION['lastnamexx']=$lastname;

                $user_editedValues = array
                (
                    "counterxx" => 0 ,
                    "statusxx" => 0
                );

                update_from($user_editedValues, $username, $table_name, "username");
                header("Location:".base_url()."login/entrance_question");


            } else
            {
                if (isset($counter))
                {
                    if ($counter>=2)
                    {
                        $user_editedValues = array
                        (
                            "statusxx" => 1
                        );
        
                        update_from($user_editedValues, $username, $table_name, "username");
                        $_SESSION['login']=2;
        
                    } else
                    {
                        $counter++;
                        $user_editedValues = array
                        (
                            "counterxx" => $counter
                        );
        
                        update_from($user_editedValues, $username, $table_name, "username");
                        $_SESSION['login']=1;
                    }
                }
                header("Location:".base_url()."login");
            }
        }
    }

?>