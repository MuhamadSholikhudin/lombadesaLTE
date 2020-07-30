<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="login-box ">
            <div class="login-logo">
                <a href="../../index2.html"><b>Admin</b>LTE</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Masuk Untuk Melajutkan</p>

                    <?= $this->session->flashdata('pesan'); ?>
                    <?= form_error('username', '<div class="text-danger small ml-2">', '</div>'); ?>
                    <?= form_error('password', '<div class="text-danger small" ml-2">', '</div>'); ?>

                    <form class="user" action="<?= base_url('auth/login'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <input type="text" name="username" class="form-control" placeholder="Username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
    </div>
</div>

