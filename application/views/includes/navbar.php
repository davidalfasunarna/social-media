<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="<?=base_url('');?>">RETRO</a> </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li style="background-color: #FFFCE6;"><a href="#" data-toggle="modal" data-target="#postModal"><img src="<?= base_url("includes/img/icons/new.png") ?>" alt="new post" class="img-responsive" width="30px"></a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Find Friends</a></li>
                    <li><a href="#">Notifications</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="<?=base_url('login/logout')?>">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- New post modal -->
    <div id="postModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <img src="<?= base_url("includes/img/icons/create.png") ?>" alt="Create Post" class="img-responsive pull-right" width="40px" onclick="javascript: create_post();" style="cursor: pointer;">
                    <h4 class="modal-title">Create new post</h4>
                </div>
                <div class="modal-body">
                    <?= form_open('#', array('id'=>'new_post_form')); ?>
                    <p class="text-danger" id="new_post_errors"></p>
                    <p class="text-success" id="new_post_done"></p>
                    <div class="form-group" id="new_post_content">
                        <textarea name="content" id="post_content" cols="30" rows="3" placeholder="What's Up?" class="form-control" style="resize: none;"></textarea>
                    </div>
                    <div class="divider"></div>
                    <div class="clearfix"></div>
                    <div class="col-xs-3">
                        <img src="<?= base_url("includes/img/icons/img-add.png") ?>" alt="Add image" class="img-responsive">
                    </div>
                    <div class="clearfix"></div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>