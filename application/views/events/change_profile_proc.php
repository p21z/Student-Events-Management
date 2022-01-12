

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            
        </div>
        <div class="box-content">
        
        <?php
        $target_dir = $_SERVER['DOCUMENT_ROOT']."/Student-Events-Management/assets/img";
        $target_file = $target_dir."/".basename($_FILES["image"]["name"]);
        echo $target_file;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                $error_msg1 =  "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            $error_msg1 = "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["image"]["size"] > 5000000) {
            $error_msg1 = "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $error_msg1 = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo $error_msg1;
            $_SESSION['err_msg1']=$error_msg1;
            redirect('/events/change_picture/'.$url_id);
            // $_SESSION['pic_errormsg'] = $error_msg1. "Your file was not uploaded.";
            // header("Location: article_create.php");
        // if everything is ok, try to upload file
        } 
        else {
            echo "<br>goods";
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // ?>
            <div class="alert alert-success">

            <!--  -->
            <?php
                $table_name = "tbl_events";
                $column="event_id";
                $value=$url_id;
                $photo = basename($_FILES["image"]["name"]);

                $dp_data = array (
                //columname from table => value from post
                    "event_image" => $photo
                    );

                    update_from($dp_data, $value, $table_name, $column);
            
            $_SESSION['err_msg1']="Your image was successfully changed!";

            // ______________________________________________________________________________________________________________________
                // GETTING ENTRY ID

                $event_data=get_where_custom($table_name, $column, $url_id);
                
                foreach ($event_data as $key => $row) {

                    $event_id=$row['event_id'];
                    $org_id=$row['org_id'];
                    $event_name=$row['event_name'];

                }

                $username=$this->session->userdata('username');
                $fullname=$this->session->userdata('firsnamexx')." ".$this->session->userdata('lastnamexx');;
                $user_type=$this->session->userdata('access');
                $off_type="";

                if ($user_type==="Officer")
                {
                    // get where org_id=url_id && user_id==session(idxx) in officer data

                    $table_name_2="tbl_officers";
                    $column1="org_id";
                    $column2="user_id";
                    $value2=$this->session->userdata('idxx');
                    $officer_data=get_where_double_and($table_name_2, $column1, $org_id, $column2, $value2);
                    
                    foreach ($officer_data as $key => $row) {

                        $off_id=$row['off_id'];
                        $off_type=$row['off_type'];
                        
                    }

                }
                date_default_timezone_set('Asia/Singapore');
                $xdate=date('Y-m-d');
                $xtime=date("H:i:s");

                $action= "picture updated";

                $table_name_3="tbl_notif";
                $notif_data = array(
                    'username' => $username,
                    'fullname' => $fullname,
                    'user_type' => $user_type,
                    'off_type' => $off_type,
                    'datexx' => $xdate,
                    'timexx' => $xtime,
                    'action' => $action,
                    'org_id' => $org_id,
                    'event_id' => $url_id
                );

                echo insert($notif_data, $table_name_3);

            redirect('/events/change_picture/'.$url_id);
            ?>
            <!--  -->
                
            </div>



            <?php
            } else {
                $_SESSION['pic_errormsg'] = "Sorry, there was an error uploading your file.";
                // header("Location: article_create.php");
                redirect('/events/change_picture/'.$url_id);
            }
        }
        ?>
        </div>
    </div><!--/span-->
</div><!--/row-->

