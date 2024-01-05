<div id="singup-continer">
	<div class="singup-continer">
		<div class="row main d-flex justify-content-center">
			<div class="card mt-5 col-12 col-sm-4 ">
				<div class="card-body">
					<h1 class="card-title text-info text-center mb-3">Sign up</h1>
					<form action="scripts/signup.php" method="POST">
						<div class="">
							<div class="mb-3">
								<label for="fname" class="form-label">First name</label>
								<input type="text" class="form-control" id="first-name"  name="first_name" 
								       placeholder="input first name" required>
							</div>
							<div class="mb-3">
								<label for="lname" class="form-label">Last name</label>
								<input type="text" class="form-control" id="last-name"  name="last_name" 
								       placeholder="input last name" required>
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Email Address</label>
								<input type="text" class="form-control"id="email"name="email"  
									   data-parsley-type="email"  data-parsley-trigger="focusout"
								       placeholder="please enter email address" required />
							</div>
							<div class="mb-3">
								<label for="password"  class="form-label">password</label>
								<input type="password" class="form-control" id="password" name="password" 
									   placeholder="please enter password" required minlength="6">		
							</div>
							<div class="d-grid gap-2">
								<button class="btn btn-info text-white" type="submit" name="singup">Register</button>
								<span>Already have an account ? <a href="#" id="log"> Login </a></span>
							</div> 
						</div>	
					</form>
				</div>
			</div>
			<!-- <div class="d-none d-sm-block col-6" id="log-img">
				<img src="Assets/image/log.png" alt="singup">
			</div> -->
		</div>
	</div>
</div>