<form id="login-form" action="<?php echo base_url(). "Delete_C/delete"?>" method="post" role="form" style="display: block;">
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
                                <label >TypeIdentification:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typeIdentification" id="typeIdentification" value="cc" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        CC
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="typeIdentification" id="typeIdentification" value="pas">
                    <label class="form-check-label" for="exampleRadios2">
                        PAS
                    </label>
                </div>
                    <br>
                <div class="form-group">
                    <label for="direccion">Identification:</label>
                    <input type="text" class="form-control" id="identification" name="identification" placeholder="Identification" maxlength="10"  required >
                </div> 
										<div class="col-sm-6 col-sm-offset-3">
											<button type="submit" name="userlogin" class="btn btn-primary" value="<?= set_value('userlogin'); ?>" size="25">Delete</button>
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