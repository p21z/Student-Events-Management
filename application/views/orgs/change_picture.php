

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

  <div class="card-body">
    <a href="<?=base_url()?>organizations/change_organization_image/<?=$url_id?>" class="btn btn-secondary btn-icon-split" style=" margin-top:3%; margin-bottom: 2%">
      <span class="icon text-white-50">
        <i class="far fa-images"></i>
      </span>
      <span class="text">
          CHANGE ORGANIZATION LOGO&nbsp;&nbsp;
      </span>
    </a>

<br>

    <a href="<?=base_url()?>organizations/change_organization_cover/<?=$url_id?>" class="btn btn-secondary btn-icon-split" style="margin-bottom: 5%">
      <span class="icon text-white-50">
        <i class="fas fa-images"></i>
      </span>
      <span class="text">
          CHANGE ORGANIZATION COVER
      </span>
    </a>
<br>
    <a href="<?=base_url()?>organizations" class="btn btn-danger btn-icon-split" style="margin-bottom: 5%">
      <span class="icon text-white-50">
        <i class="fas fa-images"></i>
      </span>
      <span class="text">
          CANCEL
      </span>
    </a>

  </div>






</div>

</div>




