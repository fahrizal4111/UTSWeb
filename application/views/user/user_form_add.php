<section class="content-header">
    <h1 style="color:#fff;">User
    </h1>
</section>
<!-- Main Content -->
<section class="content">
    <div class="box"style="background-color:#bdc3c7;">
        <div class="box-header">
            <h3 class="box-title" style="margin-top:10px;">Tambah User</h3>
            <div class="pull-right">
                <a href="<?= site_url('user'); ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Kembali
                </a>
            </div>
        </div>
        <hr style="color:#fff;">
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="" method="post">
                        <div class="form-group <?= form_error('fullname') ? 'has-error' : null; ?>">
                            <label for="name">Name *</label>
                            <input type="text" name="fullname" id="name" value="<?= set_value('fullname'); ?>" class="form-control">
                            <?= form_error('fullname'); ?>
                        </div>
                        <div class="form-group <?= form_error('username') ? 'has-error' : null; ?>">
                            <label for="username">Username *</label>
                            <input type="text" name="username" id="username" value="<?= set_value('username'); ?>" class="form-control">
                            <?= form_error('username'); ?>
                        </div>
                        <div class="form-group <?= form_error('password') ? 'has-error' : null; ?>">
                            <label for="password">Password *</label>
                            <input type="password" name="password" id="password" value="<?= set_value('password'); ?>" class="form-control">
                            <?= form_error('password'); ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">Tambah
                            </button>
                            <button type="reset" class="btn btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>