<?php head(array('bodyclass'=>'login'), 'login-header'); ?>
<?php echo js('login'); ?>
<h1>Log In</h1>

<p id="login-links">
<span id="backtosite"><?php echo link_to_home_page('View Public Site'); ?></span>  |  <span id="forgotpassword"><?php echo link_to('users', 'forgot-password', 'Lost your password?'); ?></span>

<?php echo flash(); ?>

</p>
<?php echo flash(); ?>
<?php echo $this->form->setAction($this->url('users/login')); ?>
<?php foot(array(),'login-footer'); ?>
