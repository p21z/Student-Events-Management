<div align=center>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow w-50">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DELETE ACCOUNT</h6>
            </div>
            <div class="card-body">
                Are you sure you want to delete the record?
                <br><br>
                <form method="post" action="<?=base_url()?>users/users_delete">
                    <input type="text" name="url_id" value="<?=$url_id?>" hidden>
                    <input type="submit" value="YES" class="btn btn-success btn-circle btn-md">
                    &nbsp;&nbsp;&nbsp;
                    <a href="<?=base_url()?>users" class="btn btn-danger btn-circle btn-md">
                        NO
                    </a>
                </form>
            </div>

        </div>
    </div>
</div>
