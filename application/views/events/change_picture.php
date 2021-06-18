<div align=center>

<div class="card mb-4 w-75">

  <div class="card-header">
      ADD NEW PICTURE
  </div>

  <?php

if ($this->session->userdata('err_msg1'))
{
    echo "<div class='alert alert-success mt-4 ml-4 mr-4'>";
    echo $_SESSION['err_msg1'];
    echo "</div>";
    unset($_SESSION['err_msg1']);
}

?>

  <form method="post" action="<?=base_url()?>events/change_profile_proc/<?=$url_id?>" enctype="multipart/form-data">

    <div class="" style="">

      <div class="input-group mb-3" style="width:40%; margin-top:5%;">
          <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file">
              <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div>
      </div>

    </div>

      <br>
      <br>

      <!-- BUTTONS -->
      <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:3%; margin-bottom: 5%">
        <span class="icon text-white-50">
          <i class="fas fa-user-plus"></i>
        </span>
        <span class="text">
          CHANGE PICTURE
        </span>
      </button>
        
      &nbsp;&nbsp;
      <a href="<?=base_url()?>events/event_details/<?=$url_id?>" class="btn btn-danger btn-icon-split" style=" margin-top:3%; margin-bottom: 5%">
        <span class="icon text-white-50">
          <i class="fas fa-ban"></i>
        </span>
        <span class="text">
          CANCEL
        </span>
      </a>

    
  <form>

</div>

</div>




