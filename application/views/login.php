<?php
$this->Functions->get_header();?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-12">
            <div class="login_view card">
                <h4 class="text-center">Login to Meet The World !</h4>
                <?php if ($this->session->flashdata('registered')): ?>
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?=$this->session->flashdata('registered');?>
                </div>
                <?php endif;?>
                <?php if ($this->session->flashdata('failed_login')): ?>
                <div class="alert alert-dismissible alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?=$this->session->flashdata('failed_login');?>
                </div>
                <?php endif;?>
                <?php if ($this->session->flashdata('unactive_user')): ?>
                <div class="alert alert-dismissible alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?=$this->session->flashdata('unactive_user');?>
                </div>
                <?php endif;?>
                <p class="text-danger" id="login_errors"></p>
                <form class="form-signin" action="<?php echo base_url('login/try_login'); ?>" method="post">
                    <input type="text" class="form-control" name="username" placeholder="Username" />
                    <div class="clearfix"></div>
                    <input type="password" class="form-control" name="password" placeholder="Password" />
                    <div class="clearfix"></div>
                    <div class="divider"></div>
                    <button class="btn btn-primary pull-right" type="submit">Login</button>
                </form>
                <div class="divider"></div> <a href="<?=base_url('register')?>">Not a Member??</a> </div>
            </div>
        </div>
    </div>
    <?php $this->Functions->get_footer();