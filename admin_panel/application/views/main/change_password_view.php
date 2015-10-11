<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Change Password</h1>
            </div>            
        </div>  
        <div class="row">
            <div class="col-lg-12">
                <?php if (isset($success_message) && $success_message != '') { ?>
                    <div class="alert alert-success" role="alert">
                        <span class="fa fa-check" aria-hidden="true"></span>
                        <?php echo $success_message; ?>
                    </div>
                <?php } ?>

                <?php if (isset($error_message) && $error_message != '') { ?>
                    <div class="alert alert-danger" role="alert">
                        <span class="fa fa-ban" aria-hidden="true"></span>
                        <?php echo $error_message; ?>
                    </div>
                <?php } ?>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Change Password
                    </div>

                    <div class="panel-body">
                        <?php echo form_open(BASE_URL . 'profile/change_password', array('role' => 'form')); ?>
                        <div class="form-group col-md-7">
                            <label>Current Password</label>
                            <input type="password" class="form-control" placeholder="Current Password" name="cpassword">
                            <p> <?php echo form_error('cpassword', '<p class="text-danger">', '</p>'); ?></p>
                        </div>
                        <div class="form-group col-md-7">
                            <label>New Password</label>
                            <input type="password" class="form-control" placeholder="Password (minimum 6 characters)" name="password">
                            <p> <?php echo form_error('password', '<p class="text-danger">', '</p>'); ?></p>
                        </div>
                        <div class="form-group col-md-7">
                            <label>Re-Password</label>
                            <input type="password" class="form-control" placeholder="Re-type Password" name="rpassword">
                            <p> <?php echo form_error('rpassword', '<p class="text-danger">', '</p>'); ?></p>
                        </div>
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-default">Change password</button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>