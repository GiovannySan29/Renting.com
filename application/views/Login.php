<form id="login-form"  action="<?php echo base_url(). "Login/login"?>"  method= "POST" role="form" style="display: block;">
    <div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
					    </div>
						<hr>
					</div>
					
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<input type="text" name="user" id="user" tabindex="1" class="form-control" placeholder="Usuario" >
								</div>
								<div class="form-group">
									<input type="password" name="passw" id="passw" tabindex="2" class="form-control" placeholder="Contraseña">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<button type="submit" name="userlogin" class="btn btn-primary" value="<?= set_value('userlogin'); ?>" size="25">Submit</button>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-lg-12">
											<div class="text-center">
												<a href="registro.html" tabindex="5" class="forgot-password">¿Has olvidado tu contraseña?</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>