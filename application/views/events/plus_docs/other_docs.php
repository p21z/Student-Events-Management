

<div align=center>

<div class="card mb-4 w-75">

  <div class="card-header">
      ADD NEW FILE
  </div>

    <?php
    
        if (isset($_SESSION['err_msg1']))
        {
            echo "<div class='alert alert-".$_SESSION['err_msg2']." mt-4 ml-4 mr-4'>";
            echo $_SESSION['err_msg1'];
            echo "</div>";
            unset($_SESSION['err_msg1']);
            unset($_SESSION['err_msg2']);
        }
    ?>

  <form method="post" action="<?=base_url()?>events/other_docs_add_proc" enctype="multipart/form-data">

    <div class="" style="">

      <div class="input-group mb-3" style="width:40%; margin-top:5%;">
          <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          
            <input type="text" name="url_id" value="<?= $url_id ?>" hidden>
          
          <div class="custom-file">

            
              <input type="file" name="file1" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required>
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div>
      </div>

    </div>

      <br>
      <br>

      <!-- BUTTONS -->
      <button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top:-2%; margin-bottom: 5%;">
        <span class="icon text-white-50">
          <i class="fas fa-file-export"></i>
        </span>
        <span class="text">
          Add document
        </span>
      </button>
        
      &nbsp;&nbsp;
      <a href="<?=base_url()?>events/event_details/<?=$url_id?>" class="btn btn-danger btn-icon-split" style=" margin-top:-2%; margin-bottom: 5%">
        <span class="icon text-white-50">
          <i class="fas fa-ban"></i>
        </span>
        <span class="text">
          BACK
        </span>
      </a>

    
  <form>

  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
          <tr>
              <th>#</th>
              <th>File Name</th>
              <th>Options</th>

          </tr>
      </thead>
      <tfoot>
          <tr>
          <th>#</th>
              <th>File Name</th>
              <th>Options</th>
          </tr>
      </tfoot>
      <tbody>
        <?php

           $docs_data=get_where_custom('tbl_docs', 'event_id', $url_id);

            foreach ($docs_data as $key => $row) {
              $doc_id=$row['doc_id'];
              $filename=$row['filename'];
        ?>

              <tr>
                <td><?= $doc_id ?></td>
                <td><?= $filename ?></td>
                <td>
                <a href="<?=base_url('attachments/').$filename?>" class="btn btn-success btn-circle btn-sm" target="_blank">
                    <i class="fas fa-download"></i>
                </a>
                &nbsp;&nbsp;&nbsp;
                <a href="<?=base_url()?>events/other_docs_delete/<?=$url_id?>/<?=$doc_id?>" class="btn btn-danger btn-circle btn-sm">
                    <i class="fas fa-trash"></i>
                </a>
                </td>
              </tr>
        <?php
            }
        ?>
      </tbody>
    </table>
  </div>

</div>

</div>




