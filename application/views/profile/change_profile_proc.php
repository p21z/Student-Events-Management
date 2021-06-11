

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            
        </div>
        <div class="box-content">
        
        <?php
        $target_dir = $_SERVER['DOCUMENT_ROOT']."/semm2/assets/img";
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
            $_SESSION['error_msg1']=$error_msg1;
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
                $table_name = "tbl_users";
                $column="user_id";
                $value=$this->session->userdata('idxx');
                $photo = basename($_FILES["image"]["name"]);

                $dp_data = array (
                //columname from table => value from post
                    "image" => $photo
                    );

                    update_from($dp_data, $value, $table_name, $column);
            
            $_SESSION['error_msg1']="Your image was successfully changed!";
            ?>
            <!--  -->
                
            </div>
            <p>
                <a href="<?= base_url() ?>article_manage.php">
                    <button type="button" class="btn btn-primary">
                    Return to Manage Slider Pictures Page</button>
                </a>
            </p>
            <?php
            } else {
                $_SESSION['pic_errormsg'] = "Sorry, there was an error uploading your file.";
                // header("Location: article_create.php");
            }
        }
        ?>
        </div>
    </div><!--/span-->
</div><!--/row-->

