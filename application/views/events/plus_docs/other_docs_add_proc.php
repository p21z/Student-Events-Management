

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            
        </div>
        <div class="box-content">
        
        <?php
        $target_dir = $_SERVER['DOCUMENT_ROOT']."/Student-Events-Management/attachments";
        $target_file = $target_dir."/".basename($_FILES["file1"]["name"]);
        
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        $randNo = rand(0,1000000);
        $rename='Upload'.date('Ymd').$randNo;

        $newName=$rename.'.'.$imageFileType;
        $newTarget_file =  $target_dir."/".$newName;
        echo $newTarget_file;
        // Check if image file is a actual image or fake image
        // if(isset($_POST["submit"])) {
        //     $check = getimagesize($_FILES["image"]["tmp_name"]);
        //     if($check !== false) {
        //         $uploadOk = 1;
        //     } else {
        //         $error_msg1 =  "File is not an image.";
        //         $uploadOk = 0;
        //     }
        // }

        // Check if file already exists
        if (file_exists($target_file)) {
            $error_msg1 = "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["file1"]["size"] > 10000000) {
            $error_msg1 = "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx") {
            $error_msg1 = "Sorry, only JPG, JPEG, PNG, PDF, DOC, DOCX & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo $error_msg1;
            // $_SESSION['err_msg1']=$error_msg1;
            $_SESSION['err_msg1'] = $error_msg1. " Your file was not uploaded.";
            $_SESSION['err_msg2'] ="danger";
            redirect('/events/other_docs/'.$_POST['url_id']);
            // header("Location: article_create.php");
        // if everything is ok, try to upload file
        } 
        else {
            echo "<br>goods";
            if (move_uploaded_file($_FILES["file1"]["tmp_name"], $newTarget_file)) {
            // ?>
            <div class="alert alert-success">

            <!--  -->
            <?php
                // $table_name = "tbl_docs";
                // $column="event_id";
                // $value=$url_id;
                // $photo = basename($_FILES["image"]["name"]);

                // $dp_data = array (
                // //columname from table => value from post
                //     "image" => $photo
                //     );

                //     update_from($dp_data, $value, $table_name, $column);
                $table_name="tbl_docs";
                $user_data = array(
                    'event_id' => $_POST['url_id'],
                    'filename' => $newName
                );
                echo insert($user_data, $table_name);
            
            $_SESSION['err_msg1']="Your file was successfully added!";
            $_SESSION['err_msg2'] ="success";
            redirect('/events/other_docs/'.$_POST['url_id']);
          
            ?>
            <!--  -->
                
            </div>
            <p>
                <a href="<?= base_url() ?>events/other_docs/'.<?=$url_id?>">
                    <button type="button" class="btn btn-primary">
                    Return to Manage Slider Pictures Page</button>
                </a>
            </p>
            <?php
            } else {
                echo "Sorry, there was an error uploading your file.";
                // $_SESSION['pic_errormsg'] = "Sorry, there was an error uploading your file.";
                // header("Location: article_create.php");
                // redirect('/users/users_edit/'.$url_id);!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            }
        }
        ?>
        </div>
    </div><!--/span-->
</div><!--/row-->

