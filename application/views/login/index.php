<div class="container-fluid main-container-login">
	<div class="container container-login">
	  <div class="row">
		    <div class="col-sm-12">
				<h1>Albeda Digitaal Login</h1>
			</div>
		</div>
		<?php echo form_open('login/index', 'class="form-inline"'); ?>
		<div class="row">
		    <div class="col-sm-12">
				<?php echo validation_errors(); ?>
			</div>
		</div>
		<div class="row">
		    <div class="col-sm-12">
				<div class="col-sm-12">
					<label class="control-label">Gebruikersnaam</label>
				</div>
				<div class="col-sm-12">
				<?php echo form_input('username','','class="form-control input-lg"'); ?>
				</div>
			</div>
		</div>
		<div class="row">
		    <div class="col-sm-12">
				<div class="col-sm-12">
					<label class="control-label">Wachtwoord</label>
				</div>
				<div class="col-sm-12">
				<?php echo form_password('password','','class="form-control input-lg"'); ?>
				</div>
			</div>
		</div>	
		<div class="row">
		    <div class="col-sm-12">
				<div class="col-sm-12">
				<?php echo form_submit('submit ', 'Login', 'class="btn btn-lg btn-login" style="margin-top: 15px;"'); ?>
				</div>
			</div>
		</div>	
	</div>
</div>