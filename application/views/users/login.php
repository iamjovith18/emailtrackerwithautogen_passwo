<div class="container">
<?php echo form_open('users/login'); ?><br><br><br>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<div class="jumbotron">
            <?php if($this->session->flashdata('login_failed') ): ?>
                <?php echo '<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b class="center">'.$this->session->flashdata('login_failed').'</b></div>' ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('user_logout') ): ?>
                <?php echo '<div class="alert alert-warning alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b class="center">'.$this->session->flashdata('user_logout').'</b></div>' ?>
            <?php endif; ?>
			<h3 class="text-center"><?php echo $title; ?></h3>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder=" Enter Username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder=" Enter Password" required autofocus>
			</div>
			<button class="btn btn-primary btn-block">LOGIN</button>
		</div>
		</div>

	</div>
<?php echo form_close(); ?>
</div>

