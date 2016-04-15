<h1>Albeda Digitaal Login</h1>

<?php echo form_open('login/index'); ?>

<?php echo validation_errors(); ?>

<p>Username</p>
<?php echo form_input('username'); ?>

<p>Password</p>
<?php echo form_password('password'); ?> <br />

<?php echo form_submit('submit', 'Sign in', 'input style="margin-top: 15px;"'); ?> <br />