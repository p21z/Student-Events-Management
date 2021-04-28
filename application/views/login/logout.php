<div align=center>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow w-50">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">LOGOUT</h6>
            </div>
            <div class="card-body">
                Are you sure you want to logout?
                <br><br>
                <form method="post" action="<?=base_url()?>logout/logout_proc">
                    <!-- <input type="text" name="user_id" value="<?=$this->session->userdata('idxx')?>"> -->
                    <input type="submit" value="YES" class="btn btn-success btn-circle btn-md">
                    &nbsp;&nbsp;&nbsp;
                    <a href="<?=base_url()?>home" class="btn btn-danger btn-circle btn-md">
                        NO
                    </a>
                </form>
            </div>

        </div>
    </div>
</div>
